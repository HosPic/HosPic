var delivery = {
	orders : {},
	update : function(id,data){
		$.ajax({
			type : 'PUT',
			url : '/bestellingen/' + id,
			data : data,
			success : function(response){
				delivery.orders[response.id] = response;
			},
			error : function(response){

			}
		});
	},
	getOrder : function(id,callback){
		if(id in this.orders) {
			callback(this.orders[id]);
		}else{
			$.ajax({
				type : 'GET',
				url : '/bestellingen/' + id,
				dataType : 'json',
				success : function(response){
					console.log(response);
					// delivery.orders[response.id] = response;
					// delivery.orders[response.id] = response;
					// callback(response,true);
				},
				error : function(response){
					// callback(response,false)
					console.log(response);
				}
			});
		}
	},
	show : function(id){
		// remove html
		// show loading screen
		this.getOrder(id,function(order,success){
			if(success){
				// update html
			}else{
				// show error message
			}
		});
	},
}

$(".order").on('click',function(e){
	delivery.show(12);
});