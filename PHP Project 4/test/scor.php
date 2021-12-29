<?php

$scor = 0;
$r1 = 0;
$r2 = 0;
$r3 = 0;
$r4 = 0;
$r5 = 0;
$r6 = 0;
$r7 = 0;

if (isset($_POST['q1']))
    $r1 = $_POST['q1'];
if (isset($_POST['q2']))
    $r2 = $_POST['q2'];
if (isset($_POST['q3']))
    $r3 = $_POST['q3'];
if (isset($_POST['q4']))
    $r4 = $_POST['q4'];
if (isset($_POST['q5']))
    $r5 = $_POST['q5'];
if (isset($_POST['q6']))
    $r6 = $_POST['q6'];
if (isset($_POST['q7']))
    $r7 = $_POST['q7'];

if ($r1 === 'c')
    $scor += 1;
if ($r2 === 'c')
    $scor += 1;
if ($r3 === 'c')
    $scor += 1;
if ($r4 === 'c')
    $scor += 1;
if ($r5 === 'c')
    $scor += 1;
if ($r6 === 'c')
    $scor += 1;
if ($r7 === 'c')
    $scor += 1;

echo " <center> Ai obtinut un scor de " . $scor . " puncte </center>";
