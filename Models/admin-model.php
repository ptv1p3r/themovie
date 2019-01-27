<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 17/10/2018
 * Time: 20:13
 */

class AdminModel extends MainModel {

    public $db; // PDO

    public function __construct($db = false, $controller = null)
    {

        $this->db = $db; // Configura o DB (PDO)

        $this->controller = $controller; // Configura o controlador

        $this->parametros = $this->controller->parametros; // Configura os parâmetros
    }

    /**
     * Metodo que retorna todas as categorias Existentes na BD
     * @return array
     */
    public function getCategories(){
        $query = null;

        $query = $this->db->query('SELECT * FROM `categories`');

        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    /**
     * Metodo que retorna 10 categorias da BD
     * @return array
     */
    public function getTableCategories($page = null){
        $query = null;

        //if ($page != null){
        if ($page == "" || $page == "1") {
            $startNumber = 0;
        } else {
            $startNumber = ($page*10)-10;
        }
        $query = $this->db->query('SELECT * FROM `categories` limit ' . $startNumber .',10');
        //}

        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    /**
     * Metodo que retorna o filme pelo id
     * @return array
     */
    public function getMovieById($intMovieId = null){
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
     * Metodo que retorna todos os filmes existentes na BD
     * @return array
     */
    public function getMovies(){
        $query = null;

        $query = $this->db->query('SELECT * FROM `movies`');


        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    /**
     * Metodo que retorna 10 filmes existentes na BD
     * @return array
     */
    public function getMoviesTable($page = null){
        $query = null;

        if ($page == "" || $page == "1") {
            $startNumber = 0;
        } else {
            $startNumber = ($page*10)-10;
        }
        $query = $this->db->query('SELECT * FROM `movies` limit ' . $startNumber.',10');


        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    /**
     * Metodo que retorna todos os comentarios existentes na BD
     * @return array
     */
    public function getComments(){
        $query = null;

        $query = $this->db->query('SELECT * FROM `comments`');


        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    /**
     * Metodo que retorna 10 comentarios existentes na BD
     * @return array
     */
    public function getCommentsTable($page = null){
        $query = null;

        if ($page == "" || $page == "1") {
            $startNumber = 0;
        } else {
            $startNumber = ($page*10)-10;
        }
        $query = $this->db->query('SELECT * FROM `comments` limit ' . $startNumber.',10');


        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    /**
     * Metodo que retorna todos os categorias com filmes
     * @return array
     */
    public function getMovieCategories(){
        $query = null;

        $query = $this->db->query('SELECT * FROM `movies_categories`');

        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

}