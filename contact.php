  <?php $page_id = "contact";?>
  <?php require_once('top.php');?>
  
  <!-- START WRAPPER -->
  <div id="wrapper">
  
  <?php require_once('includes/header.php');?>
  <?php require_once('includes/nav.php');?>
  
  <!-- START MAIN CONTENT -->
  <div id="main-content">
    <h2>Contact Us</h2>
    <h3>Contact Form</h3>
    
    <form action="" method="post">
      <fieldset>
      <legend>Contact Form</legend>
           
      <label for="user">Username</label>
      <input name="user" type="text" value="" />
             
      <label for="email">Email</label>
      <input name="email" type="text" value="" />
            
      <label for="message">Message</label>
      <textarea name="message" rows="8"></textarea>
            
      <input name="submitted" type="submit" value="Sign Up Now!" />
      </fieldset>
    </form>
  </div>
  <!-- END MAIN CONTENT -->
  
  <?php require_once('includes/footer.php');?>
  
  </div>
  <!-- END WRAPPER -->