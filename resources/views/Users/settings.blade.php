@extends('layouts.master')

@section('content')




    
    
            <div class="container-fluid">
        
               <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xm-12 center-block">
            
                                <div class="card-box">
                                    
                                    <h3 class="bg-success text-white">Request Withdrawal</h3><hr>
                                    
                                     <form class="form-horizontal" action="#" id="form-card" style="vertical-align:middle;">
                                <div class="form-group row m-b-20">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <label for="username">Account Name</label>
                                        <input class="form-control" type="email" id="username" required="" placeholder="Enter Account Name">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <label for="emailaddress">Account Number</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter Account Number">
                                    </div>
                                </div>
                                
                                 <div class="form-group row m-b-20">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <label for="emailaddress">Bank Name</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter Bank Name">
                                    </div>
                                </div>
                                
                                 <div class="form-group row m-b-20">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <label for="emailaddress">Amount</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter Withdrawal Amount">
                                    </div>
                                </div>


                                <div class="form-group row text-center m-t-10">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Request</button>
                                    </div>
                                </div>

                            </form>



                                    <!-- Signup modal content -->
                                    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <h2 class="text-uppercase text-center m-b-30">
                                                        <a href="index.html" class="text-success">
                                                            <span><img src="assets/images/logo.png" alt="" height="28"></span>
                                                        </a>
                                                    </h2>
                                                    
                                                    <div class="text-center">
                                                                <p> Full Name: <span>This is my Namw</span></p>
                                                                <p> Amount <span>This is my Namw</span></p>
                                                                <p> Date <span>This is my Namw</span></p>
                                                                <p> Transaction ID <span>This is my Namw</span></p>
                                                        
                                                    </div>


                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                            
                      </div>
                      
        
        
        
        

    <div class="row">
        <div class="col-md-12">
            <div class="card-box task-detail">
                <h2 class="text-center">Withdrawal Transaction History</h2>
                <div class="media mt-0 m-b-30 table-responsive">
                    <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5"><thead>
                                <tr align="center">
                                    <th data-toggle="true">Transaction ID</th>
                                    <th>Amount</th>
                                    <th> Date </th>
                                    <th > Action </th>
                                </tr>
                                </thead>
                                <tbody align="center">
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td><strike>N</strike>1000.00</td>
                                    <td><strike>N</strike>200.00</td>
                            
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td><strike>N</strike>1000.00</td>
                                    <td><strike>N</strike>200.00</td>
             
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td>$1000.00</td>
                                    <td>$200.00</td>

                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td>$1000.00</td>
                                    <td>$200.00</td>

                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td>$1000.00</td>
                                    <td>$200.00</td>
  
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td>$5000.00</td>
                                    <td>$300.00</td>

                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td>$5000.00</td>
                                    <td>$300.00</td>
       
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td>$5000.00</td>
                                    <td>$300.00</td>
      
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td>$5000.00</td>
                                    <td>$300.00</td>
   
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                <tr>
                                    <td><strike>N</strike>1000.00</td>
                                    <td>$5000.00</td>
                                    <td>$300.00</td>
    
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded">Details</span></td>
                                </tr>
                                
                                </tbody>
                                <tfoot>
                                <tr class="active">
                                    <td colspan="5">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                </div>

            </div>
            
            
            
            </div>
            
            </div>
            
        </div>
        <!-- end col -->

</div>
@endsection