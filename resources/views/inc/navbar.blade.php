

      <div id="app">
        <header>
                <!-- Header desktop -->
                <div class="container-menu-desktop">
                    <!-- Topbar -->
                    <div class="top-bar">
                        <div class="content-topbar flex-sb-m h-full container">
                            <div class="left-top-bar">
                                Free shipping for standard order over $100
                            </div>
        
                            <div class="right-top-bar flex-w h-full">
                                <a href="#" class="flex-c-m trans-04 p-lr-25">
                                    Help & FAQs
                                </a>
        
                                
                               
                            </div>
                        </div>
                    </div>
        
                    <div class="wrap-menu-desktop">
                        <nav class="limiter-menu-desktop container">
                            
                            <!-- Logo desktop -->		
                            <a href="/" class="logo">
                                <h2>X-Cloth</h2>
                            </a>
        
                            <!-- Menu desktop -->
                            <div class="menu-desktop">
                                <ul class="main-menu">
                                    <li class="active-menu">
                                        <a href="/">Home</a>
                                    </li>
        
                                    <li>
                                        <a href="/showcloss">Shop</a>
                                    </li>
        
                                    <li class="label1" data-label1="hot">
                                        <a href="shoping-cart.html">Features</a>
                                    </li>
        
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
        
                                    <li>
                                        <a href="/about">About</a>
                                    </li>
        
                                    <li>
                                        <a href="/contact">Contact</a>
                                    </li>
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/profile"> profile</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

                                </ul>
                                
                            </div>	
        
                            <!-- Icon header -->
                            <div class="wrap-icon-header flex-w flex-r-m">
                                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                                    <i class="zmdi zmdi-search"></i>
                                </div>
        
                                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
        
                                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                </a>
                            </div>
                        
                                                      
                            
                            
                        </nav>
                    </div>	
                </div>

        
           

            </header>
        
        
                   