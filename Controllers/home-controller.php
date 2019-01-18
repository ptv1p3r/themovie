<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:10
 */
/**
 * home - Controller2
 */
class HomeController
{

    /**
     * Carrega a página "/views/home/home-view.php"
     */
    public function index() {
        // Título da página
        $this->title = 'Home';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        // Essa página não precisa de modelo

        /** Carrega os arquivos do view **/

        // /views/_includes/header.php
        require ABSPATH . '/views/_includes/header.php';

        // /views/_includes/menu.php
        //require ABSPATH . '/views/_includes/menu.php';

        // /views/home/home-view.php
        require ABSPATH . '/views/home/home-view.php';

        // /views/_includes/footer.php
        require ABSPATH . '/views/_includes/footer.php';

    } // index

} // class HomeController