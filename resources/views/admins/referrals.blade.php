@extends('admins.include.master')

@section('content')




    
            <!-- Start Page content -->
                <div class="content">
            <div class="container-fluid">
        
               <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xm-12 center-block">
            
                                <div class="card-box">
                                    
                                    <h3 class="text-grey">Referrals History</h3><hr>
                                    
                             



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
                                    <h4 class="header-title mt-0 mb- bg-success text-white title-padding">Referral Details</h4>
                                    
                                    <div class="">
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Date</h5>
                                            <p class="m-b-0"><?php echo date('d-M-Y'); ?></p>
                                        </div>

                                        <hr>
                                    
                                    <div class="">
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Referrer Name</h5>
                                            <p class="m-b-0">Essien Saviour</p></p>
                                        </div>

                                        <hr>
                                        
                                         <div class="">
                                            <h5 class="text-custom m-b-5">Referred Name</h5>
                                            <p class="m-b-0">0234102010</p></p>
                                        </div>

                                        <hr>
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Amount</h5>
                                            <p class="m-b-0"><strike>N</strike>30,000</p>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Profit</h5>
                                            <p class="m-b-0"><strike>N</strike>4,000</p>
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
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>

                    <br>
                
                <div class="media mt-0 m-b-30 table-responsive">
                    <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5"><thead>
                                <tr align="center">
                                    <th>#ID</th>
                                    <th>Date</th>
                                    <th>Referrer Name</th>
                                    <th> Referee Name </th>
                                    <th> Amount </th>
                                    <th> Profit </th>
                                    <th> Detail </th>
                                </tr>
                                </thead>
                                <tbody align="center">
                                <tr>
                                    <td>1</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Techiementor</td>
                                    <td>S I</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Amaka</td>
                                    <td>S I (Military)</td>
                                    <td><span class="badge badge-warning">In Progress</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Bayo</td>
                                    <td>S I</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Amaka</td>
                                    <td>S I (Military)</td>
                                    <td><span class="badge badge-warning">In Progress</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Bayo</td>
                                    <td>S I</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Amaka</td>
                                    <td>S I (Military)</td>
                                    <td><span class="badge badge-warning">In Progress</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Bayo</td>
                                    <td>S I</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Amaka</td>
                                    <td>S I (Military)</td>
                                    <td><span class="badge badge-warning">In Progress</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
                                </tr>
                               <tr>
                                    <td>3</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#64567647</td>
                                    <td>Bayo</td>
                                    <td>S I</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><span class="btn btn-sm btn-outline-primary btn-rounded" data-toggle="modal" data-target="#signup-modal">Detail</span></td>
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