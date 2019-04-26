

      <div id="app">
        <header>
                <!-- Header desktop -->
                <div class="container-menu-desktop">
                    <div class="wrap-menu-desktop">
                        <nav class="limiter-menu-desktop container">
                            
                            <!-- Logo desktop -->		
                            <a href="/" class="logo">
                                <img src="/images/icons/logo-01.png" alt="IMG-LOGO">
                            </a>
        
                            <!-- Menu desktop -->
                            <div class="menu-desktop">
                                <ul class="main-menu">
                                    <li class="active-menu">
                                        <a href="/">Home</a>
                                    </li>
        
                                   <li>
                                        <a href="/Products"> show product</a>
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
                             
                            
                            
                        </nav>
                    </div>	
                </div>

        
        
        
                

            </header>
        
        
                   