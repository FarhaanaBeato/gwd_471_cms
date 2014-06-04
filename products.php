<?php require_once('../../config.php');?>
<?php $page_id = "products";?>
<?php $title = "Products";?>

<?php 
    //INTERACT WITH DATABASE
    $sql = 'SELECT * FROM products';
    //SEND COMMAND TO MYSQL
    $myData = $db->query($sql)
      OR exit('Unable to select data from table.');
?>

<?php

//GET ALL CONTENT RELATED TO THE SELECTED PAGE
$sql1 = "
SELECT *
FROM site_content
WHERE page_name = 'products' ";

$myData1 = $db->query($sql1);

//CREATE CONTAINER FOR EACH PIECE OF DATA
while($row = $myData1->fetch_assoc())
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
//CLOSE DATABASE CONNECTION
    $db->close();
?>

<?php require_once('includes/top.php');?>
<?php require_once('includes/header.php');?>
<?php require_once('includes/nav.php');?>
  
<!-- START MAIN CONTENT -->
<div id="main-content">
  <h1><?php echo $intro; ?></h1>
  <p><?php echo $blurb; ?></p>
  
  <?php
  echo '<div id="all-products">';
  while($row = $myData->fetch_assoc())
  {
    echo '<div class="single-product">';
    echo '<img src="images/products/mickey.jpg" alt="" />';
    echo '<h3>' . $row['name'] . '</h3>';
    echo '<p>$' . $row['price'] . '</p>';
    echo '<p>' . $row['description'] . '</p>';
    echo '</div>';
  }
  echo '</div>';
  ?>
    
</div>
<!-- END MAIN CONTENT -->
  
<?php require_once('includes/side-bar.php');?>
<?php require_once('includes/footer.php');?>