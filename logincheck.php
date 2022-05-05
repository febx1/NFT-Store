<?php

if(isset($_SESSION['USER_LOGIN'])){


}else{
    ?>
   <script>
    window.location.href='login.php';
    </script>

<?php
 echo"no hello";
}
?>
