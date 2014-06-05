<?php require_once('../../config.php');?>
<?php $page_id = "home";?>
<?php $title = "Home";?>

<?php

//GET ALL CONTENT RELATED TO THE SELECTED PAGE
$sql = "
SELECT *
FROM site_content
WHERE page_name = 'home' ";

$myData = $db->query($sql);

//CREATE CONTAINER FOR EACH PIECE OF DATA
while($row = $myData->fetch_assoc())
  {
  if($row['section_name'] === 'blurb')
    {
    $blurb = $row['content'];
  }
  if($row['section_name'] === 'intro')
    {
    $intro = $row['content'];
  }
}

?>

<?php require_once('includes/top.php');?>  
<?php require_once('includes/header.php');?>
<?php require_once('includes/nav.php');?>
    
<!-- START MAIN CONTENT -->
<div id="main-content">
  <h1><?php echo $intro; ?></h1>
  <img src="images/products/mickey.jpg" alt="Mickey Charm" id="placeholder">
  <a class="button" href="images/products/mickey.jpg">Mickey Charm</a>
  <a class="button" href="images/products/minnie.jpg">Minnie Charm</a>
  <a class="button" href="images/products/panda.jpg">Panda Charm</a>
  <a class="button" href="images/products/pooh.jpg">Winnie the Pooh Charm</a>
  <a class="button" href="images/products/ginger.jpg">Gingerbread Man Charm</a>
  <a class="button" href="images/products/jasmine.jpg">Jasmine Charm</a>
  <br><br>
  <p><?php echo $blurb; ?></p>
</div>
<!-- END MAIN CONTENT -->  
    
<?php require_once('includes/side-bar.php');?>
<?php require_once('includes/footer.php');?>