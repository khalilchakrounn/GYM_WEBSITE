<?php
include "../../entites/cour.php";
include "../../core/courC.php";

if (isset($_POST['modifier'])){
	$courC=new courC();
	$cour=new cour($_POST['datet'],$_POST['nom'],$_POST['prenom'],$_POST['horaire'],$_POST['message'],$_POST['coure'],$_POST['telephone']);
	$courC->modifiercour($cour,$_POST['id']);
	header('Location: affichercour.php');
}