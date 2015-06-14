var category = {
	getCategorie : function(id) {
		$.ajax({
			type : 'POST',
			url : '/artikelen',
			// dataType : 'json',
			data : {'category' : id},
			success : function(response) {
				console.log(response);
			},
			error : function(response) {
				console.log(response);
			}
		});
	},
	show : function(id) {
		this.getCategorie(id);
	},
	loadData : function(offset) {
		$.ajax({
			type : "POST",
			url : '/bestellen',
			data : {'offset' : offset},
			success : function(response) {
				console.log(response);
			},
			error : function(response) {
				console.log(response);
			}
		});
	},
}


$('.nav-pills > li').on('click', function(e) {
	category.show($(this).data('category-id'));
	$('.nav-pills > li').removeClass('active');
	$(this).addClass('active');
});

$('#product_list').bind('scroll', function() {
	if($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
		var offset = 10;
		category.loadData(offset);
	}
});