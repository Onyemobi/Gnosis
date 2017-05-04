<?php
if ($_GET['randomId'] != "IqAoabeJZpyA31qRd4dCUI0XQ2Iyy6xnX2O79BlTLuKBFLaGxgM0Ec98Jg84m0z9") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
