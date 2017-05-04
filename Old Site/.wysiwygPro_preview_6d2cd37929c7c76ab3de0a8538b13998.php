<?php
if ($_GET['randomId'] != "xA8eVK41nKVytbLi3odRMn2nWnvmcJr0Ccj0mGz8fV8LJfEhMW8A6xjfObCBKN7e") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
