@extends('layouts.master')

@section('content')
<div class="container-fluid">
    
        <!-- Form row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <div class="text-center">
                    <h4 class="m-t-0 header-title bg-success text-white title-padding">Offline Payment</h4><hr>
                    <p class="text-left"><strong>Bank Name:</strong>  Zenith Bank Plc</p>
                    <p class="text-left"><strong>Account Name:</strong> FarmKonnect Nigeria  </p>
                    <p class="text-left"><strong>Account Number: </strong>  <span>5080189021</span> </p>
                </div><hr>
                
                
                
                
                @if(Session::has('message'))
                    
                    <div class="alert alert-success" role="alert"> {{ Session::get('message') }} </div>
                @endif
                
                <form method="post" action="/fund" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-row">
                        <input type="hidden" name="user_id" class="form-control" id="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="ref_id" class="form-control" id="ref_id" value="{{mt_rand(10000,99999)}}">
                        <input type="hidden" name="fund_type" class="form-control" id="fund_type" value="offline">
                        <input type="hidden" name="f_status" class="form-control" id="fund_type" value="pending">
                        
                        <div class="form-group col-md-4">
                            <label for="inputEmail4" class="col-form-label">Bank</label>
                            <input type="text" name="bank" class="form-control" id="bank" value="{{ old('bank') }}" placeholder="Enter Bank Name">
                            
                            <div class="text-danger">
                                @if ($errors->has('bank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif                
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4" class="col-form-label">Teller number</label>
                            <input type="text" name="teller_no" class="form-control" value="{{ old('teller_no') }}" id="teller_no" placeholder="Enter Teller ID">
                            
                            <div class="text-danger">
                                @if ($errors->has('teller_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('teller_no') }}</strong>
                                    </span>
                                @endif                
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4" class="col-form-label">Amount Deposited</label>
                            <input type="text" name="amount" class="form-control" value="{{ old('amount') }}"  id="amount" placeholder="Deposit Amount">
                            <div class="text-danger">
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif                
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="col-form-label">Upload Teller</label>
                        <input type="file" name="teller_image" value="value=" value="{{ old('teller_img') }}" class="form-control" id="teller_img">
                        <div class="text-danger">
                            @if ($errors->has('teller_image'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('teller_image') }}</strong>
                                </span>
                             @endif                
                       </div>
                        
                    </div>
                    
                    <button type="submit" class="btn btn-sm btn-outline-custom btn-rounded ">Submit</button>
                </form>
            </div>
        </div>
    
    
 
        <div class="col-md-6">
            <div class="card-box">
                <div class="text-center">
                    <h4 class="m-t-0 header-title bg-success text-white title-padding">Online Payment</h4><hr>
                    <p>Make an easy payment with your debit card through paystack</p>
                    <p><a href="#"><img src="https://techproducts.com.ng/wp-content/uploads/2017/06/paystack.png" class="img-fluid"></img></a></p>
                    <button class="btn btn-sm btn-outline-custom btn-rounded">Make Payment</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>
    
    
    
                                     <!-- Details modal content -->
                                      @foreach($funded as $funds)
                                    <div id="details-{{$funds->ref_id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
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
                                            <p class="m-b-0">#{{$funds->ref_id}}</p></p>
                                        </div>

                                        <hr>

                                        <div class="">
                                            <h5 class="text-custom m-b-5">Date</h5>
                                            <p class="m-b-0">{{  date('d-m-Y', strtotime( $funds->created_at))}}</p>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Amount</h5>
                                            <p class="m-b-0"><strike>N</strike>{{$funds->amount}}</p>
                                        </div>
                                        
                                        <hr>
                            
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Funding Type</h5>
                                            <p class="m-b-0">{{$funds->fund_type}}</p>
                                        </div>


                                    </div>


                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    
                                    </div>
                                    @endforeach
    
    
    
    
    <div class="container-fluid">

    <div class="row">
         
        <div class="col-md-12">
            
            <div class="card-box task-detail">
                <h2 class="text-center">Funding Transaction History</h2>
                <div class="media mt-0 m-b-30 table-responsive">
                    @if(count($funded)===0)

                                      <div class="alert alert-info col-md-12" style="text-align:center; font-size:16px;"> No Transaction(s) Found  </div> 
                       @else
                    <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5"><thead>
                                <tr align="center">
                                     <th data-toggle="true">Reference ID</th>
                                    <th>Date</th>
                                    <th> Amount </th>
                                    <th> Funding Status </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                
                                <tbody align="center">
                                   
                                    @foreach($funded as $funds)
                                <tr>
                                    
                                    <td>#{{$funds->ref_id}}</td>
                                    <td>{{  date('d-m-Y', strtotime( $funds->created_at))}}</td>
                                    <td><strike>N</strike>{{$funds->amount}}.00</td>
                                @if($funds->f_status=='pending')
                                    <td><span class="badge badge-warning">{{$funds->f_status}}</span></td>
                                @else
                                     <td><span class="badge badge-wa">{{$funds->f_status}}</span></td>
                                @endif
                                    
                                    <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#details-{{$funds->ref_id}}">Details</span> </td>
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
                            @endif

                </div>

            </div>
            
        </div><!-- end col -->

</div>
@endsection