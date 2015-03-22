
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
              <h1><img  src="logo.png" alt ="event2"/>Happy'culture</h1>
         
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
	  
	  $Req1="SELECT * FROM EVENEMENT, CATEGORIE, LIEU, SEDEROULE
                  WHERE Validation='oui'
                  AND EVENEMENT.NoEvenement=SEDEROULE.NumEvenement 
                  AND EVENEMENT.categorie=CATEGORIE.IdCategorie 
                  AND EVENEMENT.Lieu=LIEU.NoLieu 
                  AND date=(SELECT Min(date)) ORDER BY date";
	 
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
                                <p><img id="tailleimg" src="" alt ="image"/></p>
                            </div>
                        <p><form method="POST" action="PageEvenement.php">
                    <input type="hidden" name="NomEvenement" value="<?php echo $Evenement['NomEvenement']; ?>">
                    <input class="btn btn-default" href="PageEvenement.php" role="button" type="submit" value="Voir l'évènement &raquo;"></form>
                    </div>
                </div>
		  <?php
                    $i++;
                    }
                 ?>

               

      </div>
    </div>
</body>
</html>



