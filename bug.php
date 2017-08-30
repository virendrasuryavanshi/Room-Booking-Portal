<?php
    $path=$_SERVER['DOCUMENT_ROOT']; 
    $pageTitle = "Report A Bug";
    session_start();
    include $path.'/inc/csrf.class.php';
    $csrf = new csrf();
    $token_id = $csrf->get_token_id();
    $token_value = $csrf->get_token($token_id);
    $form_names = $csrf->form_names(array('user', 'email','text'), false);
    include_once $path.'/common/header.php';
    include_once $path.'/common/navbar_w_login.php';?>
    <div id="main">
    <?php include_once $path.'/common/login.php';?>
    <?php include_once $path.'/common/signup.php';?>
    </div>
        <div id="form-main">
    <div id="form-div">
                <h1 style="text-align:center;font-family:Helvetica, Arial, sans-serif;color:white;">Report A Bug</h1> 
        <form class="form" id="form1" action="<?php $a="/bug_submit.php"; echo htmlspecialchars($a);?>" method="post">
        <input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
        <p class="name">
            <input name="<?= $form_names['user']; ?>" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" required/>
        </p>

        <p class="email">
            <input name="<?= $form_names['email']; ?>" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" required/>
        </p>
        <p class="text">
            <textarea name="<?= $form_names['text']; ?>" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment" required></textarea>
        </p>


        <div class="submit">
            <input type="submit" value="SEND" id="button-blue"/>
            <div class="ease"></div>
        </div>
        </form>
    </div>
       
        </div>
      
<?php include_once $path.'/common/footer.php';?>    
