<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:10
 */

// Array temp para encher chouricas
$movies = array(

    array(
        "name"	=> "Movie 1",
        "img"	=> "movie1",
        "year"  => "2018"
    ),

    array(
        "name"	=> "Movie 2",
        "img"	=> "movie2",
        "year"  => "2018"
    ),

    array(
        "name"	=> "Movie 3",
        "img"	=> "movie3",
        "year"  => "2018"
    ),

    array(
        "name"	=> "Movie 4",
        "img"	=> "movie4",
        "year"  => "2018"
    )
);
?>

<br>

<!-- Top Rated -->
<div>
    <table border="1" cellpadding="2" cellspacing="2" style="margin:0px auto; width: 500px">
        <tr>
            <th colspan="4" class="text-center">TOP RATED</th>
        </tr>
        <tr>
            <?php foreach ($movies as $movie) { ?>
                <td align="center">
                    <img src="images/<?php echo $movie["img"]; ?>.png" height="256" width="192">
                    <p style="margin: 0" align="left"><?php echo $movie["name"] . "<br>" . $movie["year"]; ?></p>
                </td>
            <?php } ?>
        </tr>
    </table>
</div>

<br>

<!-- Top Downloaded -->
<div>
    <table border="1" cellpadding="2" cellspacing="2" style="margin:0px auto; width: 500px">
        <tr>
            <th colspan="4" class="text-center">TOP DOWNLOADED</th>
        </tr>
        <tr>
            <?php foreach ($movies as $movie) { ?>
                <td align="center">
                    <img src="images/<?php echo $movie["img"]; ?>.png" height="256" width="192">
                    <p style="margin: 0" align="left"><?php echo $movie["name"] . "<br>" . $movie["year"]; ?></p>
                </td>
            <?php } ?>
        </tr>
    </table>
</div>

<br>

<!-- Last Added -->
<div>
    <table border="1" cellpadding="2" cellspacing="2" style="margin:0px auto; width: 500px">
        <tr>
            <th colspan="4" class="text-center">LAST ADDED</th>
        </tr>
        <tr>
            <?php foreach ($movies as $movie) { ?>
                <td align="center">
                    <img src="images/<?php echo $movie["img"]; ?>.png" height="256" width="192">
                    <p style="margin: 0" align="left"><?php echo $movie["name"] . "<br>" . $movie["year"]; ?></p>
                </td>
            <?php } ?>
        </tr>
    </table>
</div>

<br>