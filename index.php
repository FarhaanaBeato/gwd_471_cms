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
  <img src="images/frog_1.jpg" alt="Frog 1" id="placeholder">
  <a class="button" href="images/frog_1.jpg">Frog 1</a>
  <a class="button" href="images/frog_2.jpg">Frog 2</a>
  <br><br>
  <p><?php echo $blurb; ?></p>
</div>
<!-- END MAIN CONTENT -->  
    
<?php require_once('includes/side-bar.php');?>
<?php require_once('includes/footer.php');?>