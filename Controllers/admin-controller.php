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

        require ABSPATH . '/views/_includes/admin-header.php';

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
        $categories = $modelo->getCategories();
        $movieCategories = $modelo->getMovieCategories();


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

        //$modelo = $this->load_model('admin-model');

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

    public function rating(){
        // Título da página
        $this->title = 'Admin - Category';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        //$modelo = $this->load_model('admin-model');

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-header.php';

        require ABSPATH . '/views/admin/admin-rating-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function quality(){
        // Título da página
        $this->title = 'Admin - Category';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        //$modelo = $this->load_model('admin-model');

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-header.php';

        require ABSPATH . '/views/admin/admin-quality-view.php';

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

    //login logout

}