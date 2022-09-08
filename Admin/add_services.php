<?php
require('top.inc.php');
$services='';

$head='';
$par = '';
$img = '';


if(isset($_POST['submit'])){
	$services_head=get_safe_value($con,$_POST['services_head']);
    $services_par=get_safe_value($con,$_POST['services_par']);
    $services_img=get_safe_value($con,$_POST['services_img']);

	mysqli_query($con,"insert into services(services_head,services_par,services_img) values('$services_head','$services_par','$services_img')");
    header('location:services.php');

}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Stats</strong><small> Form</small></div>
                        <form method="post">
                        <div class="card-body card-block">
							   <div class="form-group">
                               <label for="services_head" class=" form-control-label">head</label>
									<input type="text" name="services_head" placeholder="" class="form-control" required value="">

                                    <label for="services_par" class=" form-control-label">Description</label>
									<textarea name="services_par" placeholder="" class="form-control" required></textarea>

                                    <label for="services_img" class=" form-control-label">image</label>
									<input type="file" name="services_img" class="form-control">

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