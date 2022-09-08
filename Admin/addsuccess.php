<?php
require('top.inc.php');
$skills='';

$head='';
$par = '';
$img = '';


if(isset($_POST['submit'])){
	$success_head=get_safe_value($con,$_POST['success_head']);
    $success_par=get_safe_value($con,$_POST['success_par']);
    $success_img=get_safe_value($con,$_POST['success_img']);

	mysqli_query($con,"insert into success(success_head,success_par,success_img) values('$success_head','$success_par','$success_img')");
    header('location:successfullprojects.php');

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
                               <label for="success_head" class=" form-control-label">Project Name</label>
									<input type="text" name="success_head" placeholder="" class="form-control" required value="">

                                    <label for="success_par" class=" form-control-label">Project Type</label>
									<textarea name="success_par" placeholder="" class="form-control" required></textarea>

                                    <label for="success_img" class=" form-control-label">Project Image</label>
									<input type="file" name="success_img" class="form-control">

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