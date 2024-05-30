<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../chatbot.js"></script>
    <link rel="stylesheet" href="../sources/FontAwesome/css/all.css">
    <link rel="stylesheet" href="../styles/contact.css">
    <link rel="stylesheet" href="../styles/chatbot.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/root.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>WELEARN - Home</title>

</head>

<body>
    <?php include("nav.php"); ?>

    <div class="banner">
        <div class="accroche container">
            <h3>TRANSFORMEZ VOTRE AVENIR AVEC <br><span class="text-up">UNE FORMATION DE QUALITE</span> </h3>
            <p>Explorez les possibilités infinies de votre apprentissage avec WeLearn, où la connaissance rencontre
                l'innovation et ouvre la porte à un avenir prometteur.</p>
            <a href="login.php" class="boutton boutton-1">SE CONNECTER</a>
            <a href="signin.php" class="boutton boutton-2">S'INSCRIRE</a>
        </div>
    </div>
    <div class="container open-chat">
        <p>Vous avez des questions ? N'hésitez pas à venir nous les poser</p>

        <button class=" chat-box" onclick="showChat()">Ouvrir le Chat</button>
    </div>
    <div class="chat-icon"></div>
    <div class="chatbot" id="chatbot">
        <div class="box">
            <div class="head-chat">
                <h2>Chat</h2>
                <button id="quit" onclick="closeChat()">x</button>
            </div>
            <div class="discuss"></div>
            <div class="chat">
                <div class="container-inp">
                    <div class="inp">
                        <textarea placeholder="Entrez votre message" id="message" minlength="1"
                            maxlength="1500"></textarea>
                    </div>
                    <button onclick="sendMessage()" class="submit"><img src="../assets/send.svg"></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="grille-flexbox">

            <div class="colonne">
                <h2>Découvrez, Apprenez, Réussissez</h2>
                <p>Que vous cherchiez à acquérir de nouvelles compétences, à perfectionner vos connaissances existantes
                    ou à explorer de nouveaux horizons professionnels, nous sommes là pour vous accompagner à chaque
                    étape de votre parcours.</p>
                <a href="formation.php" class="boutton formations">Explorer les formations</a>
            </div>
            <div class="colonne image-container img-1">
            </div>
        </section>
        <section class="grille-flexbox">
            <div class="colonne image-container img-2">
            </div>
            <div class="colonne">
                <h2>Lancez-vous dès Aujourd'hui !</h2>
                <p>Rejoignez des milliers d'apprenants qui ont déjà choisi WeLearn pour réaliser leurs objectifs
                    éducatifs. Découvrez nos cours dès maintenant et commencez votre voyage vers le succès
                    professionnel.</p>
                <a href="formation.php" class="boutton formations">Explorer les formations</a>
            </div>
        </section>
    </div>

    <div class="info" style="margin-bottom: 0px;">
        <div class="grille-flexbox-2">
            <div class="card grid-card">
                <div>
                    <i class="fas fa-arrows"></i>
                    <h2>Flexibilité Totale</h2>
                </div>
                <p>Apprenez à votre propre rythme, où que vous soyez, avec un accès 24/7 à nos ressources éducatives..
                </p>
            </div>
            <div class="card grid-card">
                <div>
                    <i class="fas fa-users"></i>
                    <h2>Communauté Engagée</h2>
                </div>
                <p>Connectez-vous avec des apprenants du monde entier, partagez des idées et collaborez pour enrichir
                    votre expérience d'apprentissage.</p>
            </div>
        </div>

        <div class="grille-flexbox-2">
            <div class="card grid-card">
                <div>
                    <i class="fas fa-certificate"></i>
                    <h2>Certifications Reconnues </h2>
                </div>
                <p>Obtenez des certifications valorisées par l'industrie, renforçant votre crédibilité sur le marché du
                    travail.</p>
            </div>
            <div class="card grid-card">
                <div>
                    <i class="fas fa-bookmark"></i>
                    <h2>Formation Haute Qualité</h2>
                </div>
                <p>Nos formations sont développés par des experts de l'industrie pour vous offrir des connaissances
                    pratiques et actuelles</p>
            </div>
        </div>
    </div>

    <main id="contact">
        <h1>Contact Us</h1>

        <div class="row-two">
            <div class="img-contact-container">
                <div class="row">
                    <div class="object">
                        <i class="fas fa-location-arrow"></i>
                        <p><b>Addresse</b></p>
                        <p>125 Rue Pasteur Antanimena, Antananarivo, Madagascar</p>
                    </div>
                    <div class="object">
                        <i class="fas fa-phone"></i>
                        <p><b>Phone Number</b></p>
                        <p>(+261)34-12-345-67</p>
                    </div>
                    <div class="object">
                        <i class="fas fa-paperclip"></i>
                        <p><b>Email Address</b></p>
                        <p>mymail@gmail.com</p>
                    </div>
                </div>
            </div>
            <section class="right-hand-section">
                <h2>Get In Touch</h2>
                <p>Avez-vous des suggestions ou nous envoyer vos salutations? Notre équipe est prête à vous aider 24/7
                </p>
                <form class="form-contact-container" method="get">
                    <div>
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                    </div>
                    <div>
                        <input type="tel" placeholder="Phone">
                        <input type="text" placeholder="Subject">
                    </div>
                    <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="ENVOYER">
                </form>
            </section>
        </div>
    </main>

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