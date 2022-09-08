<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){

    $type=get_safe_value($con,$_GET['type']);

	if($type=='delete'){
		$id=get_safe_value($con,$_GET['Id']);
		$delete_sql="delete from we where we_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


$sql="select * from we order by we_id desc";

$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
             <div class="card-body">
			 		<h4 class="box-title mb-3">Our Team </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th style="text-align: center;">Member Name</th>
							   <th style="text-align: center;">Member Skill</th>
                               <th style="text-align: center;">Member Image</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td style="text-align: center;"><?php echo $row['we_name']?></td>
							   <td style="text-align: center;"><?php echo $row['we_skill']?></td>
							   <td style="text-align: center;"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['we_img']?>"/></td>
                               <td>
								<?php
                                echo "<span class='badge badge-edit'><a href='update_team.php?Id=".$row['we_id']."'>Update</a></span>";
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