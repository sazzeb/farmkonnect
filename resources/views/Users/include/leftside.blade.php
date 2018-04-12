<!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="{{asset('assets/images/logo.png')}}" alt="" height="50">
                            </span>
                            <i>
                                <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="{{Auth::user()->profile->avatar}}" alt="user-img" title="Investor's Name" class="rounded-circle img-fluid" style="border: 1px solid #fff;">
                        </div>
                        <h5><a href="/profile">{{Auth::user()->name}}</a> </h5>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="/dashboard">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="icon-wallet"></i> <span> Wallet </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/fund">Fund </a></li>
                                    <li><a href="/withdrawal"> Withdrawal</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="/investment"><i class="fa fa-money"></i> <span> Investment </span></a>
                            </li>
                            
                             <li>
                                <a href="/referrals"><i class="fa fa-users"></i> <span> Referrals </span></a>
                            </li>
                            
                            <li>
                                <a href="/support"><i class="icon-bubbles"></i> <span> Support </span></a>
                            </li>

                           

                            

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->