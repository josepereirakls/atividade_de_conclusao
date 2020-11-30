<?php

class Contact extends Controller {

   
    // Index of the home page (localhost/home(/index))
    public function index($param1= '', $param2= '', $param3= '') {
        
        // Initialize Alunos model
        $test = $this->model('Alunos');

        // Call function from the model
        $testData = $test->getAlunosFunction();

        $this->view('contact/index', ['alunos' => $testData]);
    }
    public function teste($param1= '', $param2= '', $param3= ''){
        $test = $this->model('Alunos');
        $alunos = $test->getAlunosForName($param2);
        $this->view('contact/index', ['alunos' => $alunos]);
    }
    public function aluno($id){
        $aluno = $this->model('Alunos');
        $valor = $aluno->getAlunoForId($id);
        return $valor;
    }
    public function adicionaAluno(){
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $aluno = $this->model('Alunos');
       if($aluno->createAluno([$nome,$idade]))
       echo "cadastro executado com sucesso!!";
    }
    public function alteraAluno(){
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        $aluno = $this->model('Alunos');
       if($aluno->alterAluno([$nome,$idade,$id]))
       echo "cadastro alterado com sucesso!!";
    }

    public function  formAlter($param1= '', $param2= '', $param3= ''){
        $aluno = $this->aluno($param2);
        $this->view('contact/form2', ['aluno' => $aluno[0]]);
        
    }
    public function deleteAluno($param1= '', $param2= '', $param3= ''){
        $id = $param2;
        $aluno = $this->model('Alunos');
       if($aluno->deleteAluno([$id]))
       echo "cadastro excluido com sucesso!!";
        
    }
}

?>