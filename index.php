<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza
e sostituire la badword passata in GET con tre *. -->


<?php

// creo variabile con paragrafo testo e lo visualizzo a schermo:
$testo = '“Quel ramo del lago di Como, che volge a mezzogiorno, tra due catene non interrotte di monti, tutto a seni e a golfi,
a seconda dello sporgere e del rientrare di quelli, vien quasi a un tratto, tra un promontorio a destra e un’ampia costiera dall’altra parte […]”';
// echo $testo;

// dichiaro variabile per la lunghezza:
$lunghezzaTesto = strlen($testo);

//dichiaro badword a GET:
$badword = $_GET['parola'];

//la sostituisco con tre *:
// var_dump($badword);
$sostituisci = str_replace($badword,'***', $testo);
echo $sostituisci;

// visualizzo la lunghezza
echo " Questo incipit è lungo $lunghezzaTesto caratteri.";

?>
