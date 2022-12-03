<!-- code pour envoyer un mail -->
<?php 
    if (isset($_POST["submit"])){
        if (isset($_POST["user_name"])&& !empty($_POST["user_name"])&&
        isset($_POST["objet"])&& !empty($_POST["objet"])&& isset($_POST["user_message"])&& !empty($_POST["user_message"])&& 
        isset($_POST["user_mail"]) && !empty($_POST["user_mail"])){

            $nom=$_POST["user_name"];
            $mail=$_POST["user_mail"];
            $objet=$_POST["objet"];
            $msgutilisateur = $_POST["user_message"];
            $message='
                        Nom de l\'expéditeur: '.$nom.'
                        Mail de l\'expéditeur: '.$mail.'
                        '.$msgutilisateur.'
            ';

            echo "<p style='color:green; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Votre message  bien été envoyé, merci.</p>";
            
            $subject = "Test envoi mail";

            $headers = "Content-Type: text/plain; charset=utf-8\r\n";

            $headers .= "From: freddelan59450@gmail.com\r\n";

            if(mail("happyrush@hotmail.com", $objet, $message, $headers)){
                
                echo'';

            }else{

                echo 'Erreur envoi !';

            }
        }
        else {echo"<p style='color:red; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Il manque quelque chose !</p> ";}
    
    }
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://js.cx/libs/animate.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <meta type="screen" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <link rel="icon" href="media/favicon.png">

    <title>Portfolio</title>
</head>

<body>

    <header>
        <img src="Media/logo_transparent.png" alt="Logo_page" title="Accueil" id="logo" />
        <img src="Media/identité _Matrix.jpeg" alt="photo_identitée" id="identite" class="img-thumbnail bounce"
            onclick="bouncysonic(this)">

        <div class="titre">
            <h1 id="titrePrincipal" class="titrePrincipal"><span class="swap">Mon&nbsp;</span> Portfoli<span
                    class="bombRightOut">o</span></h1>
            <button type="button" onclick="document.getElementById('titrePrincipal').style.fontSize='160px'">Click
                Me!</button>
        </div>
        <div class=" trait">
            <hr />
        </div>
        <navigation class="navigation">
            <ul id="menu">
                <a type="button" class="btn btn-primary" href="#" title="aller à l'Accueil">Accueil</a>

                <a type="button" class="btn btn-primary" href="#Présentation"
                    title="aller à la Présentation">Présentation

                </a>
                <a type="button" class="btn btn-light" href="#projets" title="aller aux Compétences">Compétences</a>

                <a type="button" class="btn btn-danger" href="#specialitees"
                    title="aller aux Expériences">Expériences</a>

                <a type="button" class="btn btn-danger" href="#contact-form" title="aller à Contacts">Contact</a>
            </ul>
        </navigation>
    </header>
    <div id="Présentation" class="texte">
        <div>
            <p id="textExample">Bonjour je m'appelle Frédéric, je suis Développeur Web Junior Français. J'ai fait,
                 de ma passion pour l'informatique mon métier. Je mets mes compétences et mon savoir faire à votre service.

            </p>
            <div class="grid lg:grid-cols-3 col-span-2 lg:col-span-2 gap-6 container w-1/2 mx-auto text-center"
                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                <a href="https://twitter.com/#" target="_blanck" rel="noreferrer">
                    <button type="button" class="btn btn-light">

                        <i class="devicon-twitter-original mr-2"></i>Twitter</button>
                </a>
                <a href="https://www.linkedin.com/in/frederic-delannoy-bb5167250/" target="_blanck" rel="noreferrer">
                    <button type="button" class="btn btn-danger">

                        <i class="devicon-linkedin-plain mr-2"></i>Linkedin</button>
                </a>
                <a href="https://github.com/Freddelan" target="_blanck" rel="noreferrer">
                    <button type="button" class="btn btn-primary">

                        <i class="devicon-github-original mr-2"></i>Github</button>
                </a>
            </div>
        </div>
        <div>
            <img class="imgPresent" src="media/identité _Matrix.jpeg" alt="image_presentation">
        </div>
        <!-- <button type="button" onclick="animateText(textExample)" class="btn btn-success">Jouez l'animation !</button> -->
    </div>

    <div id="projets" class="projets">

        <h1 class="titreProjets">Quelques projets personnels</h1>
        <h2 class="tprojets">Projet pour un site de Yoga</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="Media/Screenshot_Yanga.png" alt="photo_yoga" class="img-thumbnail">
                </div>
                <div class="col">
                    <img src="Media/Screenshot_Yanga2.png" alt="photo_yoga" class="img-thumbnail">
                </div>

            </div>
        </div>
        <h2 class="tprojets">Projet pour un site de coiffure</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="Media/ScreenshotCoif_1.png" alt="photo_yoga" class="img-thumbnail">
                </div>
                <div class="col">
                    <img src="Media/ScreenshotCoif_2.png" alt="photo_yoga" class="img-thumbnail">
                </div>

            </div>
        </div>
        <h2 class="tprojets">Projet pour un blog de football</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="Media/Screenshot_10.png" alt="photo_foot" class="img-thumbnail">
                </div>
                <div class="col">
                    <img src="Media/Screenshot_12.png" alt="photo_foot" class="img-thumbnail">
                </div>

            </div>
        </div>
    </div>

    <div id="specialitees" class="specialitee">

        <h1 class="specialitees">Spécialitées</h1>
        <div> <label for="file">HTML</label>
            <p class="indic">70%</p>

            <progress id="file" max="100" value="70">70%</progress>
        </div>
        <div> <label for="file">CSS</label>
            <p class="indic">75%</p>

            <progress id="file" max="100" value="75">75%</progress>
        </div>
        <div>
            <label for="file">JAVASCRIPT</label>
            <p class="indic">55%</p>

            <progress id="file" max="100" value="55">55%</progress>
        </div>
        <div>
            <label for="file">BOOTSTRAP</label>
            <p class="indic">68%</p>

            <progress id="file" max="100" value="68">68%</progress>
        </div>
        <div>
            <label for="file">PHP</label>
            <p class="indic">50%</p>
            <progress id="file" max="100" value="50">50%</progress>
        </div>
        <div>
            <label for="file">MYSQL</label>
            <p class="indic">62%</p>
            <progress id="file" max="100" value="62">62%</progress>
        </div>
    </div>

    <div id="contact" class="container">

        <div class="row">

            <div class="col-xl-8 offset-xl-2 py-5">

                <h1>Formulaire de contact</h1>



                <p class="lead">Un projet en tête, un besoin ou juste une envie, n'hésitez-pas à m'envoyer un mail pour
                    en discuter...</p>


                <form id="contact-form" method="post" action="" role="form">





                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name"></label>
                                    <input id="form_name" type="text" name="user_name" class="form-control"
                                        placeholder="Veuillez entrer votre nom *" required="required"
                                        data-error="Nom est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email"></label>
                                    <input id="form_email" type="email" name="user_mail" class="form-control"
                                        placeholder="Veuillez entrer votre email *" required="required"
                                        data-error="Un email valid est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="objet"></label>
                                    <input class="form-control" type="text" id="objet" placeholder="Objet" name="objet">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message"></label>
                                    <textarea id="form_message" name="user_message" class="form-control"
                                        placeholder="Votre Message *" rows="4" required="required"
                                        data-error="Veuillez remplir le champ Message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="submit" class="btn btn-success btn-send" value="Envoyer">
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>

                </form>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->
    <script>


    </script>
    <script type=" text/javascript" src="script.js">
        </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</body>

</html>