
<html lang="fr">
  <head>
    <meta charset="utf-8">


    <title>Happy'culture</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style-general.css" rel="stylesheet">
    <link href="style-formulaire.css" rel="stylesheet">
  </head>
  
  <?php include 'Header.php'; 
  $TitreEvent=$_POST['NomEvenement'];
  
  $RqinfoEvent="SELECT * FROM evenement, categorie, lieu, sederoule
                WHERE evenement.NomEvenement='".$TitreEvent."'
                AND evenement.Categorie=categorie.IdCategorie
                AND evenement.Lieu=lieu.NoLieu
                AND evenement.NoEvenement=sederoule.NumEvenement";
                
  
  $resinfoEvent=  mysql_query($RqinfoEvent);
  $InfoEvent=  mysql_fetch_array($resinfoEvent);
  ?>

  
    <div class="jumbotron">
      <div class="container">
          <div id="titre1">
              <h1> <?php echo $TitreEvent; ?></h1>
          </div>
        
        <p id="titre2">
            Catégorie : <?php echo $InfoEvent['NomCategorie'];  ?>
        </p>
      </div>
    </div>
    
    <p id='titrerubrique'>Description</p>
    <blockquote id='event'>
        <?php echo $InfoEvent['Description'];?>
    </blockquote>
   
    <p id='titrerubrique'>Date de l'évènement</p>
    <blockquote id='event'> 
        <ul>
            <li><?php echo $InfoEvent['Date']; ?></li>
        </ul>
        
    </blockquote>
    
    <p id='titrerubrique'>Lieu</p>
    <blockquote id='event'> 
        Cet évènement se deroulera à <br/>
         <?php echo $InfoEvent['NomLieu'];?> <br/>
         <?php echo $InfoEvent['AdresseLieu'];?><br/>
         <?php echo $InfoEvent['CodePostalLieu'];?><br/>
         <?php echo $InfoEvent['VilleLieu'];?><br/>
    </blockquote>
    
    <p id='titrerubrique'>Prix</p>
    <blockquote id='event'> 
        <h3> <?php echo $InfoEvent['Prix'];?> euros</h3>
    </blockquote>
    
     <blockquote id='event'> 
         <div id="form-event">
             <form type="hidden" method="POST" action="ParticipeEvent.php">
                    <input type="hidden" name="NomEvent" value="<?php echo $InfoEvent['NomEvenement']; ?>"> 
                    <input type="submit" class="btn btn-success" value="S'incrire à l'évènement">
             </form>
         </div>
                
        </div>
     </blockquote>
    
  </body>
</html>
