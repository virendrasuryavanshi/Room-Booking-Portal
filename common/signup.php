<div id="id03" class="modal1"> 
<?php
// define variables and set to empty values
$tmp="";$err="";
$unameerr = $emailerr = $passerr = $passerr1 = "";
$name = $email = $gender = $comment = $website = "";
if(isset($_POST['email'])){
?><script>document.getElementById('id03').style.display='block'</script><?php
$flag = 0 ;
$email =$_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailerr = "Invalid email format"; 
  $flag = 1;
}
$name = $_POST["uname"];
if (!preg_match("/^[a-zA-Z0-9+&@#\/%?=~_|!:,.;]*$/",$name)) {
  $unameerr = "Only letters , numbers and +&@#\/%?=~_|!:,.; characters allowed"; 
  $flag = 1;
}
$pass = $_POST["psw"];
if (!preg_match("/^[a-zA-Z0-9+&@#\/%?=~_|!:,.;]*$/",$pass)) {
  $passerr = "Only letters , numbers and +&@#\/%?=~_|!:,.; characters allowed"; 
  $flag = 1;
}
if(strlen($pass) < 8){
  $passerr = "Password should be greater than 8 characters";
  $flag = 1;
}
$pass1 = $_POST["psw1"];
if ($pass1 != $pass) {
  $passerr1 = "Passwords Don't Match"; 
  $flag = 1;
}
if($flag == 0){
   $path=$_SERVER['DOCUMENT_ROOT']."/ids/Room-Booking-Portal"; 
    include_once $path."/common/base1.php";
    include_once $path."/inc/class.users.inc.php";
        $users = new RoomBookingUsers($db);
        // echo ;
        if($users->createAccount()==TRUE){
        $tmp="SignUp Successfull!!";
      }
      else{
        $err ="Username already exists";
      }
      unset($_POST['email']);
}
}
else{
$unameerr = $emailerr = $passerr = $passerr1 = "";
$name = $email = $gender = $comment = $website = "";
}
?>
 
  <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./images/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="my">
      <h1><?php echo $err.$tmp;?></h1>
      <span class="error">All Fields are Required</span><br/>
      <label><b>Enter Email-Id</b></label>
      <input type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Enter Email-Id" name="email" id="email" required><span class="error"><br/><?php echo $emailerr;?><br/></span>
      <label><b>Enter Username</b></label>
      <input type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Enter Username" name="uname" id="name"required><span class="error"><br/><?php echo $unameerr;?><br/></span>
      <label><b>Enter Password</b></label>
      <input type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input1" placeholder="Enter Password" name="psw" id="comment"required><span class="error"><br/><?php echo $passerr;?><br/></span>
      <label><b>Re-Enter Password</b></label>
      <input type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input1" placeholder="Re-Enter Password" name="psw1" id="comment"required><span class="error"><br/><?php echo $passerr1;?><br/></span>
          <p style="text-align:center">
             <input type="submit" value="SUBMIT" id="button-blue1" align="center"/>
            </p>
    </div>
  </form>
</div>