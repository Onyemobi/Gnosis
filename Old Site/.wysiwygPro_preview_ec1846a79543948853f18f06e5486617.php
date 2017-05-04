<?php
if ($_GET['randomId'] != "Oh9pM7QAhjLS_XgtCXNWbIq0Zbn9Q8HxWvv25PbqYaka7d0QCBUKC7UUrIE6rS7W") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
