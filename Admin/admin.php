<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){

    $type=get_safe_value($con,$_GET['type']);

	if($type=='delete'){
		$id=get_safe_value($con,$_GET['Id']);
		$delete_sql="delete from admin_users where Id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


$sql="select * from admin_users order by Id";

$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
             <div class="card-body">
				</div>
				<div class="card-body">
                <h4 class="box-link"><a href="add_admin.php" style="color: orange; text-decoration: none;background-color: rgb(140, 140, 140); padding: 5px; border-radius: 5px;">Add Admin</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th style="text-align: center;">Email</th>
							   <th style="text-align: center;">Password</th>
							   <th></th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td style="text-align: center;"><?php echo $row['Email']?></td>
							   <td style="text-align: center;"><?php echo $row['Password']?></td>
							   <td>
							   <?php
								echo "<span class='badge badge-delete'><a href='?type=delete&Id=".$row['Id']."'>Delete</a></span>";
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