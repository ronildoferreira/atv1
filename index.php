
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Sistema Academico</title>
</head>
<body>

<?php 

  require_once('./Model/Aluno.php');
  require_once('./Model/Turma.php');
  
  $aluno1 = new Aluno();
  $aluno1->adicionarDados("Ronildo Ferreira", "12345678", 6, 6, 7, 9);

  $aluno2 = new Aluno();
  $aluno2->adicionarDados("Renan Sousa", "87654321", 9, 8, 6, 5);

  $aluno3 = new Aluno();
  $aluno3->adicionarDados("Douglas Augusto", "74839275", 7, 9, 8, 10);

  $aluno4 = new Aluno();
  $aluno4->adicionarDados("Francisco Antonio", "940374823", 9, 7, 8, 5);

  $aluno5 = new Aluno();
  $aluno5->adicionarDados("Luis Guilherme", "05937582", 9, 8, 8, 6);

  $aluno6 = new Aluno();
  $aluno6->adicionarDados("Aluno que não é para adicionar", "05948364", 7, 8, 8, 6);
  

  $arrayAlunos = [$aluno1, $aluno2, $aluno3, $aluno4, $aluno5, $aluno6];

  $turma = new Turma('Analise de Software');

  foreach($arrayAlunos as $aluno) {
    $turma->adicionarAluno($aluno); 
  }

  $turma->getNome(); 
    ?>
  <html>
  <div class="turma1">  
  <h1>Controle de notas das Turma</h1>
  </div>
  <div class="turma2">
  <h1>Notas dos alunos da turma de <?=$turma->getNome()?></h1>
  </div>
  <?php $turma->imprimirTurma(); ?>
 	
 </html>
