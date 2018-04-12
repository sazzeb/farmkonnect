@extends('admins.include.master')

@section('content')
                
                
                <!-- Start Page content -->
                <div class="content">
                <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <!-- meta -->
                                <div class="profile-user-box card-box bg-custom">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="pull-left mr-3"><img src="" alt="" class="thumb-lg rounded-circle"></span>
                                            <div class="media-body text-white">
                                                <h2 class="mt-1 mb-1 font-18">Full Name</h2>
                                                <p class="font-13 text-light"></p>
                                                <p class="text-light mb-0"></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-light waves-effect">
                                                    <i class="fa fa-money mr-1"></i> <a href="/admin/user_add_money"> Add/Subtract Balance </a>
                                                </button>
                                                <button type="button" class="btn btn-light waves-effect" data-toggle="modal" data-target="#login-modal">
                                                    <i class="fa fa-envelope-o mr-1"></i> Send Message
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ meta -->
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                    <h4 class="header-title mt-0 m-b-20">Personal Information</h4>
                                    <div class="panel-body">
                

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15"></span></p>

                                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15"></span></p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"></span></p>

                                            <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15"></span></p>

                              

                                        </div>

                                    </div>
                                </div>
                                <!-- Personal-Information -->

                     

                            </div>


                            <div class="col-md-8">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-credit-card float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Total Investment</h6>
                                            <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="fa fa-money float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Total Profit</h6>
                                            <h2 class="m-b-20"><strike>N</strike><span data-plugin="counterup">46,782</span></h2>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-wallet float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Wallet Balance</h6>
                                            <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                                        </div>
                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->


                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Next of Kin Information</h4>
                                    
                                    <div class="">
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Full Name</h5>
                                            <p class="m-b-0"></p>
                                        </div>

                                        <hr>

                                        <div class="">
                                            <h5 class="text-custom m-b-5">Address</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                        
                                        <hr>
                                        
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Phone Number</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                        
                                        
                                        <!--<button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#signup-modal">-->
                                        <!--            <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Next of Kin-->
                                        <!--        </button>-->
                                      
                                        
                                        

                                    </div>
                                </div>



                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                               <!--Signup modal content -->
                                    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h2 class="text-uppercase text-center m-b-30">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </h2>
                                                    
                                                     <h3 class="bg-success text-white">Personal Information</h3>

                                                    <form class="form-horizontal" action="{{route('updateuser')}}" method="post" enctype="multipart/form-data">
                                                        
                                                        
                                                        <div class="input-group" >
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">User Name:</span>
                                                            </div>
                                                            <input type="text" class="form-control"disabled="" value="" aria-label="Username" aria-describedby="basic-addon1">
                                                                
                                                        </div>
                                                        
                                                        <div class="input-group m-b-25" style="margin-top:12px;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Email address</span>
                                                            </div>
                                                            <input type="text" class="form-control" disabled="" value="" aria-label="Username" aria-describedby="basic-addon1">
                                                             
                                                        </div>
                                                        
                                                        <div class="input-group m-b-25" style="margin-top:12px;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Full Name</span>
                                                            </div>
                                                            <input type="text" class="form-control"  value="" name="name" aria-label="name" aria-describedby="basic-addon1">
                                                            <p class="text-danger">
                                                                
                                                                    <span class="help-block">
                                                                            <strong></strong>
                                                                        </span>
                                                                
                                                            </p>
                                                        </div>
                                                        
                                                        <div class="input-group m-b-25"style="margin-top:12px;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Phone Number</span>
                                                            </div>
                                                            
                                                            <input type="text" class="form-control" placeholder="Phone Number" value="" name="phone_num" aria-label="Username" aria-describedby="basic-addon1">
                                                            <p class="text-danger">
                                                            
                                                                <span class="help-block">
                                                                        <strong></strong>
                                                                    </span>
                                                           
                                                        </p>
                                                        </div>
                                                        
                                                        <div class="input-group m-b-25" style="margin-top:12px;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Occupation</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Occupation" name="occupation" value="" aria-label="Username" aria-describedby="basic-addon1">
                                                            <p class="text-danger">
                                                                    
                                                                        <span class="help-block">
                                                                                <strong></strong>
                                                                            </span>
                                                                   
                                                                </p>
                                                        </div>
                                                        
                                                        <div class="input-group m-b-25" style="margin-top:12px;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Location</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Location" name="location" value="" aria-label="Username" aria-describedby="basic-addon1">
                                                            <p class="text-danger">
                                                                
                                                                    <span class="help-block">
                                                                            <strong></strong>
                                                                        </span>
                                                              
                                                            </p>
                                                        </div>
                                                        
                                                        
                                                        <div class="input-group m-b-25" style="margin-top:12px;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Upload</span>
                                                            </div>
                                                            <input type="file" class="form-control" name="avatar" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                        

                                                        <div class="form-group account-btn text-center m-t-10" style="margin-top:12px;">
                                                            <div class="col-12">
                                                                <button class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit">Update</button>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    
                                    
                                    
                                      <!--Signup modal content -->
                                    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h2 class="text-uppercase text-center m-b-30">
                           
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </h2>
                                                
                                                    <h3 class="bg-success text-white">Next of Kin Information</h3>
                                                    
                                                    

                                                    <form class="form-horizontal"  action="{{route('nextup')}}" method="post" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        
                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="emailaddress1">Full Name</label>
                                                                <input class="form-control" name="name" type="text" placeholder="Enter Full Name">
                                                                <p class="text-danger">
                                                                    @if ($errors->has('name'))
                                                                        <span class="help-block">
                                                                                <strong>{{ $errors->first('name') }}</strong>
                                                                            </span>
                                                                    @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="emailaddress1">Phone</label>
                                                                <input class="form-control" type="text" name="phone_num" placeholder="Phone Number">
                                                                <p class="text-danger">
                                                                    @if ($errors->has('location'))
                                                                        <span class="help-block">
                                                                                <strong>{{ $errors->first('location') }}</strong>
                                                                            </span>
                                                                    @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                        
                                                          <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="emailaddress1">NOK Address </label>
                                                                <input class="form-control" type="text" id="emailaddress1" name="location" placeholder="Enter Your Location">
                                                                <p class="text-danger">
                                                                    @if ($errors->has('location'))
                                                                        <span class="help-block">
                                                                                <strong>{{ $errors->first('location') }}</strong>
                                                                            </span>
                                                                    @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="col-12">
                                                            <label for="inputAddress" class="col-form-label">Upload Identification</label>
                                                            <input type="file" name="avatar" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                            </div>
                                                        </div>


                                                        <div class="form-group account-btn text-center m-t-10">
                                                            <div class="col-12">
                                                                <button class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit">Update</button>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                        
                                    
                                    
                                    
                                    
                        


                    </div> <!-- container -->


</div>
@endsection