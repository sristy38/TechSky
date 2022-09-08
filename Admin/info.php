<?php
require('top.inc.php');

$sqladmin ="select * from admin_users order by Id ";
$sqlusers ="select * from users order by id ";
$sqlreview ="select * from review order by review_id ";
$sqlactive ="select * from activeworks order by activeworks_id ";
$sqlteam ="select * from teams order by team_id ";



$resadmin=mysqli_query($con,$sqladmin);
$resuser=mysqli_query($con,$sqlusers);
$resreview=mysqli_query($con,$sqlreview);
$resactive=mysqli_query($con,$sqlactive);
$resteam=mysqli_query($con,$sqlteam);

?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th style="text-align: center;">Total Admin</th>
							   <th style="text-align: center;">Total User</th>
                               <th style="text-align: center;">Total Review</th>
                               <th style="text-align: center;">Total Active work</th>
                               <th style="text-align: center;">Total Team</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$admin=0;
                            
                            
							while($row=mysqli_fetch_assoc($resadmin)){
                                $admin++;
                             } ?>
                             <?php
                             $user = 0;
                            while($row=mysqli_fetch_assoc($resuser)){
                                $user++;
                             } ?>
                              <?php
                              $review = 0; 
                            while($row=mysqli_fetch_assoc($resreview)){
                                $review++;
                             } ?>
                              <?php
                              $active = 0; 
                            while($row=mysqli_fetch_assoc($resactive)){
                                $active++;
                             } ?>
                              <?php
                              $team = 0; 
                            while($row=mysqli_fetch_assoc($resreview)){
                                $team++;
                             } ?>
                             
                            <tr>
							   <td style="text-align: center;"><?php echo $admin?></td>
							   <td style="text-align: center;"><?php echo $user?></td>
                               <td style="text-align: center;"><?php echo $review?></td>
                               <td style="text-align: center;"><?php echo $active?></td>
                               <td style="text-align: center;"><?php echo $team?></td>
							</tr>
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