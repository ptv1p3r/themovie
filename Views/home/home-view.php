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

<br>

<!-- Top Rated -->
<div>
    <table border="1" cellpadding="2" cellspacing="2" style="margin:0px auto; width: 500px">
        <tr>
            <th colspan="4" class="text-center">TOP RATED</th>
        </tr>
        <tr>
            <?php foreach ($moviesTopRated as $movie) { ?>
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

<!-- Top Downloaded -->
<div>
    <table border="1" cellpadding="2" cellspacing="2" style="margin:0px auto; width: 500px">
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
<div>
    <table border="1" cellpadding="2" cellspacing="2" style="margin:0px auto; width: 500px">
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