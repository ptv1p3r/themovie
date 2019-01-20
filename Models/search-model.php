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
}
?>