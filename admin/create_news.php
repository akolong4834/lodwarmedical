<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/news.php';

 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// pass connection to objects
$news = new news($db);

$page_title = "New Post";
include_once "layout_head.php";
 
echo "<div class='right-button-margin'>";
    echo "<a href='' class='btn btn-default pull-right'></a>";
echo "</div>";
echo "<br>";
echo "<br>";


 
?>

<!-- 'create product' html form will be here -->
<!-- PHP post code will be here -->
<?php 
// if the form was submitted - PHP OOP CRUD Tutorial
if($_POST){
 
    // set product property values
    $news->heading = $_POST['heading'];
    $news->content = $_POST['content'];
    $news->author = $_POST['author'];
    $news->smallcontent = $_POST['smallcontent'];
    $news->position = $_POST['position'];
    $news->author_info = $_POST['author_info'];
	$image=!empty($_FILES["image"]["name"])
        ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"]) : "";
       $news->image = $image;
 
    // create the product
    if($news->create()){
        echo "<div class='alert alert-success'>Product was created.</div>";
		     // try to upload the submitted file
             // uploadPhoto() method will return an error message, if any.
        echo $news->uploadPhoto();
    }
 
    // if unable to create the product, tell the user
    else{
        echo "<div class='alert alert-danger'>Unable to create post.</div>";
    }
}
?>
 
<!-- HTML form for creating a product -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Heading</td>
            <td><input type='text' name='heading' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Author</td>
            <td><input type='text' name='author' class='form-control' /></td>
        </tr>
        <tr>
            <td>Author Info</td>
            <td><input type='text' name='author_info' class='form-control' /></td>
        </tr>
        <tr>
            <td>Position</td>
            <td><input type='text' name='position' class='form-control' /></td>
        </tr>		
         <tr>
            <td>Small content</td>
            <td><textarea name='smallcontent' class='form-control'></textarea></td>
        </tr>
 
        <tr>
            <td>content</td>
            <td><textarea name='content' class='form-control'></textarea></td>
        </tr>
 

		<tr>
    <td>Image</td>
    <td><input type="file" name="image" /></td>
</tr>
 
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </td>
        </tr>
 
    </table>
</form>
<?php
 
// footer
include_once "layout_foot.php";
?>