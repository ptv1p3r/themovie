<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:10
 */
?>
<?php if ( ! defined('ABSPATH')) exit; ?>

<?php
    $moviesTopRated = $modelo->getTopRatedList(4);
    $moviesTopDownloaded = $modelo->getTopDownloaded(4);
    $moviesLastAdded = $modelo->getLastAdded(4);
?>
<div class="container-fluid">
    <div class="text-light">
        <h1>Download RealMovie: HD smallest size</h1>
    </div>
</div>
<!-- Top Rated -->
<div class="container-fluid">
    <p class="text-light">TOP RATED</p>
    <div class="row">
        <?php foreach ($moviesTopRated as $movie) { ?>
            <!--<td align="center">
                    <img src="<?php /*echo $movie["poster"]; */?>" height="256" width="192">
                    <p style="margin: 0" align="left"><?php /*echo $movie["title"] . "<br>" . $movie["year"]; */?></p>
                    <a href="<?php /*echo HOME_URI . '/detail/view/' . $movie["movid"];*/?>">Detail</a>
                </td>-->
            <div class="card" style="margin:10px auto;width: 200px;height: 300px">
                <img class="card-img-top" src="<?php echo $movie["poster"]; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><p class="text-white"><?php echo $movie["title"]; ?></p></h5>
                    <p class="card-text"><p class="text-muted"><?php echo $movie["year"]; ?></p></p>
                    <a href="<?php echo HOME_URI . '/detail/view/' . $movie["movid"];?>" class="btn btn-primary">Details</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<br>
<!-- Top Downloaded -->
<div class="container-fluid">
    <table border="1" cellpadding="2" cellspacing="2" style="margin:30px auto; width: 500px">
        <tr>
            <th colspan="4" class="text-center">TOP DOWNLOADED</th>
        </tr>
        <tr>
            <?php foreach ($moviesTopDownloaded as $movie) { ?>
                <td align="center">
                    <img src="<?php echo $movie["poster"]; ?>" height="256" width="192">
                    <p style="margin: 0" align="left"><?php echo $movie["title"] . "<br>" . $movie["year"]; ?></p>
                    <a href="<?php echo HOME_URI . '/detail/view/' . $movie["movid"];?>">Detail</a>
                </td>
            <?php } ?>
        </tr>
    </table>
</div>

<br>

<!-- Last Added -->
<div class="container-fluid">
    <table border="1" cellpadding="2" cellspacing="2" style="margin:30px auto; width: 500px">
        <tr>
            <th colspan="4" class="text-center">LAST ADDED</th>
        </tr>
        <tr>
            <?php foreach ($moviesLastAdded as $movie) { ?>
                <td align="center">
                    <img src="<?php echo $movie["poster"]; ?>" height="256" width="192">
                    <p style="margin: 0" align="left"><?php echo $movie["title"] . "<br>" . $movie["year"]; ?></p>
                    <a href="<?php echo HOME_URI . '/detail/view/' . $movie["movid"];?>">Detail</a>
                </td>
            <?php } ?>
        </tr>
    </table>
</div>

<br>