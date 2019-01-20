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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $this->title?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
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