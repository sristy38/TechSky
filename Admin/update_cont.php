<?php
require('top.inc.php');

$skills='';
$msg='';

$reply = '';


if(isset($_GET['Id']) && $_GET['Id']!=''){
	$id=get_safe_value($con,$_GET['Id']);
	$res=mysqli_query($con,"select * from contactreq where contact_id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
        $reply=$row['contact_msg'];
	}else{
		header('location:contactreq.php');
		die();
	}
}

if(isset($_POST['submit'])){
        $mesg=get_safe_value($con,$_POST['contact_msg']);

        header('location:contactreq.php');
        die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									
                                    <label for="contact_msg" class=" form-control-label">Reply</label>
									<textarea name="contact_msg" placeholder="" class="form-control" required></textarea>

								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Reply</span>
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