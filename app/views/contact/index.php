<html>
    <head>
    
    </head>
    <body>
        <h1>Lista de alunos</h1>
        <ul>
        <?php
          
            foreach($data['alunos'] as $aluno){
                echo "<li>".$aluno->nome." tem ".$aluno->idade." anos;</li>";
            }
        ?>
       <ul>
    </body>
</html>