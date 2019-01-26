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

        //$modelo = $this->load_model('admin-login-model');

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-login-header.php';

        require ABSPATH . '/views/admin/admin-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function login(){
        // Título da página
        $this->title = 'Admin - Login';

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        //$modelo = $this->load_model('admin-login-model');

        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/admin-login-header.php';

        require ABSPATH . '/views/admin/admin-home-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    //login logout

}