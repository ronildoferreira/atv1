
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
  $aluno1->adicionarDados("<strong>Ronildo Ferreira </strong>", "12345678", 6, 6, 7, 9);

  $aluno2 = new Aluno();
  $aluno2->adicionarDados("<strong>Renan Sousa</strong>", "87654321", 9, 8, 6, 5);

  $aluno3 = new Aluno();
  $aluno3->adicionarDados("<strong>Douglas Augusto</strong>", "74839275", 7, 9, 8, 10);

  $aluno4 = new Aluno();
  $aluno4->adicionarDados("<strong>Francisco Antonio</strong>", "940374823", 9, 7, 8, 5);

  $aluno5 = new Aluno();
  $aluno5->adicionarDados("<strong>Luis Guilherme</strong>", "05937582", 9, 8, 8, 6);

  $aluno6 = new Aluno();
  $aluno6->adicionarDados("<strong>Daniel Gonçalves</strong>", "09483756", 6, 9, 10, 6);
  
  $aluno7 = new Aluno();
  $aluno7->adicionarDados("<strong>Maria Luiza</strong>", "94783928", 7, 8, 5, 3);
  

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
 	
<footer class="footer">
  <h1>Desenvolvido Por Ronildo Ferreira da Silva</h1>
  <h1>ronildo.ufpi@gmail.com</h1>
</footer>


 </html>
