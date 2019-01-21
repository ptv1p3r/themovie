<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 21/11/2018
 * Time: 22:55
 */
?>
<?php if ( ! defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/movie.css">
    <title><?php echo $this->title?></title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <!-- left side of navbar -->
    <div class="navbar-collapse ">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="navbar-brand" href="<?php echo HOME_URI ;?>">
                <img src="../../Images/home.png" alt="Home" width="24" height="24"> </a>
            </li>

            <li class="nav-item">
                <a class="navbar-brand" href="<?php echo HOME_URI ;?>">
                    <img src="../../Images/name.png" alt="Name" height="24"></a>
            </li>
        </ul>

        <!-- right side of navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline" action="">
                    <input class="form-control mr-sm-2" type="text" placeholder="Quick Search">
                    <a class="navbar-brand" href="<?php echo HOME_URI . '/search';?>"><img src="../../Images/search.png" alt="Search" width="24" height="24"></a>
                </form>
            </li>
        </ul>
    </div>
</nav>