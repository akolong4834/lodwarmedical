<?php
// get ID of the product to be edited
$sale_id = isset($_GET['sale_id']) ? $_GET['sale_id'] : die('ERROR: missing ID.');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/sale.php';
include_once '../objects/pump.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare objects
$sale = new sale($db);
$pump = new pump($db);
 
// set ID property of product to be edited
$sale->sale_id = $sale_id;
 
// read the details of product to be edited
$sale->readOne();
 
 // set page header
$page_title = "Update Sale";
include_once "layout_head.php";
 
echo "<div class='right-button-margin'>";
    echo "<a href='view_sales.php' class='btn btn-primary pull-right'>View Sales</a>";
echo "</div>";
echo "<br>";
?>

<!-- 'update product' form will be here -->
<!-- post code will be here -->
<?php 
// if the form was submitted
if($_POST){
 
    // set product property values

    $sale->id = $_POST['id'];
    $sale->name = $_POST['name'];
    $sale->price = $_POST['price'];
	$sale->retailprice = $_POST['retailprice'];
    $sale->profit = $_POST['profit'];
	$sale->quantity = $_POST['quantity'];
	$sale->totalprofit = $_POST['totalprofit'];
	$sale->totalcash = $_POST['totalcash'];
    // update the product
    if($sale->update()){
        echo "<div class='alert alert-success alert-dismissable'>";
            echo "Sale was updated.";
        echo "</div>";
    }
 
    // if unable to update the product, tell the user
    else{
        echo "<div class='alert alert-danger alert-dismissable'>";
            echo "Unable to update sale.";
        echo "</div>";
    }
}
?>
 
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?sale_id={$sale_id}");?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Product Id</td>
            <td><input type='text' name='id' value='<?php echo $sale->id; ?>' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Product Name</td>
            <td><input type='text' name='name' value='<?php echo $sale->name; ?>' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' value='<?php echo $sale->price; ?>' class='form-control' /></td>
        </tr>

        <tr>
            <td>Retail Price</td>
            <td><input type='text' name='retailprice' value='<?php echo $sale->retailprice; ?>' class='form-control' /></td>
        </tr>
				 <tr>
            <td>Profit</td>
            <td><input type='text' name='profit' value='<?php echo $sale->profit; ?>' class='form-control' /></td>
        </tr> 
		 <tr>
            <td>Quanty</td>
            <td><input type='text' name='quantity' value='<?php echo $sale->quantity; ?>' class='form-control' /></td>
        </tr>
				 
        <tr>
            <td>Total profit</td>
            <td><input type='text' name='totalprofit' value='<?php echo $sale->totalprofit; ?>' class='form-control' /></td>
        </tr>
		
		 <tr>
            <td>Total Cash</td>
            <td><input type='text' name='totalcash' value='<?php echo $sale->totalcash; ?>' class='form-control' /></td>
        </tr>
 
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Update Sale</button>
            </td>
        </tr>
 
    </table>
</form>
<?php
 

 
// set page footer
include_once "layout_foot.php";
?>