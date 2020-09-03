$(document).ready(function(){
			getData();

   			cartNoti();
   			$('.addtoBookBtn').on('click',function() {
   				var id=$(this).data('id');
   				var name=$(this).data('name');
   				var isbn=$(this).data('isbn');
   				var photo=$(this).data('photo');
   				var price=$(this).data('price');
   				var discount=$(this).data('discount');
   				var edition=$(this).data('edition');
   				var publisher=$(this).data('publisher');
   				var publish_date=$(this).data('publish_date');
   				var review=$(this).data('review');
   				var qty=1;

   				var mylist={id:id,isbn:isbn,name:name,photo:photo,price:price,discount:discount,edition:edition,publisher:publisher,publish_date:publish_date,review:review,qty:qty};

   				console.log(mylist);


   				var book=localStorage.getItem('book');
   				var bookArray;

   				if (book==null) {
   					bookArray=Array();
   				}
   				else{
   					bookArray=JSON.parse(book);
   				}
   				var status=false;

   				$.each(bookArray,function(i,v){
   					if(id==v.id){
   						v.qty++;
   						status=true;
   					}
   				});
   				if (!status) {
   					bookArray.push(mylist);
   				}

   				var bookData=JSON.stringify(bookArray);
   				localStorage.setItem("book",bookData);
   				cartNoti();
		
			});


   			$('#tbody').on('click','.plus_btn',function  () {
   				var id=$(this).data('id');
   				var itemString=localStorage.getItem('book');
   				var bookArray=JSON.parse(itemString);
   				$.each(bookArray,function  (i,v) {
   					if(id == i){
   						v.qty++;
   					}
   				})
		
   				var book=JSON.stringify(bookArray);
   				localStorage.setItem('book', book);
		
				cartNoti();	
		
				getData();
			})

			//Qty decrease
			$('#tbody').on('click','.minus_btn',function  () {
				var id=$(this).data('id');
				var itemString=localStorage.getItem('book');
				var bookArray=JSON.parse(itemString);
				$.each(bookArray,function  (i,v) {
					if(id== i){
						v.qty--;
						if(v.qty == 0){
							bookArray.splice(id,1);
						}
					}
				})
				// $('#qty').text(v.qty);	
				var book=JSON.stringify(bookArray);
				localStorage.setItem('book', book);
				// showTable();
				cartNoti();	

				getData();
			})
			function cartNoti() {
				var book=localStorage.getItem('book');
				//alert("ok");
				if(book){
					var bookArray=JSON.parse(book);
					var price;
					var total=0;
						var noti=0;//qty
						$.each(bookArray,function  (i,v) {
							//console.log(v.qty);
							var unitprice=v.price;
							var qty=v.qty;


							noti+=qty++;
							//console.log(noti);
							
						})

						$('.shoppingcartNoti').html(noti);

					}else{
						$('.shoppingcartNoti').html(0);
						
					}
				}

			
			//remove item
			$('#tbody').on('click','.remove',function  () {		
				var id=$(this).data('id');
				var itemString=localStorage.getItem('book');
				var bookArray=JSON.parse(itemString);
				itemArray.splice(id,1);
				var book=JSON.stringify(bookArray);
				localStorage.setItem('book', book);
				// showTable();
				cartNoti();
				getData();
			})


   			//get data
   			function getData () {
   				var loItem=localStorage.getItem('book');
   				var html="";
   				var total=0;
   				//console.log(loItem);

   				if(loItem != null){

   					$('.shoppingcart_div').show();
			 		$('.noneshoppingcart_div').hide();

   					bookArr= JSON.parse(loItem);
   					$.each(bookArr,function  (i,v) {
   						var subtotal= v.qty * v.price;
   						total+=subtotal;
   						html+= `<tr> <td><img src="${v.photo}" width="200" height = "200">
   								<p>${v.name}</p>
   						</td>
   						<td>${v.price}</td>
   						<td colspan="1">
								<button class="btn btn-outline-secondary plus_btn" data-id="${i}"> 
									<i class="icofont-plus"></i> 
								</button>
						</td>
						<td>
							<p> ${v.qty} </p>
						</td>
						<td>
								<button class="btn btn-outline-secondary minus_btn" data-id="${i}"> 
									<i class="icofont-minus"></i>
								</button>
						</td>
						 <td>
   							 <p>${total}</p>
   						</td>
   						`;
   					});
   					html+=`
   					</tr>
   					`;
   					//console.log(html);
   					$('#tbody').html(html);
   					$('.shoppingbookTotal').text(total);

   				}else {
   					$('.shoppingcart_div').hide();
			 		$('.noneshoppingcart_div').show();
   				}
   			}



   			$('.checkoutBtn').on('click',function () {
		// console.log('checkoutbtn');

				var book=localStorage.getItem('book');
				var bookArray=JSON.parse(book);
				var note=$('#note').val();
				$.ajaxSetup({
					headers:{
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
				});
				$.post('/order',{data:book,note:note},function(response){
					localStorage.clear();
					location.href="ordersuccess";
				});

		
			});

			


})