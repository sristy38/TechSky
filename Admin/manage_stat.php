<?php
require('top.inc.php');
$stat='';
$msg='';
$clients = '';
$down = '';
$down='';
$tube='';
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

	$res=mysqli_query($con,"select * from stats where stat_client='$clients'");
    $res1=mysqli_query($con,"select * from stats where stat_code='$code'");
    $res2=mysqli_query($con,"select * from stats where stat_down='$down'");
    $res3=mysqli_query($con,"select * from stats where stat_tube='$tube'");

    $check=mysqli_num_rows($res);

	$getData=mysqli_fetch_assoc($res);
    $getData1=mysqli_fetch_assoc($res1);
    $getData2=mysqli_fetch_assoc($res2);
    $getData3=mysqli_fetch_assoc($res3);

	if($check>0){
		if(isset($_GET['Id']) && $_GET['Id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['Id']){
			
			}else{
				$msg="Categories already exist";
			}
		}else{
			$msg="Categories already exist";
		}
	}
	
	if($msg==''){
		if(isset($_GET['Id']) && $_GET['Id']!=''){
			mysqli_query($con,"update catagoreis set Catagories='$categories' where Id='$id'");
		}else{
			mysqli_query($con,"insert into catagoreis(Catagories,Status) values('$categories','1')");
		}
		header('location:categories.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $categories?>">
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