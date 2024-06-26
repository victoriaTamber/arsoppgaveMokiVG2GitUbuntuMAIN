<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>ansatte forside</title>
</head>
<body>
<body onload="visProd()">
  <div id="wrapper">

    <!-- publiseringsløsning Moki meny og navigasjon -->
    <div id="menyNavigPublisL">
     
      <div class="logoMOKI_img">
        <img src="../images/MOKI_logo.svg" alt="Logoen til MOKI">
        
        <div class="menyNavn">
         <h2> <a href="../index.html"> Moki.ub </a> </h2>
        </div>
      </div>

      <div class="menyTittelPublisL">
        <h1>Publiseringssystem</h1>
      </div>
      
      <!-- navigasjons linker: Admin og publiserings side -->
      <div class="navLinkerPublisL">
        <div class="linkAdmin">
          <a href="admin.html">Skriv nytt innlegg </a>
        </div>

        <div class="linkPubliSide">
          <a id="aktiv" href="publiseringSide.html">Publisering side</a>
        </div>
        
      </div>
    </div>
   
    <!-- output fra local storage (Tittel/overskrift, tekst og bilde) -->
    <div id="prodObjOutput"> 
      <div id="prodObjOutputTittel"> 
      </div>
      <div id="prodObjOutputTekst"> 
      </div>
      <!-- <div id="prodObjOutputBilde">
         variabel fra lagret text
      </div>-->
    </div>
    
    <!-- fjerner informasjonen fra local storage (HTML OG JS) -->
    <button onclick="slettProd()">Tøm inlegget</button>
    <a href="admin.html">Skriv et nytt innlegg</a>
    
    <!-- footer publiseringssystem -->
    <div class="footer">
      <div class="brukerVeilPubl">
        <a href="../PubliseringsL/brukerveiledPublisL.html" target="_blank">Brukerveiledning Publiseringsystem </a>
      </div>
    </div>
    
  </div>   

<script src="../script.js"></script>  
</body>
</html>