<?php

include 'FormForSearch.php';
$nameoffile = 'FileForWriteAndDisplay.txt';
$sizeoffile = filesize($nameoffile);
$fhandle = fopen('FileForWriteAndDisplay.txt', 'r');
$read = fread($fhandle, $sizeoffile);
if (isset($_POST['text']))
{
    if (isset($_POST['submit']))
    {
        if (empty($_POST['text']))
        {
            echo '<script type="text/javascript">alert("Please fill in the details.");</script>';
        }
        if (!preg_match('([a-z]|[A-Z])', $_POST['text']))
        {
            echo '<script type="text/javascript">alert("Please enter correct name.");</script>';
        } else
        {
            if (strpos($read, $_POST['text'], 0))
            {
                echo 'Record found.';

            } else
            {
                echo 'Record not found.';
            }
        }
    }
}

?>