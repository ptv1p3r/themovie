<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:10
 */

class DetailModel extends MainModel{

    public $db; // PDO

    public function __construct( $db = false, $controller = null ) {

        $this->db = $db; // Configura o DB (PDO)

        $this->controller = $controller; // Configura o controlador

        $this->parametros = $this->controller->parametros; // Configura os parâmetros
    }


    /**
     * Metodo que retorna os dados do filme pelo seu id
     * @param null $intMovieId
     * @return array
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

    /**
     * Metodo que retorna todas as categorias do filme
     * @param null $intMovieId
     * @return array
     */
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

    /**
     * Metodo que retorna todas as categorias do filme
     * @param null $intMovieId
     * @return array
     */
    public function getVoteCount($intMovieId = null){
        $query = null;

        if ($intMovieId != null){
            $query = $this->db->query('SELECT (vote_ok + vote_notok) as total FROM `movies` WHERE movid = '.$intMovieId);
        }

        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

}