<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Web Application</title>
  </head>
<body class="container">
  <!-- link connection -->
  <?php include "app/connection.php"?>

<!-- menu rows -->
<div class="row">

<!-- menu columns -->
<div class="col">

<!-- un-ordered list to store database links -->
<ul class="nav navbar-light bg-light">

<!-- php for loop for database to display -->
<?php foreach($result as $page); ?>

<!-- <li class="nav-item active"> -->
  <li>
  <a href="index.php?page='<?php echo $page['pg']; ?>'" class="nav-link"><?php echo $page['pg']; ?></a>
  </li>

  <!-- nav bar -->
<li class="nav-item active">
  <a href="form.php" class="nav-link">Enter a new Page Record</a>
</li>
<!-- endforeach statement not working -->
</ul>
</div>
</div>
   
<!-- database content here -->
<div class="row">

<div class="col">
  <!-- if else statement used to display current data -->
  <?php if (isset($_GET['page'])) 
  {
    //remove single quotes from get value 
    $pg = trim($_GET['page'], "'");
    
    // run sql command to get record
    $record = $connection->query("SELECT * FROM pages WHERE pg='$pg'") or die($connection->error);

    //convert $record into array to display individual fields on scrren
    $row = $record->fetch_assoc();

    //obtain all fields and store as variables or tohold data from all tables
    $h1 = $row['h1'];
    $h2 = $row['h2'];
    $h3 = $row['h3'];

    $p1 = $row['p1'];
    $p2 = $row['p2'];
    $p3 = $row['p3'];

    $img1 = $row['img1'];
    $img2 = $row['img2'];
    $img3 = $row['img3'];

    //display content on screen 
    echo "
    <h1>{$pg}</h1>
    <h2>{$h1}</h2>
    <p><img src='{$img1}'></p>
    <p>{$p1}</p>
    <p>{$p2}</p>
    <p>{$p3}</p>
    
    ";

  } 
  else 
  {
    //display content when the page is accessed
    echo "
    <h1 class='text-center'>Welcome to this SCP database driven website</h1>
    <p class='text-center'>Use the links above to create a new record or view the pages stored in the database</p>
    <p class='text-center'><img src='images/SCP-Logo.png' height='25%' width='35%'></p>
    ";
  }
    ?>

</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>