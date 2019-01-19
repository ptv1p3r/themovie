<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 19/01/2019
 * Time: 17:31
 */

/**
 * MainModel - Modelo geral
 */
class MainModel
{
    /**
     *
     * Os dados de formulários de envio.
     *
     * @access public
     */
    public $form_data;

    /**
     *
     * As mensagens de feedback para formulários.
     *
     * @access public
     */
    public $form_msg;

    /**
     *
     * Mensagem de confirmação para apagar dados de formulários
     *
     * @access public
     */
    public $form_confirma;

    /**
     * O objeto da nossa conexão PDO
     *
     * @access public
     */
    public $db;

    /**
     *
     * O controller que gerou esse modelo
     *
     * @access public
     */
    public $controller;

    /**
     *
     * Parâmetros da URL
     *
     * @access public
     */
    public $parametros;
}