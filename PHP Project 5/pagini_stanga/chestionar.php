<?php

$rezultat = 0;
$raspuns1 = 'f';
$raspuns2 = 'f';
$raspuns3 = 'f';
$raspuns4 = 'f';
$raspuns5 = 'f';
$raspuns6 = 'f';
$raspuns7 = 'f';

if (isset($_POST['q1']))
    $raspuns1 = $_POST['q1'];
if (isset($_POST['q2']))
    $raspuns2 = $_POST['q2'];
if (isset($_POST['q3']))
    $raspuns3 = $_POST['q3'];
if (isset($_POST['q4']))
    $raspuns4 = $_POST['q4'];
if (isset($_POST['q5']))
    $raspuns5 = $_POST['q5'];

if ($raspuns1 === 'c')
    $rezultat += 1;
if ($raspuns2 === 'c')
    $rezultat += 1;
if ($raspuns3 === 'c')
    $rezultat += 1;
if ($raspuns4 === 'c')
    $rezultat += 1;
if ($raspuns5 === 'c')
    $rezultat += 1;

echo " <center> Ai obtinut un scor de " . $rezultat . " puncte </center>";
