

<!DOCTYPE html>
<html>
<head>
<style>
        table,td{
            border: 1px solid black;
        }
        table{
            font-size: 15px;
           width: 100%;
            border-collapse: collapse;
}
.fies{
    background-color: #87cfff;
}
.legs{
    background-color: #483d8b;
    color:white;
    padding: 5px 15px;
}
.fiesb{
    background-color:#ffef5b;
}
.legsb{
    background-color:#ffd700;
    padding:5px 10px;
}
     .fieldsett {
  background-color: #eeeeee;
}

.legendd {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}
.form-group{
    
    margin: 8px; 
}
.dia{
    font-size: 15px;
}
.form-check-input{
    height:25px;
    width:35px;
}
#positionB{
    float:right;
}
.form-check-label{
    float:center;
}
.circonstance{

}
.circonstances{
    font-size:30px;
    padding:5px 10px ;
}
h3{
    padding:5px;
    
}
.panel-heading{
    font-size:30px;
}
    </style>
    <meta charset="utf-8"/>
    <title> Constat accident </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/jquery-ui-1.10.4.custom.css">
    <link rel="stylesheet" href="../css/monStyle.css">

    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/jquery-ui-1.10.4.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/school.js"></script>

    <script src="js/jquery-ui-i18n.min.js"></script>
    <script>
        $(function () {
            // définit les options par défaut du calendrier
            $.datepicker.setDefaults({
                showButtonPanel: true,// affiche des boutons sous le calendrier
                showOtherMonths: true, // affiche les autres mois
                selectOtherMonths: true // possibilités de sélectionner les jours des autres mois
            });

            //$("#calendar").datepicker(); // affiche le calendrier par défaut
            //$("#calendar").datepicker($.datepicker.regional["fr"]); // affiche le calendrier en fr
            $("#calendar").datepicker({
                dateFormat: "yy-mm-dd",

            });
            $("#calendar1").datepicker({
                dateFormat: "yy-mm-dd",

            });
        });
    </script>


</head>

<body>
<?php //include('../menu.php'); ?>
<br><br><br>
<div class="contaiiner">

    <div class="panel panel-primary">
        <div class="panel-heading" align="center"> CONSTAT AMIABLE D'ACCIDENT AUTOMOBILES</div>
        <div class="panel-body">
            <form method="post" action="insert_stagiaire.php" enctype="multipart/form-data">

               
            <table>
            <tr>
             <td>
            <!-- Les formulaire pour la voitur A  -->
    <fieldset class="fies">
                <legend class="legs">Véhicule A</legend>
                    <label for="prenom" class="control-label col-sm-3"> Prenom </label>
                    <div class="col-sm-6">
                        <input required type="text" name="prenom2" id="prenom" class="form-control">
                    </div>
                    <br><br>
                    <label for="nom" class="control-label col-sm-3"> Nom </label>
                    <div class="col-sm-6">
                        <input required type="text" name="nom2" id="nom" class="form-control">
                    </div>
    
                    <br>
                    <br>
                    <label for="adresse" class="control-label col-sm-3"> Adress </label>
                    <div class="col-sm-6">
                        <input required type="text" name="adresse2" id="adresse" class="form-control">
                    </div>
                    <br><br>
                    
                    <label for="tel" class="control-label col-sm-3"> Tél </label>
                    <div class="col-sm-6">
                        <input type="text" name="tel" id="tel" class="form-control">
                     </div>
                    <br><br>
                    <label for="mail" class="control-label col-sm-3"> Mail </label>
                    <div class="col-sm-6">
                        <input type="text" name="mail2" id="mail" class="form-control">
                    </div>
                    <br><hr><br>
                    
                    <label for="numero_dontrat" class="control-label col-sm-3"> Numéro du Contrat </label>
                    <div class="col-sm-6">
                        <input type="text" name="numero_contrat" id="numero_contrat" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="nom_assurance" class="control-label col-sm-3"> Nom de l'Assuré</label>
                    <div class="col-sm-6">
                        <input type="text" name="nom_assurance" id="nom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="prenom_assurance" class="control-label col-sm-3"> Prenom de l'Assuré </label>
                    <div class="col-sm-6">
                        <input type="text" name="prenom_assurance" id="prenom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="code_postal" class="control-label col-sm-3">Code_Postale </label>
                    <div class="col-sm-6">
                        <input required type="text" name="code_postal" id="code_postal" class="form-control">
                    </div>
                    <br><hr><br>
                    
                    <fieldset class=fieldsett>
                    <div class="form-group">
                    <legend class="legendd"> Date et l'heure de l'accident</legend>
                    <label for="calendar" class="control-label col-sm-2"> Date </label>
                    <div class="col-sm-4">
                        <input required type="text" name="date_accident" id="calendar" class="form-control">
                    </div>
                    <br><br>
                    <label for="heure" class="control-label col-sm-2"> L'heure </label>
                    <div class="col-sm-4">
                        <input required type="text" name="heure" id="heure" class="form-control">
                    </div>
    </div>s            
            </fieldset>
            <br>
            <fieldset class="fieldsett">
         <div class="form-group">
                <legend class="legendd">Observation et Description du lien de L'accident </legend>
                  
                <label for="observation"> Observation :</label>
                    <textarea name="observation" id="observation" class="form-control rounded-0" rows="3"> 
                </textarea>
                <br>
                <label for="point_choc"> Point de Choc :</label>
                    <textarea name="point_choc" id="point_choc" class="form-control rounded-0" rows="2"> 
                </textarea>
                <br>
                <label for="degat_materiel"> Dégats apparents du véhicule B :</label>
                    <textarea name="observation" id="observation" class="form-control rounded-0" rows="2"> 
                </textarea>
         </div>
            </fieldset>
            <br>

            <div class="row my-row">
                    <label for="photo" class="control-label col-sm-2">Ajouter des PHOTOS </label>
                    <div class="col-sm-8">
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div>
            </div>
    </fieldset>
    </td>

<!-- ********************** les circonstance de l'accident ***************************** -->

    <td class="dia">
        <fieldset class="circonstance">
            <legend class="circonstances"> 12 Circonstances </legend>
            <h3>Mettez une Croix dans chacune des cases utils pour préciser le croquis </h3>
            <label><h1>A</h1></label><label id="positionB"><h1>B</h1></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="stationnement" id="stationnement" value="option1" >
            <label class="form-check-label" for="stationnement"> En Stationnement</label>
            <input class="form-check-input" type="radio" name="stationnement" id="positionB" value="option2" >
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="stationnement2" id="stationnement2" value="option3" >
            <label class="form-check-label" for="stationnement2"> A l'arret</label>
            <input class="form-check-input" type="radio" name="stationnement2" id="positionB" value="option4" >
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="stationnement3" id="stationnement3" value="option5" >
            <label class="form-check-label" for="stationnement3">Quittait un Stationnement</label>
            <input class="form-check-input" type="radio" name="stationnement3" id="positionB" value="option6" >
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="stationnement4" id="stationnement4" value="option7" >
            <label class="form-check-label" for="stationnement4"> Ouvrait une Portiere </label>
            <input class="form-check-input" type="radio" name="stationnement4" id="positionB" value="option8" >
        </div>
        <hr>
        
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix" name="choix">
        <label for="choix" class="form-check-label" >Prenait Un Stationnement </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix2" name="choix2">
        <label for="choix" class="form-check-label" > Sortait d'une Parking, un lieu privé, un chemin de terre </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix2">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix3" name="choix3">
        <label for="choix" class="form-check-label" > S'engageait dans d'une Parking, un lieu privé, un chemin de  </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix3">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix4" name="choix4">
        <label for="choix" class="form-check-label" > S'engageait sur une place gigatoire </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix4">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix5" name="choix5">
        <label for="choix" class="form-check-label" > Roulait sur une place a sens gigatoire </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix5">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix6" name="choix6">
        <label for="choix" class="form-check-label" > Heurtait a l'arriere en roulant dans le meme sens et sur une file</label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix6">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix8" name="choix8">
        <label for="choix" class="form-check-label" >Roulair dans le meme sens et sur une file differente </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix8">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix9" name="choix9">
        <label for="choix" class="form-check-label" > Changait de file </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix9">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix10" name="choix10">
        <label for="choix" class="form-check-label" > Reculait </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix10">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix11" name="choix11">
        <label for="choix" class="form-check-label" > Virait a gauche </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix11">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix12" name="choix12">
        <label for="choix" class="form-check-label" > Doublait </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix12">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix13" name="choix13">
        <label for="choix" class="form-check-label" > Empietait sur une voie reservee a la circulation en sens inverse </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix13">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="choix14" name="choix14">
        <label for="choix" class="form-check-label" > Venait de droite(dans un carafour) </label>
        <input type="checkbox" class="form-check-input" id="positionB" name="choix14">
    </div>
    <hr>
    <div class="form-check">
            <input class="form-check-input" type="radio" name="stationnement5" id="stationnement5" value="option9" >
            <label class="form-check-label" for="stationnement5"> N'avait pas observé un signale de priorité </label>
            <input class="form-check-input" type="radio" name="stationnement5" id="positionB" value="option10" >
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="stationnement6" id="stationnement6" value="option9" >
            <label class="form-check-label" for="stationnement6"> N'avait pas observé un feu rouges  </label>
            <input class="form-check-input" type="radio" name="stationnement6" id="positionB" value="option10" >
        </div>

    </fieldset>
    </td>

    <td>
                   
   <!-- formulaire pour la voitur B -->
<fieldset class="fiesb">
    <legend class="legsb">Véhicule B</legend>
    <label for="prenom" class="control-label col-sm-3"> Prenom </label>
                    <div class="col-sm-6">
                        <input required type="text" name="prenom2" id="prenom" class="form-control">
                    </div>
                    <br>
                    <br>


                    <label for="nom" class="control-label col-sm-3"> Nom </label>
                    <div class="col-sm-6">
                        <input required type="text" name="nom2" id="nom" class="form-control">
                    </div>
                    <br>
                    <br>
                    <label for="adresse" class="control-label col-sm-3"> Adress </label>
                    <div class="col-sm-6">
                        <input required type="text" name="adresse2" id="adresse" class="form-control">
                    </div>
                    <br><br>
                    
                    <label for="tel" class="control-label col-sm-3"> Tél </label>
                    <div class="col-sm-6">
                        <input type="text" name="tel" id="tel" class="form-control">
                     </div>
                    <br><br>
                    <label for="mail" class="control-label col-sm-3"> Mail </label>
                    <div class="col-sm-6">
                        <input type="text" name="mail2" id="mail" class="form-control">
                    </div>
                    <br><hr><br>
                    
                    <label for="numero_dontrat" class="control-label col-sm-3"> Numéro du Contrat </label>
                    <div class="col-sm-6">
                        <input type="text" name="numero_contrat" id="numero_contrat" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="nom_assurance" class="control-label col-sm-3"> Nom de l'Assuré o</label>
                    <div class="col-sm-6">
                        <input type="text" name="nom_assurance" id="nom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="prenom_assurance" class="control-label col-sm-3"> Prenom de l'Assuré </label>
                    <div class="col-sm-6">
                        <input type="text" name="prenom_assurance" id="prenom_assurance" class="form-control">
                    </div>
                    <br><br><br>
                    <label for="code_postal" class="control-label col-sm-3">Code_Postale </label>
                    <div class="col-sm-6">
                        <input required type="text" name="code_postal" id="code_postal" class="form-control">
                    </div>
                    <br><hr><br>
                    
                    <fieldset class="fieldsett">
        <div class="form-group">
                    <legend class="legendd">Date et l'heure de l'accident</legend>
                    <label for="calendar" class="control-label col-sm-2"> Date </label>
                    <div class="col-sm-4">
                        <input required type="text" name="date_accident" id="calendar" class="form-control">
                    </div>
                    <br><br>
                    <label for="heure" class="control-label col-sm-2"> L'heure </label>
                    <div class="col-sm-4">
                        <input required type="text" name="heure" id="heure" class="form-control">
                    </div>
    </div>s            
            </fieldset >
            <br>
            <fieldset class="fieldsett">
         <div class="form-group">
                <legend class="legendd">Observation et Description du lien de L'accident </legend>
                  
                <label for="observation"> Observation :</label>
                    <textarea name="observation" id="observation" class="form-control rounded-0" rows="3"> 
                </textarea>
                <br>
                <label for="point_choc"> Point de Choc :</label>
                    <textarea name="point_choc" id="point_choc" class="form-control rounded-0" rows="2"> 
                </textarea>
                <br>
                <label for="degat_materiel"> Dégats apparents du véhicule B :</label>
                    <textarea name="observation" id="observation" class="form-control rounded-0" rows="2"> 
                </textarea>
         </div>
            </fieldset>
            <br>

            <div class="row my-row">
                    <label for="photo" class="control-label col-sm-2">Ajouter des PHOTOS </label>
                    <div class="col-sm-8">
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div>
    </fieldset>
            
    </td>
    </tr>
               
    </table>

    <br><hr><br><br><hr><br>
               
                
    
                   
                  
                  

               
               
               
            </form>
        </div>
    </div>
</div>
    </div>
</body>
</html>
