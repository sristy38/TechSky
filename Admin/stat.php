<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){

    $type=get_safe_value($con,$_GET['type']);

	if($type=='Status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['Id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update stats set status='$status' where stat_id='$id'";
		mysqli_query($con,$update_status_sql);
	}

	if($type=='delete'){
		$id=get_safe_value($con,$_GET['Id']);
		$delete_sql="delete from stats where stat_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


$sql="select * from stats order by stat_id desc";

$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
             <div class="card-body">
				   <h4 class="box-title">Stat </h4>
				   <h4 class="box-link"><a href="add_stat.php">Add Stat</a> </h4>
				</div>
				<div class="card-body">
				   <h4 class="box-title">Stats </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th style="text-align: center;">Happy Clients</th>
							   <th style="text-align: center;">Lines of code</th>
							   <th style="text-align: center;">Total Downloads</th>
							   <th style="text-align: center;">YouTube Subscribers</th>
							   <th></th>
							   <th></th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td style="text-align: center;"><?php echo $row['stat_client']?></td>
							   <td style="text-align: center;"><?php echo $row['stat_code']?></td>
							   <td style="text-align: center;"><?php echo $row['stat_down']?></td>
                               <td style="text-align: center;"><?php echo $row['stat_tube']?></td>
							   <td>
								<?php
                                if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=	Status&operation=deactive&Id=".$row['stat_id']."'>showing</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=	Status&operation=active&Id=".$row['stat_id']."'>Hidden</a></span>&nbsp;";
								}
                                echo "<span class='badge badge-edit'><a href='update_stat.php?Id=".$row['stat_id']."'>Update</a></span>&nbsp;";
                                echo "<span class='badge badge-delete'><a href='?type=delete&stat_id=".$row['stat_id']."'>Delete</a></span>";
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