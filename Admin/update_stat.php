<?php
require('top.inc.php');

$stat='';
$msg='';
$clients = '';
$down = '';
$tube='';
$code = '';

if(isset($_GET['Id']) && $_GET['Id']!=''){
	$id=get_safe_value($con,$_GET['Id']);
	$res=mysqli_query($con,"select * from stats where stat_id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
        $clients=$row['stat_client'];
        $code=$row['stat_code'];
        $down=$row['stat_down'];
        $tube=$row['stat_tube'];
	}else{
		header('location:stat.php');
		die();
	}
}

if(isset($_POST['submit'])){
        $clients=get_safe_value($con,$_POST['stat_client']);
        $code=get_safe_value($con,$_POST['stat_code']);
        $down=get_safe_value($con,$_POST['stat_down']);
        $tube=get_safe_value($con,$_POST['stat_tube']);

        mysqli_query($con,"update stats set stat_client='$clients',stat_code='$code',stat_down='$down',stat_tube='$tube' where stat_id ='$id'");
        header('location:stat.php');
        die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update</strong><small> Data</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="stat_client" class=" form-control-label">cl</label>
									<input type="text" name="stat_client" placeholder="" class="form-control" required value="<?php echo $clients?>">

                                    <label for="stat_code" class=" form-control-label">cd</label>
									<input type="text" name="stat_code" placeholder="" class="form-control" required value="<?php echo $code?>">

                                    <label for="stat_down" class=" form-control-label">do</label>
									<input type="text" name="stat_down" placeholder="" class="form-control" required value="<?php echo $down?>">

                                    <label for="stat_tube" class=" form-control-label">yt</label>
									<input type="text" name="stat_tube" placeholder="" class="form-control" required value="<?php echo $tube?>">
                                    
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