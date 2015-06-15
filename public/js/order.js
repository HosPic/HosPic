var skip = 0;
var category_id = null;
var count = 0;

function getCategorie(category_id, skip) {
	$.ajax({
		type : 'GET',
		url : '/artikelen',
		// dataType : 'json',
		data : {'category' : category_id, 'skip' : skip},
		success : function(response) {
			$('#product_list').children().remove();
			$.each(response.data, function(index, value) {
				var html = "<div class=\"row\"> \
								<div class=\"col-md-2 padding_10\"> \
									<img src=\"" + value.picture + "\"> \
								</div> \
								<div class=\"col-md-4 product_article\">" + value.name + "</div> \
								<div class=\"col-md-2 product_unit\">" + value.unit + "</div> \
								<div class=\"col-md-2 product_price\">" + value.price[0].price + "</div> \
								<div class=\"col-md-2 product_input\">Input</div> \
							</div>"
				$('#product_list').append(html);
			});
			console.log(response);
		},
		error : function(response) {
			console.log(response);
		}
	});
}

function loadData(category_id, skip) {
	$.ajax({
		type : "GET",
		url : '/artikelen',
		data : {'category' : category_id, 'skip' : skip},
		success : function(response) {
			$.each(response.data, function(index, value) {
				var html = "<div class=\"row\"> \
								<div class=\"col-md-2 padding_10\"> \
									<img src=\"" + value.picture + "\"> \
								</div> \
								<div class=\"col-md-4 product_article\">" + value.name + "</div> \
								<div class=\"col-md-2 product_unit\">" + value.unit + "</div> \
								<div class=\"col-md-2 product_price\">" + value.price[0].price + "</div> \
								<div class=\"col-md-2 product_input\">Input</div> \
							</div>"
				$('#product_list').append(html);
			});
			console.log(response);
		},
		error : function(response) {
			console.log(response);
		}
	});
}

$('.nav-pills > li').on('click', function(e) {
	category_id = $(this).data('category-id');
	skip = 0;
	getCategorie(category_id, skip);
	$('.nav-pills > li').removeClass('active');
	$(this).addClass('active');
});

$('#product_list').bind('scroll', function() {
	if($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
		skip += 10;
		loadData(category_id, skip);
	}
});