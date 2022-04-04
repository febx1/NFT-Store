<?php

$uid=$_SESSION['USER_LOGIN'];
$subq=mysqli_query($con,"select * from subscription where uid='$uid'");
$subcheck=mysqli_num_rows($subq);
    if($subcheck>0){
    $_SESSION['SUBSCRIPTION']='true';
    


    }else{
        ?>
        <script>
    window.location.href='subscription.php';
    </script>
        <?php

    }

?>

