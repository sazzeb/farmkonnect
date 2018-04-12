@extends('admins.include.master')

@section('content')


               <div class="container-fluid">

                        <div class="row">

                            <!-- Right Sidebar -->
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <!-- Left sidebar -->
                                    <div class="inbox-leftbar">

                                        <button class="btn btn-success btn-block waves-effect waves-light">Open</button>



                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class="inbox-rightbar">

                                       
                                        
                                          

                                          

                                        <div class="mt-4">
                                            <h5>Hi Bro, How are you?</h5>

                                            <hr/>

                                            <div class="media mb-4 mt-1">
                                                <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="pull-right">07:23 AM</span>
                                                    <h6 class="m-0">Jonathan Smith</h6>
                                                    <small class="text-muted">From: jonathan@domain.com</small>
                                                </div>
                                            </div>

                                            <p><b>Hi Bro...</b></p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                                            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>

                                            <hr/>

                                 
                                        </div> <!-- card-box -->

                                        <div class="media mb-0 mt-5">
                                            <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/avatar-7.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <div class="card-box reply-box">
                                                   
                                                     
                                                     <form>
                                                          <div>
                                                          <textarea class="form-control"></textarea>
                                                          </div><br>
                                                          
                                                          <div class="text-right">
                                            <button type="button" class="btn btn-custom btn-rounded waves-effect waves-light w-md m-b-30"> <span class="fa fa-check"> Send</span></button>
                                            <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light w-md m-b-30"> <span class="fa fa-times"> Close</span></button>
                                        </div>
                                                      
                                                      </form>

                                                </div>
                                            </div>
                                        </div>

                                        

                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div> <!-- end Col -->

                        </div><!-- End row -->

                    </div> <!-- container -->

    
    

</div>
@endsection