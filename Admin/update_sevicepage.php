<?php
require('top.inc.php');

$services='';
$msg='';

$name = '';
$p1 = '';
$p2='';
$img='';


if(isset($_GET['Id']) && $_GET['Id']!=''){
	$id=get_safe_value($con,$_GET['Id']);
	$res=mysqli_query($con,"select * from servicepage where sp_id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);

        $name=$row['sp_name'];
        $p1=$row['sp_p1'];
        $p2=$row['sp_p2'];
        $img=$row['sp_img'];
	}else{
		header('location:servicepage.php');
		die();
	}
}

if(isset($_POST['submit'])){
        $name=get_safe_value($con,$_POST['sp_name']);
        $p1=get_safe_value($con,$_POST['sp_p1']);
        $p2=get_safe_value($con,$_POST['sp_p2']);
        $img=get_safe_value($con,$_POST['sp_img']);

        mysqli_query($con,"update servicepage set sp_name='$name',sp_p1='$p1',sp_p2='$p2',sp_img = '$img' where sp_id ='$id'");
        header('location:servicepage.php');
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
									<label for="sp_name" class=" form-control-label">Service Name</label>
									<input type="text" name="sp_name" placeholder="" class="form-control" required value="<?php echo $name?>">

                                    <label for="sp_p1" class=" form-control-label">Service Text</label>
									<input type="text" name="sp_p1" placeholder="" class="form-control" required value="<?php echo $p1?>">

                                    <label for="sp_p2" class=" form-control-label">Description</label>
									<textarea name="sp_p2" placeholder="" class="form-control" required><?php echo $p2?></textarea>

                                    <label for="sp_img" class=" form-control-label">image</label>
									<input type="file" name="sp_img"  placeholder="" class="form-control"required value= <?php echo  $img?>>

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