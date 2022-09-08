<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){

    $type=get_safe_value($con,$_GET['type']);

	if($type=='delete'){
		$id=get_safe_value($con,$_GET['Id']);
		$delete_sql="delete from services where services_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


$sql="select * from services order by services_id desc";

$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
             <div class="card-body">
				   <h4 class="box-link"><a href="add_services.php" style="color: orange; text-decoration: none;background-color: rgb(140, 140, 140); padding: 5px; border-radius: 5px;">Add Services</a> </h4>
				</div>
				<div class="card-body">
				   <h4 class="box-title">Available Services </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th style="text-align: center;">Service Name</th>
							   <th style="text-align: center;">Service Description</th>
							   <th style="text-align: center;">Service Logo</th>
							   <th></th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td style="text-align: center;"><?php echo $row['services_head']?></td>
							   <td style="text-align: center;"><?php echo $row['services_par']?></td>
							   <td style="text-align: center;"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['services_img']?>"/></td>
                               <td>
								<?php
                                echo "<span class='badge badge-edit'><a href='update_sevices.php?Id=".$row['services_id']."'>Update</a></span>";
								?>
							   </td>
							   <td>
							   <?php
                                
								echo "<span class='badge badge-delete'><a href='?type=delete&Id=".$row['services_id']."'>Delete</a></span>";
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