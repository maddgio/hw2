<?php
$pageTitle = "Get Result";
include "view-header.php";
?>
    <h1>Get Resutls</h1>
<?php  
if (isset($_GET['my-name'])) {
?>
    <p> The value sent is: <p>
<?php
echo $_GET['my-name'];
} else {
?> 
<p> Nothing sent to the page.</p>
<?php
} 
include "view-dooter.php";
    ?>
