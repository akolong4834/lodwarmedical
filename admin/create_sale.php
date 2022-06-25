<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/sale.php';
include_once '../objects/category.php';
 include_once '../objects/product.php';
  include_once '../objects/pump.php';
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// pass connection to objects
$sale = new sale($db);
$product = new product($db);
$category = new Category($db);
$pump = new pump($db);
$page_title = "Record Sale";
include_once "layout_head.php";
 
echo "<div class='right-button-margin'>";
    echo "<a href='view_sales.php' class='btn btn-primary pull-right'>Back To Sales</a>";
echo "</div>";


 
?>

<!-- 'create sale' html form will be here -->
<!-- PHP post code will be here -->
<?php 
// if the form was submitted -
if($_POST){
 
    // set sale property values
    $sale->id = $_POST['id'];
    $sale->price = $_POST['price'];
    $sale->name = $_POST['name'];
	$sale->retailprice = $_POST['retailprice'];
    $sale->profit = $_POST['profit'];
    $sale->quantity = $_POST['quantity'];
	$sale->totalprofit= $_POST['totalprofit'];
	$sale->totalcash= $_POST['totalcash']; 
    // create the product
    if($sale->create()){
        echo "<div class='alert alert-success'>Successfully Saved.</div>";

    }
 
    // if unable to create the product, tell the user
    else{
        echo "<div class='alert alert-danger'>Unable to create product.</div>";
    }
}
?>
 
<!-- HTML form for creating a product -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Product Id</td>
            <td>
            <!-- categories from database will be here -->
			<?php
                // read the product categories from the database
              $stmt = $product->read();
 
                  // put them in a select drop-down
              echo "<select class='form-control' name='id'>";
              echo "<option>Select Product Name...</option>";
 
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                     extract($row);
                      echo "<option value='{$id}'>{$name}</option>";
                }
 
                     echo "</select>";                 ?>

            </td>
        </tr>
        <tr>
            <td>Product Name</td>
            <td>
            <!-- categories from database will be here -->
			<?php
                // read the product categories from the database
              $stmt = $product->read();
 
                  // put them in a select drop-down
              echo "<select class='form-control' name='name'>";
              echo "<option>Select Product Name...</option>";
 
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                     extract($row);
                      echo "<option value='{$name}'>{$name}</option>";
                }
 
                     echo "</select>";                 ?>

            </td>
        </tr>		
        <tr>
            <td>Product Price</td>
            <td>
            <!-- categories from database will be here -->
			<?php
                // read the product categories from the database
              $stmt = $product->read();
 
                  // put them in a select drop-down
              echo "<select class='form-control' name='price'>";
              echo "<option>Select Product Buying Price...</option>";
 
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                     extract($row);
                      echo "<option value='{$price}'>{$name}</option>";
                }
 
                     echo "</select>";                 ?>

            </td>
        </tr>
        <tr>
            <td>Product Retail Price</td>
            <td>
            <!-- categories from database will be here -->
			<?php
                // read the product categories from the database
              $stmt = $product->read();
 
                  // put them in a select drop-down
              echo "<select class='form-control' name='retailprice'>";
              echo "<option>Select Product Retail Price...</option>";
 
              while ($row_product = $stmt->fetch(PDO::FETCH_ASSOC)){
                     extract($row_product);
                      echo "<option value='{$retailprice}'>{$name}</option>";
                }
 
                     echo "</select>";                 ?>

            </td>
        </tr>
	    <tr>
            <td>Profit</td>
            <td><input type='text' name='profit' class='form-control' /></td>
        </tr>
		
	    <tr>
            <td>Quantity</td>
            <td><input type='text' name='quantity' class='form-control' /></td>
        </tr>
	    <tr>
            <td>Total Profit</td>
            <td><input type='text' name='totalprofit' class='form-control' /></td>
        </tr>

	    <tr>
            <td>Total Cash</td>
            <td><input type='text' name='totalcash' class='form-control' /></td>
        </tr>

 
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Record</button>
            </td>
        </tr>
 
    </table>
</form>
<?php
 
// footer
include_once "layout_foot.php";
?>