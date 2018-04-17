@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="company-card card-box">
                        <h2 class="m-b-10 text-center text-white bg-success title-padding">Portfolio</h2>
                    <div class="text-center mt-5">
                        <h5 class="font-normal text-muted">Investment Balance</h5>
                        <h3 class="m-b-30"> <strike>N</strike>85412.435</h3>
                        <h5 class="font-normal text-muted">Floating Balance</h5>
                        <h3 class="m-b-30"> <strike>N</strike>466.892</h3>
                        <button type="button" class="btn btn-outline-custom btn-rounded waves-light waves-effect"><a href="/investment">Add Investment</a></button>
                    </div>
        
                    <div id="company-4" class="text-center"></div>
        
                </div>
            </div><!-- end col -->
            <div class="col-md-6 col-lg-3">
                <div class="company-card card-box">
                        <h2 class="m-b-10 text-center text-white bg-success title-padding">Referral</h2>
                    <div class="text-center mt-5">
                        <h5 class="font-normal text-muted">Referred</h5>
                        <h3 class="m-b-30"> 45</h3>
                        <h5 class="font-normal text-muted">Referral Bonus</h5>
                        <h3 class="m-b-30"> <strike>N</strike>40.892</h3>
                        <button type="button" class="btn btn-outline-custom btn-rounded waves-light waves-effect">Referral List</button>
                    </div>
        
                    <div id="company-4" class="text-center"></div>
        
                </div>
            </div><!-- end col -->
            
                 <div class="col-md-6 col-lg-3">
                <div class="company-card card-box">
                        <h2 class="m-b-10 text-center text-white bg-success title-padding">Profit </h2>
                    <div class="text-center mt-5">
                        <h5 class="font-normal text-muted">Total Profit</h5>
                        <h3 class="m-b-30"><strike>N</strike>3802.94003</h3>
                    </div>
        
                    <div id="company-4" class="text-center"></div>
        
                </div>
            </div><!-- end col -->
            
            
            
            <div class="col-md-6 col-lg-3">
                <div class="company-card card-box">
                        <h2 class="m-b-10 text-center text-white bg-success title-padding">Wallet </h2>
                    <div class="text-center mt-5">
                        <h5 class="font-normal text-muted">Current Balance</h5>
                        <h3 class="m-b-30"><strike>N</strike>{{$wallet_bal->wallet_balance}}.00</h3>
                        <h5 class="font-normal text-muted">Funded Amount</h5>
                        <h3 class="m-b-30"> <strike>N</strike>{{$funded_amt->sum('amount')}}.00</h3>
                        <button type="button" class="btn btn-outline-custom btn-rounded waves-light waves-effect"><a href="/fund">Fund</a></button>
                        <button type="button" class="btn btn-outline-custom btn-rounded waves-light waves-effect"><a href="/withdrawal">Withdraw</a></button>
                    </div>
        
                    <div id="company-4" class="text-center"></div>
        
                </div>
            </div><!-- end col -->
            
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
                                    <h4 class="header-title mt-0 mb- bg-success text-white">Wallet Transaction Detail</h4>
                                    
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
                                            <h5 class="text-custom m-b-5">Transaction Type</h5>
                                            <p class="m-b-0">Funding</p>
                                        </div>
                                        
                                        <hr>
                                        
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Transaction Method</h5>
                                            <p class="m-b-0">Online</p>
                                        </div>


                                    </div>


                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
            
       
            
            
        </div>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-7">
            <div class="card-box task-detail">
                <h2 class="text-center">Recent Wallet Transaction</h2>
                <div class="media mt-0 m-b-30 table-responsive">
                    <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5"><thead>
                                <tr align="center">
                                    <th data-toggle="true">Date</th>
                                    <th> Reference </th>
                                    <th> Transaction Type </th>
                                    <th> Amount </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody align="center">
                                <tr>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#12345</td>
                                    <td><span class="badge badge-success">Funding</span></td>
                                    <td><strike>N</strike>20000.00</td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
                                </tr>
                                 <tr>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#12346</td>
                                    <td><span class="badge badge-primary">Withdrawal</span></td>
                                    <td><strike>N</strike>20000.00</td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
                                </tr>
                                 <tr>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#12347</td>
                                    <td><span class="badge badge-success">Funding</span></td>
                                    <td><strike>N</strike>20000.00</td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
                                </tr>
                                 <tr>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#12348</td>
                                    <td><span class="badge badge-primary">Withdrawal</span></td>
                                    <td><strike>N</strike>20000.00</td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
                                </tr>
                                 <tr>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#12349</td>
                                    <td><span class="badge badge-success">Funding</span></td>
                                    <td><strike>N</strike>20000.00</td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
                                </tr>
                                 <tr>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#12357</td>
                                    <td><span class="badge badge-primary">Withdrawal</span></td>
                                    <td><strike>N</strike>20000.00</td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
                                </tr>
                                <tr>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#1245</td>
                                    <td><span class="badge badge-success">Funding</span></td>
                                    <td><strike>N</strike>20000.00</td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
                                </tr>
                                 <tr>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td>#12020</td>
                                    <td><span class="badge badge-primary">Withdrawal</span></td>
                                    <td><strike>N</strike>20000.00</td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
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
        </div><!-- end col -->

        <div class="col-md-5">
            <div class="card-box">
                <div class="user-bo">
                    <div class="user-im text-center">
                        <img src="{{Auth::user()->profile->avatar}}" alt="user-img" title="" width="200px" height="200px" class="rounded-circle img-fluid">
                    </div>
                    <h4 class="text-success text-center"><a href="/profile">{{ Auth::user()->name }}</a></h4>
                    <p><strong>Referral Link: </strong></p>
                      <div class="input-group">
                        <input type="text" class="form-control" value="/register/{{ Auth::user()->referral_code }}" disabled=''>
                        <div class="input-group-append">
                            <button class="btn btn-outline-success waves-effect waves-light"  data-toogle="tooltip" title="Copy"><span class="fa fa-copy"></span></button>
                        </div>
                    </div>
                      <p><strong>Invite Someone Via Email: </strong></p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success waves-effect waves-light" type="button">Invite</button>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->


@endsection