var category = {
	orders : {},
	getCategorie : function(id) {
		$.ajax({
			type : 'GET',
			url : '/artikelen',
			dataType : 'json',
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
	category.show($(this).children().text());
});