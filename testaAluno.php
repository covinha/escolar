<?php
/**
 * Created by PhpStorm.
 * User: Reginaldo
 * Date: 15/02/2018
 * Time: 21:08
 */

include 'Aluno.php';
include  'Professor.php';
$aluno1 = new aluno();
$aluno1->setNome("Maria da silva");
$aluno1->setIdade(25);
$aluno1->setSalario(1250.50);



echo $aluno1->getNome();
echo "<br>";
echo $aluno1->getIdade();
echo "<br>";
echo $aluno1->getSalario();

$p1 =new Professor("joao", 2589.88);
echo $p1->getNome() ."ganha" . $p1->getSalario();

