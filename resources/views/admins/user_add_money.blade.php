@extends('admins.include.master')

@section('content')

<!-- Start Page content -->
                <div class="content">
<div class="container-fluid">
    
        <!-- Form row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <div class="text-center">
                    <h4 class="m-t-0 header-title bg-success text-white title-padding">Add Money</h4>
                </div><hr>
               
                
                <form method="post" action="/fund" enctype="multipart/form-data">
                    
                    <div class="form-row">
                        
                        
                       
                        <div class="form-group col-md-12">
                            <label for="inputPassword4" class="col-form-label">Amount</label>
                            <input type="text" name="" class="form-control" value="{{ old('teller_no') }}" id="teller_no" placeholder="Enter Amount to Add">
                            
                            <div class="text-danger">
                               
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                               
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4" class="col-form-label">Comment</label>
                            <textarea class="form-control"></textarea>
                            <div class="text-danger">
                                
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                             
                            </div>
                            
                        </div>
                    </div>
                   
                    
                    <button type="submit" class="btn btn-sm btn-outline-success btn-rounded ">Add</button>
                </form>
            </div>
        </div>
    
    
 
        <div class="col-md-6">
            <div class="card-box">
                <div class="text-center">
                    <h4 class="m-t-0 header-title bg-danger text-white title-padding"> Subtract Money</h4><hr>
                    </div>
                   <form method="post" action="/fund" enctype="multipart/form-data">
                    
                    <div class="form-row">
                        
                        
                       
                        <div class="form-group col-md-12">
                            <label for="inputPassword4" class="col-form-label">Amount</label>
                            <input type="text" name="" class="form-control" value="{{ old('teller_no') }}" id="teller_no" placeholder="Enter Amount to Subtract">
                            
                            <div class="text-danger">
                              
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                               
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4" class="col-form-label">Comment</label>
                            <textarea class="form-control"></textarea>
                            <div class="text-danger">
                               
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                               
                            </div>
                            
                        </div>
                    </div>
                   
                    
                    <button type="submit" class="btn btn-sm btn-outline-danger btn-rounded ">Subtract</button>
                </form>
               
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>
    
    
    
                                     <!-- Signup modal content -->
                                    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <h2 class="text-uppercase text-center m-b-30">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </h2>
                                                    
                                                   
                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb- bg-success text-white title-padding">Funding Transaction Detail</h4>
                        
                                    <div class="">
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Reference ID</h5>
                                            <p class="m-b-0">#12345</p></p>
                                        </div>

                                        <hr>

                                        <div class="">
                                            <h5 class="text-custom m-b-5">Date</h5>
                                            <p class="m-b-0">31/03/2018</p>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Amount</h5>
                                            <p class="m-b-0"><strike>N</strike>30,000</p>
                                        </div>
                                        
                                        <hr>
                            
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Funding Type</h5>
                                            <p class="m-b-0">Online</p>
                                        </div>


                                    </div>


                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    
                                    </div>
    
    
    
    
  
            
        </div><!-- end col -->
        
        </div><!-- Container -->

</div>
@endsection