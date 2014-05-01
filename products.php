  <?php $page_id = "products";?>
  <?php require_once('../../config.php');?>
  <?php 
    //INTERACT WITH DATABASE
    $sql = 'SELECT * FROM products';
    //SEND COMMAND TO MYSQL
    $myData = $db->query($sql)
      OR exit('Unable to select data from table.');
    
    //CLOSE DATABASE CONNECTION
    $db->close();
  ?>
  <?php require_once('top.php');?>
  
  <!-- START WRAPPER -->
  <div id="wrapper">
  
  <?php require_once('includes/header.php');?>
  <?php require_once('includes/nav.php');?>
  
  <!-- START MAIN CONTENT -->
  <div id="main-content">
    <h2>Products</h2>
    
    <?php
      while($row = $myData->fetch_assoc())
      {
        echo $row['name'] . '<br>';
        echo $row['price'] . '<br>';
        echo $row['description'] . '<br>';
      }
    ?>
    
    <?php require_once('includes/column-1.php');?>
    <?php require_once('includes/column-2.php');?>
    <?php require_once('includes/column-3.php');?>
  </div>
  <!-- END MAIN CONTENT -->
  
  <?php require_once('includes/footer.php');?>
  
  </div>
  <!-- END WRAPPER -->