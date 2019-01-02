<?php
/**
 * Created by PhpStorm.
 * User: V1p3r
 * Date: 21/11/2018
 * Time: 22:33
 */

// Evita acesso directo
if ( ! defined('ABSPATH')) exit;

// Inicia a sessão
session_start();

// Verifica debug
if ( ! defined('DEBUG') || DEBUG === false ) {

    // Esconde todos os erros
    error_reporting(0);
    ini_set("display_errors", 0);

} else {

    // Mostra todos os erros
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

}