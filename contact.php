<?php
	//IMPORTANT - SET EMAIL INFO HERE
    define('DESTINATION_EMAIL' , 'Farhaana_Beato@aol.com');
    define('MESSAGE_SUBJECT' , 'GWD 471 CMS');
    define('REPLY_TO' , 'Farhaana_Beato@aol.com');
    define('FROM_ADDRESS' , 'Farhaana_Beato@aol.com');
    define('REDIRECT_URL' , 'http://farhaanabeato.com/courses/gwd_471/gwd_471_cms/index.php');
    
    require_once('validation.php');
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
    
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="php-form">
    <label for="name"></label><?php echo @$name_error; ?>
    <input type="text" name="name" class="form-input" placeholder="Name (required)" required />
        
    <label for="email"></label><?php echo @$email_error; ?>
    <input type="email" name="email" class="form-input" placeholder="Email (required)" required />
        
    <label for="subject"></label>
    <input type="text" name="subject" class="form-input" placeholder="Subject (optional)" />
        
    <label for="message"></label><?php echo @$message_error; ?>
    <textarea name="message" class="form-input"  placeholder="Message (required)" required></textarea>
        
        
    <input class="form-btn" type="submit" value="Send Message" />
  </form>
</div>
<!-- END MAIN CONTENT -->
    
<?php require_once('includes/footer.php');?>

</div>
<!-- END WRAPPER -->