<?php

namespace App\Db;
use \PDO;


class Database{
    const HOST = 'localhost';

    const NAME = 'wdev_vagas';

    const USER = 'root';

    const PASS = '';

    private $table;

    private $connection;

    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection(){
        try{
          $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
          $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
          die('ERROR: '.$e->getMessage());
        }
    }
      
    public function execute($query,$params = []){
        try{
          $statement = $this->connection->prepare($query);
          $statement->execute($params);
          return $statement;
        }catch(PDOException $e){
          die('ERROR: '.$e->getMessage());
        }
    }

    public function insert($values){
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds  = array_pad([],count($fields),'?');
    
        //MONTA A QUERY
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
    
        //EXECUTA O INSERT
        $this->execute($query,array_values($values));
    
        //RETORNA O ID INSERIDO
        return $this->connection->lastInsertId();
    }


}