


<?php
// core.php holds pagination variables
include_once '../config/core.php';
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/news.php';

 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
$news = new news($db);

 
$page_title = "Latest News";

include_once "layout_head.php";

// query products
$stmt = $news->readAll($from_record_num, $records_per_page);
 
// specify the page where paging is used
$page_url = "view_news.php?";
 
// count total rows - used for pagination
$total_rows=$news->countAll();
 
// read_template.php controls how the product list will be rendered
include_once "read_template_news.php";
 // layout_footer.php holds our javascript and closing html tags
include_once "layout_foot.php";
?>

