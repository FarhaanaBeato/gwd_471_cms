<?php require_once('../../../config.php');?>
<?php $page_id = "update";?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Beato Designs</title>
  <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body id="<?php echo $page_id;?>">

<!-- START WRAPPER -->
<div id="wrapper">
  
<h1>Update Page</h1>

<form action="" method="POST">
  <fieldset>
    <legend>Update Page Info</legend>
    <select id="page" onchange="set_page(this)">
      <option value="">Choose a Page to Edit</option>
      <option value="home" id="home">Home</option>
      <option value="products" id="products">Products</option>
      <option value="contact" id="contact">Contact</option>
    </select>
    
    <br>
    <label for="intro">Intro</label>
    <textarea name="intro" rows="10" columns="30"></textarea>
    
    <label for="body">Body</label>
    <textarea name="body" rows="10" columns="30"></textarea>
    
    <input type="submit" name="submitted" value="Update Now" />
  </fieldset>
</form>

<?php require_once('../includes/footer.php');?>