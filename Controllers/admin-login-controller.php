<?php
/**
 * Created by PhpStorm.
 * User: lmore
 * Date: 22/01/2019
 * Time: 22:19
 */

class AdminHomeController extends MainController
{

    /**
     * Carrega a página "/views/admin_login/admin-login-view.php"
     */
    public function index() {

        // Título da página
        $this->title = 'Home';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        $modelo = $this->load_model('admin-login-model');


        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-login-header.php';

        require ABSPATH . '/views/admin_login/admin-login-view.php';

        require ABSPATH . '/views/_includes/admin-header.php';

    }

}