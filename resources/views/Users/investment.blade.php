@extends('layouts.master')

@section('content')




    
    
<div class="container-fluid">

   <!-- Custom Modals -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xm-12 center-block">

                    <div class="card-box">
                        
                        <h3 class="text-grey">Investments</h3>  <hr>
                        <button class="btn btn-success btn-custom waves-effect waves-light"data-toggle="modal" data-target="#investment-modal">New Investment</button>
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
                        <h4 class="header-title mt-0 mb- bg-success text-white title-padding">Investment Detail</h4>
                        
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
                                <h5 class="text-custom m-b-5">Profit</h5>
                                <p class="m-b-0"><strike>N</strike>30,000</p>
                            </div>
                            
                            <hr>
                            
                            <div class="">
                                <h5 class="text-custom m-b-5">Investment Status</h5>
                                <p class="m-b-0"><span class="badge badge-success">Completed</status></p>
                            </div>


                        </div>


                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                
          </div>
          </div>
          
          
          
          
          

  <!-- Signup modal content -->
<div id="investment-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-uppercase text-center m-b-30">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </bu tton>
                </h2>      
                               
        <div class="card-box">
                
             <form class="form-horizontal" method="post" action="{{route('investfund')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
            
             <div class="form-group row m-b-20">
                <div class="col-md-12 col-sm-12 col-xm-12">
                    <label for="emailaddress">Investment Packages</label>
                    <select class="form-control" name="packages">
                        @foreach(config('farmkonnect.packages') as $key => $value)
                            <option value="{{$key}}">{{$key}}</option>
                        @endforeach
                       
                        
                    </select>
                    <div class="text-danger">
                        @if ($errors->has('packages'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('packages') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="form-group row m-b-20">
                <div class="col-md-12 col-sm-12 col-xm-12">
                    <label for="emailaddress">Investment Packages</label>
                        <input type="text" name="amount" class="form-control" placeholder="Deposite Amount">
                         <div class="text-danger">
                        @if ($errors->has('amount'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('amount') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
            </div>


            <div class="form-group text-center">
                <div class="col-md-12 col-sm-12 col-xm-12">
                    <button class="btn btn-outline-custom btn-lg btn-rounded" type="submit">Invest</button>
                </div>
            </div>

        </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>
  
        
        
        
        

    <div class="row">
        <div class="col-md-12">
            <div class="card-box task-detail">
                <h2 class="text-center">Investment History</h2>
                <form class="app-search">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>

                                <br>
                <div class="media mt-0 m-b-30 table-responsive">
                    <table id="demo-foo-pagination" class="table m-b-0 table-bordered toggle-arrow-tiny" data-page-size="5"><thead>
                                <tr align="center">
                                    <th data-toggle="true">Invested Amount</th>
                                    <th>Profit</th>
                                    <th>Package</th>
                                    <th> Date </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody align="center">
                                    @foreach($investfund as $invest)
                                   
                                    <?php
                                        if($invest->packages == 1){
                                            $package = 'Standard Investment Package';
                                        }elseif($invest->packages == 2){
                                            $package ='Standard (Military) Package';
                                        }elseif($invest->packages == 3){
                                            $package = 'Term Investment Packag';
                                        }elseif ($invest->packages == 4) {
                                            $package = 'Starters (Militatry) Package';
                                        }elseif ($invest->packages == 5) {
                                            $package ='Snail Village Investment';
                                        }else{
                                            $package = 'over one billion';
                                        }
                                    
                                    ?>
                                        <tr>
                                            <td>₦{{$invest->amount}}</td>
                                            <td>₦{{$invest->profit}}</td>
                                            <td>{{$package }}</td>
                                            <td></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><span class="btn btn-sm btn-outline-success btn-rounded" data-toggle="modal" data-target="#signup-modal">Details</span></td>
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