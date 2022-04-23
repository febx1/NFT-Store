<?php
require('top.inc.php');

$condition='';
$condition1='';
if($_SESSION['ADMIN_ROLE']==1){
	$condition=" and product.added_by='".$_SESSION['ADMIN_ID']."'";
	$condition1=" and added_by='".$_SESSION['ADMIN_ID']."'";
}

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
		$update_status_sql="update nft set status='$status' $condition1 where nid='$id'";
		mysqli_query($con,$update_status_sql);
	}

	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from nft where nid='$id' $condition1";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select nft.*,categories.category from nft,categories where nft.category=categories.cat_id $condition order by nft.nid desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">NFTs </h4>
				   <h4 class="box-link"><a href="manage_nft.php">Add NFT</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th width="2%">ID</th>
							   <th width="10%">Categories</th>
							   <th width="30%">Name</th>
							   <th width="10%">Image</th>
							   <th width="10%">desc</th>
							   <th width="7%">Link</th>
							   <th width="26%">Controls</th>
							</tr>
						 </thead>
						 <tbody>
							<?php
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['nid']?></td>
							   <td><?php echo $row['category']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><img src="<?php echo $row['link']?>"/></td>
							   <td><?php echo $row['descrip']?></td>
							   <td><?php echo $row['slink']?></td>



							   </td>
							   <td>
								<?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['nid']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['nid']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_nft.php?id=".$row['nid']."'>Edit</a></span>&nbsp;";

								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['nid']."'>Delete</a></span>";

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
