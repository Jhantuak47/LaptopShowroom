@extends('layouts.dashboard')
@include('product.js.main')
@section('dashboard')
			<div class="section__content section__content--p30">
				
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="overview-wrap">
								<h2 class="title-1">Products</h2>
								<button class="au-btn au-btn-icon au-btn--blue"
										data-toggle="modal" data-target="#addModal">
									<i class="zmdi zmdi-plus"></i>add item</button>
							</div>
						</div>
					</div>

					<div class="row m-t-25 list-row">
						@forelse($products as $p)
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="my-list">
									<img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
									<h3>{{$p->name}}</h3>
									<span>RS:<span style="color:green;">{{$p->price}}</span></span>
									<span class="float-right">3.5kg</span>
									<div class="offer">@if(isset($p->brand->brand_name)){{$p->brand->brand_name}}@else{{$p->brand_name}}@endif</div>
									<div class="detail">
									<p>{{$p->description}}</p>
									<img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" />
									<a href="#" class="btn btn-info">Add To Cart</a>
									<a href="#" class="btn btn-info">Deatil</a>
									</div>
								</div>
								</div>
							@empty
								<p>No data</p>
							 @endforelse
					</div>
	            <!-- END PAGE CONTAINER-->
	        		</div>
	   		 </div>
		<!-- The Modal -->
		 <div class="modal fade" id="addModal">
		   <div class="modal-dialog modal-lg">
		     <div class="modal-content">
		     
		       <!-- Modal Header -->
		       <div class="modal-header">
		         <h4 class="modal-title">Add Product</h4>
		         <button type="button" class="close" data-dismiss="modal">&times;</button>
		       </div>
		       
		       <!-- Modal body -->
		       <div class="modal-body">
			   		<!-- alert-msg -->
					   <div class="alert add-product-alert alert-dismissible fade show d-none" role="alert">
						<span class="p_	alert_msg"></span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<!-- end alert-msg -->
		         <form id="add_product" enctype="multipart/form-data" method="POST" action="{{route('products.store')}}">
				 <input type="hidden" name="_token" value="{{ csrf_token()}}">
		           <div class="form-row">
		             <div class="form-group col-md-6">
		               <label for="inputEmail4">Name</label>
		               <input type="text" class="form-control" id="p_name" placeholder="Name" name="p_name">
		             </div>
		             <div class="form-group col-md-6">
		               <label for="inputPassword4">Brand</label>
		               <select class="form-control" name="b_id">
						 <option value = '0'>Select Brand</option>
							@foreach ($brands as $brand)
					   <option value = {{$brand->id}}>{{$brand->brand_name}}</option>
							@endforeach
		               </select>
		               <input type="password" class="form-control d-none" id="inputPassword4" placeholder="Password">
		             </div>
		           </div>
		           <div class="form-row">
		             <div class="form-group col-md-6">
		               <label for="inputPassword4">Category</label>
		               <select class="form-control" name="cat_id">
						 <option value = '0'>Select Category</option>
						 @foreach ($categories as $cat)
						 <option value = {{$cat->id}}>{{$cat->name}}</option>
						 @endforeach
		               </select>
		             </div>
		             <div class="form-group col-md-6">
		               <label for="inputEmail4">Type</label>
		               <input type="text" class="form-control" id="type" placeholder="Type" name="type">
		             </div>
		           </div>
		           <div class="form-row">
						<div class="form-group col-md-6">
		             <label for="inputAddress">Description</label>
		             <input type="text" class="form-control" name='desc' id="desc" placeholder="Description">
					</div>
					 <div class="form-group col-md-6">
						<label>Image</label>
						<input type="file" class="form-control" id="imgUrl" name="imgUrl">
					  </div>
					</div>
		           <div class="form-row">
		             <div class="form-group col-md-4">
		               <label for="inputPassword4">Price</label>
		               <input type="number" class="form-control" id="price" name='price' placeholder="INR">
		             </div>
		             <div class="form-group col-md-4">
		               <label for="inputEmail4">Qty</label>
		               <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter Qty">
		             </div>
		             <div class="form-group col-md-4">
		               <label for="inputEmail4">Manufacturer</label>
		               <input type="text" class="form-control" id="maf" name="maf" placeholder="Manufacturer">
		             </div>
		           </div>
		           <button type="submit" class="btn btn-success sv-product-btn">Add</button>
		         </form>
		       </div>
		       
		       <!-- Modal footer -->
		       <div class="modal-footer">
		         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		       </div>
		       
		     </div>
		   </div>
		 </div>
		 <!-- -->
@endsection