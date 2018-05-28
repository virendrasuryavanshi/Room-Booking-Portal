<?php
    $path=$_SERVER['DOCUMENT_ROOT']."/ids/Room-Booking-Portal"; 
    $pageTitle = "Book A Room";
    include_once $path."/common/base.php";
    include_once $path.'/common/navbar_w_login.php';
    include_once $path.'/common/header.php';
    include_once $path."/inc/class.users.inc.php";
    $users = new populate($db);
    if(isset($_GET['q'])){
        $q = intval($_GET['q']);
        echo $users->date($q);
    }
    if(empty($_SESSION['LoggedIn']) && empty($_SESSION['Username'])):
?>
        <p>You are not <strong>logged in.</strong></p>
<?php
        else :?>
        <style>        .dp-highlight .ui-state-default {
            background: #484;
            color: #FFF;
        }
        .ui-datepicker.ui-datepicker-multi {
            width: 100% !important;
        }
        .ui-datepicker-multi .ui-datepicker-group {
            float:none;
        }
        #datepicker {
            height: 300px;
        }
        .ui-widget {
            font-size: 100%
        }
        .classA {
            background-color: red;
        }
        .classB {
            background-color: Green;
        }</style>
<div id="main">  
<div id="txtHint">
<form action="<?php $a="booking_submit.php"; echo htmlspecialchars($a);?>" method="post">
<p>Dates:
    <label><b>To:</b>

    </label>
    <input type="text" name="date1" id="input1" size="10" required>
    <label><b>From:</b>

    </label>
    <input type="text" name="date2" id="input2" size="10" required>
</p>
        <input type="submit"></input>
</form>
</div> 
</div>
<?php 
endif;
// include_once $path.'/common/footer.php';?>