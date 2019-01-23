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
class DetailController extends MainController
{
    /**
     * Carrega a página "/views/detail/detail-view.php"
     */
    public function view() {
        // Título da página
        $this->title = 'Detail';
        $categories = null;

        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        $modelo = $this->load_model('detail-model');

        $movieData = $modelo->getMovieById($modelo->parametros[0]);
        $movieCategories = $modelo->getMovieCategories($modelo->parametros[0]);

        foreach ($movieCategories as $category) {
                $categories .= $category["name"].' / ';
        }
            // remove o ultimo /
        $categories = substr_replace($categories,"",strrpos($categories, "/"));


        /** Carrega os arquivos do view **/

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/detail/detail-view.php';

        require ABSPATH . '/views/_includes/footer.php';

    }

    public function voteUp() {
        // Parametros da função
        $parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
        $modelo = $this->load_model('detail-model');
        $movieVoteCount = $modelo->getVoteCount($modelo->parametros[0]);

        //print_r($parametros);

        print($movieVoteCount[0]["total"]+1);
    }

}