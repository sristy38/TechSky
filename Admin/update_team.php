<?php
require('top.inc.php');

$team='';
$msg='';

$name = '';
$skill = '';
$img='';

if(isset($_GET['Id']) && $_GET['Id']!=''){
	$id=get_safe_value($con,$_GET['Id']);
	$res=mysqli_query($con,"select * from we where we_id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);

        $name=$row['we_name'];
        $skill=$row['we_skill'];
        $img=$row['we_img'];

	}else{
		header('location:team.php');
		die();
	}
}

if(isset($_POST['submit'])){
        $name=get_safe_value($con,$_POST['we_name']);
        $skill=get_safe_value($con,$_POST['we_skill']);
        $img=get_safe_value($con,$_POST['we_img']);

        mysqli_query($con,"update we set we_name ='$name',we_skill='$skill',we_img='$img' where we_id ='$id'");
        header('location:team.php');
        die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Update</strong><small>Team members information</small></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="we_name" class=" form-control-label">Member Name</label>
									<input type="text" name="we_name" placeholder="" class="form-control" required value="<?php echo $name?>">

                                    <label for="we_skill" class=" form-control-label">Member Skill</label>
									<input type="text" name="we_skill" placeholder="" class="form-control" required value="<?php echo $skill?>">

                                    <label for="we_img" class=" form-control-label">Image</label>
									<input type="file" name="we_img"  placeholder="" class="form-control"required value= <?php echo  $img?>>

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