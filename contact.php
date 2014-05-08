<?php

    if(@$_POST['submit'])
    {
      require_once('validation.php');
      
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $message = trim($_POST['message']);
      $errors = array();
      
      //TEST USER INFO OR NON-VALID DATA
      $valid = verifyAlphaNum($name);
      if(!$valid)
      {
        $errors['name'] = 'Name must be letters, numbers, or spaces';
      }
      
      $valid = verifyEmail($email);
      if(!$valid)
      {
        $errors['email'] = 'Please provide valid email address i.e. name@site.com';
      }
      
      $valid = verifyText($message);
      if(!$valid)
      {
        $errors[] = 'Please retype your message';
      }
      
      if(!$errors)
      {
        echo 'PREPARE AND SEND EMAIL';
      }
      
      
      $message = verifyText($message);
	
      //IF ANY ERRORS DON'T SEND EMAIL, ELSE SEND EMAIL
      if(count($errors) === 0)
      {
        //prepare for sending email
        $destination = 'Farhaana_Beato@aol.com';
        $subject = 'Comments from my website';
        $body = "$name \n $email \n $message";
        
        if(mail($destination, $subject, $body))
        {
          echo 'Your message has been sent. Below is the info you provided:';
          
          //TEST TO SEE IF DATA IS RECEIVED
          echo '<h1>Thanks for providing feedback</h1>';
          echo '<ul>';
          echo '<li>' . $_POST['name'] . '</li>';
          echo '<li>' . $_POST['email'] . '</li>';
          echo '<li>' . $_POST['message'] . '</li>';
          echo '</ul>';
        }
        else
        {
          echo 'There was an error. Your message has NOT been sent.';
        }
        
      }
      
      
    }
    else
    {
      //echo 'View Form';
    }
?>

<?php $page_id = "contact";?>
<?php require_once('top.php');?>

<!-- START WRAPPER -->
<div id="wrapper">
    
    <?php require_once('includes/header.php');?>
    <?php require_once('includes/nav.php');?>
    
<!-- START MAIN CONTENT -->
<div id="main-content">
  <h2>Contact Us</h2>
    
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="">
    <fieldset>
      <label for="name"></label><?php echo @$name_error; ?>
      <span class="error"><?php echo @$errors['name']; ?></span>
      <input type="text" name="name" placeholder="Name (required)" value="<?php echo @$_POST['name']; ?>" />
          
      <label for="email"></label><?php echo @$email_error; ?>
      <span class="error"><?php echo @$errors['email']; ?></span>
      <input type="email" name="email" placeholder="Email (required)" value="<?php echo @$_POST['email']; ?>" />
          
      <label for="subject"></label>
      <input type="text" name="subject" placeholder="Subject (optional)" />
          
      <label for="message"></label><?php echo @$message_error; ?>
      <textarea name="message"  placeholder="Message (required)" ><?php echo @$_POST['message']; ?></textarea>
          
      <input type="submit" name="submit" value="Send Message" class="form-btn" />
    </fieldset>
  </form>
  
</div>
<!-- END MAIN CONTENT -->
    
<?php require_once('includes/footer.php');?>