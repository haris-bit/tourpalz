<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="{{ asset('public/')}}//dashboard/assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class=" u-dropdown link hide-menu" >{{ Auth::user()->name }}</a>
                            
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li> <a class=" waves-effect waves-dark" href="{{URL::to('user/dashboard')}}" ><i class="icon-speedometer"></i><span class="hide-menu">Dashboard </a></li>
                    @if(Auth::user()->is_super_admin==1 || Auth::user()->is_admin==1)
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('user/users')}}" ><i class="icon-user"></i><span class="hide-menu">Users </a></li>
                    @endif  
                        <!-- <li> <a class=" waves-effect waves-dark" href="#" ><i class="icon-rocket"></i><span class="hide-menu">Plans </a></li>
                        <li> <a class=" waves-effect waves-dark" href="#" ><i class="icon-basket-loaded"></i><span class="hide-menu">Orders </a></li> -->
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('user/websites')}}" ><i class="ti-bell"></i><span class="hide-menu">Targeted Ads </a></li>
                        
                      
                        <li> <a class="waves-effect waves-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
                                                    </li>
                       </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        