		<div class="menu-sidebar__content js-scrollbar1">
			@php
			 $segment = Request::segment(2);
			@endphp
		    <nav class="navbar-sidebar">
		        <ul class="list-unstyled navbar__list">
		            <li class="
		            		@if($segment == 'dashboard')
		            		 active 
		            		@endif has-sub">
				<a href="{{route('adminDashboard')}}">
							<i class="fas fa-tachometer-alt"></i>Dashboard
				</a>
		            </li>
					<li class="
							@if($segment == 'products')
								active 
				   			@endif has-sub">
		                <a  href = "{{ route('products.index') }}" id="products">
		                    <i class="fas fa-chart-bar"></i>All Products</a>
		            </li>
					<li class="has-sub">
		                <a class="js-arrow" href="#">
		                    <i class="fas fa-copy"></i>Categories</a>
		                <ul class="list-unstyled navbar__sub-list js-sub-list">
@php 
if(!isset($category) )
	$categories  = App\Models\Category::order('created_at','DSC')->get();
@endphp
							@forelse ($categories as $cat)
								<li>
			<a  href = "{{ route('search.category',$cat->name) }}">
					<i class="fas fa-angle-double-right"></i>{{ $cat->name }}</a></li>
							 @empty
								<li>No data</li>
							 @endforelse
		                    
		                </ul>
		            </li>
		        </ul>
		    </nav>
		</div>