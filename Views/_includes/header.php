<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 21/11/2018
 * Time: 22:55
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $this->title?></title>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark justify-content-end">

    <!-- left side of navbar -->
    <div class="navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="navbar-brand" href="../../init.php"><img src="../../Images/home.png" alt="Home" width="24" height="24"></a>
            </li>

            <li class="nav-item">
                <a class="navbar-brand" href="../../init.php"><img src="../../Images/name.png" alt="Name" height="24"></a>
            </li>
        </ul>

        <!-- right side of navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline" action="">
                    <input class="form-control mr-sm-2" type="text" placeholder="Quick Search">
                    <img src="../../Images/search.png" alt="" width="24" height="24">
                </form>
            </li>
        </ul>
    </div>
</nav>