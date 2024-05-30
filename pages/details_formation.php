<?php
    include("function/function.php");
    $num = $_GET['num'];
    $infos = show_module_info($num);
	
    $infos_formateur = show_trainer($infos["id_formateur"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sources/FontAwesome/css/all.css">
    <link rel="stylesheet" href="../styles/root.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/details_formation.css">
    <title>WELEARN | <?php echo($infos["nom_module"]); ?></title>
</head>

<body>
    <?php include("nav.php"); ?>
    
    <div class="banner-formation">
    </div>
    <section class="info-formation" style="margin-bottom: 100px;">
        <div class="details">
            <h2><?php echo($infos["nom_module"]); ?></h2>
            <p style="margin-left: 20px;"><?php echo($infos["description_module"]); ?></p>
            <div class="container-formation">
                <h3>Objectifs de la formation</h3>
                <div class="about">
                    <p><?php echo($infos["objectif_module"]); ?></p>
                </div>
            </div>

            <div class="container-formation">
                <h3>Contenu du cours</h3>
                <div class="about">
                    <div>
                        <ol>
                            <?php
                                $contenus = explode(';', $infos["description_contenu"]);
                                foreach($contenus as $key => $contenu) {
                                    echo("<li>".$contenu."</li>");
                                }
                            ?>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="container-formation">
                <h3>Méthodes d'enseignement</h3>
                <div class="about">
                    <p>La durée de la formation peut varier en fonction du contenu et de la profondeur des sujets
                        abordés, allant de quelques jours à plusieurs semaines.
                    </p>
                </div>
            </div>

            <div class="container-formation">
                <h3>Durée</h3>
                <div class="about">
                    <p>La durée de la formation peut varier en fonction du contenu et de la profondeur des sujets
                        abordés,
                        allant de
                        quelques jours à plusieurs semaines.
                    </p>
                </div>
            </div>

            <div class="container-formation">
                <h3>Certification</h3>
                <div class="about">
                    <?php   if($infos["certification_module"] == 'O') { ?>
                                <p>À la fin de la formation, ce programme offrira une certification pour attester
                                    des compétences acquises dans ce domaine.
                                </p>
                    <?php   }   else    {    ?>
                                <p>À la fin de la formation, ce programme n'offrira pas de certification pour attester
                                    des compétences acquises tout au long de la formation.
                                </p>
                    <?php   }   ?>
                </div>
            </div>
        </div>
        <div class="resume">
            <img src="../images/reseau.jpg" alt="">
            <div class="resume-details">
                <h3>Formation "<?php echo($infos['nom_module']); ?>"</h3>
                <p><span style="font-weight: bold;">Formateur: </span> <?php echo($infos_formateur["nom_formateur"]); ?></p>
                <p><span style="font-weight: bold;">Durée: </span> <?php    echo($infos["duree_module"]);    ?> heures</p>
                <p><span style="font-weight: bold;">Etudiants: </span> 500</p>
                <p><span style="font-weight: bold;">Avis: </span><?php    echo($infos["avis_module"]);    ?></p>
                <p><span style="font-weight: bold;">Certification: </span><?php if($infos["certification_module"] == 'O') { echo("OUI"); } else { echo("NON"); }?></p>
            </div>
            <button>Rejoindre la formation</button>

        </div>
    </section>

    <footer id="footer">
        <div>
            <div>
                <div class="left">
                    <i class="fas fa-paperclip"></i>
                    <h3>Subscribe to Newsletter</h3>
                </div>
                <form class="right" method="get">
                    <input type="email" placeholder="Enter Your Email">
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
        <div class="footer-description">
            <div>
                <div>
                    <h2>WE<span style="color: rgb(219, 52, 66);">LEARN</span></h2>
                </div>
                <p>Nous préparons nos étudiants à l'entrée du monde professionnel grâce à nos formateurs expérimentés
                    dans
                    chaque domaine que nous enseignons.
                    <br />
                    Ils seront gratifiés de certificats à la fin de leurs formations.
                </p>
                <div id="socialLinksFooter">
                    <a href="https://www.facebook.com">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedIn.com">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://www.youtube.com">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.whatsapp.com">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div>
                <h3>ADDRESSE</h3>
                <div>
                    <p><i class="fas fa-location-arrow"></i><span>125 Rue Pasteur Antanimena, Antananarivo,
                            Madagascar</span></p>
                    <p><i class="fas fa-phone"></i><span>(+261)34-123-456-78</span></p>
                    <p><i class="fas fa-paperclip"></i><span>mymail@gmail.com</span></p>
                </div>
            </div>
            <div>
                <h3>FORMATIONS</h3>
                <div>
                    <ul>
                        <li>
                            <a href="formation.php#FormationInitiale">Formations initiales</a>
                        </li>
                        <li>
                            <a href="formation.php#FormationProfessionnelle">Formations professionnelles</a>
                        </li>
                        <li>
                            <a href="#p">Mon profil</a>
                        </li>
                        <li>
                            <a href="#p">Se connecter/S'inscrire</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <h3>POSTES RECENTS</h3>
                <div>
                    <a href="formation.php#FormationInitiale">
                        <img src="../assets/formation.jpg" alt="">
                        <div>
                            <p>BtoB approach System</p>
                            <p>Formation Pro</p>
                            <p><i class="fas fa-calendar"></i> 28 Janvier 2024</p>
                        </div>
                    </a>
                    <a href="formation.php#FormationProfessionelle">
                        <img src="../assets/reseaux.jpeg" alt="">
                        <div>
                            <p>Become Hacker Junior</p>
                            <p>Formation Pro</p>
                            <p><i class="fas fa-calendar"></i> 19 Janvier 2024</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="copyright-container">
            <p class="copyright-text">
                © 2024 All Rights Reserved. Developed By The WELEARN Community.
            </p>
        </div>
    </footer>
</body>

</html>