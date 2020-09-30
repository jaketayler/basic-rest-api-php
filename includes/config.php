<?php 

  // # Dados para conexao com o banco de dados. 
  // $db_user = 'root';
  // $db_password = '';
  // // $db_name = 'phprest';

  // # Instancia da Classe PDO para conexao com o bando de dados.
  // $db = new PDO('mysql:host=localhost; dbname=phprest',$db_user,$db_password);

  // #Atibutos do Banco de dados.
  // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
  // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // define('APP_NAME', 'PHP REST API TUTORIAL ');


    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $db_name = 'phprest';

    try {
      //code...
      $conn = new PDO("mysql:host=$server_name;dbname=$db_name",$user_name,$password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully";


    } catch (PDOException $e) {
      //throw $th;
      echo "Connetion Failed". $e->getMessage();
    }