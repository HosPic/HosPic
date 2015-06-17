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
	$.each(articles.data, function(index, value) {
		var html = "<div class=\"row\"> \
						<div class=\"col-sm-2 padding_10\"> \
							<img src=\"" + value.picture + "\"> \
						</div> \
						<div class=\"col-sm-4 article_article\">" + value.name + "</div> \
						<div class=\"col-sm-2 article_unit\">" + value.unit + "</div> \
						<div class=\"col-sm-2 article_price\">&#8364; " + value.price[0].price + "</div> \
						<div class=\"col-sm-2 article_input\"> \
							<input type=\"text\" class=\"form-control\" value=\"1\"> \
							<button type=\"submit\" class=\"btn btn-default button_secondary_color button_add\" data-article-id=\"" + value.id + "\">+</button> \
						</div> \
					</div>"
		$('#article_list').append(html);
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

