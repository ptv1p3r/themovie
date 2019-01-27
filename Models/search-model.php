<?php
/**
 * Created by PhpStorm.
 * User: lmore
 * Date: 20/01/2019
 * Time: 18:49
 */
class SearchModel extends MainModel
{

    /**
     * O objeto da nossa conexão PDO
     * @access public
     */
    public $db;

    public function __construct($db = false, $controller = null) {

        $this->db = $db; // Configura o DB (PDO)

        $this->controller = $controller; // Configura o controlador

        $this->parametros = $this->controller->parametros; // Configura os parâmetros
    }

    /**
     * Metodo que retorna todas as categorias Existentes
     * @return array
     */
    public function getCategories(){
        $query = null;


        $query = $this->db->query('SELECT `name` FROM `categories` ');


        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    /**
     * Metodo que retorna todos os anos em que os filmes foram lancados
     * @return array
     */
    public function getYears(){
        $query = null;


        $query = $this->db->query('SELECT DISTINCT(year) as year FROM `movies` ORDER BY year ASC');


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
    public function getMovies($strSearchData = null){
        $query = null;

        if ($strSearchData == null){
            $query = $this->db->query('SELECT * FROM `movies`');
        } else {
            $query = $this->db->query('SELECT * FROM `movies` WHERE title LIKE \'%'.$strSearchData.'%\' ');
        }

        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }

    /**
     * Metodo que retorna 10 dos filmes existentes na BD
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
}
?>