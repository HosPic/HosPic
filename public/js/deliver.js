var delivery = {
	orders : {},
	setStatus : function(status){
		$("#orderContent").removeClass().addClass(status);
	},
	init : function(){
		$.ajax({
			type : 'GET',
			url : '/bezorgen',
			dataType : 'json',
			before: function(){
				delivery.setStatus('loading');
			},
			success : function(response){
				var o = {},
					html = "";
				for(var i=0;i<response.orders.length;i++){
					o = response.orders[i];
					delivery.orders[response.orders[i]['id']] = o;
					html = "<div class=\"order\" id=\"order-"+o.id+"\" data-orderid=\""+o.id+"\"> \
								<div class=\"order-info\"> \
									<h3>"+o['user']['first_name'] + ' ' + o['user']['last_name'] +"<small>"+ o['user']['email'] +"</small></h3> \
									<span>"+o['department']['name']+"</span> \
									<span>"+o['location_building']+"</span> \
									<span>"+o['location_room']+"</span> \
								</div> \
								<div class=\"order-date\"> \
									<span>"+o['delivery_date']+"</span> \
								</div> \
							</div>";
					$("#ordersBar").append(html);
				}
				delivery.setStatus('noselect');
			},
			error : function(response){
				console.log(response);
			}
		});
	},
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
		// get all the data
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
	buildOrderInfo : function(order){
		var html = "<div class=\"col-md-4\"> \
					<h2>"+order['user']['first_name'] + ' ' + order['user']['last_name']+"</h2> \
					<span>"+order['department']['name']+"</span> \
					<span>"+order['user']['email']+"</span> \
				</div> \
				<div class=\"col-md-4\"> \
					<b>Locatie</b> \
					<span>"+order['location_building']+"</span> \
					<span>"+order['location_room']+"</span> \
				</div> \
				<div class=\"col-md-4\"> \
					<b>Datum</b> \
					<span>Besteld: "+order['order_date']+"</span> \
					<span>Levering: "+order['delivery_date']+"</span> \
				</div>";
		$("#orderInfo").html(html);
	},
	buildArticles : function(articles){
		var html ="<table class=\"table\"><thead></thead><tbody><tr><th></th><th>Naam</th><th>Categorie</th><th>Locatie</th><th>Aantal</th></tr>";
		for(i in articles){
			var a = articles[i];
			html+= "<tr>";
			html+= "<td></td>";
			html+= "<td>"+a['article']['name']+"</td>";
			html+= "<td>"+a['article']['category']['name']+"</td>";
			html+= "<td>"+a['price']['location']+"</td>";
			html+= "<td>"+(a['quantity'] - a['total_delivered'])+"</td>";
			html+= "</tr>";
		}
		html+="</tbody></table>";
		$("#orderArticles").html(html);
	},
	showOrder : function(id){
		if(id in this.orders) {
			var order = this.orders[id];
			this.buildOrderInfo(order);
			this.buildArticles(order.articles);
			delivery.setStatus('open');
		}
	},
}
delivery.init();


$("#ordersBar").on('click','.order',function(e){
	delivery.showOrder($(this).data('orderid'));
});