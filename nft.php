<?php
require('top.php');
require('checks/logincheck.php');
require('subcheck.php');

$condition="and nft.uid='".$_SESSION['USERID']"'";
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

   <!-- imported -->
   <!-- <link rel="stylesheet" href="custom1.css"> -->

   <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	  
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --> 

<div class="content1 .pb-001">
	<div class="orders1">
	   <div class="row1">
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
require('footer.php');
?>
