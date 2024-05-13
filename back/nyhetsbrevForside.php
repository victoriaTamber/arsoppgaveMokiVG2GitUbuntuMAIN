<?php 
//nyhetsbrev forside registrering 
session_start();
include "../db_kobling.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {;

  $fornavn = ($_POST['fornavnInput']);
  $etternavn = ($_POST['etternavnInput']);
  $epostN = ($_POST['epostInput']);

  if(empty($fornavn)) {
    header("Location: forside.php?error=navn er påkrevd");
    exit();  
  } else if (empty($etternavn)){
    header("Location: forside.php?error=etternavn er påkrevd");
    exit();
  } else if (empty($epostN)){
    header("Location: forside.php?error=epost er påkrevd");
    exit();
  }

  

 
  $sql = "SET FOREIGN_KEY_CHECKS=0";
  $result = mysqli_query($conn, $sql);
  //setter inn data i databasen
  $sql = "INSERT INTO arsoppgaveMoki.nyhetsbrevKunde (fornavn, etternavn, epost) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "sss", $fornavn, $etternavn, $epostN);
  mysqli_stmt_execute($stmt); 


  header("Location: ../brukerSider/nyhetsbrev.php");
  exit();

}



?>
