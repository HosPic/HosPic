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
				$('#article_list').children().remove();
			}
			loadArticles(response);
		},
		error : function(response) {
			console.log(response);
		}
	});
}

// Global function to append new items
function loadArticles(articles) {
	skip = skip + articles.data.length;
	$.each(articles.data, function(index, article) {
		$.each(article.price, function(index, price) {
			var html = "<div class=\"row\"> \
							<div class=\"col-sm-2 padding_10\"> \
								<img src=\"" + article.picture + "\"> \
							</div> \
							<div class=\"col-sm-4 product_article\">" + article.name + "</div> \
							<div class=\"col-sm-2 product_unit\">" + article.unit + "</div> \
							<div class=\"col-sm-2 product_price\">&#8364; " + price.price + "</div> \
							<div class=\"col-sm-2 product_supply\">" + price.supply + "</div> \
						</div>"
			$('#article_list').append(html);
		});
	});

	count = articles.count;
	if (count <= skip) {
		enableLoad = false;
	} else {
		enableLoad = true;
	}
}



// Scroll event for lazy loading
$('#article_list').bind('scroll', function() {
	if(enableLoad) {
		if($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
			enableLoad = false;
			loadData(category_id, skip, true);
		}
	}
});

