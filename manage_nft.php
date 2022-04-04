<?php
require('top.php');

$nid='';
$category='';
$uid='';
$name='';
$descrip='';
$link='';
$date='';
$status='';
$slink='';
$ccid='';



$hdr="Add a new nft";
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$hdr=" Edit nft";
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from nft where nid='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$name=$row['name'];
		$descrip=$row['descrip'];
		$link=$row['link'];
		$slink=$row['slink'];
		$ccid=$row['category'];
	}else{
		header('location:nft.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$category=$_POST['category'];
	$name=get_safe_value($con,$_POST['name']);
	$descrip=get_safe_value($con,$_POST['descrip']);
	$link=get_safe_value($con,$_POST['link']);
	$slink=get_safe_value($con,$_POST['slink']);

	$res=mysqli_query($con,"select * from nft where name='$name'");
	$check=mysqli_num_rows($res);
	if($category=="0"){
		$msg="Select any category for your NFT";
	}
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['nid']){

			}else{
				$msg="NFT already exist";
			}
		}else{
			$msg="NFT already exist";
		}
	}

	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($con,"update nft set name='$name', descrip='$descrip',category='$category', link='$link',slink='$slink' where nid='$id'");
		}else{
			mysqli_query($con,"insert into nft(category,uid,name,descrip,link,status,slink) values('$category',1,'$name','$descrip','$link',1,'$slink')");
		}
		header('location:nft.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>NFT</strong><small> <?php echo $hdr ?></small></div>
                        <form method="post">
                        <div class="card-body card-block">
                           <div class="form-group"><label for="category" class=" form-control-label">NFT Category</label>
                           <select class="form-control" name="category" required>
							   <option value="0" >Select Categories</option>
							   <?php
							   $res=mysqli_query($con,"select cat_id,category from categories order by category asc");
							   while($row=mysqli_fetch_assoc($res)){
									 if($row['cat_id']==$ccid){
										 echo " <option selected value=".$row['cat_id'].">".$row['category']."</option>";
									 }else{
										echo $category;
										 echo " <option value=".$row['cat_id'].">".$row['category']."</option>";
									 }

							   } ?>
						   </select>


						   <div class="form-group">
							   <label for="categories" class=" form-control-label">NFT name</label>
                           <input type="text"  name="name" placeholder="Enter NFT name" class="form-control" required value="<?php echo $name ?>"></div>


						   <div class="form-group">
							   <label for="categories" class=" form-control-label">Description</label>
                           <textarea type="text"  name="descrip" placeholder="Enter NFT Description" class="form-control" required ><?php echo $descrip ?></textarea></div>


						   <div class="form-group">
							   <label for="categories" class=" form-control-label">Link</label>
                           <textarea type="text"  name="link" placeholder="Enter NFT link" class="form-control" required ><?php echo $link ?></textarea></div>


						   <div class="form-group">
							   <label for="categories" class=" form-control-label">S link</label>
                           <textarea type="text"  name="slink" placeholder="Enter NFT site link" class="form-control" required ><?php echo $slink ?></textarea></div>



                           <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           </button>
                           <div class="field_error"><?php echo $msg?></div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>


<?php
require('footer.php');
?>
