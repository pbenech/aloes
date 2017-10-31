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
INSERT INTO `fos_user` VALUES (1,'admin','admin','administrateur@domaine.fr','administrateur@domaine.fr',1,'gk1mjnsd17soo0s40sw00c0w8g88wwg','admin{gk1mjnsd17soo0s40sw00c0w8g88wwg}','2017-10-31 13:24:38',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',0,NULL,NULL,'admin','admin','Administrateur');
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

-- Dump completed on 2017-10-31 14:27:14
