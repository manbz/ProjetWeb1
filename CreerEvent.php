<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="Style-general.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="Style-formulaire.css" rel="stylesheet">
  </head>
    
  <?php
  include 'Header.php';
  require 'Connect.php';
  ?>

     <div  class="container-fluid">
      <div  class="row">
        <div id="menu" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="PageMembre.php" role="button">Mes évènements</a></li>
            <li><a href="MesGroupes.php">Mes groupes</a></li>
            <li><a href="CreerGroupe.php" role="button">Créer un groupe</a></li>
            <li class="active"><a href="CreerEvent.php" role="button">Créer un évènement<span class="sr-only">(current)</span></a></li>
            <li><a href="modifierMonProfil.php"> Modifier mon profil </a></li>
            <li><a href="modifierMotDePasse.php" role="button">Modifier mon mot de passe</a></li>
            <li><a href="desinscription.php" role="button">Me désinscrire</a></li>
          </ul>
        </div>
      </div>
     </div>

      
        <h1 class="form-signin-heading" id="titre3">Créez votre évenement </h1>
        
    <div class="container">
        <form class="form-signin" method="POST" action="Traitement-creation-event.php">
            
            <input type="text" name="nomEvent" class="form-control" placeholder="Nom de l'évènement" required>
            <input type="text" name="prixEvent" class="form-control" placeholder="Prix de l'évènement" required >
            <textarea cols="20" rows="4" name="descriptionEvent" id="adresse" class="form-control" placeholder="Description de l'évènement" required></textarea>
            <input type="text" name="NbParticipant" class="form-control" placeholder="Nombre de participants maximum" required >

            <h5 class="form-signin-heading" id="titre4">Choisissez la date de l'évènement</h5>
            <input type="date" name="date" class="form-control" placeholder="Date" required >
            <h5 class="form-signin-heading" id="titre4">Choisissez l'heure de début l'évènement</h5>
            <input type="time" name="heure" class="form-control" placeholder="Heure de début" required >
            <h5 class="form-signin-heading" id="titre4">Choisissez les caracteristiques du lieu</h5>
            <input type="text" name="NomLieu" class="form-control" placeholder="Nom du lieu" required >
            <input type="text" name="AdresseLieu" class="form-control" placeholder="Adresse" required >
            <input type="text" name="CP" class="form-control" placeholder="Code Postal" required >
            <input type="text" name="Ville" class="form-control" placeholder="Ville" required >

            
            <h5 class="form-signin-heading" id="titre4">Choisissez la catégorie de l'évènement</h5>
            <select size="4" class="form-control" name="categorie" required>
              <?php
              //affiche les differentes catégories
                $rqcategorie="SELECT NomCategorie FROM CATEGORIE";
                $categorie=mysql_query($rqcategorie);
                $nbcategorie=mysql_num_rows($categorie);
                $i=0;
                
                while ($i<$nbcategorie) 
                {
                    $chaquecategorie=mysql_result($categorie, $i, 'NomCategorie');
                    $i++;
                    echo '<option name="1" value="';
                    echo $chaquecategorie;
                    echo'">';
                    echo $chaquecategorie;
                    echo'</option>';
                }
              ?>
            </select>
            
            
            <?php
            //permet de regarder si l'utilisateur connecté est créateur d'un groupe
                $rqgroupe="SELECT NoGroupe, NomGroupe FROM groupe WHERE Responsable='".$_SESSION['identifiant']."'";
                $touslesgroupes=mysql_query($rqgroupe);
                $nbgroupe=mysql_num_rows($touslesgroupes);
               
                if ($nbgroupe!=0) 
                {
                    
            ?>
            <h5 class="form-signin-heading" id="titre4">Choisissez les participants à l'évènement</h5>
            <select size="4" class="form-control" name="groupe" required >
                    <option name="groupe" value="public">Tous les happy'membres</option>
                <?php
                
                    
                    while ($chaquegroupe=mysql_fetch_array($touslesgroupes)) 
                    {
                        echo '<option name="groupe" value="'.$chaquegroupe['NomGroupe'].'">'.$chaquegroupe['NomGroupe'].'</option>';
                    }
                }
                
                ?>
                    </select> 
            

            <br/>
            <button class="btn btn-success" type="submit">Créer l'évènement</button>
      </form>
    </div>      
  </body>
</html>