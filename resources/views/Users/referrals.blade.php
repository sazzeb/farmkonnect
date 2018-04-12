@extends('layouts.master')

@section('content')




    
    
    <div class="container-fluid">
        
               <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                       
                    
                    
                    
                    <div class="row">
                            <div class="col-lg-12">
                                     <h3 class="text-grey">Referral Information</h3>
                                     <hr>
                            </div>
                            
                            
                            
                                   <div class="col-lg-6">
                                <div class="card-box">
                                    
                                    <p><strong>Your Referral Link: </strong></p>
                                    
                            <div class="input-group col-md-12 col-sm-12 col-xm-12">
                        <input type="text" class="form-control" value="farmkonnect.com/username/fggfjjjdkd" id="myInput">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success waves-effect waves-light" onclick="myFunction() ">Copy</button>
                        </div>
                    </div>
                                </div>

                            </div>
                            
                            


                            <div class="col-lg-6">
                                <div class="card-box">
                                    
                                    <p><strong>Refer Someone Via Email: </strong></p>
                                    
                            <div class="input-group col-md-12 col-sm-12 col-xm-12">
                        <input type="text" class="form-control"  placeholder="Enter Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success waves-effect waves-light" type="button">Invite</button>
                        </div>
                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->
                    
                    
                    
                    
                    


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
                            <div class="col-lg-6">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title bg-success text-white title-padding">First Generation Referral</h4>
                                    
                                    <form class="app-search">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>

                                <br>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Referral ID#</th>
                                            <th>Referral Name</th>
                                            <th>Bonus</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark Doe</td>
                                            <td><strike>N</strike>15,000</td>
                                            <td><?php echo date('d-M-Y'); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Matthew John</td>
                                            <td><strike>N</strike>15,000</td>
                                            <td><?php echo date('d-M-Y'); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Mark Doe</td>
                                            <td><strike>N</strike>15,000</td>
                                            <td><?php echo date('d-M-Y'); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                          <td>Mark Doe</td>
                                            <td><strike>N</strike>15,000</td>
                                            <td><?php echo date('d-M-Y'); ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                            <div class="col-lg-6">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title bg-success text-white title-padding">2nd Generation Referral</h4>
                              <form class="app-search">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>

                                <br>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Referral ID# 1</th>
                                            <th>Referral Name</th>
                                            <th>Bonus</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1<br><span class="badge badge-success">Name - Ref ID#</span></th>
                                             <td>Mark Doe</td>
                                            <td><strike>N</strike>15,000</td>
                                            <td><?php echo date('d-M-Y'); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2<br><span class="badge badge-success">Name - Ref ID#</span></th>
                                             <td>Mark Doe</td>
                                            <td><strike>N</strike>15,000</td>
                                            <td><?php echo date('d-M-Y'); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3<br><span class="badge badge-success">Name - Ref ID#</span></th>
                                             <td>Mark Doe</td>
                                            <td><strike>N</strike>15,000</td>
                                            <td><?php echo date('d-M-Y'); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4<br><span class="badge badge-success">Name - Ref ID#</span></th>
                                             <td>Mark Doe</td>
                                            <td><strike>N</strike>15,000</td>
                                            <td><?php echo date('d-M-Y'); ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->
                        
                        </div>
        
        
        
        <style type="javascript/text">
        
        function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("Copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</style>
        
        

</div>
@endsection