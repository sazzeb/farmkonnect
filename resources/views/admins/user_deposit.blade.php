@extends('admins.include.master')

@section('content')




    
        <!-- Start Page content -->
                <div class="content">
            <div class="container-fluid">
        
               <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xm-12 center-block">
            
                                <div class="card-box">
                                    
                                    <h3 class="text-grey">Deposit Transaction Log</h3><hr>
                                    
                             



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
                                    <h4 class="header-title mt-0 mb- bg-success text-white title-padding">Wallet Transaction Detail</h4>
                                    
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
                                            <h5 class="text-custom m-b-5">Transaction Status</h5>
                                            <p class="m-b-0">Completed</p>
                                        </div>


                                    </div>


                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                            
                      </div>
                      </div>
                      
        
        
        
        

    <div class="row">
        <div class="col-md-12">
            <div class="card-box task-detail">
                
                <div class="media mt-0 m-b-30 table-responsive">
                    <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5"><thead>
                                <tr align="center">
                                    <th>#ID</th>
                                    <th>Date</th>
                                    <th>Transaction ID#</th>
                                    <th>Type</th>
                                    <th> Amount </th>
                                    <th> Details </th>
                                </tr>
                                </thead>
                                <tbody align="center">
                                <tr>
                                    <td>1</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
                                </tr>
                                <tr>
                                     <td>2</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
                                </tr>
                                <tr>
                                   <td>3</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
                                </tr>
                                <tr>
                                     <td>5</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
                                </tr>
                               <tr>
                                    <td>8</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td><span class="badge badge-primary">Offline</span></td>
                                    <td><strike>N</strike>50,000</td>
                                    <td>This is Detail</td>
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
        
        </div><!-- Container -->

</div>
@endsection