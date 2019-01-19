<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:10
 */
/**
 * home - Controller
 */
class HomeController extends MainController
{

    /**
     * Carrega a página "/views/home/home-view.php"
     */
    public function index() {
        // Título da página
        $this->title = 'Home';

        $modelo = $this->load_model('movie-model');
        print_r( $modelo );

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        // página não precisa de modelo
        $this->cssFile = ABSPATH . '/css/bootstrap.min.css';

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/home/home-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

}