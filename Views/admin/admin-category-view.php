<?php
/**
 * Created by PhpStorm.
 * User: lmore
 * Date: 26/01/2019
 * Time: 15:28
 */
?>
<?php if ( ! defined('ABSPATH')) exit; ?>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo HOME_URI . '/admin/movie';?>"> <img src="<?php echo HOME_URI . '/Images/logo_black.png';?>" alt="" width="48">The Real Movie Database</a>

    <!-- Spacing -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <a href="<?php echo HOME_URI . '/home';?>" target="_blank"><img src="../../Images/home.png" alt="" width="24"></a>
    </a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-2">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../../Images/user.png" alt="" height="48">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo HOME_URI . '/admin/settings';?>"><i class="fas fa-cog"></i> Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </li>
    </ul>
</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/movie/1';?>"><span>Gestão de Filmes</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/comment/1';?>"><span>Comentários</span></a></li>
        <li class="nav-item active"><a class="nav-link" href="<?php echo HOME_URI . '/admin/category/1';?>"><span>Categorias</span></a></li>
    </ul>

    <div id="content-wrapper">

        <!-- DataTables -->
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Movie Categories</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addCategoryModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-plus-circle"></i><span>Add New Category</span></a>
                            <a href="#deleteCategoryModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-minus-circle"></i><span>Delete Category</span></a>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Category ID</th>
                        <th>Name</th>
                        <th align="right"></th>
                    </tr>
                    </thead>

                    <?php foreach ($categoriesTable as $category) { ?>
                        <tbody>
                        <tr>
                            <td align="">
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td><?php echo $category["catid"]?></td>
                            <td><?php echo $category["name"]?></td>
                            <td>
                                <a href="#editCategoryModal" class="edit" data-toggle="modal"
                                   data-id="<?php echo $category["catid"]?>" data-name="<?php echo $category["name"]?>" ><i class="far fa-edit"></i></a>
                                <a href="#deleteCategoryModal" class="delete" data-toggle="modal"
                                   data-id="<?php echo $category["catid"]?>" data-name="<?php echo $category["name"]?>" ><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    <?php }?>


                </table>

                <div class="clearfix">
                    <div class="hint-text">Showing <b>
                            <?php if (10*$parametros[0] >= count($categories)) {
                                echo count($categories);
                            } else {
                                if ($parametros[0] == null || $parametros[0] == "1") {
                                    if (10 >= count($categories)) {
                                        echo count($categories);
                                    } else {
                                        echo 10;
                                    }
                                } else {
                                    echo 10*$parametros[0];
                                }
                            }?>
                        </b> out of <b><?php echo count($categories)?></b> entries</div>
                    <ul class="pagination">
                        <?php if ($parametros[0] == null) { ?>
                            <li class="page-item active"><a href="<?php echo HOME_URI . '/admin/category/' . 1;?>"
                                                            class="page-link">1</a></li>
                        <?php } else {
                            for ($i = 1; $i <= ceil(count($categories) / 10); $i++) { ?>
                                <li class="page-item <?php if ($parametros[0] == $i) {
                                    echo "active";
                                } ?>"><a href="<?php echo HOME_URI . '/admin/category/' . $i; ?>"
                                         class="page-link"><?php echo $i ?></a></li>
                            <?php }
                        }?>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Add Modal HTML -->
        <div id="addCategoryModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Add Category</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Modal HTML -->
        <div id="editCategoryModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Category</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Id</label>
                                <input id="id" type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input id="name" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Modal HTML -->
        <div id="deleteCategoryModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Category</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Logout Modal HTML -->
        <div id="logoutModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Logout <i class="fa fa-lock"></i></h4>
                    </div>
                    <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>
                    <div class="modal-footer"><a href="<?php echo HOME_URI . '/admin/';?>" class="btn btn-primary btn-block">Logout</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
