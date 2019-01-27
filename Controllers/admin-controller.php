<?php
/**
 * Created by PhpStorm.
 * User: lmore
 * Date: 22/01/2019
 * Time: 22:19
 */

class AdminController extends MainController
{

    /**
     * Carrega a página "/views/admin/admin-view.php"
     */
    public function index() {

        // Título da página
        $this->title = 'Admin';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        //$modelo = $this->load_model('admin-model');

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-login-header.php';

        require ABSPATH . '/views/admin/admin-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function movie(){
        // Título da página
        $this->title = 'Admin - Movies';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        $modelo = $this->load_model('admin-model');

        $movies = $modelo->getMovies();
        $moviesTable = $modelo->getMoviesTable($modelo->parametros[0]);

        $categories = $modelo->getCategories();
        $movieCategories = $modelo->getMovieCategories();

        $movieById = $modelo->getMovieById($modelo->parametros[0]);


        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-header.php';

        require ABSPATH . '/views/admin/admin-movie-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function comment(){
        // Título da página
        $this->title = 'Admin - Comment';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        $modelo = $this->load_model('admin-model');

        $comments = $modelo->getComments();
        $commentsTable = $modelo->getCommentsTable($modelo->parametros[0]);

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-header.php';

        require ABSPATH . '/views/admin/admin-comment-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function category(){
        // Título da página
        $this->title = 'Admin - Category';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        //$modelo = $this->load_model('admin-login-model');

        $modelo = $this->load_model('admin-model');

        $categories = $modelo->getCategories();
        $categoriesTable = $modelo->getTableCategories($modelo->parametros[0]);


        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-header.php';

        require ABSPATH . '/views/admin/admin-category-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function settings(){
        // Título da página
        $this->title = 'Admin - Settings';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        //$modelo = $this->load_model('admin-model');

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-header.php';

        require ABSPATH . '/views/admin/admin-settings-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function movieById(){
        // Título da página

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        $modelo = $this->load_model('admin-model');

        $ReturnData = null;

        $ReturnData = $modelo->getDownloadLink($modelo->parametros[0]);

        $data = $ReturnData[0]["movid"] . "#" . $ReturnData[0]["title"] . "#" .
            $ReturnData[0]["year"];

        echo $ReturnData;
    }

    //login logout

}