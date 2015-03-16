<?php
session_start();
require 'connect.php';
echo 'manon';
?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Style-general.css" rel="stylesheet">
  </head>
  
    <div class="jumbotron">
      <div class="container">
          
          <div id="titre1">
              <h1> 
         <?php
        
        if (isset($_SESSION['identifiant']))
        {
            echo 'Bonjour ' . $_SESSION['prenom'].'!';
        }
        else
        {
        ?>
              </h1>
              <h1>Happy'culture</h1>
         
          <?php 
        }
          ?> 
        </div>
        <p id="titre2">
            Quittez le quotidien et venez vous distraire!
        </p>

      </div>
    </div>

    <div class="container">
      
	  <?php
	  
	  $Req1="SELECT * FROM EVENEMENT, CATEGORIE, LIEU, SEDEROULE WHERE EVENEMENT.NoEvenement=SEDEROULE.NumEvenement AND EVENEMENT.NoEvenement=CATEGORIE.NoEvenement AND EVENEMENT.Lieu=LIEU.NoLieu AND date=(SELECT Min(date)) ORDER BY date";
	  //$Req2="SELECT Photo FROM EVENEMENT, CATEGORIE, LIEU, SEDEROULE WHERE EVENEMENT.NoEvenement=SEDEROULE.NumEvenement AND EVENEMENT.NoEvenement=CATEGORIE.NoEvenement AND EVENEMENT.Lieu=LIEU.NoLieu AND date=(SELECT Min(date)) ORDER BY date";
	  //$Req3="SELECT Date FROM EVENEMENT, CATEGORIE, LIEU, SEDEROULE WHERE EVENEMENT.NoEvenement=SEDEROULE.NumEvenement AND EVENEMENT.NoEvenement=CATEGORIE.NoEvenement AND EVENEMENT.Lieu=LIEU.NoLieu AND date=(SELECT Min(date)) ORDER BY date";

	  $donnees1=mysql_query($Req1);
$i=0;
while($i<6 && $Evenement=mysql_fetch_array($donnees1))
{
		  ?>
		<div class="row">
        <div class="col-md-4">
            <div id='disposition1'>
                <h3><?php echo $Evenement['NomEvenement'] ?></h3>Le <?php echo $Evenement['Date'] ?>
                 <div id='image'>
                 <p><img id="tailleimg" src="<?php$Evenement['Photo']?>" alt ="event1"/></p>
                 </div>
                 <p><a class="btn btn-default" href="pageEvenement.php" role="button" type="submit">Voir l'évènement &raquo;</a></p>
            </div>
        </div>
		  <?php
$i=$i+1;
}
	  
	  ?>

                <?php echo $NomEvenement[3] ?>Le <?php echo $Date[2] ?>

      </div>
    </div>

  </body>


