<?php
if ($_GET['randomId'] != "xU7VX4egCpIqzWt8qNr1I6d1zOGiQFLiJNN0sN85PRdpKVmg2JjpREAukGBj9dJ2") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
