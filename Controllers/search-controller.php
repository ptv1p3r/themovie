<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:10
 */
/**
 * search - Controller
 */
class SearchController extends MainController
{

    /**
     * Carrega a página "/views/search/search-view.php"
     */
    public function index() {
        // Título da página
        $this->title = 'Search';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        $modelo = $this->load_model('search-model');

        $movieCategories = $modelo->getCategories();
        $movieYears = $modelo->getYears();
        $movies = $modelo->getMovies();
        $movieCount = count($movies);

        if ($parametros[0] == null || $parametros[0] == "") {
            $moviesTable = $modelo->getMoviesTable(1);
        } else {
            $moviesTable = $modelo->getMoviesTable($modelo->$parametros[0]);
        }


        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/search/search-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function getall(){

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
        $modelo = $this->load_model('search-model');

        $movies = $modelo->getMovies($modelo->parametros[0]);
        //print_r($movies);
        //require ABSPATH . '/views/search/search-view.php';

        echo json_encode($movies);
        //print_r($movies);

    }
}