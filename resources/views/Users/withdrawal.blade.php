@extends('layouts.master')

@section('content')




    
    
            <div class="container-fluid">
        
               <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xm-12 center-block">
            
                                <div class="card-box">
                                    
                                    <h3 class="text-grey">Request Withdrawal</h3><hr>
                                     @if(Session::has('message'))
                    
                                       <div class="alert alert-success col-md-6 col-sm-12 col-xm-12" role="alert"> {{ Session::get('message') }} </div> 
                                        
                                    @endif
                                                        
                                     <form class="form-horizontal" method="post" action="/withdrawal" id="form-card" style="vertical-align:middle;">
                                          {{csrf_field()}}
                                <div class="form-group row m-b-20">
                                    <input type="hidden" name="user_id" class="form-control" id="user_id" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="ref_id" class="form-control" id="ref_id" value="{{mt_rand(10000,99999)}}">
                                     <input type="hidden" name="w_status" class="form-control" id="fund_type" value="pending">
                                     
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <label for="username">Account Name</label>
                                        <input class="form-control" type="text" name="acc_name"  value="{{ old('acc_name') }}" placeholder="Enter Account Name">
                                        <div class="text-danger">
                                            @if ($errors->has('acc_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('acc_name') }}</strong>
                                                </span>
                                            @endif                
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <label for="emailaddress">Account Number</label>
                                        <input class="form-control" type="text" name="acc_no"   value="{{ old('acc_no') }}" placeholder="Enter Account Number">
                                        <div class="text-danger">
                                            @if ($errors->has('acc_no'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('acc_no') }}</strong>
                                                </span>
                                            @endif                
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="form-group row m-b-20">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <label for="emailaddress">Bank Name</label>
                                        <input class="form-control" type="text" name="bank"  value="{{ old('bank') }}" placeholder="Enter Bank Name">
                                        <div class="text-danger">
                                            @if ($errors->has('bank'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('bank') }}</strong>
                                                </span>
                                            @endif                
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="form-group row m-b-20">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <label for="emailaddress">Amount</label>
                                        <input class="form-control" type="text" name="amount"  value="{{ old('amount') }}" placeholder="Enter Withdrawal Amount">
                                        <div class="text-danger">
                                            @if ($errors->has('amount'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('amount') }}</strong>
                                                </span>
                                            @endif                
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row text-center m-t-10">
                                    <div class="col-md-6 col-sm-12 col-xm-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Request</button>
                                    </div>
                                </div>

                            </form>



                                      <!-- Signup modal content -->
                                         @foreach($withdrawal as $withdrawals)
                                    <div id="details-{{$withdrawals->ref_id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
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
                                    
                                    <form class="app-search">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>

                                <br>
                                    
                                    <div class="">
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Reference ID</h5>
                                            <p class="m-b-0">#{{$withdrawals->ref_id}}</p></p>
                                        </div>

                                        <hr>

                                        <div class="">
                                            <h5 class="text-custom m-b-5">Date</h5>
                                            <p class="m-b-0">{{  date('d-m-Y', strtotime( $withdrawals->created_at))}}</p>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Amount</h5>
                                            <p class="m-b-0"><strike>N</strike>{{$withdrawals->amount}}</p>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Bank</h5>
                                            <p class="m-b-0">{{$withdrawals->bank}}</p>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Account no</h5>
                                            <p class="m-b-0">{{$withdrawals->acc_no}}</p>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Transaction Status</h5>
                                            <p class="m-b-0">{{$withdrawals->w_status}}</p>
                                        </div>


                                    </div>


                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    
                        
                      </div>
                      @endforeach
                      </div>
                      
        
        
        
        

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card-box task-detail">
                <h2 class="text-center">Withdrawal Transaction History</h2>
                    <form class="app-search">
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <br>
                    
                <div class="media mt-0 m-b-30 table-responsive">
                    <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5"><thead>
                                <tr align="center">
                                    <th data-toggle="true">Reference ID</th>
                                    <th>Date</th>
                                    <th> Amount </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody align="center">
                                <tr>
                                    @foreach($withdrawal as $withdrawals)
                                    <td>#{{$withdrawals->ref_id}}</td>
                                    <td><?php echo date('d-M-Y'); ?></td>
                                    <td><strike>N</strike>{{$withdrawals->amount}}</td>
                                    <td><span class="badge badge-success">{{$withdrawals->w_status}}</span></td>
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#details-{{$withdrawals->ref_id}}">Details</span></td>
                                </tr>
                                    @endforeach
                                 
                                
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