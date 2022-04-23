
<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update categories set status='$status' where cat_id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from categories where cat_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


$sql="select * from categories order by cat_id desc";
$res =mysqli_query($con,$sql);

?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Categories </h4>
                           <h4 class="box-link"><a href="manage_categories.php">Add Category</a> </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">No.</th>
                                       <th class="avatar">Category Id</th>
                                       <th >Category</th>
                                       <th >Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i=1;
                                   
                                    ?>
                                    <?php while($row=mysqli_fetch_assoc($res)){?>
                                       <tr>
                                          <td class="serial"><?php echo $i ?></td>
                                          <td class="serial"><?php echo $row['cat_id'] ?></td>
                                          <td class="serial"><?php echo $row['category']?></td>
                                         
                                          <td>
                                          <?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['cat_id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['cat_id']."'>Deactive</a></span>&nbsp;";
								}
                        echo "<span class='badge badge-edit'><a href='manage_categories.php?id=".$row['cat_id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='manage_categories?type=delete&id=".$row['cat_id']."'>Delete</a></span>&nbsp;";

								
								?>
                                          </td>
                                       </tr>
                                    <?php  $i++; } ?>
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