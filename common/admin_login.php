<div id="id02" class="modal1">  
  <form class="modal-content animate" action="<?php $a="action_admin_login.php"; echo htmlspecialchars($a);?>" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="my">
      <h1 style="text-align: center;">Administrative Login</h1>
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      </div>

  <!--  <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> -->
    </div>
  </form>
</div>
