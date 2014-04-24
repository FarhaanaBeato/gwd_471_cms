<?php

    if($_POST['submit'])
    {
      require_once('validation.php');
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $errors = array();
      
      //TEST USER INFO OR NON-VALID DATA
      $valid = verifyAlphaNum($name);
      if(!$valid)
      {
        $errors[] = 'Name must be letters, numbers, or spaces';
      }
      
      $valid = verifyEmail($email);
      if(!$valid)
      {
        $errors[] = 'Please provide valid email address i.e. name@site.com';
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
      
      print_r($errors);
    }
    else
    {
      //echo 'View Form';
    }

    //IMPORTANT - SET EMAIL INFO HERE
/*define('DESTINATION_EMAIL' , 'Farhaana_Beato@aol.com');
    define('MESSAGE_SUBJECT' , 'GWD 471 CMS');
    define('REPLY_TO' , 'Farhaana_Beato@aol.com');
    define('FROM_ADDRESS' , 'Farhaana_Beato@aol.com');
    define('REDIRECT_URL' , 'http://farhaanabeato.com/courses/gwd_471/gwd_471_cms/index.php');*/
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
      <input type="text" name="name" placeholder="Name (required)" required />
          
      <label for="email"></label><?php echo @$email_error; ?>
      <input type="email" name="email" placeholder="Email (required)" required />
          
      <label for="subject"></label>
      <input type="text" name="subject" placeholder="Subject (optional)" />
          
      <label for="message"></label><?php echo @$message_error; ?>
      <textarea name="message"  placeholder="Message (required)" required></textarea>
          
      <input type="submit" name="submit" value="Send Message" />
    </fieldset>
  </form>
  
</div>
<!-- END MAIN CONTENT -->
    
<?php require_once('includes/footer.php');?>

</div>
<!-- END WRAPPER -->