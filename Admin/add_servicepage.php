<?php
require('top.inc.php');
$services='';

$head='';
$par = '';
$img = '';


if(isset($_POST['submit'])){
	$sp_name=get_safe_value($con,$_POST['sp_name']);
    $sp_p1=get_safe_value($con,$_POST['sp_p1']);
    $sp_p2=get_safe_value($con,$_POST['sp_p2']);
    $sp_img=get_safe_value($con,$_POST['sp_img']);

	mysqli_query($con,"insert into servicepage(sp_name,sp_p1,sp_p2,sp_img) values('$sp_name','$sp_p1','$sp_p2','$sp_img')");
    header('location:servicepage.php');

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
                               <label for="sp_name" class=" form-control-label">Service Name</label>
									<input type="text" name="sp_name" placeholder="" class="form-control" required value="">

                                    <label for="sp_p1" class=" form-control-label">Muted Description</label>
									<textarea name="sp_p1" placeholder="" class="form-control" required></textarea>

                                    <label for="sp_p2" class=" form-control-label"> Description</label>
									<textarea name="sp_p2" placeholder="" class="form-control" required></textarea>

                                    <label for="sp_img" class=" form-control-label">image</label>
									<input type="file" name="sp_img" class="form-control">

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