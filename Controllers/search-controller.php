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
class SearchController
{

    /**
     * Carrega a página "/views/search/search-view.php"
     */
    public function index() {
        // Título da página
        $this->title = 'Search';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        print_r($parametros);

        // página não precisa de modelo
        $this->cssFile = ABSPATH . '/css/bootstrap.min.css';

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/search/search-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

}