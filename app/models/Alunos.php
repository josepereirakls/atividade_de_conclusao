<?php

class Alunos {

    
    public function getAlunosFunction() {
        return Database::query("SELECT * FROM alunos");
    }
    public function getAlunosForName($nome){
        return Database::query("SELECT * FROM alunos where nome = ?", [$nome]);
    }
    public function getAlunoForId($id){
        return Database::query("SELECT * FROM alunos where idalunos = ?", [$id]);
    }
    public function createAluno($valores){
        return Database::add($sql = "INSERT INTO `aula`.`alunos` (`nome`, `idade`) VALUES (?, ?)", $valores);
    } 
    public function alterAluno($valores){
        $sql ="UPDATE `aula`.`alunos` SET `nome` = ?, `idade` = ? WHERE (`idalunos` = ?);";
        return Database::add ($sql,$valores);
    }
    
    public function deleteAluno($valores){
        $sql ="DELETE FROM `aula`.`alunos` WHERE (`idalunos` = ?)";
        return Database::add ($sql,$valores);
    }
}

?>