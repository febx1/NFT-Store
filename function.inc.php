<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}


function get_product2($con,$limit='',$cat_id='',){
    $sql="select * from nft where nft.status=1 ";
    if($cat_id!=''){
        $sql.=" and category =$cat_id";

    }
    
    $sql.=" order by nid desc";
    if($limit!==''){
        $sql.=" limit $limit";

    }
    $res=mysqli_query($con,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }  
    return $data;
}

function get_product($con,$limit='',$cat_id='',$nft_id=''){
    $sql="select nft.*,categories.category from nft,categories where nft.status=1 ";
    if($cat_id!=''){
        $sql.=" and nft.category =$cat_id";

    }
    if($nft_id!=''){
        $sql.=" and nft.nid=$nft_id ";
    }
    $sql.=" and nft.category =categories.cat_id ";
    $sql.=" order by nft.nid desc";
    if($limit!==''){
        $sql.=" limit $limit";

    }
    $res=mysqli_query($con,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }  
    return $data;
}

?>