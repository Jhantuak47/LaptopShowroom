				<header class="header-desktop">
				    <div class="section__content section__content--p30">
				        <div class="container-fluid">
				            <div class="header-wrap">
				                <form class="form-header" action="{{route('search.products')}}" method="POST">
								@csrf
				                    <input class="au-input au-input--xl" type="text" name="search_param" placeholder="Searh Products" />
				                    <button class="au-btn--submit" type="submit">
				                        <i class="zmdi zmdi-search"></i>
				                    </button>
				                </form>
				                <div class="header-button">
				                    
				                    <div class="account-wrap">
				                        <div class="account-item clearfix js-item-menu">
				                            <div class="image">
				                                <img src="{{asset('dashboard/images/icon/avatar-01.jpg')}}" alt="John Doe" />
				                            </div>
				                            <div class="content">
				                                <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
				                            </div>
				                            <div class="account-dropdown js-dropdown">
				                                <div class="info clearfix">
				                                    <div class="image">
				                                        <a href="#">
				                                            <img src="{{asset('dashboard/images/icon/avatar-01.jpg')}}" alt="John Doe" />
				                                        </a>
				                                    </div>
				                                    <div class="content">
				                                        <h5 class="name">
				                                            <a href="#">{{ Auth::user()->name }}</a>
				                                        </h5>
				                                        <span class="email">{{ Auth::user()->email }}</span>
				                                    </div>
				                                </div>
				                                <div class="account-dropdown__footer">
												<form action="{{route('logout')}}" method="post">
														@csrf
														<button type="submit" class="btn btn-primary btn-sm" style="margin: 4px;" value="logout">
															<i class="zmdi zmdi-power"></i> Logout
														</button>
											
													</form>
				                                        
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</header>