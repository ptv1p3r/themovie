<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:10
 */
/**
 * detail - Controller
 */
class DetailController
{

    /**
     * Carrega a página "/views/detail/detail-view.php"
     */
    public function view() {
        // Título da página
        $this->title = 'Detail';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        // página não precisa de modelo
        $this->cssFile = ABSPATH . '/css/bootstrap.min.css';

        /** Carrega os arquivos do view **/

        // /views/_includes/header.php
        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/detail/detail-view.php';

        // /views/_includes/footer.php
        require ABSPATH . '/views/_includes/footer.php';

    }

}