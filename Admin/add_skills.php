<?php
require('top.inc.php');
$skills='';

$head='';
$par = '';
$img = '';


if(isset($_POST['submit'])){
	$skills_head=get_safe_value($con,$_POST['skills_head']);
    $skills_par=get_safe_value($con,$_POST['skills_par']);
    $skills_img=get_safe_value($con,$_POST['skills_img']);

	mysqli_query($con,"insert into skills(skills_head,skills_par,skills_img) values('$skills_head','$skills_par','$skills_img')");
    header('location:topskills.php');

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
                               <label for="skills_head" class=" form-control-label">Skill Name</label>
									<input type="text" name="skills_head" placeholder="" class="form-control" required value="">

                                    <label for="skills_par" class=" form-control-label">Description</label>
									<textarea name="skills_par" placeholder="" class="form-control" required></textarea>

                                    <label for="skills_img" class=" form-control-label">Skill Logo</label>
									<input type="file" name="skills_img" class="form-control">

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