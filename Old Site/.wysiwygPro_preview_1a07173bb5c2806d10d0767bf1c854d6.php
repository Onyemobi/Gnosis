<?php
if ($_GET['randomId'] != "Xe3oMa4aQyyObWm43VnZLjSz4LrodH53EqFRzn1aoPXFCRzTEz6RiA36E2vpt9Fw") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
