-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: aloes
-- ------------------------------------------------------
-- Server version	5.7.9

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aloes_user`
--

DROP TABLE IF EXISTS `aloes_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aloes_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aloes_user`
--

LOCK TABLES `aloes_user` WRITE;
/*!40000 ALTER TABLE `aloes_user` DISABLE KEYS */;
INSERT INTO `aloes_user` VALUES (1,'jeanmichel.salaun@ens-lyon.fr','Jean-Michel','Salaun','Ife 1er étage','Professeur');
/*!40000 ALTER TABLE `aloes_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ass_typ`
--

DROP TABLE IF EXISTS `ass_typ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ass_typ` (
  `id_ass` int(11) NOT NULL,
  `id_typ` int(11) NOT NULL,
  PRIMARY KEY (`id_ass`,`id_typ`),
  KEY `IDX_ED0711A4E5EE9AEC` (`id_ass`),
  KEY `IDX_ED0711A49CE54247` (`id_typ`),
  CONSTRAINT `FK_ED0711A49CE54247` FOREIGN KEY (`id_typ`) REFERENCES `typologie` (`id`),
  CONSTRAINT `FK_ED0711A4E5EE9AEC` FOREIGN KEY (`id_ass`) REFERENCES `assessment` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ass_typ`
--

LOCK TABLES `ass_typ` WRITE;
/*!40000 ALTER TABLE `ass_typ` DISABLE KEYS */;
INSERT INTO `ass_typ` VALUES (45,11),(175,10),(176,9),(177,13),(178,13),(179,12),(180,12);
/*!40000 ALTER TABLE `ass_typ` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assessment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `is_individual` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F7523D70591CC992` (`course_id`),
  KEY `IDX_F7523D701F55203D` (`topic_id`),
  KEY `IDX_F7523D7071F7E88B` (`event_id`),
  CONSTRAINT `FK_F7523D701F55203D` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id`),
  CONSTRAINT `FK_F7523D70591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  CONSTRAINT `FK_F7523D7071F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=311 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assessment`
--

LOCK TABLES `assessment` WRITE;
/*!40000 ALTER TABLE `assessment` DISABLE KEYS */;
INSERT INTO `assessment` VALUES (45,6,31,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Examen final de synthèse sur le métier d\'architecte de l\'information','',0.3,'2016-12-12 09:00:00',NULL,1),(51,6,24,NULL,NULL,NULL,'Participation',NULL,NULL,'2016-11-02 09:00:00',NULL,1),(91,9,89,NULL,NULL,NULL,'Analyse de situations',NULL,NULL,'2017-01-19 12:00:00',NULL,2),(95,9,90,NULL,NULL,NULL,'Evaluation du travail à réaliser',NULL,NULL,'2017-01-12 12:00:00',NULL,2),(96,9,90,NULL,NULL,NULL,'Reformulation de la demande (livrable 1) : vérification de l\'accord du commanditaire',NULL,0.05,'2017-01-12 12:00:00',NULL,2),(97,9,90,NULL,NULL,NULL,'Constitution du comité de pilotage (suggestion au commanditaire)',NULL,NULL,'2017-01-19 12:00:00',NULL,2),(98,9,91,NULL,NULL,NULL,'Proposition du travail d\'enquête (livrable 2)',NULL,NULL,'2017-01-19 12:00:00',NULL,2),(99,9,91,NULL,NULL,NULL,'Première réunion du comité de pilotage',NULL,0.05,'2017-01-26 09:00:00',NULL,2),(100,9,91,NULL,NULL,NULL,'Réalisation des enquêtes et analyse',NULL,NULL,'2017-02-16 09:00:00',NULL,2),(101,9,92,NULL,NULL,NULL,'Confrontation des résultats des analyses des équipes et brainstorming',NULL,NULL,'2017-03-16 12:00:00',NULL,2),(102,9,93,NULL,NULL,NULL,'Conception des scénarios',NULL,NULL,'2017-03-16 12:00:00',NULL,2),(103,9,93,NULL,NULL,NULL,'Finalisation du livrable 3 (analyse et scénarios)',NULL,0.15,'2017-03-16 13:00:00',NULL,2),(104,9,93,NULL,NULL,NULL,'Deuxième réunion du comité de pilotage (choix d\'un scénario)',NULL,0.1,'2017-03-23 12:00:00',NULL,2),(105,9,95,NULL,NULL,NULL,'Affinement de la solution, précision des fonctionnalités',NULL,NULL,'2017-04-13 12:00:00',NULL,2),(106,9,95,NULL,NULL,NULL,'Réalisation d\'un prototype',NULL,NULL,'2017-04-13 12:00:00',NULL,2),(107,9,95,NULL,NULL,NULL,'Rédaction du cahier des charges (livrable 4)',NULL,0.1,'2017-04-13 12:00:00',NULL,2),(108,9,97,NULL,NULL,NULL,'Pitch et billet de blog',NULL,0.1,'2017-05-04 09:00:00',NULL,2),(109,9,97,NULL,NULL,NULL,'Compilation du journal de bord et autoévaluation',NULL,0.15,'2017-05-04 09:00:00',NULL,2),(110,9,97,NULL,NULL,NULL,'Prestation orale individuelle (comités de pilotage et soutenance)',NULL,0.15,'2017-05-04 12:00:00',NULL,1),(111,9,97,NULL,NULL,NULL,'Rapport individuel d\'étonnement',NULL,0.1,'2017-05-04 09:00:00',NULL,1),(112,9,97,NULL,NULL,NULL,'Participation individuelle au projet dont respect des délais',NULL,0.05,'2017-05-04 12:00:00',NULL,1),(113,21,99,NULL,NULL,NULL,'Annotation de la vidéo \"Introduction to the Science of Team Science\".',NULL,0.05,'2016-01-20 14:00:00',NULL,NULL),(114,21,99,NULL,NULL,NULL,'Annotation de la vidéo \"Shared regulation and CSCL\"',NULL,0.05,'2016-02-03 14:00:00',NULL,NULL),(115,21,99,NULL,NULL,NULL,'Indicateurs pour évaluer la collaboration à partir des deux vidéos',NULL,0.2,'2016-02-17 13:00:00',NULL,NULL),(116,21,100,NULL,NULL,NULL,'Présentation d\'analyse de corpus en classe',NULL,0.4,'2016-03-30 14:00:00',NULL,NULL),(117,21,101,NULL,NULL,NULL,'Reflection sur la collaboration au sein des metiers de l\'architecte de l\'information',NULL,0.2,'2016-04-27 14:00:00',NULL,NULL),(129,21,99,NULL,NULL,NULL,'Read the article \"Toward an understanding of macrocognition in teams: predicting processes in complex collaborative contexts\" and be able to present a section of it in class for discussion',NULL,0.05,'2016-01-27 13:00:00',NULL,NULL),(130,21,99,NULL,NULL,NULL,'Read the article \"Socially shared regulation of learning in CSCL: Patterns of socially shared regulation of learning between high – and low performing student groups\" and be able to present a section of it in class for discussion',NULL,0.05,'2016-02-10 13:00:00',NULL,NULL),(175,6,13,NULL,NULL,0,'Réaliser le prototypage rapide d\'une solution simple',NULL,0.1,'2016-09-27 12:00:00',NULL,2),(176,6,10,NULL,NULL,0,'Évaluation d\'un site Web de grande ampleur',NULL,0.2,'2016-10-21 23:55:00',NULL,2),(177,6,23,NULL,NULL,0,'Exposé sur l\'histoire du web et des médias',NULL,0.1,'2016-11-08 09:00:00',NULL,2),(178,6,23,NULL,NULL,1,'Pitch sur un texte fondateur',NULL,0.1,'2016-11-29 09:00:00',NULL,2),(179,6,23,NULL,NULL,2,'Billet sur l\'histoire du web et des médias',NULL,0.1,'2016-11-22 09:00:00',NULL,2),(180,6,23,NULL,NULL,3,'Billet sur un texte fondateur',NULL,0.1,'2016-12-06 09:00:00',NULL,2),(181,6,23,NULL,NULL,4,'Réalisation ou amélioration de sa page LinkedIn',NULL,NULL,'2016-11-22 09:00:00',NULL,1),(182,6,30,NULL,NULL,0,'Choix et constitution des équipes-projet',NULL,NULL,'2016-12-20 09:00:00',NULL,2),(183,6,167,NULL,NULL,0,'Définir les rôles dans l\'équipe et son fonctionnement',NULL,NULL,'2016-12-20 12:00:00',NULL,2),(184,6,167,NULL,NULL,1,'Analyser et reformuler la commande',NULL,NULL,'2016-12-20 12:00:00',NULL,2),(257,9,91,NULL,NULL,3,'Rédaction de la 1ère partie (analyse) du livrable 3',NULL,NULL,'2017-02-16 09:00:00',NULL,2),(258,9,217,NULL,NULL,0,'Jeu, mise en situation',NULL,NULL,'2017-02-09 12:00:00',NULL,2),(301,66,253,NULL,NULL,1,'Identification d’une série de projets d’activisme à Lyon et compilation d\'une liste collective',NULL,NULL,'2017-10-24 10:30:00',NULL,2),(302,66,254,NULL,NULL,0,'Liste de groupes et des sujets',NULL,NULL,'2017-10-24 13:30:00',NULL,2),(303,66,261,NULL,NULL,0,'Rapport d’enquête préliminaire',NULL,0,'2017-11-15 12:00:00',NULL,2),(304,66,255,NULL,NULL,0,'Détermination des objectives et des moyens du projet à réaliser pendant le data-sprint',NULL,0,'2017-10-21 19:00:00',NULL,2),(305,66,255,NULL,NULL,1,'Cahier des charges du projet pour le data-sprint',NULL,0.2,'2017-11-21 15:55:00',NULL,2),(306,66,263,NULL,NULL,0,'Récolte de données',NULL,0,NULL,NULL,2),(307,66,263,NULL,NULL,1,'Prétraitement de données',NULL,0,NULL,NULL,2),(308,66,263,NULL,NULL,2,'Identification et apprentissage outils',NULL,NULL,NULL,NULL,2),(309,66,257,NULL,NULL,0,'Rapport sur le processus du cours et ces résultats',NULL,0.3,NULL,NULL,1),(310,66,257,NULL,NULL,1,'Présentation des résultats',NULL,0.5,'2018-01-12 16:00:00',NULL,2);
/*!40000 ALTER TABLE `assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `assessment_competence_weight`
--

DROP TABLE IF EXISTS `assessment_competence_weight`;
/*!50001 DROP VIEW IF EXISTS `assessment_competence_weight`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `assessment_competence_weight` AS SELECT 
 1 AS `assessment_id`,
 1 AS `competence_id`,
 1 AS `weight`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `assessment_objective`
--

DROP TABLE IF EXISTS `assessment_objective`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assessment_objective` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) DEFAULT NULL,
  `objective_id` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6BE702EDDD3DD5F1` (`assessment_id`),
  KEY `IDX_6BE702ED73484933` (`objective_id`),
  CONSTRAINT `FK_6BE702ED73484933` FOREIGN KEY (`objective_id`) REFERENCES `specific_objective` (`id`),
  CONSTRAINT `FK_6BE702EDDD3DD5F1` FOREIGN KEY (`assessment_id`) REFERENCES `assessment` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1548 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assessment_objective`
--

LOCK TABLES `assessment_objective` WRITE;
/*!40000 ALTER TABLE `assessment_objective` DISABLE KEYS */;
INSERT INTO `assessment_objective` VALUES (247,113,60,1),(248,113,61,1),(249,113,62,1),(255,116,60,1),(256,116,61,1),(257,116,62,1),(258,116,63,1),(260,117,60,1),(261,117,61,1),(262,117,62,1),(263,117,63,1),(281,114,60,1),(282,114,61,1),(283,114,62,1),(286,129,60,1),(287,129,61,1),(288,129,62,1),(289,130,60,1),(290,130,61,1),(291,130,62,1),(292,115,60,1),(293,115,62,1),(294,115,63,1),(687,182,21,1),(688,182,139,2),(689,183,21,1),(690,183,139,2),(691,184,22,1),(692,184,23,1),(693,184,134,1),(694,184,139,2),(695,51,20,1),(696,51,19,1),(697,51,18,1),(711,175,23,2),(712,45,13,1),(713,45,14,1),(714,45,15,1),(715,45,17,1),(716,45,20,1),(717,45,19,1),(718,45,18,1),(719,45,21,1),(720,45,22,1),(721,45,23,1),(722,179,13,2),(723,179,14,2),(724,179,15,1),(725,179,17,2),(726,179,136,2),(727,179,139,1),(728,180,15,2),(729,180,136,2),(730,180,18,1),(736,178,15,1),(737,178,136,2),(738,178,139,1),(739,177,13,2),(740,177,14,2),(741,177,15,1),(742,177,17,2),(743,177,139,1),(750,176,22,2),(751,176,134,2),(752,176,139,1),(1168,95,31,1),(1169,95,35,1),(1170,95,44,1),(1171,95,40,1),(1172,95,45,1),(1222,98,36,1),(1223,98,32,1),(1224,98,44,1),(1225,98,45,1),(1226,99,37,1),(1227,99,43,1),(1228,99,41,1),(1239,106,34,1),(1240,106,33,1),(1245,105,35,1),(1246,105,44,1),(1247,105,45,1),(1248,104,37,1),(1249,104,43,1),(1250,104,41,1),(1256,102,33,1),(1257,102,45,1),(1258,101,33,1),(1262,100,32,2),(1263,100,44,1),(1264,100,39,1),(1265,100,45,1),(1291,97,43,1),(1292,257,36,2),(1293,257,34,1),(1294,257,32,2),(1295,103,36,1),(1296,103,34,1),(1297,103,43,1),(1298,96,36,2),(1299,96,43,2),(1306,91,42,1),(1313,258,31,2),(1314,258,35,1),(1315,258,44,1),(1316,258,40,1),(1317,258,39,1),(1318,258,45,2),(1353,108,38,2),(1354,108,43,1),(1355,109,36,1),(1356,109,35,2),(1357,109,34,1),(1358,109,44,1),(1359,109,42,1),(1360,109,41,1),(1361,109,40,1),(1362,109,39,1),(1363,109,45,2),(1364,110,37,2),(1365,110,43,1),(1366,111,31,1),(1367,111,39,1),(1368,112,44,1),(1369,112,42,1),(1370,112,39,2),(1371,112,45,1),(1428,107,37,1),(1429,107,36,1),(1430,107,34,1),(1431,107,43,1),(1517,301,240,2),(1519,302,244,2),(1520,303,239,2),(1521,303,240,2),(1522,303,244,1),(1523,306,241,2),(1524,307,241,2),(1525,308,239,1),(1526,308,242,2),(1527,304,243,1),(1528,304,244,1),(1537,310,240,1),(1538,310,241,2),(1539,310,242,2),(1540,309,239,2),(1541,309,243,2),(1545,305,239,2),(1546,305,240,2),(1547,305,244,1);
/*!40000 ALTER TABLE `assessment_objective` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `assessment_objective_rating_sum`
--

DROP TABLE IF EXISTS `assessment_objective_rating_sum`;
/*!50001 DROP VIEW IF EXISTS `assessment_objective_rating_sum`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `assessment_objective_rating_sum` AS SELECT 
 1 AS `assessment_id`,
 1 AS `rating_sum`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `assessment_objective_weight`
--

DROP TABLE IF EXISTS `assessment_objective_weight`;
/*!50001 DROP VIEW IF EXISTS `assessment_objective_weight`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `assessment_objective_weight` AS SELECT 
 1 AS `assessment_id`,
 1 AS `objective_id`,
 1 AS `weight`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'Test','test'),(2,'Expertises','expertises'),(3,'Contexte','contexte'),(4,'Contenu','contenu');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_id` int(11) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `objectives_preamble` longtext COLLATE utf8_unicode_ci,
  `assessments_preamble` longtext COLLATE utf8_unicode_ci,
  `pedagogy` longtext COLLATE utf8_unicode_ci,
  `rules` longtext COLLATE utf8_unicode_ci,
  `resources` longtext COLLATE utf8_unicode_ci,
  `miscellaneous` longtext COLLATE utf8_unicode_ci,
  `institution` longtext COLLATE utf8_unicode_ci,
  `credits` int(11) DEFAULT NULL,
  `semester` longtext COLLATE utf8_unicode_ci,
  `year` int(11) DEFAULT NULL,
  `is_optional` tinyint(1) DEFAULT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_slot` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_face_to_face` int(11) DEFAULT NULL,
  `is_remote` int(11) DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publication_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `infos` longtext COLLATE utf8_unicode_ci,
  `url_ped` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_web` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_twi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_aut` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evaluation` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_169E6FB93EB8070A` (`program_id`),
  CONSTRAINT `FK_169E6FB93EB8070A` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (6,3,'INF01','Introduction à l\'architecture de l\'information','<div class=\"col-md-10\">Pr&eacute;sentation de l\'architecture de l\'information &agrave; partir de son histoire, de ses textes fondateurs et de son r&eacute;f&eacute;rentiel de comp&eacute;tences. Initiation &agrave; quelques-unes de ses m&eacute;thodes (&eacute;valuation de syst&egrave;mes d\'information, design UX). Apprentissage du travail collaboratif, de la publication sur le web et de la pr&eacute;sentation en public.</div>',NULL,NULL,'<p>Cours et atelier</p>','<p>Le <a href=\"https://archinfocloud.ens-lyon.fr/public.php?service=files&amp;t=2cf522bb744cf3058976b89a7a400678\">r&eacute;glement du master Architecture de l\'information</a> pr&eacute;cise les droits et devoirs des &eacute;tudiants et les modalit&eacute;s d\'organisation et d\'&eacute;valuation des UE.</p>','<h3 id=\"docs-internal-guid-29a8bf21-6e25-9bc9-9a74-52acfc1e907a\" dir=\"ltr\" style=\"line-height: 1.38; margin-top: 14pt; margin-bottom: 4pt;\"><span style=\"font-size: 17.333333333333332px; font-family: Arial; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Bibliographie</span></h3>\r\n<ul style=\"margin-top: 0pt; margin-bottom: 0pt;\">\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">CHARTRON (G.) </span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: italic; font-variant: normal; text-decoration: none; vertical-align: baseline;\">et alii</span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, &laquo;</span><a style=\"text-decoration: none;\" href=\"http://edc.revues.org/5227\"> <span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">L&rsquo;architecture de l&rsquo;information, un concept op&eacute;ratoire ?</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"> &raquo;, </span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: italic; font-variant: normal; text-decoration: none; vertical-align: baseline;\">&Eacute;tudes de communication</span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, n&deg; 41, 2013.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">ROSENFELD (L.) et MORVILLE (P.), </span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: italic; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Information architecture for the World Wide Web</span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, Cambridge/Sebastopol, O&rsquo;Reilly, 1998 (4e &eacute;d. 2015).</span><a style=\"text-decoration: none;\" href=\"https://library.oreilly.com/book/9780596527341/information-architecture-for-the-world-wide-web-3rd-edition/toc\"> <span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">Extraits</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">SALA&Uuml;N (J.-M.) et HABERT (B.) (dir.), </span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: italic; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Architecture de l&rsquo;information &ndash; M&eacute;thodes, outils, enjeux</span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, De Boeck, 2015.</span><a style=\"text-decoration: none;\" href=\"https://archinfocloud.ens-lyon.fr/public.php?service=files&amp;t=607b671fde350e0a8d796390db346185\"> <span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">Extraits</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">.</span></p>\r\n</li>\r\n</ul>\r\n<h3 dir=\"ltr\" style=\"line-height: 1.38; margin-top: 14pt; margin-bottom: 4pt;\"><span style=\"font-size: 17.333333333333332px; font-family: Arial; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Webographie</span></h3>\r\n<ul style=\"margin-top: 0pt; margin-bottom: 0pt;\">\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Archives de la saison 2 (2016) du <a href=\"https://archinfo00.hypotheses.org/\">MOOC </a><em><a href=\"https://archinfo00.hypotheses.org/\">Architecture de l\'information</a>, </em>ENS-Lyon/FUN, hypotheses.org.</span></li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">BERTHOUX (F.) </span><a style=\"text-decoration: none;\" href=\"http://template.pro/listes/guide-architecture-information/\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #0000ff; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">Le guide complet de l&rsquo;architecture de l&rsquo;information pour d&eacute;butant</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #0000ff; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, </span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Template.pro, 2016, trad. du m&ecirc;me article paru pr&eacute;c&eacute;demment sur </span><a style=\"text-decoration: none;\" href=\"http://www.uxbooth.com/articles/complete-beginners-guide-to-information-architecture/\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">UXbooth</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><a style=\"text-decoration: none;\" href=\"http://www.ergolab.net/\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">Ergolab, ergonomie web &amp; logiciel</span></a></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #0000ff; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><a style=\"text-decoration: none;\" href=\"http://archinfo01.hypotheses.org/2018\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #0000ff; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">R&eacute;f&eacute;rentiel de comp&eacute;tences 2016</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #0000ff; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, </span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Introduction &agrave; l&rsquo;architecture de l&rsquo;information, 1 avril 2016.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><a style=\"text-decoration: none;\" href=\"http://iainstitute.org/fr/\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">The Information Architecture Institute</span></a></p>\r\n</li>\r\n</ul>\r\n<h3 dir=\"ltr\" style=\"line-height: 1.38; margin-top: 14pt; margin-bottom: 4pt;\"><span style=\"font-size: 17.333333333333332px; font-family: Arial; color: #000000; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Pour approfondir</span></h3>\r\n<p>&nbsp;</p>\r\n<ul style=\"margin-top: 0pt; margin-bottom: 0pt;\">\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">COVERT (A.) &laquo;</span><a style=\"text-decoration: none;\" href=\"http://abbytheia.com/\"> <span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">Make the unclear be clear</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"> &raquo;, l&rsquo;architecture de l&rsquo;information expliqu&eacute;e par une de ses plus c&eacute;l&egrave;bres repr&eacute;sentantes.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">MORVILLE (P.) &laquo;</span><a style=\"text-decoration: none;\" href=\"http://www.uxbooth.com/articles/the-age-of-information-architecture/\"> <span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">The Age of Information Architecture</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"> &raquo;, 1er d&eacute;cembre 2015, retour sur les diff&eacute;rentes &eacute;ditions du </span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: italic; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Polar Bear book</span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"> par un des auteurs.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">RESMINI (A.) et ROSATI (L.), &laquo;</span><a style=\"text-decoration: none;\" href=\"http://journalofia.org/volume3/issue2/03-resmini/\"> <span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">A brief history of information architecture</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"> &raquo;, dans </span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: italic; font-variant: normal; text-decoration: none; vertical-align: baseline;\">Journal of information architecture</span><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, vol. 3, n&deg; 2, 2011, pp. 33-46.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><a style=\"text-decoration: none;\" href=\"http://www.jjg.net/elements/\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">The Elements of User Experience</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, site de J.J. Garrett.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><a style=\"text-decoration: none;\" href=\"http://www.iasummit.org/events\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">The IA Summit</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">, congr&egrave;s annuel.</span></p>\r\n</li>\r\n<li dir=\"ltr\" style=\"list-style-type: disc; font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">WODTKE (Ch.) &laquo;</span><a style=\"text-decoration: none;\" href=\"https://medium.com/goodux-badux/towards-a-new-information-architecture-f38b5cc904c0\"> <span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #1155cc; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: underline; vertical-align: baseline;\">Towards a New Information Architecture. The Rise and Fall and Rise of a Necessary Discipline</span></a><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"> &raquo;, 16 f&eacute;v 2014, par une autre repr&eacute;sentante c&eacute;l&egrave;bre de l&rsquo;archinfo.</span></p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 14.666666666666666px; font-family: Arial; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\">D\'autres r&eacute;f&eacute;rences plus sp&eacute;cifiques seront donn&eacute;es dans les s&eacute;ances de cours.</span></p>',NULL,NULL,6,'S1',2016,0,'Français','Mardi 9h-12h','Salle 117',1,2,NULL,'0','2017-10-31 13:12:21',NULL,'http://etudes.ens-lyon.fr/course/view.php?id=1001','http://archinfo01.hypotheses.org/','https://twitter.com/hashtag/archinfo',NULL,'<p>Evaluation de sites : 20%</p>\r\n<p>Prototypage : 10%</p>\r\n<p>Expos&eacute;s et pitchs : 20%</p>\r\n<p>Billets : 20%</p>\r\n<p>Examen : 30%</p>'),(9,3,'INF05','Conduite de projet','<p>Les &eacute;tudiants travaillent en &eacute;quipes encadr&eacute;s par un tuteur sur des commandes r&eacute;elles propos&eacute;es par des partenaires ext&eacute;rieurs. L\'objectif de chaque &eacute;quipe est, d\'une part, la conception d\'un prototype et la r&eacute;daction du cahier des charges de la solution retenue et, d\'autre part, un respect du travail collectif dans des d&eacute;lais et avec des moyens contraints.<br />Ils ont recours &agrave; une m&eacute;thodologie de conduite agile de projet, mobilisant des outils de mod&eacute;lisation et de gestion (planification, reporting, prototypage). Ils &eacute;laborent et pr&eacute;sentent des sc&eacute;narios sur la base d\'un prototypage rapide, tenant compte des ressources et du budget. L\'objectif principal de l\'UE est l\'acquisition d\'une m&eacute;thode de production adap&eacute;e au num&eacute;rique.<br />Une attention est port&eacute;e au travail en &eacute;quipe, &agrave; la d&eacute;finition des r&ocirc;les, &agrave; leur r&eacute;gulation, &agrave; l\'animation et &agrave; la r&eacute;solution des probl&egrave;mes et des conflits.</p>',NULL,NULL,'<p>L\'UE comprend quelques s&eacute;ances de cours, mais le principal du travail se r&eacute;alise en &eacute;quipe tutor&eacute;e.</p>\r\n<p>Les th&eacute;matiques suivantes seront abord&eacute;es en cours ou TD :</p>\r\n<ul>\r\n<li>D&eacute;finition et &eacute;tapes d\'un projet</li>\r\n<li>Mesure du temps</li>\r\n<li>Travail en &eacute;quipe</li>\r\n<li>M&eacute;thodes de d&eacute;veloppement agile</li>\r\n<li>M&eacute;thodes et outils de cr&eacute;ativit&eacute;</li>\r\n<li>Gestion des conflits</li>\r\n<li>R&eacute;daction de sc&eacute;narios et d\'un cahier des charges</li>\r\n</ul>\r\n<p>Le travail en &eacute;quipes projets encadr&eacute;es par un tuteur et valid&eacute; par un comit&eacute; de pilotage du commanditaire constitue l\'essentiel. Pour les aspects de d&eacute;veloppement techniques, les &eacute;quipes pourront faire appel aux responsables des UEs \"INF04 Langage et structure du web\" et \"INF03 Approche utilisateur et design web\".</p>\r\n<p>L\'&eacute;valuation comprend deux dimensions : 1. la capacit&eacute; de l\'&eacute;quipe &agrave; organiser son travail pour un rendu conforme &agrave; la commande dans le strict respect des moyens allou&eacute;s, notamment temporel (principal) ; 2. la qualit&eacute; de la solution propos&eacute;e (secondaire).</p>','<p><a href=\"https://archinfocloud.ens-lyon.fr/public.php?service=files&amp;t=ded3e2140a39afe7bf91ac209f9756ca\">R&eacute;glement g&eacute;n&eacute;ral du master en Architecture de l\'information</a>&nbsp;(ENS de Lyon), qui pr&eacute;cise les droits et devoirs des &eacute;tudiants et les modalit&eacute;s d\'organisation et d\'&eacute;valuation des UE.</p>','<p>Cours de <a href=\"http://gestiondeprojet.pm/\">gestion de projet</a><br />Rubrique \"<a href=\"http://fr.wikipedia.org/wiki/Gestion_de_projet\">Gestion de projet</a>\" sur Wikip&eacute;dia</p>\r\n<p>Ressources compl&eacute;mentaires sur le portail des &eacute;tudes.</p>',NULL,NULL,6,NULL,2017,0,NULL,'9h-12h','117',1,2,NULL,'1','2016-11-30 15:45:23',NULL,'http://etudes.ens-lyon.fr/course/view.php?id=1427','http://archinfo05.hypotheses.org/','https://twitter.com/search?q=%23archinfo&src=typd',NULL,NULL),(21,3,'INF12','Theories and methods of collaborative design','<p>This course will be given in English and presents a selection of theoretical and methodological issues concerning collaborative design. Individual and group cognition will be addressed from within two academic communities &mdash; the Science of Team Science and the Learning Sciences. Both are multidisciplinary with researchers from different academic traditions: &nbsp;psychology, health sciences, computer science, information and communication sciences, anthropology, linguistics, etc. You will be asked to annotate and comment on specific digital resources from these communities and these annotations and comments will be discussed in class.</p>\r\n<p>In addition, in order to appreciate the challenges and difficulties of collaborative design and to prepare you for your future work life as a participant in multidisciplinary contexts, you will collaboratively analyze a series of corpora where students simulating the work environment or professionals in the workplace are in some phase of the design process. These corpora will be of different natures: &nbsp;either on-line interactions or video data with transcriptions of talk.</p>',NULL,NULL,'<p>The UE is organized into 14 sessions of 3 hours each = 42 hours of activity in class.</p>\r\n<p>The first six sessions will be dedicated to the presentation of theories and models used in collaborative design and time will also be given during class to begin annotation activities of the pertinent digital resources. These annotations will be presented, discussed and evaluated in class during the next session.&nbsp;</p>\r\n<p>During the first part of the&nbsp;last 8 sessions, Dr. Lund will present analyses of collaborations. Students will also begin their own analyses&nbsp;of design corpora that Dr. Lund will provide. These corpora depict either&nbsp;students simulating collaborative and interdisciplinary design in the work environment or&nbsp;professionals in the workplace doing actual collaborative and interdisciplinary design.</p>\r\n<p>Pairs of students will work together, choose one of the corpora, analyze an extended extract within that corpus and present it to the rest of the class. The last 3 sessions of classtime will be reserved for presentations. These presentations will be turned into booktypes for students to take with them. In addition students will transform&nbsp;what they learned in class into a format&nbsp;appropriate for their Linked In website for presentation and discussion in class. All grades include an evaluation of participation in class.</p>','<p>R&eacute;glement g&eacute;n&eacute;ral du master en Architecture de l\'information (ENS de Lyon), qui pr&eacute;cise les droits et devoirs des &eacute;tudiants et les modalit&eacute;s d\'organisation et d\'&eacute;valuation des UE. Vous pouvez le consulter directement ici : <a href=\"http://archinfo.ens-lyon.fr/medias/fichier/reglementation-archinfo-fev-2014_1391788240924-pdf\">http://archinfo.ens-lyon.fr/medias/fichier/reglementation-archinfo-fev-2014_1391788240924-pdf</a></p>','<p><strong>Ressources Num&eacute;riques</strong></p>\r\n<p>The Science of Team Science:&nbsp;<a href=\"https://www.youtube.com/embed/R1FnxSvjoh0?rel=0\">https://www.youtube.com/embed/R1FnxSvjoh0?rel=0</a></p>\r\n<p>Shared regulation and CSCL:&nbsp;<a href=\"http://isls-naples.psy.lmu.de/intro/all-webinars/jaervelae/index.html\">http://isls-naples.psy.lmu.de/intro/all-webinars/jaervelae/index.html</a></p>\r\n<p>The corpora to be analyzed are from Dr. Lund\'s teaching and research activities and will be provided.</p>\r\n<p><strong>Ressources Bibliographiques</strong></p>\r\n<p>Fiore SM, Rosen MA, Smith-Jentsch KA, Salas E, Letsky M, Warner N. (2010). Toward an understanding of macrocognition in teams: predicting processes in complex collaborative contexts. <em>Human Factors</em>. 52: 203-24. PMID <a href=\"http://www.ncbi.nlm.nih.gov/pubmed/20942251\" target=\"_blank\">20942251</a>&nbsp;</p>\r\n<p>Malmberg, J., J&auml;rvel&auml;, S., J&auml;rvenoja, H. &amp; Panadero, E. (2015)<em>.&nbsp;</em>Socially shared regulation of learning in CSCL: Patterns of socially shared regulation of learning between high &ndash; and low performing student groups<em>. Computers in Human Behavior, 52, 562-572.</em></p>',NULL,NULL,6,NULL,2016,1,NULL,'14h00-17h00','117',1,2,NULL,'0','2017-10-31 13:12:27',NULL,'http://etudes.ens-lyon.fr/course/view.php?id=1228',NULL,NULL,NULL,NULL),(66,3,'INF47','Activisme des données','<p>Ce course vise &agrave; familiariser les &eacute;tudiants avec la politique de l&rsquo;information par l&rsquo;exp&eacute;rience d&rsquo;un vrai projet d&rsquo;activisme des donn&eacute;es en collaboration directe avec un groupe ou plusieurs groupes investis dans ce domaine. Le terme &lsquo;Activisme des Donn&eacute;es&rsquo;&nbsp;d&eacute;signe ici une s&eacute;rie d&rsquo;activit&eacute;s diverses et vari&eacute;es visant &agrave; intervenir dans le d&eacute;bat public par la mobilisation des donn&eacute;es et des technologies num&eacute;riques.</p>\r\n<p>Loin d&rsquo;&ecirc;tre neutres, les donn&eacute;es g&eacute;n&egrave;rent &agrave; chaque &eacute;tape de leur production, nettoyage, analyse et pr&eacute;sentation des effets politiques. Le caract&egrave;re politique de l&rsquo;information est parfois litt&eacute;ral, par exemple dans l&rsquo;utilisation des statistiques d&eacute;mographiques pour la justification de la gouvernance publique ; parfois plus subtile, par exemple dans la mani&egrave;re dans laquelle nous classons les connaissances dans nos biblioth&egrave;ques et archives.</p>\r\n<p>Si la partialit&eacute; des donn&eacute;es est facile &agrave; affirmer, elle est beaucoup plus difficile &agrave; observer. Les syst&egrave;mes d&rsquo;information cachent leurs attachements politiques, et pas n&eacute;cessairement pour malveillance, mais simplement parce cela leur permet d&rsquo;accomplir plus efficacement leurs t&acirc;ches de connaissance et coordination. Il serait impossible de chercher une page sur le Web si on devait &agrave; chaque fois remettre en discussion le mod&egrave;le de business de Google ou s&rsquo;interroger sur la mani&egrave;re dans laquelle ses algorithmes privil&eacute;gient certains r&eacute;sultats plut&ocirc;t que d&rsquo;autres. Pourtant, les infrastructures de donn&eacute;es ont toujours des fondements et des cons&eacute;quences politiques qu&rsquo;un bon architecte de l&rsquo;information ne peut pas ignorer.</p>\r\n<p>L&rsquo;activisme des donn&eacute;es nait pr&eacute;cis&eacute;ment de la volont&eacute; d&rsquo;exposer (et si possible r&eacute;&eacute;quilibrer) les asym&eacute;tries de pouvoir inh&eacute;rentes aux syst&egrave;mes d&rsquo;information. Il cherche &agrave; favoriser l&rsquo;acc&egrave;s aux donn&eacute;es ; investiguer les conditions de leur production ; expliciter les contraintes qu&rsquo;elles g&eacute;n&egrave;rent ; proposer des mani&egrave;res alternatives de redistribuer leurs cons&eacute;quences sociales. Sa pratique est b&eacute;n&eacute;fique pour l&rsquo;architecte de l&rsquo;information, car elle sensibilise &agrave; des dimensions humaines et politiques que la technicit&eacute; du num&eacute;rique tend souvent &agrave; cacher. L&rsquo;activisme des donn&eacute;es ouvre notre perspective et d&eacute;place notre attention des syst&egrave;mes d&rsquo;information particuliers aux plus larges infrastructures sociotechniques qui structurent notre vie collective.</p>',NULL,NULL,'<p>Dans le cours, les &eacute;tudiants choisiront un sujet d&rsquo;engagement parmi ceux propos&eacute;s par des associations actives dans le d&eacute;bat public et travailleront en groupe et en collaboration directe avec des acteurs du milieu pour produire un projet d&rsquo;activisme de donn&eacute;es.</p>\r\n<p>En suivant une p&eacute;dagogie par projet, ce cours comporte une premi&egrave;re partie dans laquelle les &eacute;tudiants rencontreront des activistes afin des choisir et pr&eacute;parer leur projet collectif et une deuxi&egrave;me partie dans laquelle les &eacute;tudiants travailleront avec des experts et des acteurs du domaine pendant un workshop intensif de trois jours.</p>\r\n<p>Pour des (bonnes) raisons de simplicit&eacute;, l&rsquo;apprentissage de l&rsquo;architecture de l&rsquo;information fait souvent l&rsquo;impasse des questions de la politique des donn&eacute;es. On apprend &agrave; optimiser les flux d&rsquo;information sans mettre en discussion les pr&eacute;misses qui les structurent en amont et les cons&eacute;quences produites en aval.</p>\r\n<p>Dans la pratique, toutefois, ces attachements politiques sont impossibles &agrave; contourner. Exactement comme le constructeur d&rsquo;un b&acirc;timent public ou priv&eacute;, les architectes de l&rsquo;information ne peuvent pas &eacute;viter de se confronter aux int&eacute;r&ecirc;ts et aux attentes des parties prenantes qui entour&egrave;rent leurs projets. Ils ne peuvent oublier les tensions qui habitent les institutions ou les entreprises commanditaires ni ignorer les effets que leur travail produira en faveur de certains acteurs et en d&eacute;faveur d&rsquo;autres.</p>\r\n<p>Dessiner une architecture d&rsquo;information c&rsquo;est prendre position dans un contexte controvers&eacute; en organisant non seulement des solutions techniques, mais aussi une multiplicit&eacute; d&rsquo;arrangements sociaux et de d&eacute;cisions politiques. C&rsquo;est cette deuxi&egrave;me dimension qui sera vis&eacute;e sp&eacute;cifiquement par ce cours. Les enseignements de ce module ne couvriront que marginalement les techniques de collecte et analyse des donn&eacute;es, pour se concentrer plut&ocirc;t sur les questions d&rsquo;ing&eacute;nierie sociale soulev&eacute;es par les projets d&rsquo;activisme des donn&eacute;es (et d&rsquo;architecture de l&rsquo;information plus g&eacute;n&eacute;ralement).</p>','<p>Le <a href=\"https://archinfocloud.ens-lyon.fr/public.php?service=files&amp;t=2cf522bb744cf3058976b89a7a400678\">r&eacute;glement du master Architecture de l\'information</a> pr&eacute;cise les droits et devoirs des &eacute;tudiants et les modalit&eacute;s d\'organisation et d\'&eacute;valuation des UE.</p>',NULL,NULL,NULL,6,NULL,2017,1,NULL,NULL,NULL,NULL,NULL,NULL,'1','2017-10-06 15:09:46',NULL,'http://etudes.ens-lyon.fr/course/view.php?id=2188',NULL,NULL,NULL,'<p>Les &eacute;tudiants seront &eacute;valu&eacute;s sur deux dimensions principales :</p>\r\n<ol>\r\n<li>La capacit&eacute; de contribuer &agrave; un projet d\'activisme par une intervention de collecte, traitement et visualisation des donn&eacute;es</li>\r\n<li>La capacit&eacute; d&rsquo;acqu&eacute;rir une sensibilit&eacute; &agrave; la dimension politique des donn&eacute;es et des infrastructures num&eacute;riques</li>\r\n</ol>\r\n<p>La premi&egrave;re dimension sera &eacute;valu&eacute;e collectivement par le cahier de charge que les groupes &eacute;tabliront en pr&eacute;paration du data sprint (20% de la note finale) et par la pr&eacute;sentation des r&eacute;sultats qu&rsquo;ils donneront &agrave; la fin du data sprint (50% de la note finale).</p>\r\n<p>La deuxi&egrave;me dimension sera &eacute;valu&eacute;e individuellement par un compte rendu de 5-10 pages que chaque &eacute;tudiant &eacute;crira en pr&eacute;sentant r&eacute;flexivement le processus et les r&eacute;sultats de son projet d&rsquo;activisme de donn&eacute;es (20% de la note finale).</p>');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `course_competence_weight`
--

DROP TABLE IF EXISTS `course_competence_weight`;
/*!50001 DROP VIEW IF EXISTS `course_competence_weight`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `course_competence_weight` AS SELECT 
 1 AS `course_id`,
 1 AS `competence_id`,
 1 AS `weight`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `course_concurent`
--

DROP TABLE IF EXISTS `course_concurent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_concurent` (
  `course_source` int(11) NOT NULL,
  `course_target` int(11) NOT NULL,
  PRIMARY KEY (`course_source`,`course_target`),
  KEY `IDX_4F6AEC57F1B2BE3E` (`course_source`),
  KEY `IDX_4F6AEC57E857EEB1` (`course_target`),
  CONSTRAINT `FK_4F6AEC57E857EEB1` FOREIGN KEY (`course_target`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4F6AEC57F1B2BE3E` FOREIGN KEY (`course_source`) REFERENCES `course` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_concurent`
--

LOCK TABLES `course_concurent` WRITE;
/*!40000 ALTER TABLE `course_concurent` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_concurent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_course`
--

DROP TABLE IF EXISTS `course_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_course` (
  `course_source` int(11) NOT NULL,
  `course_target` int(11) NOT NULL,
  PRIMARY KEY (`course_source`,`course_target`),
  KEY `IDX_B8A6AEF4F1B2BE3E` (`course_source`),
  KEY `IDX_B8A6AEF4E857EEB1` (`course_target`),
  CONSTRAINT `FK_B8A6AEF4E857EEB1` FOREIGN KEY (`course_target`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B8A6AEF4F1B2BE3E` FOREIGN KEY (`course_source`) REFERENCES `course` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_course`
--

LOCK TABLES `course_course` WRITE;
/*!40000 ALTER TABLE `course_course` DISABLE KEYS */;
INSERT INTO `course_course` VALUES (9,6);
/*!40000 ALTER TABLE `course_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_langue`
--

DROP TABLE IF EXISTS `course_langue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_langue` (
  `course_id` int(11) NOT NULL,
  `langue_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`,`langue_id`),
  KEY `IDX_3D6FB4C3591CC992` (`course_id`),
  KEY `IDX_3D6FB4C32AADBACD` (`langue_id`),
  CONSTRAINT `FK_3D6FB4C32AADBACD` FOREIGN KEY (`langue_id`) REFERENCES `langue` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_3D6FB4C3591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_langue`
--

LOCK TABLES `course_langue` WRITE;
/*!40000 ALTER TABLE `course_langue` DISABLE KEYS */;
INSERT INTO `course_langue` VALUES (6,1),(9,1),(66,1),(66,2);
/*!40000 ALTER TABLE `course_langue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `course_objective_weight`
--

DROP TABLE IF EXISTS `course_objective_weight`;
/*!50001 DROP VIEW IF EXISTS `course_objective_weight`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `course_objective_weight` AS SELECT 
 1 AS `course_id`,
 1 AS `objective_id`,
 1 AS `weight`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `course_semester`
--

DROP TABLE IF EXISTS `course_semester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_semester` (
  `course_id` int(11) NOT NULL,
  `semestre_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`,`semestre_id`),
  KEY `IDX_5E8CE3BB591CC992` (`course_id`),
  KEY `IDX_5E8CE3BB5577AFDB` (`semestre_id`),
  CONSTRAINT `FK_5E8CE3BB5577AFDB` FOREIGN KEY (`semestre_id`) REFERENCES `semestre` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5E8CE3BB591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_semester`
--

LOCK TABLES `course_semester` WRITE;
/*!40000 ALTER TABLE `course_semester` DISABLE KEYS */;
INSERT INTO `course_semester` VALUES (6,1),(9,2),(21,2),(66,3);
/*!40000 ALTER TABLE `course_semester` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_user`
--

DROP TABLE IF EXISTS `course_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_45310B4F591CC992` (`course_id`),
  KEY `IDX_45310B4FA76ED395` (`user_id`),
  CONSTRAINT `FK_45310B4F591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  CONSTRAINT `FK_45310B4FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `aloes_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_user`
--

LOCK TABLES `course_user` WRITE;
/*!40000 ALTER TABLE `course_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enseignants_programs`
--

DROP TABLE IF EXISTS `enseignants_programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enseignants_programs` (
  `user_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`program_id`),
  KEY `IDX_524F4128A76ED395` (`user_id`),
  KEY `IDX_524F41283EB8070A` (`program_id`),
  CONSTRAINT `FK_524F41283EB8070A` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_524F4128A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enseignants_programs`
--

LOCK TABLES `enseignants_programs` WRITE;
/*!40000 ALTER TABLE `enseignants_programs` DISABLE KEYS */;
/*!40000 ALTER TABLE `enseignants_programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `instructions` longtext COLLATE utf8_unicode_ci,
  `tutoring` longtext COLLATE utf8_unicode_ci,
  `resources` longtext COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contexte` longtext COLLATE utf8_unicode_ci,
  `outils` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_3BAE0AA7591CC992` (`course_id`),
  KEY `IDX_3BAE0AA71F55203D` (`topic_id`),
  CONSTRAINT `FK_3BAE0AA7591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  CONSTRAINT `event_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,9,NULL,'2015-09-16 00:00:00','0000-00-00 00:00:00','','','','','Séance 1.1',NULL,NULL),(3,6,NULL,'2015-11-10 00:00:00','2015-11-18 00:00:00',NULL,NULL,NULL,NULL,'Histoire 1',NULL,NULL);
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_assessment`
--

DROP TABLE IF EXISTS `event_assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_assessment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `assessment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AFBCE45F71F7E88B` (`event_id`),
  KEY `IDX_AFBCE45FDD3DD5F1` (`assessment_id`),
  CONSTRAINT `FK_AFBCE45F71F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  CONSTRAINT `FK_AFBCE45FDD3DD5F1` FOREIGN KEY (`assessment_id`) REFERENCES `assessment` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_assessment`
--

LOCK TABLES `event_assessment` WRITE;
/*!40000 ALTER TABLE `event_assessment` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_user`
--

DROP TABLE IF EXISTS `event_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_92589AE271F7E88B` (`event_id`),
  KEY `IDX_92589AE2A76ED395` (`user_id`),
  CONSTRAINT `FK_92589AE271F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  CONSTRAINT `FK_92589AE2A76ED395` FOREIGN KEY (`user_id`) REFERENCES `aloes_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_user`
--

LOCK TABLES `event_user` WRITE;
/*!40000 ALTER TABLE `event_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `dn` longtext COLLATE utf8_unicode_ci,
  `sn` longtext COLLATE utf8_unicode_ci,
  `givenname` longtext COLLATE utf8_unicode_ci,
  `fonction` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'admin','admin','administrateur@domaine.fr','administrateur@domaine.fr',1,'gk1mjnsd17soo0s40sw00c0w8g88wwg','admin{gk1mjnsd17soo0s40sw00c0w8g88wwg}','2017-10-31 13:09:23',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',0,NULL,NULL,'admin','admin','Administrateur'),(84,'admimn-responsable','admimn-responsable','responsable-formation@domaine.fr','responsable-formation@domaine.fr',1,'cqrk9tvm7w0s04w8sogswgsoo0ksc0','N8GFWD4B{cqrk9tvm7w0s04w8sogswgsoo0ksc0}',NULL,0,0,NULL,NULL,NULL,'a:1:{i:0;s:16:\"ROLE_RESPONSABLE\";}',0,NULL,NULL,'Responsable','Formation','Responsable formation');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_competence`
--

DROP TABLE IF EXISTS `general_competence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E7EB4AEE3EB8070A` (`program_id`),
  CONSTRAINT `FK_E7EB4AEE3EB8070A` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_competence`
--

LOCK TABLES `general_competence` WRITE;
/*!40000 ALTER TABLE `general_competence` DISABLE KEYS */;
INSERT INTO `general_competence` VALUES (30,3,'Savoir structurer l’écosystème informationnel',NULL,NULL,NULL),(31,3,'Analyser, concevoir et évaluer l’expérience utilisateur (UX)',NULL,NULL,NULL),(32,3,'Comprendre et expérimenter les technologies numériques',NULL,NULL,NULL),(33,3,'Maitriser la gestion dynamique des projets',NULL,NULL,NULL),(34,3,'Savoir faire dialoguer et coopérer les métiers connexes',NULL,NULL,NULL),(35,3,'Poursuivre de façon autonome et critique son développement professionnel',NULL,NULL,NULL);
/*!40000 ALTER TABLE `general_competence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_competence_categorie`
--

DROP TABLE IF EXISTS `general_competence_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_competence_categorie` (
  `general_competence_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`general_competence_id`,`categorie_id`),
  KEY `IDX_7ECB62DCF873A402` (`general_competence_id`),
  KEY `IDX_7ECB62DCBCF5E72D` (`categorie_id`),
  CONSTRAINT `FK_7ECB62DCBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_7ECB62DCF873A402` FOREIGN KEY (`general_competence_id`) REFERENCES `general_competence` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_competence_categorie`
--

LOCK TABLES `general_competence_categorie` WRITE;
/*!40000 ALTER TABLE `general_competence_categorie` DISABLE KEYS */;
INSERT INTO `general_competence_categorie` VALUES (30,2),(31,2),(32,2),(33,3),(34,3),(35,3);
/*!40000 ALTER TABLE `general_competence_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_objective`
--

DROP TABLE IF EXISTS `general_objective`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_objective` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5AA2E386591CC992` (`course_id`),
  CONSTRAINT `FK_5AA2E386591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_objective`
--

LOCK TABLES `general_objective` WRITE;
/*!40000 ALTER TABLE `general_objective` DISABLE KEYS */;
INSERT INTO `general_objective` VALUES (5,6,'0000-00-00 00:00:00','0000-00-00 00:00:00','Placer l\'architecture de l\'information dans l\'histoire longue des services d\'information et récente du web.',0),(6,6,'0000-00-00 00:00:00','0000-00-00 00:00:00','Positionner la fonction d\'architecte de l\'information parmi les métiers du web',0),(7,6,'0000-00-00 00:00:00','0000-00-00 00:00:00','Repérer les principales compétences nécessaires à un architecte de l\'information et les notions qui les accompagnent',0),(8,9,'0000-00-00 00:00:00','0000-00-00 00:00:00','Mener un projet collectif dans le domaine de l\'architecture de l\'information jusqu\'à la réalisation d\'un prototype et la rédaction du cahier des charges',0),(18,9,NULL,NULL,'Travailler de manière collaborative, en présentiel et à distance.',NULL),(23,21,NULL,NULL,'Become familiar with a selection of theories and methods for analyzing collaborative design',NULL),(24,21,NULL,NULL,'Develop and apply a method for evaluating the quality of collaboration',NULL),(96,66,NULL,NULL,'Acquérir une sensibilité à la dimension politique des données et des infrastructures numériques',NULL),(97,66,NULL,NULL,'Contribuer à un projet d\'activisme par une intervention de collecte, traitement et visualisation des données',NULL);
/*!40000 ALTER TABLE `general_objective` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goal`
--

DROP TABLE IF EXISTS `goal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FCDCEB2E3EB8070A` (`program_id`),
  CONSTRAINT `FK_FCDCEB2E3EB8070A` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goal`
--

LOCK TABLES `goal` WRITE;
/*!40000 ALTER TABLE `goal` DISABLE KEYS */;
/*!40000 ALTER TABLE `goal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `langue`
--

DROP TABLE IF EXISTS `langue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `langue`
--

LOCK TABLES `langue` WRITE;
/*!40000 ALTER TABLE `langue` DISABLE KEYS */;
INSERT INTO `langue` VALUES (1,'Français'),(2,'Anglais');
/*!40000 ALTER TABLE `langue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `learning_environment`
--

DROP TABLE IF EXISTS `learning_environment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `learning_environment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_64F7E444591CC992` (`course_id`),
  CONSTRAINT `FK_64F7E444591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `learning_environment`
--

LOCK TABLES `learning_environment` WRITE;
/*!40000 ALTER TABLE `learning_environment` DISABLE KEYS */;
/*!40000 ALTER TABLE `learning_environment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci,
  `sigle` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'Master (1 & 2)','Master'),(2,'Master 1','M1'),(3,'Master 2','M2'),(4,'Formation continue','FC');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objective_competence`
--

DROP TABLE IF EXISTS `objective_competence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objective_competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `competence_id` int(11) DEFAULT NULL,
  `objective_id` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B9A9565815761DAB` (`competence_id`),
  KEY `IDX_B9A9565873484933` (`objective_id`),
  CONSTRAINT `FK_B9A9565815761DAB` FOREIGN KEY (`competence_id`) REFERENCES `specific_competence` (`id`),
  CONSTRAINT `FK_B9A9565873484933` FOREIGN KEY (`objective_id`) REFERENCES `specific_objective` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=785 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objective_competence`
--

LOCK TABLES `objective_competence` WRITE;
/*!40000 ALTER TABLE `objective_competence` DISABLE KEYS */;
INSERT INTO `objective_competence` VALUES (273,178,15,2),(278,179,17,2),(283,177,20,2),(284,178,20,1),(285,177,21,2),(286,180,22,2),(287,196,22,1),(288,179,22,1),(289,187,23,2),(290,177,23,1),(293,199,31,2),(294,200,31,1),(298,190,33,1),(299,199,33,1),(300,197,32,2),(301,198,32,1),(302,199,32,1),(305,200,34,1),(306,202,34,2),(307,203,34,1),(320,200,39,2),(321,199,39,1),(322,201,39,1),(323,203,39,1),(324,204,39,1),(325,200,40,2),(326,204,41,2),(327,200,42,1),(328,204,42,2),(329,198,43,1),(330,202,43,2),(331,203,43,2),(332,200,44,2),(333,201,44,1),(334,204,44,1),(335,198,45,2),(336,200,45,2),(341,200,19,2),(342,202,19,1),(355,180,13,1),(356,179,13,2),(465,181,134,2),(472,204,136,1),(473,178,136,2),(479,180,14,2),(480,187,14,1),(481,178,14,1),(482,201,18,2),(483,202,18,2),(484,203,18,2),(485,200,139,1),(486,204,139,2),(487,205,139,2),(488,206,139,1),(733,200,35,2),(734,203,35,1),(735,204,35,2),(736,198,36,1),(737,199,36,1),(738,203,36,1),(739,202,36,2),(740,198,37,2),(741,199,37,1),(742,203,37,1),(743,204,37,1),(744,201,37,1),(745,198,38,1),(746,203,38,1),(747,204,38,2),(748,202,38,1),(760,191,240,1),(761,188,240,2),(762,189,240,2),(763,190,240,1),(767,182,242,2),(768,194,242,2),(769,201,242,1),(770,205,242,2),(771,182,241,2),(772,183,241,1),(773,185,241,1),(774,196,241,2),(775,201,243,2),(776,178,243,1),(777,179,243,1),(778,192,239,2),(779,189,239,1),(780,206,239,2),(781,198,244,2),(782,199,244,2),(783,200,244,2),(784,205,244,2);
/*!40000 ALTER TABLE `objective_competence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `objective_competence_rating_sum`
--

DROP TABLE IF EXISTS `objective_competence_rating_sum`;
/*!50001 DROP VIEW IF EXISTS `objective_competence_rating_sum`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `objective_competence_rating_sum` AS SELECT 
 1 AS `objective_id`,
 1 AS `rating_sum`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `objective_competence_weight`
--

DROP TABLE IF EXISTS `objective_competence_weight`;
/*!50001 DROP VIEW IF EXISTS `objective_competence_weight`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `objective_competence_weight` AS SELECT 
 1 AS `objective_id`,
 1 AS `competence_id`,
 1 AS `weight`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `parameter`
--

DROP TABLE IF EXISTS `parameter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` longtext COLLATE utf8_unicode_ci,
  `credits` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parameter`
--

LOCK TABLES `parameter` WRITE;
/*!40000 ALTER TABLE `parameter` DISABLE KEYS */;
INSERT INTO `parameter` VALUES (1,'<p>About ...</p>','<p>Credits ...</p>');
/*!40000 ALTER TABLE `parameter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parcours`
--

DROP TABLE IF EXISTS `parcours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parcours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_99B1DEE33EB8070A` (`program_id`),
  CONSTRAINT `FK_99B1DEE33EB8070A` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parcours`
--

LOCK TABLES `parcours` WRITE;
/*!40000 ALTER TABLE `parcours` DISABLE KEYS */;
/*!40000 ALTER TABLE `parcours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parcours_course`
--

DROP TABLE IF EXISTS `parcours_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parcours_course` (
  `parcours_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`parcours_id`,`course_id`),
  KEY `IDX_183EC6656E38C0DB` (`parcours_id`),
  KEY `IDX_183EC665591CC992` (`course_id`),
  CONSTRAINT `FK_183EC665591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_183EC6656E38C0DB` FOREIGN KEY (`parcours_id`) REFERENCES `parcours` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parcours_course`
--

LOCK TABLES `parcours_course` WRITE;
/*!40000 ALTER TABLE `parcours_course` DISABLE KEYS */;
/*!40000 ALTER TABLE `parcours_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `director_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `url` longtext COLLATE utf8_unicode_ci,
  `level_id` int(11) DEFAULT NULL,
  `competences` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_92ED7784899FB366` (`director_id`),
  KEY `IDX_92ED77845FB14BA7` (`level_id`),
  CONSTRAINT `FK_92ED77845FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`),
  CONSTRAINT `FK_92ED7784899FB366` FOREIGN KEY (`director_id`) REFERENCES `aloes_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program`
--

LOCK TABLES `program` WRITE;
/*!40000 ALTER TABLE `program` DISABLE KEYS */;
INSERT INTO `program` VALUES (3,1,'Architecture de l\'information','Université de Lyon','Archinfo','<p>L&rsquo;Universit&eacute; de Lyon propose une formation in&eacute;dite pour se pr&eacute;parer aux m&eacute;tiers de demain. Le master Architecture de l&rsquo;information procure une formation innovante pour concevoir, organiser et pr&eacute;senter l&rsquo;information aux utilisateurs dans un environnement num&eacute;rique, interactif et mobile. Les comp&eacute;tences en architecture de l\'information sont pr&eacute;cis&eacute;es et replac&eacute;es dans la cha&icirc;ne des m&eacute;tiers du web.</p>','http://archinfo.universite-lyon.fr/',1,'<p><a href=\"http://archinfo01.hypotheses.org/files/2015/07/Mooc-Archinfo-2015-Ninjas.jpg\" rel=\"attachment wp-att-1652\"><img class=\"size-full wp-image-1652 aligncenter\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://archinfo01.hypotheses.org/files/2015/07/Mooc-Archinfo-2015-Ninjas.jpg\" alt=\"Mooc-Archinfo-2015-Ninjas\" width=\"609\" height=\"207\" /></a></p>\r\n<h1><strong>Qu&rsquo;est-ce qu&rsquo;un architecte de l&rsquo;information ?</strong></h1>\r\n<p><em>Un architecte con&ccedil;oit un habitat pour qu&rsquo;il soit appropri&eacute; aux besoins sp&eacute;cifiques (logement, bureau, commerce...) des personnes qui y vivront ou qui en seront les utilisateurs. L&rsquo;architecte de l&rsquo;information structure les contenus et leur acc&egrave;s (navigation, recherche) pour qu&rsquo;ils soient le mieux adapt&eacute;s aux t&acirc;ches des utilisateurs effectifs.</em> <em>Au centre de son raisonnement se trouve la d&eacute;tection (</em>findability<em>). Les utilisateurs doivent trouver ais&eacute;ment, &agrave; point nomm&eacute;, sous la forme requise, l&rsquo;information pr&eacute;cise qui leur est n&eacute;cessaire. L&rsquo;architecte de l&rsquo;information doit tout &agrave; la fois &ecirc;tre un sp&eacute;cialiste de l&rsquo;organisation et du rep&eacute;rage des contenus et un sp&eacute;cialiste de l&rsquo;exp&eacute;rience utilisateur ou utilisabilit&eacute; (</em>UX&ndash;user experience<em>).</em> Beno&icirc;t Habert, Jean-Michel Sala&uuml;n, Jean-Philippe Magu&eacute;,<a href=\"http://halshs.archives-ouvertes.fr/docs/00/80/17/79/PDF/Architecture_de_la_information_Pour_Documentaliste_Versioncompatible.pdf\"> Architecte de l&rsquo;information : un m&eacute;tier</a>, <em>Documentaliste-Sciences de l\'information</em> 49, 1 (2012) 4-5.</p>\r\n<h1><strong>Comp&eacute;tences d&rsquo;un architecte de l&rsquo;information</strong></h1>\r\n<p>Nous avons rep&eacute;r&eacute; six comp&eacute;tences pour faire un bon architecte de l\'information. Trois constituent le noyau de l&rsquo;expertise de l&rsquo;architecte et justifient son identit&eacute; vis-&agrave;-vis d&rsquo;autres m&eacute;tiers informationnels. Elles sont techniques et concernent des outils et m&eacute;thodes directement appliqu&eacute;es par l&rsquo;architecte de l&rsquo;information. Les trois autres sont plus contextuelles et manag&eacute;riales. Elles soulignent les responsabilit&eacute;s prises par l&rsquo;architecte de l&rsquo;information dans son environnement de travail, son positionnement dans les prises de d&eacute;cision sur les syst&egrave;mes informationnels. L&rsquo;expertise de l&rsquo;architecte de l&rsquo;information se trouve donc au croisement de trois domaines :</p>\r\n<ul>\r\n<li>l&rsquo;organisation de l&rsquo;information ;</li>\r\n<li>le design de l&rsquo;exp&eacute;rience utilisateur ;</li>\r\n<li>les d&eacute;veloppements techniques du num&eacute;rique.</li>\r\n</ul>\r\n<p>Concernant le contexte de l&rsquo;exercice de son m&eacute;tier, il se trouve toujours dans une d&eacute;marche de projet dont il doit bien conna&icirc;tre les rouages. En contact avec de nombreux m&eacute;tiers, il doit pouvoir rapidement s&rsquo;adapter &agrave; des cultures diff&eacute;rentes. Enfin il lui est n&eacute;cessaire de se maintenir &agrave; niveau dans un environnement num&eacute;rique en &eacute;volution tr&egrave;s rapide. En terme de comp&eacute;tences, cela se traduit ainsi :</p>\r\n<h3><strong>Expertises</strong></h3>\r\n<ul>\r\n<li>Savoir structurer l&rsquo;&eacute;cosyst&egrave;me informationnel</li>\r\n<li>Analyser, concevoir et &eacute;valuer l&rsquo;exp&eacute;rience utilisateur (UX)</li>\r\n<li>Comprendre et exp&eacute;rimenter les technologies num&eacute;riques</li>\r\n</ul>\r\n<h3><strong>Contexte</strong></h3>\r\n<ul>\r\n<li>Maitriser la gestion dynamique des projets</li>\r\n<li>Savoir faire dialoguer et coop&eacute;rer les m&eacute;tiers connexes</li>\r\n<li>Poursuivre de fa&ccedil;on autonome et critique son d&eacute;veloppement professionnel</li>\r\n</ul>');
/*!40000 ALTER TABLE `program` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semestre`
--

DROP TABLE IF EXISTS `semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semestre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semestre`
--

LOCK TABLES `semestre` WRITE;
/*!40000 ALTER TABLE `semestre` DISABLE KEYS */;
INSERT INTO `semestre` VALUES (1,'Semestre 1'),(2,'Semestre 2'),(3,'Semestre 3'),(4,'Semestre 4');
/*!40000 ALTER TABLE `semestre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specific_competence`
--

DROP TABLE IF EXISTS `specific_competence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specific_competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program_id` int(11) DEFAULT NULL,
  `general_competence_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_55DB29F93EB8070A` (`program_id`),
  KEY `IDX_55DB29F9F873A402` (`general_competence_id`),
  CONSTRAINT `FK_55DB29F93EB8070A` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`),
  CONSTRAINT `specific_competence_ibfk_1` FOREIGN KEY (`general_competence_id`) REFERENCES `general_competence` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specific_competence`
--

LOCK TABLES `specific_competence` WRITE;
/*!40000 ALTER TABLE `specific_competence` DISABLE KEYS */;
INSERT INTO `specific_competence` VALUES (177,3,35,NULL,NULL,'Exister',1,'<ol>\r\n<li>&Ecirc;tre pr&eacute;sent sur le web et g&eacute;rer son identit&eacute; num&eacute;rique professionnelle</li>\r\n<li>Savoir pr&eacute;senter ses r&eacute;alisations et son savoir-faire (portfolio)</li>\r\n<li>Suivre les d&eacute;veloppements de la profession et innover</li>\r\n</ol>'),(178,3,35,NULL,NULL,'Contribuer',2,'<ol>\r\n<li>Participer activement aux principales manifestations et d&eacute;bats de la profession</li>\r\n<li>Contribuer au d&eacute;veloppement de r&egrave;gles d&eacute;ontologiques pour la profession</li>\r\n<li>Suivre les d&eacute;veloppements de la recherche en architecture de l&rsquo;information et y participer</li>\r\n</ol>'),(179,3,35,NULL,NULL,'Surveiller',3,'<ol>\r\n<li style=\"text-align: left;\">Surveiller les &eacute;volutions des technologies, des solutions du march&eacute;, des tendances et aspirations des professionnels</li>\r\n<li style=\"text-align: left;\">Surveiller les standards, les normes et les r&egrave;glementations</li>\r\n<li style=\"text-align: left;\">Faire des comparaisons (benchmarks) dans son secteur d&rsquo;activit&eacute; et &agrave; sa p&eacute;riph&eacute;rie</li>\r\n</ol>'),(180,3,30,NULL,NULL,'Connaitre les origines et les développements théoriques des logiques et systèmes de classification de l’information',1,NULL),(181,3,30,NULL,NULL,'Savoir évaluer la qualité des contenus et de leur organisation',2,NULL),(182,3,30,NULL,NULL,'Organiser le contenu et ses fonctionnalités',3,'<ol>\r\n<li>Inventorier les contenus</li>\r\n<li>S&eacute;lectionner les contenus</li>\r\n<li>Cat&eacute;goriser les contenus en organisant l&rsquo;information en ensembles pertinents</li>\r\n<li>D&eacute;finir une terminologie coh&eacute;rente</li>\r\n<li>D&eacute;finir une strat&eacute;gie d&rsquo;optimisation pour le r&eacute;p&eacute;rage dans les moteurs de recherche</li>\r\n<li>Comprendre les enjeux relatifs aux choix li&eacute;s &agrave; l&rsquo;organisation de l&rsquo;information (politiques, scientifiques, &eacute;conomiques&hellip;)</li>\r\n</ol>'),(183,3,30,NULL,NULL,'Connaitre et faire usage de méthodes de conception participative de l’organisation de l’information (ex. tri par cartes)',4,NULL),(184,3,30,NULL,NULL,'Concevoir le système de navigation (menus, hyperliens, fils d\'Ariane, etc.)',5,NULL),(185,3,30,NULL,NULL,'Mettre au point les systèmes de recherche (métadonnées, vocabulaire contrôlé, etc.)',6,NULL),(186,3,30,NULL,NULL,'Intégrer tous les canaux informationnels de l\'institution dans la stratégie de contenu',7,NULL),(187,3,31,NULL,NULL,'Connaître les origines et les analyses théoriques des fonctionnements socio-cognitifs et émotionnels de l\'humain en environnement numérique',1,NULL),(188,3,31,NULL,NULL,'Adopter une position d’empathie envers les utilisateurs',2,NULL),(189,3,31,NULL,NULL,'Comprendre les besoins et attentes des utilisateurs (Design Research)',3,'<ol>\r\n<li>Concevoir, conduire et analyser des entretiens ( individuels, focus group, <em>guerilla testing</em>, etc.)</li>\r\n<li>Connaitre les m&eacute;thodes d&rsquo;observation de terrain ou &agrave; distance</li>\r\n<li>Concevoir, administrer et analyser des questionnaires</li>\r\n</ol>'),(190,3,31,NULL,NULL,'Prototyper l’expérience d’utilisation',4,'<ol>\r\n<li>&Eacute;tablir un espace de conception via la d&eacute;finition de cartes d&rsquo;exp&eacute;rience, d&rsquo;esquisses, etc, en accord avec les comportements et besoins des personas</li>\r\n<li>Mettre une exp&eacute;rience en contexte via des sc&eacute;narios, des <em>customer journey maps</em> ou des storyboards</li>\r\n<li>R&eacute;aliser des prototypes testables &nbsp;(ex: wireframe du dispositif, prototypes vid&eacute;os, prototypes semi-fonctionnels)</li>\r\n<li>Etre capable de les pr&eacute;senter en mettant en avant des recommandations et des partis pris ergonomiques</li>\r\n</ol>'),(191,3,31,NULL,NULL,'Evaluer la qualité de l’expérience utilisateur',5,'<ol>\r\n<li>Analyser de mani&egrave;re critique et experte des prototypes</li>\r\n<li>Concevoir des tests utilisateurs, les mener, collecter les donn&eacute;es et les analyser</li>\r\n<li>Concevoir des exp&eacute;riences contr&ocirc;l&eacute;es &agrave; petite (exp&eacute;rience en laboratoire) ou grande (test A/B) &eacute;chelle, les mener et analyser les r&eacute;sultats</li>\r\n</ol>'),(192,3,31,NULL,NULL,'Appliquer ces méthodes en suivant un cadre déontologique',6,NULL),(193,3,32,NULL,NULL,'Comprendre les architectures de l’internet et leurs enjeux (protocoles, modèle client-serveur, interactions synchrone/asynchrone, infonuagique/cloud computing, services web, sécurité...)',1,NULL),(194,3,32,NULL,NULL,'Connaitre les technologies du web et savoir prototyper des pages web avec les outils adaptés (HTML/CSS, Ajax, intégration de contenus multi-médias...)',2,NULL),(195,3,32,NULL,NULL,'Savoir prendre en compte dans le développement la diversité des dispositifs au delà des terminaux traditionnels (responsive design)',3,NULL),(196,3,32,NULL,NULL,'Prévoir la gestion des données',4,'<ol>\r\n<li style=\"text-align: left;\">Comprendre la mod&eacute;lisation de donn&eacute;es</li>\r\n<li style=\"text-align: left;\">Savoir organiser l&rsquo;acc&egrave;s aux donn&eacute;es</li>\r\n<li style=\"text-align: left;\">Savoir articuler des donn&eacute;es h&eacute;t&eacute;rog&egrave;nes</li>\r\n<li style=\"text-align: left;\">Comprendre les enjeux techniques et d&eacute;ontologiques des donn&eacute;es massives (<em>big data</em>)</li>\r\n</ol>'),(197,3,33,NULL,NULL,'Comprendre les logiques d’affaires et les logiques publiques (appels d’offres, etc.)',1,NULL),(198,3,33,NULL,NULL,'Formuler des objectifs réalistes',2,NULL),(199,3,33,NULL,NULL,'Expérimenter les différentes étapes de conduite d\'un projet en architecture de l’information',3,'<ol>\r\n<li>R&eacute;aliser une analyse interne et externe de la commande d&rsquo;un client (contexte, contenu informationnel, utilisateurs)</li>\r\n<li>Proposer des solutions alternatives (sc&eacute;narios)</li>\r\n<li>R&eacute;diger un cahier des charges ainsi que les sp&eacute;cifications fonctionnelles pour les d&eacute;veloppeurs</li>\r\n<li>Pr&eacute;senter de fa&ccedil;on convaincante un projet et ses diff&eacute;rentes &eacute;tapes</li>\r\n<li>D&eacute;finir des indicateurs d&eacute;cisionnels et de r&eacute;ussite et les mettre en &oelig;uvre</li>\r\n</ol>'),(200,3,33,NULL,NULL,'Gérer l’organisation du travail d’un projet en architecture de l’information',4,'<ol>\r\n<li style=\"text-align: left;\">Planifier des t&acirc;ches complexes et ma&icirc;triser les d&eacute;lais et les co&ucirc;ts</li>\r\n<li style=\"text-align: left;\">Piloter et g&eacute;rer des collectifs de travail</li>\r\n<li style=\"text-align: left;\">Utiliser les m&eacute;thodes agiles de conception et d&rsquo;accompagnement</li>\r\n</ol>'),(201,3,34,NULL,NULL,'Développer une bonne culture des métiers de l’interaction et du design numérique',1,NULL),(202,3,34,NULL,NULL,'Maîtriser les vocabulaires et les logiques des informaticiens, des documentalistes, des concepteurs (designers, ergonomes, monteurs), du marketing, des juristes, des communicants et des formateurs',2,NULL),(203,3,34,NULL,NULL,'Savoir intégrer les cultures métiers et les contextes des institutions',3,NULL),(204,3,34,NULL,NULL,'Avoir du leadership',4,'<ol>\r\n<li>Animer et motiver une &eacute;quipe de professionnels de cultures diff&eacute;rentes</li>\r\n<li>Savoir convaincre, expliquer et faire accepter des d&eacute;cisions</li>\r\n<li>G&eacute;rer des conflits</li>\r\n</ol>'),(205,3,34,NULL,NULL,'Participer à des séances de conception créative',5,NULL),(206,3,34,NULL,NULL,'Agir de manière éthique, citoyenne et responsable',6,NULL);
/*!40000 ALTER TABLE `specific_competence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specific_objective`
--

DROP TABLE IF EXISTS `specific_objective`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specific_objective` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `general_objective_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B996F101591CC992` (`course_id`),
  KEY `IDX_B996F101CE72C0B3` (`general_objective_id`),
  CONSTRAINT `FK_B996F101591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  CONSTRAINT `FK_D7CADC3FCE72C0B3` FOREIGN KEY (`general_objective_id`) REFERENCES `general_objective` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specific_objective`
--

LOCK TABLES `specific_objective` WRITE;
/*!40000 ALTER TABLE `specific_objective` DISABLE KEYS */;
INSERT INTO `specific_objective` VALUES (13,6,5,NULL,NULL,NULL,'Expliquer l\'émergence du web dans l\'histoire des services documentaires et des médias.'),(14,6,5,NULL,NULL,NULL,'Expliquer l\'apparition de l\'architecture de l\'information dans l\'évolution du web.'),(15,6,5,NULL,NULL,NULL,'Justifier la notion d\'architecture de l\'information sur la longue durée.'),(17,6,5,NULL,NULL,NULL,'Repérer les tendances et évolutions des services d\'information'),(18,6,6,NULL,NULL,NULL,'Classer les différents métiers du web'),(19,6,6,NULL,NULL,NULL,'Positionner l\'architecte de l\'information par rapport aux informaticiens et aux professionnels de la communication'),(20,6,6,NULL,NULL,NULL,'Connaître les principaux réseaux et associations professionnelles de l\'architecture de l\'information et des métiers connexes'),(21,6,7,NULL,NULL,1,'Connaître le référentiel des compétences d\'un architecte de l\'information'),(22,6,7,NULL,NULL,2,'Définir les notions de structuration de l\'information, des données et des ressources documentaires'),(23,6,7,NULL,NULL,4,'Définir l\'expérience utilisateur et connaître ses principes de base'),(31,9,8,NULL,NULL,NULL,'Déterminer les différentes phases d\'un projet en architecture de l\'information en s\'appuyant sur des outils de planification agile.'),(32,9,8,NULL,NULL,NULL,'Réaliser un audit auprès de clients.'),(33,9,8,NULL,NULL,NULL,'Réaliser un prototypage rapide de scénarios.'),(34,9,8,NULL,NULL,NULL,'Organiser la documentation afférente.'),(35,9,8,NULL,NULL,NULL,'Gérer les moyens afférents à un projet (humains, matériels, financiers).'),(36,9,8,NULL,NULL,NULL,'Rédiger des écrits professionnels.'),(37,9,8,NULL,NULL,NULL,'Présenter et défendre une solution en contexte professionnel.'),(38,9,8,NULL,NULL,NULL,'Présenter un Pitch.'),(39,9,18,NULL,NULL,NULL,'Identifier et répartir les rôles et les tâches dans une équipe.'),(40,9,18,NULL,NULL,NULL,'Choisir, paramétrer et utiliser un outil de travail collaboratif.'),(41,9,18,NULL,NULL,NULL,'Organiser et piloter une réunion.'),(42,9,18,NULL,NULL,NULL,'Gérer les conflits éventuels.'),(43,9,18,NULL,NULL,NULL,'Maîtriser les enjeux de la communication (interne/externe, formelle/informelle).'),(44,9,18,NULL,NULL,NULL,'Maîtriser le partage entre coordination et production'),(45,9,18,NULL,NULL,NULL,'Gérer le temps et tenir les délais'),(60,21,23,NULL,NULL,NULL,'Understand how the collaborative design process has been modeled'),(61,21,23,NULL,NULL,NULL,'Understand the difficulties of collaboration and how to meet them'),(62,21,24,NULL,NULL,NULL,'Understand how an analysis grid can be used to evaluate a collaborative activity'),(63,21,24,NULL,NULL,NULL,'Understand how the evaluation of collaboration is relevant to Information Architecture'),(134,6,7,NULL,NULL,3,'Savoir évaluer l\'architecture de l\'information de sites ou application existantes'),(136,6,6,NULL,NULL,3,'Savoir s\'exprimer clairement par écrit et par oral sur des thématiques de l\'architecture de l\'information'),(139,6,7,NULL,NULL,4,'Savoir collaborer et travailler en équipe'),(239,66,96,NULL,NULL,0,'Comprendre les enjeux politiques d\'un jeu de données'),(240,66,96,NULL,NULL,1,'Collaborer avec les acteurs de la société civile'),(241,66,97,NULL,NULL,0,'Collecter et nettoyer un corpus de données'),(242,66,97,NULL,NULL,1,'Analyser et visualiser un corpus de données'),(243,66,96,NULL,NULL,2,'Analyser de manière réflexive les processus et les résultats de son intervention'),(244,66,97,NULL,NULL,2,'Gérer un projet collectif et participatif');
/*!40000 ALTER TABLE `specific_objective` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_face_to_face` int(11) DEFAULT NULL,
  `hdeb` time DEFAULT NULL,
  `hfin` time DEFAULT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9D40DE1B591CC992` (`course_id`),
  CONSTRAINT `FK_9D40DE1B591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=264 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (9,6,'2016-09-06 09:00:00','2016-09-06 12:00:00','<p>1. Pr&eacute;sentation g&eacute;n&eacute;rale de l\'UE :</p>\r\n<ul>\r\n<li>Objectifs</li>\r\n<li>M&eacute;thodes</li>\r\n<li>Calendrier</li>\r\n<li>Evaluation</li>\r\n</ul>\r\n<p>2. Histoire de l\'architecture de l\'information</p>\r\n<p>3. R&eacute;f&eacute;rentiel</p>','Présentation',1,NULL,NULL,'Salle 117'),(10,6,'2016-09-13 09:00:00','2016-09-13 12:00:00','<ul>\r\n<li>Lancement du travail : &Eacute;valuation&nbsp;d\'un site Web de grande ampleur.</li>\r\n<li>D&eacute;marche d\'&eacute;valuation&nbsp;en AI.</li>\r\n</ul>','Evaluation d\'un système d\'information 1/4',1,NULL,NULL,'Salle 117'),(11,6,'2016-10-04 09:00:00','2016-10-04 12:00:00','<ul>\r\n<li>&Eacute;valuation en AI : principes et r&egrave;gles</li>\r\n<li>Rencontres pour l\'avancement du travail</li>\r\n</ul>','Evaluation d\'un système d\'information 3/4',1,NULL,NULL,'Salle 117'),(12,6,'2016-09-20 09:00:00','2016-09-20 12:00:00','<ul>\r\n<li>Audit de contenu</li>\r\n<li>Rapport de recommandations</li>\r\n<li>Rencontres pour l\'avancement du travail</li>\r\n</ul>','Evaluation d\'un système d\'information 2/4',1,NULL,NULL,'Salle 117'),(13,6,'2016-09-27 09:00:00','2016-09-27 12:00:00','<p>S&eacute;ance d\'aper&ccedil;u du processus de conception UX. Nous allons concevoir un mini-projet en l\'espace de 3h en passant par les diff&eacute;rentes phases du processus: analyse de l\'existant et compr&eacute;hension des besoins, d\'id&eacute;ation, prototypage, test et critique.</p>','Introduction au processus de conception UX (expérience utilisateur)',1,NULL,NULL,'Salle 117'),(23,6,'2016-10-11 09:00:00','2016-10-11 12:00:00','<p>Lancement des travaux</p>\r\n<ul>\r\n<li>L\'architecture de l\'information dans l\'histoire du web (expos&eacute; et billet)</li>\r\n<li>Livres fondateurs (pitch et billet)</li>\r\n</ul>\r\n<p>Analyse et r&eacute;daction de pages Linkedin</p>\r\n<p>&nbsp;</p>','Publier numérique',1,NULL,NULL,'Salle 117'),(24,6,'2016-11-02 09:00:00','2016-11-03 17:00:00','<p><a href=\"http://www.blendwebmix.com/\" target=\"_blank\">BlendWebMix</a> </p>','BlendWebMix',1,NULL,NULL,'Cité internationale'),(25,6,'2016-10-18 09:00:00','2016-10-18 12:00:00','<p>Rencontres pour l\'avancement du travail.</p>\r\n<p>Remise du travail : 21 octobre.</p>','Evaluation d\'un système d\'information 4/4',1,NULL,NULL,'Salle 117'),(26,6,'2016-11-08 09:00:00','2016-11-08 12:00:00','<p>Expos&eacute;s</p>\r\n<p>&nbsp;</p>','Histoire de l\'information et du web 1/2',1,NULL,NULL,'Salle 117'),(27,6,'2016-11-15 09:00:00','2016-11-15 12:00:00','<ul>\r\n<li>Expos&eacute;s</li>\r\n</ul>','Histoire de l\'information et du web 2/2',1,NULL,NULL,'Salle 117'),(28,6,'2016-11-22 09:00:00','2016-11-22 12:00:00','<p>Analyses crois&eacute;es et publication des billets sur l\'histoire du web et des m&eacute;dias</p>\r\n<p>Critiques crois&eacute;es des pages LinkedIn individuelles</p>','Relectures et amélioration',1,NULL,NULL,'Salle 117'),(29,6,'2016-11-29 09:00:00','2016-11-29 12:00:00','<p>3 diapos, 3 minutes sur :</p>\r\n<ol>\r\n<li>Morville &amp; Rosenfeld</li>\r\n<li>Glushko</li>\r\n<li>Garrett</li>\r\n<li>Resmini &amp; Rosatti</li>\r\n</ol>','Pitch sur textes fondateurs 3X3',1,NULL,NULL,'Salle 117'),(30,6,'2016-12-06 09:00:00','2016-12-06 12:00:00','<ul>\r\n<li>Pr&eacute;sentations des projets (INF05) par les commanditaires</li>\r\n</ul>','Projets en architecture de l\'information',1,NULL,NULL,'Salle 117'),(31,6,'2016-12-12 09:00:00','2016-12-12 12:00:00','<ul>\r\n<li>Une question de r&eacute;flexion</li>\r\n<li>Un retour sur sa page LinkedIn</li>\r\n</ul>','Bilan et examen',1,NULL,NULL,'Salle 117'),(89,9,'2017-01-19 09:00:00','2017-01-19 12:00:00','<p>M&eacute;thodes et pratiques</p>\r\n<p>B Habert</p>','Gestion des conflits (cours)',1,NULL,NULL,'117'),(90,9,'2017-01-12 09:00:00','2017-01-12 12:00:00','<p>Pr&eacute;sentation de la d&eacute;marche :</p>\r\n<ul>\r\n<li>Qu\'est-ce qu\'un projet ?</li>\r\n<li>Evaluation du temps et du co&ucirc;t de la d&eacute;marche</li>\r\n<li>Reformulation de la commande, prise de contact avec le commanditaire, mise en place du comit&eacute; de pilotage, etc...</li>\r\n</ul>\r\n<p>Les trois phases de l\'analyse de l\'existant :</p>\r\n<ul>\r\n<li>Contexte</li>\r\n<li>Contenu</li>\r\n<li>Utilisateurs</li>\r\n</ul>\r\n<p>Pr&eacute;sentation du deuxi&egrave;me livrable</p>','La conduite de projet  (cours)',1,NULL,NULL,'117'),(91,9,'2017-01-12 09:00:00','2017-02-16 09:00:00','<p>Travail en &eacute;quipe.</p>\r\n<p>Tutor&eacute;</p>','Enquêtes et analyse (équipe)',2,NULL,NULL,''),(92,9,'2017-02-16 09:00:00','2017-02-16 12:00:00','<p>M&eacute;thodes et outils de cr&eacute;ativit&eacute;</p>\r\n<p>Construction de sc&eacute;narios</p>\r\n<p>P Benech</p>\r\n<p>JM Sala&uuml;n</p>','Scénarios et idéation (cours)',1,NULL,NULL,'LIPn'),(93,9,'2017-02-16 14:00:00','2017-03-23 12:00:00','<p>Travail en &eacute;quipe.</p>\r\n<p>Tutor&eacute;</p>','Construction des scénarios (équipe)',2,NULL,NULL,''),(95,9,'2017-03-23 14:00:00','2017-04-13 12:00:00','<p>Travail en &eacute;quipe.</p>\r\n<p>Tutor&eacute;</p>','Développement de la solution retenue (équipe)',2,NULL,NULL,''),(97,9,'2017-05-04 09:00:00','2017-05-04 12:00:00','<p>Soutenance publique et rendus des travaux</p>','Soutenance du projet',1,NULL,NULL,'117'),(99,21,'2017-01-11 14:00:00','2017-02-16 17:00:00','<p>Combiner un travail top-down (r&eacute;flection th&eacute;orique) avec un travail bottom-up (analyse empirique) afin de saisir les indicateurs utilis&eacute;s pour &eacute;valuer l\'activit&eacute; collaborative</p>\r\n<ul>\r\n<li>Lecture et annotation de la vid&eacute;o \"Introduction to the Science of Team Science\". Utiliser un syst&egrave;me d\'annotation &agrave; &eacute;laborer ensemble.</li>\r\n<li>Lecutre de l\'article Fiore, et al. et pr&eacute;sentation et discussion en classe.</li>\r\n<li>Lecture et annotation de la vid&eacute;o \"Shared regulation and CSCL\". Continuer &agrave; &eacute;laborer et &agrave; utiliser le syst&egrave;me d\'annotation.</li>\r\n<li>Lecure de l\'article Malmberg, et al. et pr&eacute;sentation et discussion en classe.</li>\r\n<li>Proposer des indicateurs utilis&eacute;s pour &eacute;valuer la collaboration &agrave; partir des deux vid&eacute;os. Suivre la grille pr&eacute;sent&eacute;e en classe.</li>\r\n</ul>','Théories et modèles',1,NULL,NULL,''),(100,21,'2017-02-23 14:00:00','2017-04-19 17:00:00','<p>Faire une analyse en applicant la grille &agrave; un corpus, rendre un produit analytique, et faire une pr&eacute;sentation d\'une activit&eacute; collaborative (&agrave; choisir parmi les corpus pr&eacute;sent&eacute;s)</p>','Analyses de la collaboration',1,NULL,NULL,''),(101,21,'2017-04-26 23:55:00','2017-04-26 23:55:00','<p>Transformer le contenu du cours d\'une part en booktype (15%) et d\'autre part en format appropri&eacute; pour votre page Linked In (5%). En faire une pr&eacute;sentation en classe.</p>','Réflection',1,NULL,NULL,''),(167,6,'2016-12-20 09:00:00','2016-12-20 12:00:00',NULL,'Travailler en équipe, reformuler la commande',1,NULL,NULL,'Salle 117'),(217,9,'2017-02-09 14:00:00','2017-02-09 17:00:00','<p>M&eacute;thodes et pratiques</p>\r\n<p>Agn&egrave;s Crepet</p>','Méthode agile et sprints (cours)',1,NULL,NULL,'117'),(253,66,'2017-10-19 10:30:00','2017-10-19 13:30:00','<ul>\r\n<li>Sensibilisation &agrave; la politique des donn&eacute;es</li>\r\n<li>Exemples et histoires des projets d&rsquo;activisme de donn&eacute;es</li>\r\n<li>Pr&eacute;sentation, plan et &eacute;valuation du cours</li>\r\n<li>T&eacute;moignage d&rsquo;un data activiste (&agrave; confirmer)</li>\r\n</ul>','Introduction au cours',1,NULL,NULL,'Salle 207 de l\'IXXI - ENS Lyon, site Monod (2éme étage)'),(254,66,'2017-10-24 10:30:00','2017-10-24 13:30:00','<ul>\r\n<li>Analyse des projets d&rsquo;activisme identifi&eacute;s</li>\r\n<li>S&eacute;lection des cas plus prometteurs pour une intervention d&rsquo;activisme de donn&eacute;es</li>\r\n<li>Formation des groupes (2/3 &eacute;tudiants)</li>\r\n</ul>','Sélection des projets et formation des groupes',1,NULL,NULL,'Salle LIPéN - ENS Lyon, site Descartes (bâtiment Buisson)'),(255,66,'2017-11-20 13:00:00','2017-11-21 16:00:00','<p>- Lun. 20 nov. 13h-19h&nbsp;(Salle LIP&eacute;N)<br />- Mar. 21 nov. 9h-12h (Salle IXXI)&nbsp; &nbsp;et&nbsp; &nbsp; 13h-16h (Salle LIP&eacute;N)</p>\r\n<ul>\r\n<li>Rencontre et discussion avec les activistes</li>\r\n<li>Identification des donn&eacute;es pertinentes</li>\r\n<li>D&eacute;finition du positionnement politique des &eacute;tudiants</li>\r\n<li>D&eacute;finition du projet</li>\r\n</ul>','Mini-workshop d’enquête',1,NULL,NULL,'Salle LIPéN - ENS Lyon, site Descartes (bâtiment Buisson) et Salle 207 de l\'IXXI - ENS Lyon, site Monod (2éme étage)'),(257,66,'2018-01-10 09:00:00','2018-01-13 19:00:00','<p>Les dates du workshop sont indicatives. Les dates exates seront fix&eacute; en accord avec les &eacute;tudiants et les autres participants.</p>\r\n<ul>\r\n<li>Travail de production sur les donn&eacute;es</li>\r\n</ul>','Data sprint',1,NULL,NULL,'Salle LIPéN - ENS Lyon, site Descartes (bâtiment Buisson)'),(261,66,'2017-10-25 13:30:00','2017-11-19 13:30:00','<p>(2 sessions de 30 minutes par groupe - cr&eacute;neau du rdv &agrave; fixer)</p>\r\n<ul>\r\n<li>Travail en &eacute;quipe</li>\r\n<li>Prise de contact et premi&egrave;re rencontre avec les activistes</li>\r\n</ul>','Suivi et conseil sur l’avancement du projet',2,NULL,NULL,'Videoconférence'),(263,66,'2017-11-22 13:30:00','2018-01-09 13:30:00','<p>(2 sessions de 1 heure par groupe - cr&eacute;neau du rdv &agrave; fixer)</p>\r\n<ul>\r\n<li>Pr&eacute;paration du sprint</li>\r\n</ul>','Suivi et conseil sur l’avancement du projet',2,NULL,NULL,'Videoconférence');
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic_typologie`
--

DROP TABLE IF EXISTS `topic_typologie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic_typologie` (
  `topic_id` int(11) NOT NULL,
  `typologie_id` int(11) NOT NULL,
  PRIMARY KEY (`topic_id`,`typologie_id`),
  KEY `IDX_FFFE10551F55203D` (`topic_id`),
  KEY `IDX_FFFE105542F4634A` (`typologie_id`),
  CONSTRAINT `FK_FFFE10551F55203D` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FFFE105542F4634A` FOREIGN KEY (`typologie_id`) REFERENCES `typologie` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic_typologie`
--

LOCK TABLES `topic_typologie` WRITE;
/*!40000 ALTER TABLE `topic_typologie` DISABLE KEYS */;
INSERT INTO `topic_typologie` VALUES (10,9),(11,9),(12,9),(13,10),(25,9),(31,11);
/*!40000 ALTER TABLE `topic_typologie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typologie`
--

DROP TABLE IF EXISTS `typologie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typologie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_166B84ED591CC992` (`course_id`),
  CONSTRAINT `FK_166B84ED591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typologie`
--

LOCK TABLES `typologie` WRITE;
/*!40000 ALTER TABLE `typologie` DISABLE KEYS */;
INSERT INTO `typologie` VALUES (1,NULL,'Test','test'),(2,NULL,'Histoire','histoire'),(3,NULL,'MaNI','mani'),(4,NULL,'Document structuré','document structuré'),(5,NULL,'Bases de données','bases de données'),(6,NULL,'Mise à niveau','mise à niveau'),(7,NULL,'Portfolio','portfolio'),(8,NULL,'Évaluation par les pairs','évaluation par les pairs'),(9,NULL,'Evaluation de sites','evaluation de sites'),(10,NULL,'Prototypage','prototypage'),(11,NULL,'Examen','examen'),(12,NULL,'Billets','billets'),(13,NULL,'Exposés et pitchs','exposés et pitchs'),(14,NULL,'Exposé +','exposé +'),(15,NULL,'Contenus','contenus'),(16,NULL,'Congés','congés'),(17,NULL,'Exposé + réalisation','exposé + réalisation'),(18,NULL,'Mise en scène','mise en scène'),(19,NULL,'Ecrit + code commenté','ecrit + code commenté'),(20,NULL,'Transparents + réalisation','transparents + réalisation'),(21,NULL,'Ecrit','ecrit'),(22,NULL,'Ecrit + réalisation','ecrit + réalisation'),(23,NULL,'quizz','quizz'),(24,NULL,'Reformulation (Projet)','reformulation (projet)'),(25,NULL,'Benjamin CHIOETTO','benjamin chioetto'),(26,NULL,'Pédagogies universitaire','pédagogies universitaire'),(27,NULL,'Organisation','organisation'),(28,NULL,'Jeux','jeux'),(29,NULL,'Evaluation','evaluation'),(30,NULL,'Capter l\'attention','capter l\'attention'),(31,NULL,'Module 1 - Capter l\'attention','module 1   capter l\'attention'),(32,NULL,'Module 1 - Améliorer la communication avec ses étudiants','module 1   améliorer la communication avec ses étudiants'),(33,NULL,'Module 2 - Optimiser la préparation du cours par les étudiants','module 2   optimiser la préparation du cours par les étudiants'),(34,NULL,'Module 3 - Affiner l\'évaluation de ses étudiants','module 3   affiner l\'évaluation de ses étudiants'),(35,NULL,'Module 4 - Mise en pratique','module 4   mise en pratique'),(36,NULL,'Module 5 - Bilan & évaluation','module 5   bilan & évaluation'),(37,NULL,'Cahier personnel','cahier personnel'),(38,NULL,'Forum de discussion','forum de discussion'),(39,NULL,'Lecture','lecture'),(40,NULL,'Pad commun','pad commun'),(41,NULL,'Mise en pratique','mise en pratique'),(42,NULL,'Cahier personnel partagé','cahier personnel partagé'),(43,NULL,'Cartes heuristiques','cartes heuristiques'),(44,NULL,'Présentations orales','présentations orales'),(45,NULL,'Niveau 1 - Améliorer la communication avec ses étudiant','niveau 1   améliorer la communication avec ses étudiant'),(46,NULL,'Niveau 2 - Optimiser la préparation du cours par les étudiants','niveau 2   optimiser la préparation du cours par les étudiants'),(47,NULL,'Niveau 3 - Affiner l\'évaluation de ses étudiants','niveau 3   affiner l\'évaluation de ses étudiants'),(48,NULL,'Niveau 4 - Mise en pratique','niveau 4   mise en pratique'),(49,NULL,'Niveau 5 - Bilan & évaluation','niveau 5   bilan & évaluation');
/*!40000 ALTER TABLE `typologie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_courses`
--

DROP TABLE IF EXISTS `users_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_courses` (
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`course_id`),
  KEY `IDX_59A52E86A76ED395` (`user_id`),
  KEY `IDX_59A52E86591CC992` (`course_id`),
  CONSTRAINT `FK_59A52E86591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_59A52E86A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_courses`
--

LOCK TABLES `users_courses` WRITE;
/*!40000 ALTER TABLE `users_courses` DISABLE KEYS */;
INSERT INTO `users_courses` VALUES (84,6),(84,9),(84,21),(84,66);
/*!40000 ALTER TABLE `users_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_programs`
--

DROP TABLE IF EXISTS `users_programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_programs` (
  `user_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`program_id`),
  KEY `IDX_8A084E9FA76ED395` (`user_id`),
  KEY `IDX_8A084E9F3EB8070A` (`program_id`),
  CONSTRAINT `FK_8A084E9F3EB8070A` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8A084E9FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_programs`
--

LOCK TABLES `users_programs` WRITE;
/*!40000 ALTER TABLE `users_programs` DISABLE KEYS */;
INSERT INTO `users_programs` VALUES (84,3);
/*!40000 ALTER TABLE `users_programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `assessment_competence_weight`
--

/*!50001 DROP VIEW IF EXISTS `assessment_competence_weight`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `assessment_competence_weight` AS select `ao`.`assessment_id` AS `assessment_id`,`oc`.`competence_id` AS `competence_id`,round(sum((`ao`.`weight` * `oc`.`weight`)),4) AS `weight` from (`assessment_objective_weight` `ao` join `objective_competence_weight` `oc` on((`ao`.`objective_id` = `oc`.`objective_id`))) group by `ao`.`assessment_id`,`oc`.`competence_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `assessment_objective_rating_sum`
--

/*!50001 DROP VIEW IF EXISTS `assessment_objective_rating_sum`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `assessment_objective_rating_sum` AS select `assessment_objective`.`assessment_id` AS `assessment_id`,sum(`assessment_objective`.`rating`) AS `rating_sum` from `assessment_objective` group by `assessment_objective`.`assessment_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `assessment_objective_weight`
--

/*!50001 DROP VIEW IF EXISTS `assessment_objective_weight`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `assessment_objective_weight` AS select `ao`.`assessment_id` AS `assessment_id`,`ao`.`objective_id` AS `objective_id`,round((`ao`.`rating` / `rs`.`rating_sum`),4) AS `weight` from (`assessment_objective` `ao` join `assessment_objective_rating_sum` `rs` on((`ao`.`assessment_id` = `rs`.`assessment_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `course_competence_weight`
--

/*!50001 DROP VIEW IF EXISTS `course_competence_weight`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `course_competence_weight` AS select `co`.`course_id` AS `course_id`,`oc`.`competence_id` AS `competence_id`,round(sum((`co`.`weight` * `oc`.`weight`)),4) AS `weight` from (`course_objective_weight` `co` join `objective_competence_weight` `oc` on((`co`.`objective_id` = `oc`.`objective_id`))) group by `co`.`course_id`,`oc`.`competence_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `course_objective_weight`
--

/*!50001 DROP VIEW IF EXISTS `course_objective_weight`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `course_objective_weight` AS select `c`.`id` AS `course_id`,`ao`.`objective_id` AS `objective_id`,round(sum((`a`.`weight` * `ao`.`weight`)),4) AS `weight` from ((`course` `c` join `assessment` `a` on((`c`.`id` = `a`.`course_id`))) join `assessment_objective_weight` `ao` on((`a`.`id` = `ao`.`assessment_id`))) group by `ao`.`objective_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `objective_competence_rating_sum`
--

/*!50001 DROP VIEW IF EXISTS `objective_competence_rating_sum`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `objective_competence_rating_sum` AS select `objective_competence`.`objective_id` AS `objective_id`,sum(`objective_competence`.`rating`) AS `rating_sum` from `objective_competence` group by `objective_competence`.`objective_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `objective_competence_weight`
--

/*!50001 DROP VIEW IF EXISTS `objective_competence_weight`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `objective_competence_weight` AS select `oc`.`objective_id` AS `objective_id`,`oc`.`competence_id` AS `competence_id`,round((`oc`.`rating` / `rs`.`rating_sum`),4) AS `weight` from (`objective_competence` `oc` join `objective_competence_rating_sum` `rs` on((`oc`.`objective_id` = `rs`.`objective_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-31 14:24:06
