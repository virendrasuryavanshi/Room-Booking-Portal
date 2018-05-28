<?php
    $path=$_SERVER['DOCUMENT_ROOT']."/ids/Room-Booking-Portal"; 
    include_once $path."/common/base.php";
    $pageTitle = "SignUp";
    include_once $path."/common/header.php";
    include_once $path."/common/navbar.php";
    if(!empty($_POST['uname'])):
        include_once $path."/inc/class.users.inc.php";
        $users = new RoomBookingUsers($db);
        echo $users->createAccount();
    else:

?>
<h1 style="text-align:center;"> You are Not Authorized To visit this page</h1>
<?php
    include_once $path."/common/footer.php";
    endif;
?>