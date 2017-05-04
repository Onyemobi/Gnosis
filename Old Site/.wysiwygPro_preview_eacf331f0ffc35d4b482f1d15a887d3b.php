<?php
if ($_GET['randomId'] != "3fSovuXSm33YGMuXdvbJGWKeblFyvkKmpjmtotE5iIRe2BT1nFJW9KD_YgcxSnHy") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
