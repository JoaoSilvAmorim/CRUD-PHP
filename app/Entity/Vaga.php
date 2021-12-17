<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Vaga{
    public $id;
    public $titulo;
    public $descricao;
    public $ativo;
    public $data;


    public function cadastrar(){
        //DEFINIR A DATA
        $this->data = date('Y-m-d H:i:s');
    
        //INSERIR A VAGA NO BANCO
        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insert([
                                      'titulo'    => $this->titulo,
                                      'descricao' => $this->descricao,
                                      'ativo'     => $this->ativo,
                                      'data'      => $this->data
                                    ]);
        return true;
      }

}