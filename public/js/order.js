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

var shopping_cart = {
	cart : {},
	saveCart : function(product_id, product_amount, product_price, product_name) {
		product_id = parseInt(product_id);
		product_amount = parseInt(product_amount);
		product_price = product_price.substring(1);
		product_price = parseFloat(product_price);
		var append = true;

		$.each($('#shopping_cart_content').children(), function(index, value) {
			if ( product_id == parseInt($(this).attr('id'))) {
				append = false;
				return false;
			} else {
				append = true;
			}
		});
		
		if (!append) {
			var current_amount = parseInt($('#shopping_cart_content').find($("#" + product_id + "")).children($('.cart_amount')).children($('input')).val());
			var amount_add = parseInt(product_amount);
			var new_amount = current_amount + amount_add;
			$('#shopping_cart_content').find($("#" + product_id + "")).find($('.cart_amount')).children($('input')).val(new_amount);
			$('#shopping_cart_content').find($("#" + product_id + "")).find($('.cart_total_article_price')).text("€ " + new_amount * product_price);
		} else {
			var html = "<div class=\"shopping_cart_row\" id=\"" + product_id + "\"> \
							<div class=\"col-sm-12 cart_name\">" + product_name + "</div> \
							<div class=\"col-sm-2 cart_amount\"> \
								<input value=\"" + product_amount + "\"> \
							</div> \
							<div class=\"col-sm-1\">x</div> \
							<div class=\"col-sm-2 cart_price\">" + product_price + "</div> \
							<div class=\"col-sm-1\">=</div> \
							<div class=\"col-sm-2 cart_total_article_price\">" + product_price * product_amount + "</div> \
							<div class=\"col-sm-2 pull-right\"> \
								<button class=\"btn btn-default button_remove\">-</button> \
							</div> \
						</div>"
			$('#shopping_cart_content').append(html);
		}
		
		$.ajax({
			type : "POST",
			url : '/bestellen',
			data : {'product_id' : product_id, 'product_amount' : product_amount, 'product_price' : product_price, 'product_name' : product_name},
			success : function(response) {
				
				// console.log(response);
			},
			error : function(response) {
				console.log(response);
			}
		});
	},
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
	var product_price = $(this).parent().parent().children('.product_price').text();
	var product_name = $(this).parent().parent().children('.product_article').text();
	shopping_cart.saveCart(product_id, product_amount, product_price, product_name);
})