@extends('layouts.app')
@section('content')
		    <div class="page-wrapper">
		        <!-- HEADER MOBILE-->`
		       		@include('layouts.includes.mobile_header')
		        <!-- END HEADER MOBILE-->

		        <!-- MENU SIDEBAR-->
		        <aside class="menu-sidebar d-none d-lg-block">
		           <!--HEADER LOGO -->
						@include('layouts.includes.header_logo')
		           <!-- END HEADER LOGO -->
						@include('layouts.includes.menu_sidebar')
		        </aside>
		        <!-- END MENU SIDEBAR-->

		        <!-- PAGE CONTAINER-->
		        <div class="page-container">
		            <!-- HEADER DESKTOP-->
		           		@include('layouts.includes.desktop_header')
					<!-- HEADER DESKTOP-->
					
					<!-- MAIN CONTENT-->
					<div class="main-content">
					@include('layouts.includes.message_alerts')
					  @yield('dashboard')
					</div>
					<!-- END CONTENT-->

		        </div> <!-- END PAGE CONTAINER-->

		    </div>
		
@endsection