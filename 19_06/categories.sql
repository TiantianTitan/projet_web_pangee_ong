-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 19 juin 2024 à 14:07
-- Version du serveur : 10.6.17-MariaDB-cll-lve
-- Version de PHP : 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `c2015705c_soglo`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `price` decimal(20,0) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `idpaye` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `category`, `description`, `status`, `price`, `date_created`, `idpaye`) VALUES
(1, 'Video ICDL', '', 1, 50, '2022-12-15 09:53:56', '1'),
(4, 'POWERPOINT 2016', '&lt;p&gt;POWERPOINT STANDAR 2016&lt;br&gt;&lt;/p&gt;', 1, 997, '2022-12-19 12:02:51', ''),
(5, 'WordPress', '&lt;p&gt;WordPress&lt;br&gt;&lt;/p&gt;', 1, 900, '2023-01-21 11:17:59', ''),
(6, 'Formation Excel Standard ', '', 1, 990, '2023-02-03 19:44:40', ''),
(7, 'Formation PowerPoint avancÃ©e', '', 1, 990, '2023-02-03 19:46:37', ''),
(8, 'Formation Excel AvancÃ©e', '', 1, 990, '2023-02-03 19:47:35', ''),
(9, 'Formation Photoshop Standard', '', 1, 990, '2023-02-03 19:49:17', ''),
(10, 'Formation Photoshop AvancÃ©e', '', 1, 990, '2023-02-03 19:49:58', ''),
(11, 'Formation Entrepreneuriat : Tactiques et stratÃ©gies de communication ', '', 1, 497, '2023-04-18 07:50:19', ''),
(12, 'Formation Entrepreneuriat : Cours complet ', '', 1, 2997, '2023-04-18 07:57:50', ''),
(13, 'Formation Entrepreneuriat : Visualiser son marchÃ© pour mieux vendre ', '', 1, 497, '2023-04-18 08:07:21', ''),
(14, 'Formation Entrepreneuriat : Gestion de la trÃ©sorerie et financements du projet', '', 1, 497, '2023-04-18 08:10:39', ''),
(15, 'Formation Entrepreneuriat : Mettre ses compÃ©tences au service de son projet', '', 1, 497, '2023-04-18 08:11:56', ''),
(16, 'Formation Entrepreneuriat : FormalitÃ©s et suivi administratif d une entreprise', '', 1, 497, '2023-04-18 08:32:28', ''),
(17, 'Formation Entrepreneuriat : DÃ©velopper le pouvoir d attraction sur sa clientÃ¨le ', '', 1, 497, '2023-04-18 08:33:13', ''),
(18, 'Formation Entrepreneuriat : Anticiper le lancement, et bien choisir ses partenaires et ses canaux de diffusion ', '', 1, 497, '2023-04-18 08:35:30', ''),
(19, 'Illustrator standard', '&lt;p&gt;&lt;b&gt;Gestion des fichiers&amp;nbsp;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Formats de fichiers bitmap et vectoriel\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Format de document et d\'impression\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Environnement (m&eacute;moire, polices,\r\npr&eacute;f&eacute;rences)\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Bridge, recherches et outils inter\r\napplications, collections\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Plan de travail, affichage, r&egrave;gles, rep&egrave;res,\r\ngrille, outils, palettes&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;\r\nCr&eacute;ation de trac&eacute;s\r\n&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Pathfinder, primitives, outil plume,\r\ncrayons, d&eacute;grad&eacute;s de formes&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;\r\n&bull; Importation de trac&eacute;s et calques Autocad\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Vectorisation d\'images Bitmap\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;S&eacute;lection, manipulation de trac&eacute;s\r\n&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Fl&egrave;ches et lassos\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Empilement des objets, alignements et\r\nr&eacute;partition\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Transformations\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Aide au positionnement\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Outils de d&eacute;formation&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;\r\nPalettes des calques\r\n&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Organisation, affichage, verrouillage, noms\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; S&eacute;lections et actions sur les objets&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;\r\nMise en couleur\r\n&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Palettes couleurs, d&eacute;grad&eacute;s, motifs\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Biblioth&egrave;ques de nuances, groupes de\r\ncouleurs &lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Filtres colorim&eacute;triques\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; D&eacute;grad&eacute;s avec maillag\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;Typographie\r\n&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Mise en forme du caract&egrave;re et du\r\nparagraphe\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Feuilles de style et justification avanc&eacute;e\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Outils de texte et modification des objets\r\ntextes\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Vectorisation\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Tableaux simples\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;Fonctions avanc&eacute;es\r\n&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Masque, trac&eacute;s transparents\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Pixellisation&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;\r\n&bull; Formes et motifs de trac&eacute;s\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Filtres et effets, la palette Aspects\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Styles d\'objets et symboles\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Enveloppes\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Redimensionnement intelligent\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Document multipages et gestion des plans\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Introduction aux effets 3D\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;Finalisation du document\r\n&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Pr&eacute;paration avant flashage, nettoyage,\r\ns&eacute;paration\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Enregistrements PDF, SVG, Flash, XFL...\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Pr&eacute;paration de l\'impression&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;\r\nAtelier encadr&eacute; d\'application\r\n&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Assimilation et mise en pratique autour\r\nd\'exercices vari&eacute;s&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;\r\n&bull; R&eacute;flexions m&eacute;thodologiques autour de\r\nprojets personnels\r\n&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&bull; Questions-r&eacute;ponses, trucs et astuces&lt;/span&gt;&lt;/p&gt;', 1, 897, '2023-04-21 12:20:17', ''),
(20, 'ILLUSTRATOR AVANCE', '&lt;p&gt;&lt;b&gt;Interface et gestion des documents\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&bull; Bridge, recherches et outils\ninterapplications, collections\n&lt;/p&gt;&lt;p&gt;&bull; Pr&eacute;f&eacute;rences couleur inter-applications,\ninterface&lt;/p&gt;&lt;p&gt;&lt;b&gt;\nGestion des couleurs&lt;/b&gt;&lt;/p&gt;&lt;p&gt;\n&bull; Mode colorim&eacute;trique\n&lt;/p&gt;&lt;p&gt;&bull; Types de couleurs, l\'atout des couleurs\ndemi-tons&lt;/p&gt;&lt;p&gt;\n&bull; Biblioth&egrave;ques de nuances, groupes de\ncouleur, couleurs dynamiques, filtres\ncouleurs&lt;/p&gt;&lt;p&gt;\n&bull; Liens avec XPress et Indesign&lt;/p&gt;&lt;p&gt;&lt;b&gt;\nS&eacute;lections&lt;/b&gt;&lt;/p&gt;&lt;p&gt;\n&bull; S&eacute;lection par les fl&egrave;ches, baguette magique&lt;/p&gt;&lt;p&gt;\n&bull; S&eacute;lection dans les calques ou l&rsquo;aspect\n&lt;/p&gt;&lt;p&gt;&bull; Isoler un groupe ou un objet&lt;/p&gt;&lt;p&gt;&lt;b&gt;\nModification des objets&lt;/b&gt;&lt;/p&gt;&lt;p&gt;\n&bull; Importation de trac&eacute;s et calques Autocad&lt;/p&gt;&lt;p&gt;\n&bull; Crayons, forme de tache et actions sur les\ntrac&eacute;s\n&lt;/p&gt;&lt;p&gt;&bull; M&eacute;thodes de cr&eacute;ation de masque\nd&rsquo;&eacute;cr&ecirc;tage&lt;/p&gt;&lt;p&gt;\n&bull; Transparence et mode de fusion, masque\nd&rsquo;opacit&eacute;\n&lt;/p&gt;&lt;p&gt;&bull; Trac&eacute;s &agrave; fonds et contours multiples&lt;/p&gt;&lt;p&gt;\n&bull; Transformations, d&eacute;formations,\nenveloppes, redimensionnement intelligent\n&lt;/p&gt;&lt;p&gt;&bull; Effets 3D, extrusion et r&eacute;volution, placage&lt;/p&gt;&lt;p&gt;&lt;b&gt;\nFiltres ou effets ?\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&bull; Pathfinders filtres ou effets\n&bull; Objets ou pixels ? param&egrave;tres&lt;/p&gt;&lt;p&gt;\n&bull; Formes et motifs de trac&eacute;s\n&bull; Richesse de la palette Aspects&lt;/p&gt;&lt;p&gt;\n&bull; Application &agrave; un objet, un groupe ou un\ncalque\n&lt;/p&gt;&lt;p&gt;&bull; Feuilles de styles graphiques d&rsquo;objets\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;Symboles&lt;/b&gt;&lt;/p&gt;&lt;p&gt;\n&bull; Modes de disposition sur la page&lt;/p&gt;&lt;p&gt;\n&bull; Transformation des occurrences de symboles,\nmodification, cr&eacute;ation de symboles\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;Texte\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&bull; Cha&icirc;nage et habillage\n&lt;/p&gt;&lt;p&gt;&bull; Feuilles de styles et justification avanc&eacute;e,\nc&eacute;sure&lt;/p&gt;&lt;p&gt;\n&bull; Effets sur les textes\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;Impression et formats\nd\'enregistrement\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&bull; Pr&eacute;paration avant flashage, nettoyage,\n&eacute;tapes de d&eacute;grad&eacute;s, pixellisation,\ntransparences\n&lt;/p&gt;&lt;p&gt;&bull; S&eacute;paration et couleurs demi-tons, gestion\ndes d&eacute;fonces et recouvrements\n&lt;/p&gt;&lt;p&gt;&bull; Formats EPS, PDF, SVG, Flash, XFL&lt;br&gt;&lt;/p&gt;', 1, 897, '2023-04-21 12:23:08', ''),
(21, 'INDESIGN STANDARD', '&lt;p&gt;&lt;b&gt;1 - Comprendre les fonctionnalit&eacute;s \r\nd\'InDesign pour bien l\'exploiter &lt;/b&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; InDesign dans l&rsquo;environnement Cloud : o les \r\npanneaux ; espace de travail ; &lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; la palette d&rsquo;outils ; \r\nl&rsquo;interface ; personnalisation de l&rsquo;espace de \r\ntravail. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Manipuler et g&eacute;rer les blocs : o placement, \r\nverrouillage, duplication, alignement, ... \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; La palette de contr&ocirc;le contextuelle. \r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;2 - Travailler le texte et la typographie \r\ndans InDesign&lt;/b&gt; \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Saisir, s&eacute;lectionner et modifier du texte. \r\n&bull; Le classeur de polices. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Ma&icirc;triser la typographie : o interlignage, \r\napproche, c&eacute;sure, r&eacute;glages de justification. \r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;3 - G&eacute;rer les blocs&lt;font color=&quot;#3984c6&quot;&gt; \r\n&lt;/font&gt;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Cha&icirc;ner des blocs de textes. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Exploiter le multicolonnage et les balances \r\nautomatiques. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Utiliser les rep&egrave;res de montage et les rep&egrave;res \r\ncomment&eacute;s. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Utiliser les espacements et r&eacute;partitions \r\ndynamiques. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Comprendre la notion de grille de page.\r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;4 - Mettre en forme le texte et g&eacute;rer \r\nles couleurs&lt;/b&gt; \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; &bull; Importer du texte : o texte court ; texte \r\nlong avec g&eacute;n&eacute;ration de pages. &lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Ma&icirc;triser les feuilles de styles : o styles de \r\nparagraphes ; styles de caract&egrave;res ; styles \r\nd&rsquo;objets. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; G&eacute;rer et cr&eacute;er des couleurs CMJN, RVB et \r\ndes tons directs. &lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; M&eacute;moriser et partager un nuancier. \r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;5 - Mise en page &eacute;volu&eacute;e : images, \r\nhabillage, tableaux et calques \r\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Ma&icirc;triser les diff&eacute;rents formats d\'images : \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Importer des images (pr&eacute;par&eacute;es dans \r\nPhotoshop). \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Habiller des images. \r\n&bull; Cr&eacute;er des biblioth&egrave;ques. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Cr&eacute;er des tableaux. \r\n&bull; Importer des tableaux Excel. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Utiliser des groupes de calques. \r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;6 - Cr&eacute;er des gabarits et pr&eacute;parer le \r\ndocument pour les diff&eacute;rentes \r\ndiffusions \r\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Le panneau de pages et les variantes de pages. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Cr&eacute;er et utiliser les gabarits. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Organiser le chemin de fer. \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Rassembler, diffuser le document (format PDF, \r\nSWF). \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; R&eacute;flexion sur les nouveaux modes de diffusion \r\n(Tablettes&hellip;). \r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;7 - R&eacute;aliser des mises en page \r\ncompl&egrave;tes \r\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &Eacute;valuation du transfert des acquis pour valider la \r\nmise en &oelig;uvre en situation de travail&lt;/p&gt;', 1, 897, '2023-04-21 12:26:51', ''),
(22, 'INDESIGN AVANCE', '&lt;p&gt;&lt;b&gt;DOCUMENTS LONGS / TABLE DES \r\nMATI&Egrave;RES &amp;amp; INDEX \r\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Documents longs \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Cr&eacute;er / G&eacute;rer un document long \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Synchroniser les styles du document \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Num&eacute;roter des pages \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; G&eacute;rer le num&eacute;ro des chapitres du \r\ndocument \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; G&eacute;rer les listes num&eacute;rot&eacute;es du document \r\nTable des mati&egrave;res \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Cr&eacute;ation &amp;amp; Mise &agrave; jour \r\n&bull; Styles de table des mati&egrave;res Index \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Cr&eacute;er un index simple \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Cr&eacute;er un index avec des rubriques \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Cr&eacute;er des r&eacute;f&eacute;rences crois&eacute;es dans l&rsquo;index \r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;V&Eacute;RIFICATIONS &amp;amp; ASSEMBLAGE \r\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Aper&ccedil;u des s&eacute;parations \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Exporter &amp;amp; Afficher en niveau de gris \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Color Oracle \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Contr&ocirc;le en amont \r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;FUSION DES DONN&Eacute;ES \r\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;MISE EN FORME &amp;amp; MODIFICATION \r\nAVANC&Eacute;ES \r\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Texte &amp;amp; Options de blocs variables \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; R&eacute;f&eacute;rences crois&eacute;es \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Texte conditionnel \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Variables de texte \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Colonnes variables (marges)&lt;/p&gt;&lt;p&gt;MISE EN PAGE LIQUIDE DANS \r\nINDESIGN \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Introduction &agrave; la mise en page liquide \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Mise &agrave; l&rsquo;&eacute;chelle \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Recentrer \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Contr&ocirc;l&eacute; par le gabarit \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Variantes de mise en page&hellip; \r\n&lt;/p&gt;&lt;p&gt;SWF &amp;amp; PDF INTERACTIF\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Introduction aux SWF &amp;amp; PDF interactif \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Importer vid&eacute;o et son \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Export en PDF \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Animation &amp;amp; Trajectoires \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp; &bull; Export en SWF \r\n&lt;/p&gt;&lt;p&gt;FORMULAIRE PDF \r\n&lt;/p&gt;&lt;p&gt;FLIPBOOK AU FORMAT SWF \r\n&lt;/p&gt;&lt;p&gt;EBOOK AU FORMAT PDF / EPUB \r\n&lt;/p&gt;&lt;p&gt;PUBLICATION FOLIO \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Introduction &agrave; la publication \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Diaporamas \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Panoramas \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Audio &amp;amp; Vid&eacute;o \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Blocs d&eacute;filant \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp; &bull; Contenu Web \r\n&bull; Publier Folio&lt;/p&gt;', 1, 897, '2023-04-21 12:41:31', ''),
(23, 'DREAMWEAVER STANDARD', '', 1, 897, '2023-04-21 12:58:48', ''),
(24, 'SKETCHUP STANDARD', '', 1, 897, '2023-04-21 13:06:03', ''),
(26, 'REVIT STANDARD', '', 1, 897, '2023-04-21 13:13:29', ''),
(27, 'FACEBOOK INITIATION', '', 1, 797, '2023-04-21 13:13:58', ''),
(28, 'INSTAGRAM INITIATION', '', 1, 797, '2023-04-21 13:14:05', ''),
(29, 'TIKTOK INITIATION', '', 1, 497, '2023-04-21 13:15:07', ''),
(30, 'YOUTUBE INITIATION', '', 1, 797, '2023-04-21 13:15:36', ''),
(31, 'CANVA INITIATION', '', 1, 897, '2023-04-21 13:15:44', ''),
(32, 'RÃ‰SEAUX SOCIAUX\r\nMODULE COMPLET', '', 1, 2497, '2023-04-21 13:16:54', ''),
(33, 'AMÃ‰LIORER ET DIVERSIFIER SES COMPÃ‰TENCES EN MARKETING\r\n', '&lt;p&gt;&lt;b&gt;MODULES AU CHOIX\r\n&lt;/b&gt;&lt;/p&gt;&lt;p&gt;A compter de 495 &euro; par module au choix, ou 2 modules pour 995 &euro; ; 3 modules pour 1495 &euro; ;\r\n4 modules pour 1995 &euro; : 5 modules pour 2420 &euro;\r\nEn fonction du rythme choisi, une remise de 10 &agrave; 20 % pourra s&rsquo;appliquer.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;\r\nMODULE I&lt;/b&gt;. Objectif : Ma&icirc;triser l&rsquo;Ing&eacute;nierie p&eacute;dagogique et marketing avec une Prise de\r\nconnaissance g&eacute;n&eacute;rale des diff&eacute;rents contenus des formations bureautiques, ainsi qu&rsquo;une prise\r\nen mains des outils de suivi des stagiaires jusqu&rsquo;au dispositif de certification. Volet 1. 20\r\nheures minimum en e-learning + 3 heures de lives.\r\n&lt;/p&gt;&lt;p&gt;&lt;b&gt;MODULE II&lt;/b&gt;. Ma&icirc;triser l&rsquo;Ing&eacute;nierie p&eacute;dagogique et marketing avec une Prise de connaissance\r\ng&eacute;n&eacute;rale des diff&eacute;rents contenus des formations bureautiques, ainsi qu&rsquo;une prise en mains des\r\noutils de suivi jusqu&rsquo;au dispositif de certification. Volet 2. 20 heures minimum en e-learning\r\n+ 3 heures de lives en formation synchrone.&lt;/p&gt;&lt;p&gt;&lt;b&gt;MODULE III&lt;/b&gt;. Ma&icirc;triser l&rsquo;Ing&eacute;nierie p&eacute;dagogique et marketing avec une Prise de\r\nconnaissance g&eacute;n&eacute;rale des diff&eacute;rents contenus des formations bureautiques, ainsi qu&rsquo;une prise\r\nen mains des outils de suivi jusqu&rsquo;au dispositif de certification. Volet 3. 20 heures minimum\r\nen e-learning + 3 heures de lives en formation synchrone&lt;/p&gt;&lt;p&gt;&lt;b&gt;\r\nMODULE IV&lt;/b&gt;. Renforcer ses comp&eacute;tences en marketing digital ; 20 heures minimum en elearning + 3 heures de lives en formation synchrone.&lt;/p&gt;&lt;p&gt;&lt;b&gt;MODULE V.&lt;/b&gt; Comprendre les m&eacute;canismes de financements des formations en fonction du\r\nstatut du client &agrave; partir d&rsquo;exemples concrets. 20 heures minimum en e-learning + 3 heures de\r\nlives en formation synchrone.&lt;br&gt;&lt;/p&gt;', 1, 0, '2023-04-21 13:23:50', ''),
(34, 'ESPERANTO', '', 1, 497, '2023-04-21 13:24:27', ''),
(35, 'TROUVER UN FINANCEMENT POUR UNE FORMATION', '', 1, 0, '2023-04-21 13:26:47', ''),
(36, 'TROUVER UN FINANCEMENT POUR UN PROJET', '', 1, 0, '2023-04-21 13:26:55', ''),
(37, 'TROUVER UN FINANCEMENT POUR UNE ASSOCIATION', '', 1, 0, '2023-04-21 13:27:01', ''),
(38, 'INVESTIR STRATEGIES', '', 1, 0, '2023-04-21 13:28:16', ''),
(39, 'INVESTIR PLACEMENTS', '', 1, 0, '2023-04-21 13:28:27', ''),
(40, 'PLANTES', '', 1, 495, '2023-04-21 13:28:35', ''),
(41, 'MÃ‰DECINES DU MONDE', '', 1, 495, '2023-04-21 13:31:02', ''),
(42, 'PRODUITS PLANTES\r\n', '', 1, 495, '2023-04-21 13:31:17', ''),
(43, 'TECHNIQUES ANCESTRALES', '', 1, 495, '2023-04-21 13:31:24', ''),
(44, 'COMMENT Ã‰CRIRE ?', '', 1, 495, '2023-04-21 13:32:29', ''),
(45, 'ROMAN, ESSAIS, NOUVELLES', '', 1, 495, '2023-04-21 13:32:36', ''),
(46, '\r\nPROMOUVOIR SON LIVRE', '', 1, 495, '2023-04-21 13:33:02', ''),
(47, 'DEVENIR BEST SELLER', '', 1, 495, '2023-04-21 13:34:01', ''),
(49, 'Ã‰CRIRE SON BIOPIC ET EN FAIRE UN FILM', '', 1, 495, '2023-04-21 13:39:01', ''),
(51, 'SYSTÃˆMES EAU', '', 1, 495, '2023-04-21 13:40:38', ''),
(52, 'SYSTÃˆMES CONSTRUCTION', '', 1, 495, '2023-04-21 13:42:17', ''),
(53, 'ARCHITECTURE INTELLIGENTE', '', 1, 495, '2023-04-21 13:43:29', ''),
(54, 'MAISON MIXTE/RURAL/URBAIN', '', 1, 495, '2023-04-21 13:43:38', ''),
(55, 'MUSIQUES DU MONDE\r\n', '', 1, 495, '2023-04-21 13:43:46', ''),
(56, 'FILM REPORTAGE', '', 1, 495, '2023-04-21 13:45:04', ''),
(57, 'FILM DOCUMENTAIRE', '', 1, 495, '2023-04-21 13:45:14', ''),
(58, 'FILM PUBLICITAIRE\r\n', '', 1, 495, '2023-04-21 13:45:19', ''),
(59, 'FILM DE FICTION', '', 1, 495, '2023-04-21 13:47:05', ''),
(60, 'FINANCE ET Ã‰CRITURE DE SCENARIO\r\n\r\n', '', 1, 495, '2023-04-21 13:47:05', ''),
(61, 'FINANCEMENT DE FILMS', '', 1, 495, '2023-04-21 13:47:10', ''),
(62, 'CRÃ‰ER SA MAISON D Ã‰DITION', '', 1, 495, '2023-04-21 13:52:27', ''),
(64, 'WordPress avancÃ©', '', 1, 0, '2023-06-29 16:14:34', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
