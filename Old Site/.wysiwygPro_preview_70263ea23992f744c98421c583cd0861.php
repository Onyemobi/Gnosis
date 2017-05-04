<?php
if ($_GET['randomId'] != "N_c4GExY0mXbYH9sJ214KgY4wyg6ppv41uSRv2Qg_1lZ5RKrTLV4YTa6q_xilsND") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
