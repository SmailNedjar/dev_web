<?php

require 'classes/Answer.php';
require 'classes/Question.php';
require 'classes/MCQ.php';

$qcm = new MCQ("QCM AZERTY");

$question1 = new Question("Question N°1");
$reponse1A = new Answer("Réponse 1");
$reponse1B = new Answer("Réponse 2");
$reponse1C = new Answer("Réponse 3");

$question1
->addAnswer($reponse1A)
->addAnswer($reponse1B, true)
->addAnswer($reponse1C);


$question2 = new Question("Question N°2");
$reponse2A = new Answer("Réponse 1");
$reponse2B = new Answer("Réponse 2");
$reponse2C = new Answer("Réponse 3");

$question2->addAnswer($reponse2A);
$question2->addAnswer($reponse2B);
$question2->addAnswer($reponse2C, true);

$qcm->addQuestion($question1);
$qcm->addQuestion($question2);


if(isset($_POST['submit_qcm']))
{
    $qcm->check($_POST);
}
else
{
    $qcm->render();
}








