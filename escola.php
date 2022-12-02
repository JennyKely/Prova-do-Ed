<?php

class Escola
{
  public $nomeDaEscola;
  public $curso;
  public $professor;
  public $materia;
  public $turno;

  public function matricula()
  {
    echo "Eu vou me matricular na escola {$this ->nomeDaEscola}, no curso de {$this ->curso}, onde o professor {$this ->professor},
    da aula de {$this ->materia}, no turno da {$this ->turno} <br>";
  }
  public function festa()
  {
    echo "Os alunos da escola {$this ->nomeDaEscola}, do curso de {$this ->curso}, fizeram uma festa para o professor {$this ->professor},
     que leciona a materia de {$this ->materia}, no turno da {$this ->turno} <br>";
  }
  public function formatura()
  {
    echo "os alunos da escola {$this ->nomeDaEscola}, do curso de {$this ->curso}, onde o professor {$this ->professor},
    da aula de {$this ->materia}, irao se formar no turno {$this ->turno} <br>";
  }
}
 $escola1 = new Escola();
 $escola1 ->nomeDaEscola = "Antonio Marinho";
 $escola1 ->curso = "Informatica";
 $escola1 ->professor = "Edilson";
 $escola1 ->materia = "Estatistica";
 $escola1 ->turno = "Noite";
 $escola1 ->matricula();

 $escola1 = new Escola();
 $escola1 ->nomeDaEscola = "Antonio Marinho";
 $escola1 ->curso = "Informatica";
 $escola1 ->professor = "Edilson";
 $escola1 ->materia = "Estatistica";
 $escola1 ->turno = "Noite";
 $escola1 ->festa();

 $escola1 = new Escola();
 $escola1 ->nomeDaEscola = "Antonio Marinho";
 $escola1 ->curso = "Informatica";
 $escola1 ->professor = "Edilson";
 $escola1 ->materia = "Estatistica";
 $escola1 ->turno = "Noite";
 $escola1 ->formatura();


