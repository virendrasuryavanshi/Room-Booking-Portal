<div id="id01" class="modal1">  
  <form class="modal-content animate" action="<?php $a="/action_login.php"; echo htmlspecialchars($a);?>" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./images/avatar.png" alt="Avatar" class="avatar">
    </div>
    <div class="my">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="name" required>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input1" id="comment" required>
     <p style="text-align:center">
            <button type="submit" method="post" id="button-blue1" align="center">Login</button>
            </p>   
      <input type="checkbox" checked="checked"> Remember me</input>
    </div>
    <div class="my" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>
