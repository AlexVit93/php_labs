<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Лабораторная пабота № 1</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <script src="./scripts/bootstrap.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;

    }

    body {
      box-sizing: border-box;
      
    }
.container {
	border: 2px solid rgba(226, 226, 226, 0.5);
}


    .header {
      height: 20vh;
      background-image: url("images/gstu.png");
      background-position: center;
      background-size: cover;
    }

    .nav {
      height: 70vh;
      padding: 0;
    }

    .nav-item {
      height: 5vh;
      margin: 1em;


    }

    .main {
      height: 100%;
      background-image: url("./images/site.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: content;

    }

    .footer {
      height: 10vh;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row header">

    </div>
    <div class="row">
      <div class="col-4 p-0">
        <ul class="nav list-group">
          <li class="list-group-item">
            <a class="nav-link" href="index.php?lab=1">Лабораторная работа № 1</a>
          </li>
          <li class="list-group-item">
            <a class="nav-link" href="index.php?lab=2">Лабораторная работа № 2</a>
          </li>
          <li class="list-group-item">
            <a class="nav-link" href="index.php?lab=3">Лабораторная работа № 3</a>
          </li>
          <li class="list-group-item">
            <a class="nav-link" href="index.php?lab=4">Лабораторная работа № 4</a>
          </li>

      </div>
      <div class="col-8">
        <?php
if (isset($_GET["lab"])) {
  $lab = $_GET["lab"];
  if ($lab == 1)
    include_once("pages/lab1.php");
  if ($lab == 2)
    include_once("pages/lab2.php");
  if ($lab == 3)
    include_once("pages/test.php");
  if ($lab == 4)
    include_once("pages/lab4.php");
}
else {
  include_once("pages/lab1.php");
}

?>
      </div>
    </div>
    <div class="footer row justify-content-center text-white bg-primary align-items-center">
      &copy;someon 2022
    </div>

</body>

</html>