/*  
	DECLARATIONS 
*/
// Amount off offset
var skip = 10;
// Category id
var category_id = null;
// Amount off rows in a select
var count = 0;
// True when there is more data to load
var enableLoad = true;


// Global function to an ajax call
function loadData(category_id, s, append) {
	$.ajax({
		type : "GET",
		url : '/artikelen',
		data : {'category' : category_id, 'skip' : s},
		success : function(response) {
			if(!append) {
				$('#product_list').children().remove();
			}
			loadArticles(response);
		},
		error : function(response) {
			console.log(response);
		}
	});
}

// Global function to append new items
function loadArticles(products) {
	skip = skip + products.data.length;
	$.each(products.data, function(index, value) {
		var html = "<div class=\"row\"> \
						<div class=\"col-sm-2 padding_10\"> \
							<img src=\"" + value.picture + "\"> \
						</div> \
						<div class=\"col-sm-4 product_article\">" + value.name + "</div> \
						<div class=\"col-sm-2 product_unit\">" + value.unit + "</div> \
						<div class=\"col-sm-2 product_price\">&#8364; " + value.price[0].price + "</div> \
						<div class=\"col-sm-2 product_input\"> \
							<input type=\"text\" class=\"form-control\" value=\"1\"> \
							<button type=\"submit\" class=\"btn btn-default button_secondary_color button_add\" data-article-id=\"" + value.id + "\">+</button> \
						</div> \
					</div>"
		$('#product_list').append(html);
	});

	count = products.count;
	if (count <= skip) {
		enableLoad = false;
	} else {
		enableLoad = true;
	}
}

function saveCart(product_id, product_amount) {
	$.ajax({
		type : "POST",
		url : '/bestellen',
		data : {'product_id' : product_id, 'product_amount' : product_amount},
		success : function(response) {
			console.log(response);
		},
		error : function(response) {
			console.log(response);
		}
	});
}

// Click event for the categories
$('.nav-pills > li').on('click', function(e) {
	if (category_id != $(this).data('category-id')) {
		category_id = $(this).data('category-id');
		skip = 0;
		loadData(category_id, skip, false);
		$('.nav-pills > li').removeClass('active');
		$(this).addClass('active');
	}
});

// Scroll event for lazy loading
$('#product_list').bind('scroll', function() {
	if(enableLoad) {
		if($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
			enableLoad = false;
			loadData(category_id, skip, true);
		}
	}
});

$('.button_add').on('click', function(e) {
	var product_id = $(this).data('article-id');
	var product_amount = $(this).parent().children('input').val();
	saveCart(product_id, product_amount);
})