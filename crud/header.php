<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style1.css">
  <!--    <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
    <div class="container- p-4 main">
        <h1 id="header">php create, read, delete, update (crud) operation</h1>
    </div>
    <div class="row">
    <div id="wrapper" class="container-fluid">
        <div class="container bg-primary p-3">
            <h1 class="head"><b>Crud</b></h1>
        </div>
       
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark container">
           <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){
                        echo "active";
                    }else{
                        echo "";
                    }?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="add.php" class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="add.php")?"active":"";?>">Add</a>
                </li>
                <li class="nav-item">
                    <a href="update.php" class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="update.php")?"active":"";?>">Update</a>
                </li>
                <li class="nav-item">
                    <a href="delete.php" class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="delete.php")?"active":"";?>">Delete</a>
                </li>
            </ul>
        </div>
        </nav>
    </div>
    </div>
   
        
