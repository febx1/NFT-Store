<?php require('./top.php'); ?>
    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="pstyles.css">

</head>
<body>
<main id="cart-main">

    <div class="site-title text-center">
        <div><img src="passets/checked.png" alt=""></div>
        <h1 class="font-title">Payment Done Successfully...!</h1>
    </div>

</main>
<?php


if(isset($_SESSION['USER_LOGIN']))
{

  if(isset($_SESSION['SUBSCRIPTION']))
  {

  }
  else
  {
    if(isset($_SESSION['USER_ID']))
    {
    $uid=$_SESSION['USER_ID'];
    $status='1';
    $sub_on=date('Y-m-d h:i:s');
    $subq=mysqli_query($con,"insert into subscription(uid,subscription,sub_on) values('$uid','$status','$sub_on')");
    $_SESSION['SUBSCRIPTION']='true';
    }

  }
}
  else
  {
  ?>
 <script>
  window.location.href='login.php';
  </script>

<?php
}
require('footer.php');

?>
