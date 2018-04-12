@extends('admins.include.master')

@section('content')



     <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                  
                            
                           <h4 class="m-t-0 header-title text-grey title-padding">Overall Statistics</h4><hr>
                            
                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="card-box widget-flat border-custom bg-custom text-white">
                                    <i class="fi-tag"></i>
                                    <h3 class="m-b-10">25563</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Deposit</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="card-box bg-success widget-flat border-success text-white">
                                    <i class="fi-archive"></i>
                                    <h3 class="m-b-10">6952</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Investment</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="card-box widget-flat border-success bg-success text-white">
                                    <i class="fi-help"></i>
                                    <h3 class="m-b-10">18361</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Withdrawal</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="card-box bg-custom widget-flat border-custom text-white">
                                    <i class="fi-delete"></i>
                                    <h3 class="m-b-10">250</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600"></p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        
                        
                        
                          <h4 class="m-t-0 header-title text-grey title-padding">Users Statistics</h4><hr>

                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="card-box widget-flat border-custom bg-custom text-white">
                                    <i class="fi-tag"></i>
                                    <h3 class="m-b-10">25563</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Users</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="card-box bg-custom widget-flat border-custom text-white">
                                    <i class="fi-archive"></i>
                                    <h3 class="m-b-10">6952</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Verified Users</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="card-box widget-flat border-warning bg-warning text-white">
                                    <i class="fi-help"></i>
                                    <h3 class="m-b-10">18361</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Unverified</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-3">
                                <div class="card-box bg-danger widget-flat border-danger text-white">
                                    <i class="fi-delete"></i>
                                    <h3 class="m-b-10">250</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Blocked</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        
                        
                        
                        
                        
                        
                        
            <!-- Deposit and Withdrawal Row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
             
                    <h4 class="m-t-0 header-title text-grey title-padding">Deposit Statistics</h4><hr>
                
                 <div class="row text-center">
                            <div class="col-md-4 col-sm-6 col-lg-6 col-xl-4">
                                <div class="card-box widget-flat border-custom bg-custom text-white">
                                    <i class="fi-tag"></i>
                                    <h3 class="m-b-10">25563</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Number of Deposit</p>
                                </div>
                            </div>
                           
                            <div class="col-md-4 col-sm-6 col-lg-6 col-xl-4">
                                <div class="card-box widget-flat border-warning bg-warning text-white">
                                    <i class="fi-help"></i>
                                    <h3 class="m-b-10">18361</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Pending Deposit Request</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-6 col-xl-4">
                                <div class="card-box bg-custom widget-flat border-custom text-white">
                                    <i class="fi-delete"></i>
                                    <h3 class="m-b-10">250</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Amount Deposit of Per Month</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-lg-6 col-xl-12">
                                <div class="card-box bg-success widget-flat border-success text-white">
                                    <i class="fi-delete"></i>
                                    <h3 class="m-b-10">250</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Amount of Deposit</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
               
              
            </div><!-- Card -->
        </div><!-- Col -->
    
    
    
    
    
 
        <div class="col-md-6">
            <div class="card-box">
                
                    <h4 class="m-t-0 header-title text-grey title-padding"> Withdrawal Statistics</h4><hr>
                 
                    <div class="row text-center">
                            <div class="col-md-4 col-sm-6 col-lg-6 col-xl-4">
                                <div class="card-box widget-flat border-custom bg-custom text-white">
                                    <i class="fi-tag"></i>
                                    <h3 class="m-b-10">25563</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Number of Withdrawal</p>
                                </div>
                            </div>
                           
                            <div class="col-md-4 col-sm-6 col-lg-6 col-xl-4">
                                <div class="card-box widget-flat border-warning bg-warning text-white">
                                    <i class="fi-help"></i>
                                    <h3 class="m-b-10">18361</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Pending Withdrawal Request</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-6 col-xl-4">
                                <div class="card-box bg-custom widget-flat border-custom text-white">
                                    <i class="fi-delete"></i>
                                    <h3 class="m-b-10">250</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Amount Withdrawal of Per Month</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-lg-6 col-xl-12">
                                <div class="card-box bg-success widget-flat border-success text-white">
                                    <i class="fi-delete"></i>
                                    <h3 class="m-b-10">250</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total Amount of Withdrawal</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                
                
                
                
               
            </div><!-- Card -->
        </div><!-- Col -->
    </div>
    <!-- end row -->
    </div>
    
                        
                        



    </div> <!-- container -->

</div> <!-- content -->
@endsection