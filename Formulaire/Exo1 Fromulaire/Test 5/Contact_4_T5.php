<?php
session_start()
?>
<!doctype html>
<html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

            <title>Jarditou</title>


        </head>
 
        <!-- Ce qu'il reste à faire pour l'indexe :
            Mettre le titre : Tout pour le jardin - centré et aligné avec la photo
            Arrondire les bords des barres de navigation
            Rendre le dispositif responsibe pour la taille d'écran Lg avec :
              
        --> 
               
    <body>
        
        <div class="container-fluid " >

            <header>
                <div class="row align-items-center">
                    <div id="block1" class=" col-lg-8 bg-white d-none d-lg-block "><img src="/src/img/jarditou_logo.jpg" style="width:25%; height:auto; padding: 5px;"  alt="Photo" ></div>
                    <div id="block2" class=" col-lg-4 bg-white text-black d-none d-lg-block "><h3 class="text-center">Tout pour le jardin </h3></div>
                </div>

                <!-- deuxième partie de la mise en page : navigation -->

                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded py-1 my-1">

                        <a class="navbar-brand" href="#">Jarditou.com</a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">

                                        <li class="nav-item ">
                                            <a class="nav-link" href="/HTML/index_boot_4.html">Accueil <span class="sr-only">(current)</span></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="/HTML/Tableau_boot_4.html">Tableau</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="/HTML/Contact_boot_4.html">Contact</a>
                                        </li>
                                    </ul>

                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                                    </form>
                            </div>
                    </nav>
            </header>
            
            <!-- Espace : promotion -->

                        <div class="row">
                            <img class="img-fluid col-12 shadow mb-1 bg-white" src="/src/img/promotion.jpg" alt="responsive photo promo" >
                        </div>
            
                    <!-- Espace : Formulaire
                
                Manque à optimiser : - Lors d'un envoi avec le genre et la date saisient les infos ne reviennent pas mais sont enregistrés (voir var dump)
                                     - Vérification de l'email non effectué cela fait planter le formulaire.

                                                                                                                                            -->

                    <!-- Regroupe les champ manquant en alerte dans la page HTML : Si une info saisie dans la session est manquante alors message d'erreur-->

                    <?php if(array_key_exists('error', $_SESSION)): ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['error']); ?>
                    </div>
                    <?php endif; ?>

                    <!-- Alert d'envoi du message si tous les champs sont saisies. Message de success. -->

                    <?php if(array_key_exists('success', $_SESSION)): ?>
                    <div class="alert alert-success">
                       Well DONE ! - Votre messages est bien envoyé.
                    </div>

                    <?php endif; ?>

                    <?php  
                        ?>

                  

                    
                    <a href="http://localhost/PHP%20-%20MySQL/PHP/Exo%20php/Formulaire/Exo1%20Fromulaire/Test%205/"> local HOST T5 </a>
                    
                    <p style="font-size: 10px;">* Ces zones sont obligatoire</p><br> 

                    <h2 class="text-center text-uppercase"> Vos Coordonnées </h2> <hr>

                    <form action="Ctrl.php" method="POST" name="inscription">
                    
                     <!-- Implémentation du champs avec Isset afin de vérifier le champs (est il rempli ?) si oui le laisser rempli ou si non le laisser vide -->
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nom*</label>
                            <input type="text" class="form-control" name="nom" placeholder="Veuillez saisir votre nom" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom']: '' ?>"  ><br>
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Prénom*</label>
                            <input type="text" class="form-control" name="prénom" placeholder="Veuillez saisir votre prénom" value="<?= isset($_SESSION['inputs']['prénom']) ? $_SESSION['inputs']['prénom']: '' ?>" ><br>
                        </div>



                        <div class="form-group">
                            <label for="exampleFormControlInput1">Vous êtes* :</label>


                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Genre" id="inlineRadio1" value="F"  >
                                <label class="form-check-label" for="feminin1">Une femme</label>
                                <input class="form-check-input" type="radio" name="Genre" id="inlineRadio2" value="M" >
                                <label class="form-check-label" for="masculin2">Un homme</label>
                             </div>



                        <div class="form-group">
                            <label for="Bdate" class="col-form-label "> Date de naissance*</label>
                            <input type="date" class="form-control"  id="start" name="trip-start" value="<?= isset($_SESSION['inputs']['M']) ? $_SESSION['inputs']['M']: '' ?>"  min="1900-01-01" max="2030-12-31" >
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="col-form-label">Code postal*</label>
                            <input type="text" class="form-control" id="Codeposatal" name="CP" value="<?= isset($_SESSION['inputs']['CP']) ? $_SESSION['inputs']['CP']: '' ?>" >  
                        </div>
                            
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="col-form-label">Adresse</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" value="<?= isset($_SESSION['inputs']['adresse']) ? $_SESSION['inputs']['adresse']: '' ?>">
                        </div>
                           
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="col-form-label">Ville</label>
                            <input type="text" class="form-control" id="ville"  name="ville" value="<?= isset($_SESSION['inputs']['ville']) ? $_SESSION['inputs']['ville']: '' ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="col-form-label">Email*</label>
                            <input type="email" class="form-control" name="email" placeholder="Roger.Love@gmail.com" id="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email']: '' ?>" >
                            <br>
                        </div>
                    
                    <hr>
                        
                    <h2 class="text-center text-uppercase ">Votre demande</h2> <br>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pour quel sujet :</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="sélection">
                            <option value="<?= isset($_SESSION['inputs']['sélection']) ? $_SESSION['inputs']['sélection'] : '' ?>" selected disabled>Veuillez sélectionner un sujet</option>
                            <option>Mes commandes</option>
                            <option>Question sur un produit</option>
                            <option>Réclamation</option>
                            <option>Option</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Posez votre question*:</label>
                            <textarea class="form-control" id="commentaire" rows="2" name="commentaire"  ><?= isset($_SESSION['inputs']['sélection']) ? $_SESSION['inputs']['sélection'] : '' ?></textarea>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" " id="cgu" >
                            <label class="form-check-label" for="cgu">J'accepte les conditions générales d'utilisation et de vente</label>
                            <div class="invalid-feedback">Vous devez accepter les CGU pour continuer</div>
                        </div>
                        <br>

                        <div class="form-check text-center">
                            <input class="btn btn-success" type="submit" value="Envoyer">
                            <input class="btn btn-dark" type="reset" value="Annuler">
                        </div>

                    </form>
                     
                <!-- Espace : Pide de page --> 

                <footer>
                    
                    <div class="row-fluid">
                    
                        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mentions légales</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Horaires</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">plan du site</a>
                                </li>
                            </ul>
                        </nav> 
                    </div>
                </footer>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
       
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

 <!-- Nettoyagede la session php Lors du rafraichissement de la page : 
Les inputs sont effacé après l'envoi du formulaire complet.
Les erreurs sont effacées à chaque fois qu'un champs est rempli après avoir appuyé sur 'envoyer'-->

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['error']);
?>