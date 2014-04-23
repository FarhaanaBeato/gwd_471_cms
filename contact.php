  <?php $page_id = "contact";?>
  <?php require_once('top.php');?>
  
  <!-- START WRAPPER -->
  <div id="wrapper">
  
  <?php require_once('includes/header.php');?>
  <?php require_once('includes/nav.php');?>
  
  <!-- START MAIN CONTENT -->
  <div id="main-content">
    <h2>Contact Us</h2>
    
    <form action="" class="php-form">
      <input type="text" name="name" class="form-input" placeholder="Name (required)" required />
      <input type="email" name="email" class="form-input" placeholder="Email (required)" required />
      <input type="text" name="subject" class="form-input" placeholder="Subject (optional)" />
      <textarea name="message" class="form-input"  placeholder="Message (required)" required></textarea>
      <input class="form-btn" type="submit" value="Send Message" />
    </form>
  </div>
  <!-- END MAIN CONTENT -->
  
  <?php require_once('includes/footer.php');?>
  
  </div>
  <!-- END WRAPPER -->