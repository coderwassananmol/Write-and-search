<?php

include 'FormForWriteAndDisplay.php';      //Form containing relevant data
$handle = fopen('FileForWriteAndDisplay.txt', 'a'); //Open file in Append mode
if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender'])) //Checks if the variables are set or not
{
    if (isset($_POST['submit']))
    {
        if (empty($_POST['name']) || empty($_POST['age']))   //Checks if the variables are empty
        {
            echo '<script type="text/javascript">alert("Please fill in the details.");</script>';
        }
        if (!preg_match('([a-z]|[A-Z])', $_POST['name']))   //Name should contain only alphabet, irrespective of case.
        {
            echo '<script type="text/javascript">alert("Please enter correct name.");</script>';
        } else
        {
            fwrite($handle, $_POST['name']);  //Write to file
            fwrite($handle, $_POST['age']);   
            fwrite($handle, $_POST['gender']);
            echo '<script type="text/javascript">alert("Data successfully entered.");</script>';
            if ($_POST['check'] == 'Yes')   
            {
                header('Location: Search.php');  //Header called
            }
        }
    }
}
fclose($handle); //Closing the file

?>
