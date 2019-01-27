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
        $categories = null;
        $years = null;
        $ratings = null;

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        $modelo = $this->load_model('search-model');

        $movieCategories = $modelo->getCategories();
        $movieYears = $modelo->getYears();
        $movies = $modelo->getMovies();
        $movieCount = count($movies);


        foreach ($movieCategories as $category) {
            $categories  .= '<span class="dropdown-item" >'.$category['name'].'</span>';
        }

        foreach ($movieYears as $year) {
            $years  .= '<span class="dropdown-item" >'.$year['year'].'</span>';
        }

        for ($i = 0 ; $i < 9 ; $i++) {
            $ratings  .= '<span class="dropdown-item" >'.($i+1).'+</span>';
        }

        if ($parametros[0] == null || $parametros[0] == "") {
            for ($i = 0 ; $i < 8 ; $i++){
                $moviesTable[$i] = $movies[$i];
            }
        } else {
            for ($i = 0 ; $i < 8 *  $parametros[0] ; $i++){
                $moviesTable[$i] = $movies[$i];
            }
        }



        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/search/search-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function getall(){
        $categories = null;
        $years = null;
        $ratings = null;

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
        $modelo = $this->load_model('search-model');

        $movieCategories = $modelo->getCategories();
        $movieYears = $modelo->getYears();
        $movies = $modelo->getMovies();
        $movieCount = count($movies);

        $movies = $modelo->getMovies($modelo->parametros[0]);

        foreach ($movieCategories as $category) {
            $categories  .= '<span class="dropdown-item" >'.$category['name'].'</span>';
        }

        foreach ($movieYears as $year) {
            $years  .= '<span class="dropdown-item" >'.$year['year'].'</span>';
        }

        for ($i = 0 ; $i < 9 ; $i++) {
            $ratings  .= '<span class="dropdown-item" >'.($i+1).'+</span>';
        }
        //print_r($movies);
        require ABSPATH . '/views/search/search-view.php';

        echo json_encode($movies);
        //print_r($movies);

    }
}