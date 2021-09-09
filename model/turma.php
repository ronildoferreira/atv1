<html>
<?php

  class Turma {
    protected $alunos;                          
    private $nomeTurma;                         
    private $qtd = 0;

    public function __construct($nome) {         
      $this->nomeTurma = $nome;                
    }

    public function adicionarAluno(Aluno $aluno) {
      if($this->qtd < 5 ) {               
                                               
        $this->alunos[$this->qtd] =  $aluno;  
        echo 'O aluno '.$aluno->getNome(). ' foi inserido com sucesso na turma </br>';
        $this->qtd++;
       
      } else {                                
        echo "<div class='erro'>Erro! - Turma Lotada</div>";
      }
    }
                                               

    public function imprimirTurma() {
      echo 'A média da turma é: '.$this->mediaTurma();

      foreach($this->alunos as $aluno) {
      
      echo "

      <h2>".">>".$aluno->getNome()."</h2>
      <table width='70%' border='1'>
          <tr>
            <td align='center'>Nota 1</td>
            <td align='center'>Nota 2</td>
            <td align='center'>Nota 3</td>
            <td align='center'>Nota 4</td>
            <td align='center'>Média</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td align='center'>".$aluno->getNota1()."</td>
            <td align='center'>".$aluno->getNota2()."</td>
            <td align='center'>".$aluno->getNota3()."</td>
            <td align='center'>".$aluno->getNota4()."</td>
            <td align='center'>".$aluno->getMedia()."</td>
          </tr>
        </tbody>
      </table>";
      
      }
    }
  
    public function mediaTurma() {
      $notas = 0;
      for($i = 0; $i < sizeof($this->alunos); $i++) {
        $notas += $this->alunos[$i]->getMedia();        
                                                             }
      return $mediaTurma = $notas / sizeof($this->alunos); 
    }
    
    public function getNome() {
      return $this->nomeTurma;
    }

  }

?>

</html>