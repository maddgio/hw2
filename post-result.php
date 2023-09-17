<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Resutls</h1>
<?php  
echo getdisplay(); 
include "view-dooter.php";

function getdisplay() {
    if (isset($_POST['my-name'])) {
        return "<p> The value sent is: <p>" echo $_POST['my-name"];
} else {
return "<p> Nothing posted to the page.</p>";
<?php
} 
}
    ?>
