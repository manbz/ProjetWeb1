
<?php
session_start();
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Style-general.css" rel="stylesheet">
  </head>
    
  <body>
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
              <h1>Happy time</h1>
         
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
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
            <div id='disposition1'>
                <h3>Casse Noisette</h3>
                <div id='image'>
                <p><img id="tailleimg" src="casse-noisette.jpg" alt ="event1"/></p>
                </div>
                <p><a class="btn btn-default" href="pageEvenement.html" role="button">Voir l'évènement &raquo;</a></p>
          </div>
        </div>
          
        <div class="col-md-4">
            <div id='disposition1'>
          <h3>Coup de foudre a Besançon</h3>
          <div id='image'>
            <p><img id="tailleimg" src="coup-de-foudre.jpg" alt ="event2"/></p>
          </div>
            <p><a class="btn btn-default" href="pageEvenement.html" role="button">Voir l'évènement &raquo;</a></p>
            </div>
            </div>
          
        <div class="col-md-4">
            <div id='disposition1'>
          <h3>Stade Toulousain/ASM Clermont-</h3>
          <div id='image'>
            <p><img id="tailleimg" src="rugby.jpg" alt ="event3"/></p>
          </div>
            <p><a class="btn btn-default" href="pageEvenement.html" role="button">Voir l'évènement &raquo;</a></p>
            </div>
       </div>
      
            <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
              
            <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
            </div>
      </div>
    </div>

      <hr>

  </body>
</html>
