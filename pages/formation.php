<?php
    include("function/function.php");

    $module_f_initiale_langue = show_category_modules(1, 1);
    $module_f_initiale_info = show_category_modules(2, 1);
    $module_f_initiale_autre = show_category_modules(3, 1);
    $module_f_pro_langue = show_category_modules(1, 2);
    $module_f_pro_info = show_category_modules(2, 2);
    $module_f_pro_autre = show_category_modules(3, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/formation.css">
    <link rel="stylesheet" href="../sources/FontAwesome/css/all.css">
    <title>WELEARN - Formations</title>

</head>

<body>
    <?php include("nav.php"); ?>
    
    <div class="banner-formation">
        <div class="accroche container">
            <h3>ATTEIGNEZ VOS OBJECTIFS GRÂCE À <br><span class="text-up">UN APPRENTISSAGE EFFICACE</span></h3>
            <p>Explorez les possibilités infinies de votre apprentissage avec WeLearn, où la connaissance rencontre
                l'innovation et ouvre la porte à un avenir prometteur.</p>
            <a href="login.php" class="boutton boutton-1">SE CONNECTER</a>
            <a href="signin.php" class="boutton boutton-2">S'INSCRIRE</a>
        </div>
    </div>
    <div class="all_formation">
        <h2 id="FormationInitiale">Les formations initiales</h2>
        <img src="../images/learn.jpg" alt="image" class="img-decor">
        <div class="part-formation">
            <h3>Formations sur les langues</h3>
            <p class="description-part">
                Explorez nos formations linguistiques pour maîtriser de nouvelles langues et
                communiquer efficacement à l'international. Des programmes adaptés à tous les niveaux, offrant une
                immersion interactive dans la langue et la culture pour une progression rapide et enrichissante.
            </p>
        </div>
        <div class="row-formation">
            <?php   foreach($module_f_initiale_langue as $key => $module)  {   ?>

                        <div class="formation">
                            <img src="<?php echo($module["image_module"]); ?>" class="head-formation" alt="<?php echo($module['nom_module']); ?>">
                            <h4><?php echo($module['nom_module']);  ?></h4>
                            <p class="description-formation"><?php echo($module['description_module']);  ?></p>
                            <p class="rating">

                                <?php   for ($i = 1; $i <= $module['avis_module']; $i++)  {   ?>
                                                <i class="fas fa-star"></i>
                                <?php   }   ?>
                                
                            </p>
                            <p class="price"><?php echo($module['prix_module']." Ar"); ?></p>
                            <a href="details_formation.php?num=<?php echo($module["id_module"]); ?>" class="boutton button-formation">Détails</a>
                        </div>

            <?php   }   ?>
        </div>

        <div class="part-formation">
            <h3>Informatique</h3>
            <p class="description-part">Découvrez notre gamme de formations en informatique pour acquérir les
                compétences techniques indispensables dans le domaine numérique. Des cours adaptés à tous les niveaux,
                de la bureautique à la programmation, pour vous préparer à exceller dans un monde numérique en constante
                évolution.</p>
        </div>
        <div class="row-formation">
            <?php   foreach($module_f_initiale_info as $key => $module)  {   ?>

                        <div class="formation">
                            <img src="<?php echo($module["image_module"]); ?>" class="head-formation" alt="<?php echo($module['nom_module']); ?>">
                            <h4><?php echo($module['nom_module']);  ?></h4>
                            <p class="description-formation"><?php echo($module['description_module']);  ?></p>
                            <p class="rating">

                                <?php   for ($i = 1; $i <= $module['avis_module']; $i++)  {   ?>
                                                <i class="fas fa-star"></i>
                                <?php   }   ?>
                                
                            </p>
                            <p class="price"><?php echo($module['prix_module']." Ar"); ?></p>
                            <a href="details_formation.php?num=<?php echo($module["id_module"]); ?>" class="boutton button-formation">Détails</a>
                        </div>

            <?php   }   ?>
        </div>
        <div class="part-formation">
            <h3>Autres</h3>
            <p class="description-part">Découvrez notre diversité de formations dans des domaines variés tels que le
                commerce, le marketing, la
                communication et la comptabilité et finance. Des programmes conçus pour vous offrir les compétences
                essentielles
                et les connaissances nécessaires pour réussir dans votre carrière professionnelle.</p>
        </div>

        <div class="row-formation">
            <?php   foreach($module_f_initiale_autre as $key => $module)  {   ?>

                        <div class="formation">
                            <img src="<?php echo($module["image_module"]); ?>" class="head-formation" alt="<?php echo($module['nom_module']); ?>">
                            <h4><?php echo($module['nom_module']);  ?></h4>
                            <p class="description-formation"><?php echo($module['description_module']);  ?></p>
                            <p class="rating">

                                <?php   for ($i = 1; $i <= $module['avis_module']; $i++)  {   ?>
                                                <i class="fas fa-star"></i>
                                <?php   }   ?>
                                
                            </p>
                            <p class="price"><?php echo($module['prix_module']." Ar"); ?></p>
                            <a href="details_formation.php?num=<?php echo($module["id_module"]); ?>" class="boutton button-formation">Détails</a>
                        </div>

            <?php   }   ?>
        </div>
        <h2 id="FormationProfessionnelle">Les formations professionnelles</h2>
        <img src="../images/PROF.jpg" alt="image" class="img-decor">

        <div class="part-formation">
            <h3>Formations sur les langues</h3>
            <p class="description-part">Explorez nos formations linguistiques pour maîtriser de nouvelles langues et
                communiquer efficacement à l'international. Des programmes adaptés à tous les niveaux, offrant une
                immersion interactive dans la langue et la culture pour une progression rapide et enrichissante.</p>
        </div>
        <div class="row-formation">
            <?php   foreach($module_f_pro_langue as $key => $module)  {   ?>

                        <div class="formation">
                            <img src="<?php echo($module["image_module"]); ?>" class="head-formation" alt="<?php echo($module['nom_module']); ?>">
                            <h4><?php echo($module['nom_module']);  ?></h4>
                            <p class="description-formation"><?php echo($module['description_module']);  ?></p>
                            <p class="rating">

                                <?php   for ($i = 1; $i <= $module['avis_module']; $i++)  {   ?>
                                                <i class="fas fa-star"></i>
                                <?php   }   ?>
                                
                            </p>
                            <p class="price"><?php echo($module['prix_module']." Ar"); ?></p>
                            <a href="details_formation.php?num=<?php echo($module["id_module"]); ?>" class="boutton button-formation">Détails</a>
                        </div>

            <?php   }   ?>
        </div>

        <div class="part-formation">
            <h3>Informatique</h3>
            <p class="description-part">Découvrez notre gamme de formations en informatique pour acquérir les
                compétences techniques indispensables dans le domaine numérique. Des cours adaptés à tous les niveaux,
                de la bureautique à la programmation, pour vous préparer à exceller dans un monde numérique en constante
                évolution.</p>
        </div>
        <div class="row-formation">
            <?php   foreach($module_f_pro_info as $key => $module)  {   ?>

                        <div class="formation">
                            <img src="<?php echo($module["image_module"]); ?>" class="head-formation" alt="<?php echo($module['nom_module']); ?>">
                            <h4><?php echo($module['nom_module']);  ?></h4>
                            <p class="description-formation"><?php echo($module['description_module']);  ?></p>
                            <p class="rating">

                                <?php   for ($i = 1; $i <= $module['avis_module']; $i++)  {   ?>
                                                <i class="fas fa-star"></i>
                                <?php   }   ?>
                                
                            </p>
                            <p class="price"><?php echo($module['prix_module']." Ar"); ?></p>
                            <a href="details_formation.php?num=<?php echo($module["id_module"]); ?>" class="boutton button-formation">Détails</a>
                        </div>

            <?php   }   ?>
        </div>
        <div class="part-formation">
            <h3>Autres</h3>
            <p class="description-part">Découvrez notre diversité de formations dans des domaines variés tels que le
                commerce, le marketing, la
                communication et la comptabilité et finance. Des programmes conçus pour vous offrir les compétences
                essentielles
                et les connaissances nécessaires pour réussir dans votre carrière professionnelle.</p>
        </div>
        <div class="row-formation">
            <?php   foreach($module_f_pro_autre as $key => $module)  {   ?>

                        <div class="formation">
                            <img src="<?php echo($module["image_module"]); ?>" class="head-formation" alt="<?php echo($module['nom_module']); ?>">
                            <h4><?php echo($module['nom_module']);  ?></h4>
                            <p class="description-formation"><?php echo($module['description_module']);  ?></p>
                            <p class="rating">

                                <?php   for ($i = 1; $i <= $module['avis_module']; $i++)  {   ?>
                                                <i class="fas fa-star"></i>
                                <?php   }   ?>
                                
                            </p>
                            <p class="price"><?php echo($module['prix_module']." Ar"); ?></p>
                            <a href="details_formation.php?num=<?php echo($module["id_module"]); ?>" class="boutton button-formation">Détails</a>
                        </div>

            <?php   }   ?>
        </div>
    </div>

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
                            <a href="#FormationInitiale">Formations initiales</a>
                        </li>
                        <li>
                            <a href="#FormationProfessionnelle">Formations professionnelles</a>
                        </li>
                        <li>
                            <a href="#p">Mon profil</a>
                        </li>
                        <li>
                            <a href="../pages/login.php">Se connecter/S'inscrire</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <h3>POSTES RECENTS</h3>
                <div>
                    <a href="../pages/formation.php#FormationInitiale">
                        <img src="../assets/formation.jpg" alt="">
                        <div>
                            <p>BtoB approach System</p>
                            <p>Formation Pro</p>
                            <p><i class="fas fa-calendar"></i> 28 Janvier 2024</p>
                        </div>
                    </a>
                    <a href="../pages/formation.php#FormationProfessionelle">
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