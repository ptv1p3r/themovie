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
     * Metodo que retorna todas as categorias Existentes
     * @return array
     */
    public function getCategories(){
        $query = null;


        $query = $this->db->query('SELECT catid as id , name FROM `categories` ');


        // Verifica se a consulta está OK
        if ( ! $query ) {
            return array();
        }
        // Preenche a tabela com os dados
        return $query->fetchAll();
    }
}