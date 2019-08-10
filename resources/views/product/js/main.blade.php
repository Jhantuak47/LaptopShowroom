@push('scripts')
	<script type="text/javascript">
		$( document ).ready(function() {
		    console.log( "ready!" );
		});

		$('#drugs').click(function() {
			/*$('.drug-list').click();
			return false;*/
		});

		$('.drug-list').click(function(){
			$('.list-row').empty();

			$.ajax({
			   url: '{{route('products.index')}}',
			   type: 'GET',
			   success: function(data) {
			      $('.list-row')
			         .append(data);
			   }
			   
			});
		});

		getBrands();
		function getBrands(){
			$.ajax({
			   url: '{{route('brands.index')}}',
			   type: 'GET',
			   dataType: 'json',
			   success: function(data) {
			   		let options;
				   	$.each(data.data, function( key, value ) {
				   	  	options += '<option value = "'+ value.id +'">' + value.b_name + '</option>';
				   	});

				   	$('#brand-lists').append(options);
			   }
			});
		}

		getCategories();
		function getCategories(){
			$.ajax({
			   url: '{{route('categories.index')}}',
			   type: 'GET',
			   dataType: 'json',
			   success: function(data) {
			   		let options;
				   	$.each(data.data, function( key, value ) {
				   	  	options += '<option value = "'+ value.id +'">' + value.c_name + '</option>';
				   	});

				   	$('#category-lists').append(options);
			   }
			});
		}

		// $('.sv-product-btn').on('click', function(e){
		// 	e.preventDefault();
		
		// 	$.ajax({
		// 	   url: '{{route('products.store')}}',
		// 	   type: 'POST',
		// 	   data: {fromdata:new FormData($("#add_product")[0]),_token:'{{csrf_token()}}},
		// 	   dataType: 'json',
		// 	   success: function(data) {
		// 	   		console.log(data);
		// 	   		let alert = $('.add-product-alert');
		// 			alert.show();
		// 			alert.addClass(data.class_name);
		// 			$('.p_alert_msg').html(data.message);
			         
		// 	   }
		// 	});
		// })
	</script>
@endpush