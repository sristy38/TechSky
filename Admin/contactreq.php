<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){

    $type=get_safe_value($con,$_GET['type']);

	if($type=='delete'){
		$id=get_safe_value($con,$_GET['Id']);
		$delete_sql="delete from contactreq where contact_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


$sql="select * from contactreq order by contact_id desc";

$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
             <div class="card-body">
			 		<h4 class="box-title mb-3">Contact Requests </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th style="text-align: center;">First Name</th>
							   <th style="text-align: center;">Last Name</th>
							   <th style="text-align: center;">Email</th>
                               <th style="text-align: center;">Message</th>
							   <th></th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td style="text-align: center;"><?php echo $row['contact_fname']?></td>
							   <td style="text-align: center;"><?php echo $row['contact_lname']?></td>
                               <td style="text-align: center;"><?php echo $row['contact_email']?></td>
							   <td style="text-align: center;"><?php echo $row['contact_msg']?></td>
                               <td>
								<?php
                                echo "<span class='badge badge-edit'><a href='update_cont.php?Id=".$row['contact_id']."'>Reply</a></span>";
								?>
							   </td>
							   <td>
							   <?php
                                
								echo "<span class='badge badge-delete'><a href='?type=delete&Id=".$row['contact_id']."'>Decline</a></span>";
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>