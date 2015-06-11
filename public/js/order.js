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
}


$('.nav-pills > li').on('click', function(e) {
	category.show($(this).data('category-id'));
	$('.nav-pills > li').removeClass('active');
	$(this).addClass('active');
});