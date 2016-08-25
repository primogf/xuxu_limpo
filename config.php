<?php

//Configuracao do Ambiente
define('PATH_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
define('SMARTYDIR', PATH_ROOT . 'views');
define('LIBS', 'system/libs');
define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST']);
define('MEUDIR', dirname(__FILE__));
define('SERVIDOR_ALTERNATIVO','');

if($_SERVER["HTTP_HOST"]==''){
    @define('STORAGE_ROOT','storage/');    //homologacao
}else
    @define('STORAGE_ROOT','/storage/');    //local


define('DEBUG_APP',false);
define('TEMPO_LIMITE', 1800); //Tempo limite da Sessao Expirar em Segundos
define('NOME_APLICACAO', 'Chayote PHP');

define('EMAIL_SAC_FOX', '');//Responsavel pelo SAC FOX

/*
 * Configuração do Banco de Dados
 */

define('DBHOST', 'localhost');
define('DBPORT', '3306');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', '');
define('DBENCODING', 'utf8');

define('SMTPHOST', '');
define('SMTPAUTH', true);
#define('SMTPSECURE'  , 'ssl');
define('SMTPPORT', '');
define('SMTPUSER', '');
define('SMTPPASS', '');
define('SMTPFROM', '');
define('SMTPFROMNAME', '');
define('HTML', true);



?>