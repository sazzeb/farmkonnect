@extends('layouts.master')

@section('content')
<div class="container-fluid">
    
        <!-- Form row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-box">
                <div class="text-center">
                    <h4 class="m-t-0 header-title bg-success text-white title-padding">Personal Information</h4>
  
                </div>
                
             
                <form method="post" action="{{route('nextup')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="col-form-label">Email</label>
                            <input type="text" value="{{Auth::user()->email}}" disabled="" class="form-control" id="bank" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" class="col-form-label">Full Name</label>
                            <input type="text" value="{{$next->name}}" name="name" class="form-control" id="bank" placeholder="Enter Full Name">
                            <div class="text-danger">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4" class="col-form-label">Phone</label>
                            <input type="text" name="phone_num" class="form-control" value="{{$next->phone_num}}" id="amount" placeholder="Enter Phone Number">
                            <div class="text-danger">
                                @if ($errors->has('phone_num'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('phone_num') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group col-md-12">
                            <label for="inputPassword4" class="col-form-label">Address</label>
                            <input type="text" name="location" value="{{$next->location}}" class="form-control" id="amount" placeholder="Enter Address">
                            <div class="text-danger">
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-outline-custom btn-rounded ">Submit</button>
                    <a href="/profile" class="btn btn-sm btn-outline-primary btn-rounded ">Cancel</a>
                </form>
            </div>
        </div>
    
    
 
        
    </div>
    <!-- end row -->
    </div>
    
    
    
    
    
    
   
        </div><!-- end col -->

</div>
@endsection