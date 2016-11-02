<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

 define('HOST', 'localhost');  
 define('DBNAME', 'teste_selecao');
 define('CHARSET', 'utf8');  
 define('USER', 'root');  
 define('PASSWORD', '');

class Conexao {  

   private static $pdo;


   private function __construct() {  
     //  
   }
   public static function getInstance() {  
     if (!isset(self::$pdo)) {  
        try {  
           $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);  
           self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD, $opcoes);  
        } catch (PDOException $e) {  
           echo "Erro: " . $e->getMessage();  
        }  
     }  
     return self::$pdo;  
   }  
 }

