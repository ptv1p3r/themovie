<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:10
 */

class DetailModel extends MainModel{

    /**
     * O objeto da nossa conexão PDO
     *
     * @access public
     */
    public $db;

    public function __construct( $db = false, $controller = null ) {

        $this->db = $db; // Configura o DB (PDO)

        $this->controller = $controller; // Configura o controlador

        $this->parametros = $this->controller->parametros; // Configura os parâmetros
    }


    /**
     * Obtém filme pelo id
     *
     */
    public function getMovieById($intMovieId = null) {
        $query = null;

        if ($intMovieId != null){
            $query = $this->db->query('SELECT * FROM `movies` WHERE movid = '.$intMovieId);
        }

        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    public function getMovieCategories($intMovieId = null){
        $query = null;

        if ($intMovieId != null){
            $query = $this->db->query('SELECT cat.name FROM `movies_categories` AS movcat
              INNER JOIN categories as cat ON movcat.catid = cat.catid 
              WHERE movcat.movid = '.$intMovieId);
        }

        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

}