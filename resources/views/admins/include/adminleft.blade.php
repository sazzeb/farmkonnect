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
                            <img src="" alt="user-img" title="Investor's Name" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">Maxine Kennedy</a> </h5>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="/admin">
                                    <i class="fa fa-dashboard"></i> <span> Dashboard </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-users"></i> <span> Manage Users </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/admin/users"> All Users </a></li>
                                    <li><a href="/admin/user_blocked"> Blocked Users </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="icon-wallet"></i> <span> Deposit </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/admin/user_deposit_pending"> Pending Request </a></li>
                                    <li><a href="/admin/user_deposit_history"> Deposit History </a></li>
                                </ul>
                            </li>
                            
                             <li>
                                <a href="javascript: void(0);"><i class="fa fa-credit-card"></i> <span> Withdrawal </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/admin/withdrawal_completed"> Completed </a></li>
                                    <li><a href="/admin/withdrawal_pending"> Pending Request </a></li>
                                    <li><a href="/admin/withdrawal_history"> Withdrawal History </a></li>
                                </ul>
                            </li>
                      
                            <li>
                                <a href="/admin/investment">
                                    <i class="fa fa-money"></i> <span> Investment </span>
                                </a>
                            </li>
                            
                            <!--<li>
                                <a href="/admin/referrals">
                                    <i class="fa fa-user-o"></i> <span> Referrals </span>
                                </a>
                            </li>-->
                            
                            <li>
                                <a href="/dashboard">
                                    <i class="fa fa-server"></i> <span> Transaction Log </span>
                                </a>
                            </li>
                          
                            
                           

                            

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->