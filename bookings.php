<?php
$path=$_SERVER['DOCUMENT_ROOT']; 
$pageTitle = "My Bookings";
include_once $path."/common/base.php";
//session_start();
include_once $path.'/common/header.php';
include_once $path.'/common/navbar_w_login.php';
include_once $path."/inc/class.users.inc.php";
$users = new populate($db);
    if(empty($_SESSION['LoggedIn']) && empty($_SESSION['Username'])):
?>
        <p>You are not <strong>logged in.</strong></p>

	<?php else: ?>
	<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #30aed6;
    color: white;
}
</style>
<br /><br />
<div id="main">
<table>
	<tr>
		<th>Serial No. </th>
		<th>Start Date</th>
		<th>End Date</th>
		<th>Room Name</th>
	</tr>
<?php echo $users->bookings(); ?>
</table>
</div>   
<?php
endif;
include_once $path.'/common/footer.php';?>

