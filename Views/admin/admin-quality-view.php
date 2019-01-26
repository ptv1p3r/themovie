<?php
/**
 * Created by PhpStorm.
 * User: lmore
 * Date: 26/01/2019
 * Time: 15:28
 */
?>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo HOME_URI . '/admin/login';?>"> <img src="<?php echo HOME_URI . '/Images/logo_black.png';?>" alt="" width="48">The Real Movie Database</a>

    <!-- Spacing -->
    <a class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../../Images/user.png" alt="" height="48">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo HOME_URI . '/admin/settings';?>">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>
    </ul>
</nav>
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/login';?>"><span>Tabela CRUD Fimes</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/comment';?>"><span>Tabela CRUD Comment</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/category';?>"><span>Tabela CRUD Categorias</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo HOME_URI . '/admin/rating';?>"><span>Tabela CRUD Rating</span></a></li>
        <li class="nav-item active"><a class="nav-link" href="<?php echo HOME_URI . '/admin/quality';?>"><span>Tabela CRUD Qualidade</span></a></li>
    </ul>

    <div id="content-wrapper">

        <!-- DataTables -->
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Movie Quality</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-plus-circle"></i><span>Add New Movie</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-minus-circle"></i><span>Delete Movie</span></a>
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
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                        </td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
                        <td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>(171) 555-2222</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit"></i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Add Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
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
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" required>
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
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Employee</h4>
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
    </div>
</div>

