<?php

//database credentials
$user = "a27026155_appuser";
$pw = "Toiohomai1234";
$db = "a27026155_app";

//database connection object (address, user, pw, db)
$connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));

//variable that stores all records from the database
$result = $connection->query("SELECT * FROM pages ORDER BY pg") or die($connection->error);// 'error()' has an error warning had to remove brackets at the end

//check to see if form has been submitted with data
if(isset($_POST['pg']))
{
    //variables from posted form values
    $pg = $_POST['pg'];

    $h1 = $_POST['h1'];
    $h2 = $_POST['h2'];
    $h3 = $_POST['h3'];

    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];

    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];

    //insert command
    $sql = "INSERT INTO pages(pg, h1, h2, h3, p1, p2, p3, img1, img2, img3
    VALUES('$pg','$h1','$h2','$h3','$p1','$p2','$p3','$img1','$img2','$img3')";
    
    //if else statement that echos success or error message
if($connection->query($sql) === TRUE)
{
    echo "
    <h1>Record added successfully</h1>
    <p><a href='../index.php'>Back to index page</p>
    ";
}
else
{
    echo "
    <h1>Error submitting data</h1>
    <p>{$connection->error}</p>
    <p><a href='../index.php'>Back to index page</p>
    ";
}
}

?>