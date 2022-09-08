<?php
require('top.inc.php');

$skills='';
$msg='';

$head = '';
$par = '';
$img='';

if(isset($_GET['Id']) && $_GET['Id']!=''){
	$id=get_safe_value($con,$_GET['Id']);
	$res=mysqli_query($con,"select * from skills where skills_id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
        $head=$row['skills_head'];
        $par=$row['skills_par'];
        $img=$row['skills_img'];
	}else{
		header('location:topskills.php');
		die();
	}
}

if(isset($_POST['submit'])){
        $head=get_safe_value($con,$_POST['skills_head']);
        $par=get_safe_value($con,$_POST['skills_par']);
        $img=get_safe_value($con,$_POST['skills_img']);

        mysqli_query($con,"update skills set skills_head='$head',skills_par='$par',skills_img='$img' where skills_id ='$id'");
        header('location:topskills.php');
        die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update</strong><small>Top Skill Info</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="skills_head" class=" form-control-label">Skill Name</label>
									<input type="text" name="skills_head" placeholder="" class="form-control" required value="<?php echo $head?>">

                                    <label for="skills_par" class=" form-control-label">Skill Description</label>
									<textarea name="skills_par" placeholder="" class="form-control" required><?php echo $par?></textarea>

                                    <label for="skills_img" class=" form-control-label">image</label>
									<input type="file" name="skills_img"  placeholder="" class="form-control"required value= <?php echo  $img?>>

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