<?php
require('top.inc.php');
$skills='';

$email='';
$password = '';


if(isset($_POST['submit'])){
	$Email=get_safe_value($con,$_POST['Email']);
    $Password=get_safe_value($con,$_POST['Password']);

	mysqli_query($con,"insert into admin_users(Email,Password) values('$Email','$Password')");
    header('location:admin.php');
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <form method="post">
                        <div class="card-body card-block">
							   <div class="form-group">
                                    <label for="Email" class=" form-control-label">Email</label>
									<input type="email" name="Email" placeholder="" class="form-control" required value="">

                                    <label for="Password" class=" form-control-label">Password</label>
									<input type="password" name="Password" placeholder="" class="form-control" required value="">

								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>