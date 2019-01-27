<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 19/01/2019
 * Time: 14:09
 */
?>
<form>
<!-- Search -->
<div class="container-fluid" style="margin-top:30px">
    <div class="row justify-content-center">
        <div class="form-group">
            <div class="col-auto">
                <input style="width: 485px" type="text" class="form-control" id="Search" name="Search" placeholder="Search">
            </div>
            <div class="col-auto">
                <button type="submit" id="btnSearch" class="btn btn-success" ">Search</button>
            </div>
        </div>
    </div>
</div>
</form>

<!-- Filters -->
<div class="container-fluid" style="margin-top:30px">
    <div class="row justify-content-center">
        <!-- Video Genere -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Genere</button>
                <div class="dropdown-menu">
                    <?php echo $categories;?>
                </div>
            </div>
        </div>

        <!-- Video Rating -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Rating</button>
                <div class="dropdown-menu">
                    <?php echo $ratings;?>
                </div>
            </div>
        </div>

        <!-- Video Year -->
        <div class="col-md-auto">
            <div class="dropdown">
                <button style="width: 200px" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Year</button>
                <div class="dropdown-menu">
                    <?php echo $years;?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Movies -->
<div class="container-fluid" style="margin-top:30px">
    <!-- Upper Pagination -->
    <div class="row justify-content-center">
        <ul class="pagination">
            <?php for ($i = 1; $i <= ceil($movieCount / 10); $i++) { ?>
                    <li class="page-item <?php if ($parametros[0] == $i) {
                        echo "active";
                    } else if ($parametros[0] == null && $i==1) {
                        echo "active";
                    } ?>">
                        <a href="<?php echo HOME_URI . '/search/' . $i; ?>" class="page-link"><?php echo $i ?></a></li>
                <?php }?>

        </ul>
    </div>

    <!-- Movies -->
    <div class="row justify-content-center border-0">
        <table border="1" cellpadding="5" cellspacing="5" style=" width: 500px">

            <tr>
                <?php if (count($moviesTable) <= 5) {
                    for ($i = 0; $i < count($moviesTable); $i++) { ?>
                        <td align="center">
                            <img src="<?php echo $moviesTable[$i]["poster"]; ?>" height="256" width="192">
                            <p style="margin: 0"
                               align="left"><?php echo $moviesTable[$i]["title"] . "<br>" . $moviesTable[$i]["year"]; ?>
                            </p>
                            <a href="<?php echo HOME_URI . '/detail/view/' . $moviesTable[$i]["movid"]; ?>">Detail</a>
                        </td>
                    <?php } ?>
            </tr>
               <?php } else {
                   for ($i = 0; $i < count($moviesTable); $i++) { ?>
                       <td align="center">
                           <img src="<?php echo $moviesTable[$i]["poster"]; ?>" height="256" width="192">
                           <p style="margin: 0"
                              align="left"><?php echo $moviesTable[$i]["title"] . "<br>" . $moviesTable[$i]["year"]; ?>
                           </p>
                           <a href="<?php echo HOME_URI . '/detail/view/' . $moviesTable[$i]["movid"]; ?>">Detail</a>
                       </td>

                       <?php if (($i + 1) % 5 == 0) { ?>
                           </tr>
                            <tr>
                       <?php }
                   }
                }?>



        </table>
    </div>

    <br>

    <!-- Lower Pagination -->
    <div class="row justify-content-center">
        <ul class="pagination">
            <?php for ($i = 1; $i <= ceil($movieCount / 10); $i++) { ?>
                <li class="page-item <?php if ($parametros[0] == $i) {
                    echo "active";
                } else if ($parametros[0] == null && $i==1) {
                    echo "active";
                } ?>">
                    <a href="<?php echo HOME_URI . '/search/' . $i; ?>" class="page-link"><?php echo $i ?></a></li>
            <?php }?>

        </ul>
    </div>
</div>