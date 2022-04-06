<?php require('../top.php'); ?>
    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

</head>
<body>
<main id="cart-main">

    <div class="site-title text-center">
        <div><img src="./assets/checked.png" alt=""></div>
        <h1 class="font-title">Payment Done Successfully...!</h1>
    </div>

</main>
<?php 
if(isset($_SESSION['USER_ID'])){
$uid=$_SESSION['USER_ID'];
$sub_on=date('Y-m-d h:i:s');
$subq=mysqli_query($con,"insert into subscription(uid,subscription,sub_on) values('$uid','1','$sub_on')");
$subcheck=mysqli_num_rows($subq);
    
}
require('../footer.php');
?>