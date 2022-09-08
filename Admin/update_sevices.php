<?php
require('top.inc.php');

$services='';
$msg='';

$head = '';
$par = '';
$img='';

if(isset($_GET['Id']) && $_GET['Id']!=''){
	$id=get_safe_value($con,$_GET['Id']);
	$res=mysqli_query($con,"select * from services where services_id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
        $head=$row['services_head'];
        $par=$row['services_par'];
        $img=$row['services_img'];
	}else{
		header('location:services.php');
		die();
	}
}

if(isset($_POST['submit'])){
        $head=get_safe_value($con,$_POST['services_head']);
        $par=get_safe_value($con,$_POST['services_par']);
        $img=get_safe_value($con,$_POST['services_img']);

        mysqli_query($con,"update services set services_head='$head',services_par='$par',services_img='$img' where services_id ='$id'");
        header('location:services.php');
        die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update</strong><small> Service Info</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="services_head" class=" form-control-label">head</label>
									<input type="text" name="services_head" placeholder="" class="form-control" required value="<?php echo $head?>">

                                    <label for="services_par" class=" form-control-label">Description</label>
									<textarea name="services_par" placeholder="" class="form-control" required><?php echo $par?></textarea>

                                    <label for="services_img" class=" form-control-label">image</label>
									<input type="file" name="services_img"  placeholder="" class="form-control"required value= <?php echo  $img?>>

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