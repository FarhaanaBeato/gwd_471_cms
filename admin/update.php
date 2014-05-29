<?php require_once('../../../config.php');?>
<?php $title = "Update";?>
<?php $page_id = "update";?>

<?php
//CATCH USER SELECTION FROM DROPDOWN AND SANITIZE
$tmp = $_GET['p'];
if($tmp === 'home' || $tmp === 'products' || $tmp === 'contact')
  {
  $page = $tmp;
}
else
  {
  $page = 'home';
}

//GET ALL CONTENT RELATED TO THE SELECTED PAGE
$sql = "
SELECT *
FROM site_content
WHERE page_name = '$page' ";

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
  if(isset($_POST['submitted']))
    {
    $user_blurb = mysqli_real_escape_string($db, $_POST['body']);
    $user_intro = mysqli_real_escape_string($db, $_POST['intro']);
    $page = mysqli_real_escape_string($db, $_POST['tmp']);
    
    $sql1 = "
    UPDATE site_content
    SET content='$user_blurb'
    WHERE page_name='$page'
    AND section_name='blurb'
    ";
    
    $myData = $db->query($sql1);
    
    $sql2 = "
    UPDATE site_content
    SET content='$user_intro'
    WHERE page_name='$page'
    AND section_name='intro'
    ";
    
    $myData = $db->query($sql2);
    
    mysqli_close($db);
    header('Location: ../');
  }
}

?>
  
<?php require_once('../includes/top.php');?>

<!-- START MAIN CONTENT -->
<div id="main-content">
<h1>Update Page</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <fieldset>
    <legend>Update Page Info</legend>
    <input type="hidden" id="tmp" name="tmp" value="<?php echo $page; ?>" />
    <select id="page" onchange="set_page(this)">
      <option value="">Choose a Page to Edit</option>
      <option value="home" id="home">Home</option>
      <option value="products" id="products">Products</option>
      <option value="contact" id="contact">Contact</option>
    </select>
    
    <br>
    <label for="intro">Intro</label>
    <textarea name="intro" rows="10" columns="30"><?php echo $intro;?></textarea>
    
    <label for="body">Body</label>
    <textarea name="body" rows="10" columns="30"><?php echo $intro;?></textarea>
    
    <input type="submit" name="submitted" value="Update Now" />
  </fieldset>
</form>
  
</div>
<!-- END MAIN CONTENT -->

  <script>
    window.onload = function(){
      document.getElementById("<?php echo $page; ?>").selected = 'selected';
    }
    
    function set_page(obj)
    {
      window.location = './update.php?p=' + obj.value;
    }
  </script>
<?php require_once('../includes/footer.php');?>