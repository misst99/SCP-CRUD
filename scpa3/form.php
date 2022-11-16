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
    
<!-- headings -->
<h1 class="text-center">SCP Subject Files</h1>
<h2 class="text-center">Use the form to enter a new page record</h2>

<!-- form to display content from database -->
<form class="form-group" method="POST" action="app/connection.php">

<!-- form labels (1) -->
<label>Page Name</label>
<br>
<input type="text" class="form-control" name="pg" placeholder="Page Name" required>
<br><br>
<label>Heading</label>
<br>
<input type="text" class="form-control" name="h1" placeholder="Heading" required>
<br><br>
<label>Paragraph One</label>
<br>
<textarea class="form-control" name="p1" rows="5" required></textarea>
<br><br>
<label>Paragraph Two</label>
<br>
<textarea class="form-control" name="p2" rows="5" required></textarea>
<br><br>
<label>Image</label>
<br>
<input type="text" class="form-control" name="img1" placeholder="Image">
<br><br>
<hr width="75%">

<!-- form labels (2) -->
<!-- <label>Heading Two</label>
<br>
<input type="text" class="form-control" name="h2" placeholder="Heading Two" required>
<br><br>
<label>Paragraph Two</label>
<br>
<textarea class="form-control" name="p2" rows="5" required></textarea>
<br><br>
<label>Image Two</label>
<br>
<input type="text" class="form-control" name="img2" placeholder="Image Two">
<br><br>
<hr width="75%"> -->

<!-- form labels (3) -->
<!-- <label>Heading Three</label>
<br>
<input type="text" class="form-control" name="h3" placeholder="Heading Three" required>
<br><br>
<label>Paragraph Three</label>
<br>
<textarea class="form-control" name="p3" rows="5" required></textarea>
<br><br>
<label>Image Three</label>
<br>
<input type="text" class="form-control" name="img3" placeholder="Image Three">
<br><br>
<hr width="75%"> -->
</form>

<!-- submit button -->
<input type="submit" class="btn btn-primary" name="submit" value="Submit Data">
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>