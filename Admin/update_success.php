<?php
require('top.inc.php');

$skills='';
$msg='';

$head = '';
$par = '';
$img='';

if(isset($_GET['Id']) && $_GET['Id']!=''){
	$id=get_safe_value($con,$_GET['Id']);
	$res=mysqli_query($con,"select * from success where success_id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
        
        $head=$row['success_head'];
        $par=$row['success_par'];
        $img=$row['success_img'];
	}else{
		header('location:successfullprojects.php');
		die();
	}
}

if(isset($_POST['submit'])){
        $head=get_safe_value($con,$_POST['success_head']);
        $par=get_safe_value($con,$_POST['success_par']);
        $img=get_safe_value($con,$_POST['success_img']);

        mysqli_query($con,"update success set success_head='$head',success_par='$par',success_img='$img' where success_id ='$id'");
        header('location:successfullprojects.php');
        die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update</strong><small>Successfull Projects</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="success_head" class=" form-control-label">Project Name</label>
									<input type="text" name="success_head" placeholder="" class="form-control" required value="<?php echo $head?>">

                                    <label for="success_par" class=" form-control-label">Project type</label>
									<textarea name="success_par" placeholder="" class="form-control" required><?php echo $par?></textarea>

                                    <label for="success_img" class=" form-control-label">image</label>
									<input type="file" name="success_img"  placeholder="" class="form-control"required value= <?php echo  $img?>>

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