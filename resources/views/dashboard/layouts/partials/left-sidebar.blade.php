<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <!-- <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="{{ asset('public/')}}//dashboard/assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class=" u-dropdown link hide-menu" >Admin Account</a>
                            
                        </div>
                    </div>
                </div> -->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li> <a class=" waves-effect waves-dark" href="{{URL::to('dashboard')}}" ><i class="icon-speedometer"></i><span class="hide-menu">Dashboard </a></li>
                    <!-- <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/users')}}" ><i class="icon-user"></i><span class="hide-menu">Users </a></li> -->

                        <!-- <li> <a class=" waves-effect waves-dark" href="#" ><i class="icon-rocket"></i><span class="hide-menu">Plans </a></li>
                        <li> <a class=" waves-effect waves-dark" href="#" ><i class="icon-basket-loaded"></i><span class="hide-menu">Orders </a></li> -->
                        <!-- <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/roles')}}" ><i class="ti-bell"></i><span class="hide-menu">Roles</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/permissions')}}" ><i class="ti-bell"></i><span class="hide-menu">Permission</a></li> 
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/expertises')}}" ><i class="ti-bell"></i><span class="hide-menu">Expertises</a></li> -->
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/user/settings')}}" ><i class="icon-settings"></i><span class="hide-menu">Setting</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/banner/1/edit')}}" ><i class="icon-picture"></i><span class="hide-menu">Banner</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/xcell_about/1/edit')}}" ><i class="icon-briefcase"></i><span class="hide-menu">XCELL About</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/doctor_about/1/edit')}}" ><i class="ti-id-badge"></i><span class="hide-menu">Doctor About</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/stats')}}" ><i class="icon-pie-chart"></i><span class="hide-menu">Stats</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/packages')}}" ><i class="icon-grid"></i><span class="hide-menu">Packages</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/plans')}}" ><i class="icon-plane"></i><span class="hide-menu">Plans</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/blogs')}}" ><i class="icon-note"></i><span class="hide-menu">Blogs</a></li>
                        <li> <a class=" waves-effect waves-dark" href="{{URL::to('admin/contact/1/edit')}}" ><i class="icon-phone"></i><span class="hide-menu">Contact</a></li>

                      
                        <li> <a class="waves-effect waves-dark" href="{{ route('frontend.logout.perform') }}" ><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a>
                                                     
                                                    </li>
                       </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        