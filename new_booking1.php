<?php
    $path=$_SERVER['DOCUMENT_ROOT']."/ids/Room-Booking-Portal"; 
    $pageTitle = "Book A Room";
    include_once $path."/common/base.php";
    include_once $path.'/common/navbar_w_login.php';
    include_once $path.'/common/header.php';
    include_once $path."/inc/class.users.inc.php";  
    $users = new populate($db);
    // if(isset($_GET['q'])){
    //     $q = intval($_GET['q']);
    //     echo "calling";
    //     echo $users->date($q);
    // }
    if(empty($_SESSION['LoggedIn']) && empty($_SESSION['Username'])):
?>
        <p>You are not <strong>logged in.</strong></p>
<?php
        else :?>
         <style>
        .dp-highlight .ui-state-default {
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
        <link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
<div id="main">
<div id="form-div1">
<h1 style="text-align:center;font-family:Helvetica, Arial, sans-serif;color:white;">Book A Room</h1>

<div id="rooms">
    <form action="<?php $a="#"; echo htmlspecialchars($a);?>" method="post">        

    <button type="submit" id="button-blue2" name="room" value="1">B1</button>
    <button type="submit" value="2" id="button-blue2" name="room">B2</button>
    <button type="submit" value="3" id="button-blue2" name="room">B3</button>
    <button type="submit" value="4" id="button-blue2" name="room">B4</button>
    <button type="submit" value="5" id="button-blue2" name="room">B5</button>
    <button type="submit" value="6" id="button-blue2" name="room">B6</button>
    <button type="submit" value="7" id="button-blue2" name="room">B7</button><br />
    <button type="submit" value="8" id="button-blue2" name="room">G2</button>
    <button type="submit" value="9" id="button-blue2" name="room">G3</button>
    <button type="submit" value="10" id="button-blue2" name="room">G4</button><br />
    </div>
</form>
<script src="js/functions.js"></script>
<?php if(isset($_POST['room'])){?>
<?php echo $users->date($_POST['room']);} ?>
<form action="<?php $a="booking_submit.php"; echo htmlspecialchars($a);?>" method="post">        
<input type="hidden" name="room" value="<?php echo $_POST['room'];?>">
<p>
<table>
<tr><td>
    <label><b>Check-in:</b>

    </label>
    <input type="text" name="date1" id="input1" size="15" placeholder="Check-in Date (MM/DD/YY)" required>
    </td>
    <td>
    <label><b>Check-out:</b>

    </label>
    <input type="text" name="date2" id="input2" size="15" placeholder="Check-out Date (MM/DD/YY)" required>
</td></tr></table>
</p>
<div id="datepicker"></div><br /><br />
<div class="submit">
<?php if(isset($_POST['room'])){?>
<input type="submit" id="button-blue" >
<div class="ease"></div>
</input>
<?php }?>
</div>
</form>
</div> 
</div>
<?php
endif;
include_once $path.'/common/footer.php';?>
