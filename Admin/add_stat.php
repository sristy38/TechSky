<?php
require('top.inc.php');
$stat='';
$msg='';
$clients = '';
$down = '';
$tube='';
$code = '';

if(isset($_POST['submit'])){
	$stat_client=get_safe_value($con,$_POST['stat_client']);
    $stat_code=get_safe_value($con,$_POST['stat_code']);
    $stat_down=get_safe_value($con,$_POST['stat_down']);
    $stat_tube=get_safe_value($con,$_POST['stat_tube']);

	mysqli_query($con,"insert into stats(stat_client,stat_code,stat_down,stat_tube) values('$stat_client','$stat_code','$stat_down','$stat_tube')");
    header('location:stat.php');

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
									<label for="stat_client" class=" form-control-label">Happy cl</label>
									<input type="text" name="stat_client" placeholder="Client Number" class="form-control" required value="<?php echo $clients?>">

                                    <label for="stat_code" class=" form-control-label">Lines of Codes</label>
									<input type="text" name="stat_code" placeholder="Enter code" class="form-control" required value="<?php echo $code?>">

                                    <label for="stat_down" class=" form-control-label">downs</label>
									<input type="text" name="stat_down" placeholder="Enter downs" class="form-control" required value="<?php echo $down?>">

                                    <label for="stat_tube" class=" form-control-label">tubes</label>
									<input type="text" name="stat_tube" placeholder="Enter tube" class="form-control" required value="<?php echo $tube?>">

								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
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