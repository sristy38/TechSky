<?php
require('top.inc.php');
$msg='';
$email='';
$phone='';
$chk = 'ok';
if(isset($_GET['Id']) && $_GET['Id']!=''){
	$id=get_safe_value($con,$_GET['Id']);
	$res=mysqli_query($con,"select * from our_info where info_id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
        $email=$row['info_email'];
        $phone=$row['info_phone'];
	}else{
		header('location:our_info.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$email=get_safe_value($con,$_POST['info_email']);
    $phone=get_safe_value($con,$_POST['info_phone']);
	$res=mysqli_query($con,"select * from our_info where info_email='$email'");
    $res1=mysqli_query($con,"select * from our_info where info_phone='$phone'");

	$check=mysqli_num_rows($res);
	$getData=mysqli_fetch_assoc($res);
    $getData1=mysqli_fetch_assoc($res1);
	
    mysqli_query($con,"update our_info set info_email='$email' where info_id='$id'");
    mysqli_query($con,"update our_info set info_phone='$phone' where info_id='$id'");
    header('location:our_info.php');
    die();

	}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Our Info</strong><small> Form</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="info_email" class=" form-control-label">Email</label>
									<input type="text" name="info_email" placeholder="Enter Email" class="form-control" required value="<?php echo $email?>">

                                    <label for="info_email" class=" form-control-label">Phone No</label>
									<input type="text" name="info_phone" placeholder="Enter Phone No" class="form-control" required value="<?php echo $phone?>">
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