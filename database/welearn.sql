-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 04 Avril 2024 à 17:05
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(8) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL,
  `description_categorie` text NOT NULL,
  `image_categorie` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `description_categorie`, `image_categorie`) VALUES
(1, 'Formation initiale', '', '../images/learn.jpg'),
(2, 'Formation professionnelle', '', '../images/PROF.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `id_contenu` int(8) NOT NULL,
  `nom_contenu` varchar(255) NOT NULL,
  `description_contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contenu module`
--

CREATE TABLE `contenu module` (
  `id_contenu` int(8) NOT NULL,
  `id_module` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etudiant` int(4) NOT NULL,
  `nom_etudiant` varchar(255) NOT NULL,
  `prenom_etudiant` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `logement_etudiant` varchar(255) NOT NULL,
  `email_etudiant` varchar(255) NOT NULL,
  `numero_telephone_etudiant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE `formateur` (
  `id_formateur` int(8) NOT NULL,
  `nom_formateur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formateur`
--

INSERT INTO `formateur` (`id_formateur`, `nom_formateur`) VALUES
(1, 'Mr Alfonse DUBOIS'),
(2, 'Mme Isabelle Lambert'),
(3, 'Mme Marie-Claire Dubois'),
(4, 'Mr François Leblanc'),
(5, 'Mme Catherine Martin'),
(6, 'Mr Jean-Pierre Dupont'),
(7, 'Mme Sophie Bouchard'),
(8, 'Mr Michel Moreau'),
(9, 'Mme Aisha Patel'),
(10, 'Mme Fatima Khan'),
(11, 'Mr Lucas Dupont'),
(12, 'Mme Astrid Silverwing');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` int(11) NOT NULL,
  `nom_module` varchar(255) NOT NULL,
  `duree_module` decimal(10,0) NOT NULL,
  `avis_module` int(11) NOT NULL,
  `prix_module` decimal(10,0) NOT NULL,
  `description_module` text NOT NULL,
  `certification_module` char(1) NOT NULL,
  `objectif_module` text NOT NULL,
  `image_module` varchar(500) NOT NULL,
  `id_sous_categorie` int(11) NOT NULL,
  `id_formateur` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `duree_module`, `avis_module`, `prix_module`, `description_module`, `certification_module`, `objectif_module`, `image_module`, `id_sous_categorie`, `id_formateur`, `id_categorie`) VALUES
(1, 'Apprendre le français', '60', 4, '42000', 'Commencez votre voyage linguistique avec notre cours intensif de français, adapté à tous les niveaux.', 'N', 'Renforcer la compréhension écrite à travers des textes authentiques.', '../assets/french.jpg', 1, 1, 1),
(2, 'Débuter en Anglais', '18', 3, '35000', 'Acquérez les bases essentielles de l\'anglais pour communiquer efficacement dans un environnement anglophone.', 'N', 'Renforcer la compréhension et l\'expression dans des situations de communication variées.', '../assets/english.png', 1, 2, 1),
(3, 'Allemand débutant', '23', 4, '45000', 'Plongez dans les fondamentaux de la langue allemande avec notre programme conçu pour les débutants absolus.', 'N', 'Développer la compétence communicative à l\'oral et à l\'écrit.', '../assets/deutsch.webp', 1, 3, 1),
(4, 'Initiation au chinois', '30', 4, '40000', 'Explorez les bases de la langue chinoise et découvrez une nouvelle culture fascinante à travers notre cours d\'initiation', 'N', 'Favoriser l\'autonomie et la confiance des apprenants dans leur utilisation de la langue chinoise.', '../assets/chinois.jpg', 1, 4, 1),
(5, 'La bureautique', '60', 3, '35000', 'Maîtrisez les outils essentiels de la bureautique pour optimiser votre efficacité professionnelle au quotidien.', 'N', 'Conception de présentations percutantes', '../assets/burautique.jpg', 2, 5, 1),
(6, 'La programmation', '72', 4, '60000', 'Découvrez les principes fondamentaux de la programmation et développez des compétences précieuses dans ce domaine en pleine expansion.', 'N', 'Consolider les compétences de programmation de base et les appliquer à des problèmes plus complexes.', '../assets/dev.jpg', 2, 6, 1),
(7, 'Réseaux et Système', '68', 4, '56000', 'Explorez les bases des réseaux informatiques et des systèmes pour comprendre leur fonctionnement et leur maintenance.', 'N', 'Comprendre les principes fondamentaux des réseaux informatiques.', '../assets/reseaux.jpeg', 2, 7, 1),
(8, 'Cyber-Sécurité', '96', 5, '76000', 'Plongez dans le monde de la cyber-sécurité et apprenez à protéger efficacement les données et les réseaux contre les menaces en ligne.', 'N', 'Connaître les principes de base de la sécurité informatique.', '../assets/cybesecurite.png', 2, 8, 1),
(9, 'Commerce', '18', 4, '26000', 'principes fondamentaux du commerce, y compris la vente, le marketing et la gestion des stocks.', 'N', 'Comprendre le fonctionnement des entreprises', '../assets/commerce.jpeg', 3, 9, 1),
(10, 'Marketing', '20', 4, '28000', 'Découvrez les stratégies et les techniques modernes de marketing pour promouvoir efficacement des produits ou des services sur le marché.', 'N', 'Comprendre les besoins des consommateurs', '../assets/marketing.jpg', 3, 10, 1),
(11, 'Communication', '18', 4, '35000', 'Améliorez vos compétences en communication verbale et écrite pour transmettre clairement vos idées et interagir efficacement avec les autres.', 'N', 'Maîtriser les techniques de communication basique du niveau professionnel.', '../assets/communication.png', 3, 11, 1),
(12, 'Comptabilité et Finance', '72', 4, '60000', 'Acquérez des connaissances approfondies en comptabilité, en analyse financière et en gestion des finances personnelles ou d\'entreprise.', 'N', 'Comment faire fonctionner l\'environnement économique de mon entreprise?', '../assets/compta.webp', 3, 12, 1),
(13, 'Maitriser la communication écrite', '48', 4, '35000', 'Développez vos compétences en rédaction pour produire des documents professionnels, des rapports et des présentations convaincantes.\r\n\r\n', 'O', 'Rédaction de documents professionnels, tel que les rapports et les présentations de projet.', '../assets/french1.webp', 1, 1, 2),
(14, 'Learning basic communication', '36', 5, '50000', 'Apprenez les bases de la communication interpersonnelle pour établir des relations positives et productives dans un environnement professionnel', 'O', 'Communiquer avec éloquence pour établir des relations productives dans un environnement professionnel.', '../assets/communication1.png', 1, 2, 2),
(15, 'Become pro in English', '36', 4, '48000', 'Transformez-vous en un professionnel de l\'anglais en perfectionnant votre grammaire, votre vocabulaire et votre expression orale et écrite.', 'O', 'Acquérir et utiliser des jargons professionnel de la langue anglaise.', '../assets/english1.jpg', 1, 3, 2),
(16, 'Advanced and Business English', '80', 4, '50000', 'Maîtrisez l\'anglais avancé spécifiquement adapté aux contextes professionnels et commerciaux.', 'O', 'Maîtriser l\'anglais avancé spécifiquement adapté aux contextes professionnels et commerciaux.', '../assets/english.png', 1, 4, 2),
(17, 'Devenir web developpeur', '48', 4, '48000', 'Acquérez les compétences nécessaires pour concevoir, développer et déployer des applications web interactives et conviviales.', 'O', 'Acquérir les compétences nécessaires pour concevoir, développer et déployer des applications web interactives et conviviales.', '../assets/dev1.jpeg', 2, 5, 2),
(18, 'Maitriser le réseau', '80', 4, '50000', 'Apprenez à concevoir, configurer et gérer des réseaux informatiques pour assurer une connectivité sécurisée et fiable.', 'O', 'Capacité à concevoir, configurer et gérer des réseaux informatiques pour assurer une connectivité sécurisée et fiable.', '../assets/reseaux1.jpeg', 2, 6, 2),
(19, 'Apprendre le Hacking', '48', 4, '48000', 'Découvrez les techniques de hacking éthique et apprenez à sécuriser les systèmes informatiques contre les cyberattaques', 'O', 'Apprendre et acquérir les techniques de hacking éthique pour sécuriser les systèmes informatiques contre les cyberattaques', '../assets/hacking.webp', 2, 7, 2),
(20, 'Machine Learning', '80', 4, '50000', 'Explorez les principes et les applications du machine learning pour développer des systèmes intelligents capables d\'apprendre et de s\'adapter.', 'O', 'Connaître les principes et les applications du machine learning pour développer des systèmes intelligents capables d\'apprendre et de s\'adapter.', '../assets/burautique1.jpg', 2, 8, 2),
(21, 'Apprendre à négocier', '48', 5, '48000', 'Acquérez des compétences essentielles en négociation pour conclure des accords mutuellement bénéfiques dans divers contextes professionnels', 'O', 'Acquérez des compétences essentielles en négociation pour conclure des accords mutuellement bénéfiques dans divers contextes professionnels', '../assets/communication1.png', 3, 9, 2),
(22, 'Technique de vente efficace', '80', 4, '50000', 'Maîtrisez les techniques de vente persuasives pour convaincre les clients potentiels et conclure des ventes réussies.', 'O', 'Maîtrisez les techniques de vente persuasives pour convaincre les clients potentiels et conclure des ventes réussies.', '../assets/commerce1.jpg', 3, 10, 2),
(23, 'B to B approach system\r\n', '96', 5, '96000', 'Découvrez les stratégies et les tactiques pour développer des relations commerciales efficaces entre entreprises', 'O', 'Maîtriser les stratégies et les tactiques pour développer des relations commerciales efficaces entre entreprises', '../assets/marketing.png', 3, 11, 2),
(24, 'Etablir un état financier', '80', 4, '50000', 'Apprenez à préparer et à analyser des états financiers pour évaluer la santé financière d\'une entreprise et prendre des décisions éclairées.', 'O', 'Apprenez à préparer et à analyser des états financiers pour évaluer la santé financière d\'une entreprise et prendre des décisions éclairées.\r\n\r\n', '../assets/comptabilite.webp', 3, 12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sous categorie`
--

CREATE TABLE `sous categorie` (
  `id_sous_categorie` int(8) NOT NULL,
  `nom_sous_categorie` varchar(255) NOT NULL,
  `description_sous_categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sous categorie`
--

INSERT INTO `sous categorie` (`id_sous_categorie`, `nom_sous_categorie`, `description_sous_categorie`) VALUES
(1, 'Langues', 'Explorez nos formations linguistiques pour maîtriser de nouvelles langues et communiquer efficacement à l\'international. Des programmes adaptés à tous les niveaux, offrant une immersion interactive dans la langue et la culture pour une progression rapide et enrichissante.'),
(2, 'Informatique', 'Découvrez notre gamme de formations en informatique pour acquérir les compétences techniques indispensables dans le domaine numérique. Des cours adaptés à tous les niveaux, de la bureautique à la programmation, pour vous préparer à exceller dans un monde numérique en constante évolution.'),
(3, 'Autres', 'Découvrez notre diversité de formations dans des domaines variés tels que le commerce, le marketing, la communication et la comptabilité et finance. Des programmes conçus pour vous offrir les compétences essentielles et les connaissances nécessaires pour réussir dans votre carrière professionnelle.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`id_contenu`);

--
-- Index pour la table `contenu module`
--
ALTER TABLE `contenu module`
  ADD KEY `id_module` (`id_module`),
  ADD KEY `id_contenu` (`id_contenu`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`);

--
-- Index pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`id_formateur`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`),
  ADD KEY `id_formateur` (`id_formateur`),
  ADD KEY `id_sous_categorie` (`id_sous_categorie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `sous categorie`
--
ALTER TABLE `sous categorie`
  ADD PRIMARY KEY (`id_sous_categorie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `id_contenu` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etudiant` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `formateur`
--
ALTER TABLE `formateur`
  MODIFY `id_formateur` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `sous categorie`
--
ALTER TABLE `sous categorie`
  MODIFY `id_sous_categorie` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contenu module`
--
ALTER TABLE `contenu module`
  ADD CONSTRAINT `id_contenu` FOREIGN KEY (`id_contenu`) REFERENCES `contenu` (`id_contenu`),
  ADD CONSTRAINT `id_module` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `id_formateur` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_formateur`),
  ADD CONSTRAINT `id_sous_categorie_module` FOREIGN KEY (`id_sous_categorie`) REFERENCES `sous categorie` (`id_sous_categorie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
