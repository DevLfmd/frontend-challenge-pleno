-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: marketplace
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `marketplace`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `marketplace` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `marketplace`;

--
-- Table structure for table `developer_services`
--

DROP TABLE IF EXISTS `developer_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `developer_services` (
  `developer_id` bigint unsigned NOT NULL,
  `service_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `developer_services_developer_id_foreign` (`developer_id`),
  KEY `developer_services_service_id_foreign` (`service_id`),
  CONSTRAINT `developer_services_developer_id_foreign` FOREIGN KEY (`developer_id`) REFERENCES `developers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `developer_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developer_services`
--

LOCK TABLES `developer_services` WRITE;
/*!40000 ALTER TABLE `developer_services` DISABLE KEYS */;
INSERT INTO `developer_services` VALUES (1,1,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(1,2,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(1,3,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(1,4,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(1,5,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(2,1,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(2,2,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(3,4,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(4,5,'2021-04-12 16:46:47','2021-04-12 16:46:47'),(4,2,'2021-04-12 16:46:47','2021-04-12 16:46:47');
/*!40000 ALTER TABLE `developer_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `developers`
--

DROP TABLE IF EXISTS `developers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `developers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developers`
--

LOCK TABLES `developers` WRITE;
/*!40000 ALTER TABLE `developers` DISABLE KEYS */;
INSERT INTO `developers` VALUES (1,'Luiz Fernando Miranda Dias','23','O desenvolvedor full stack é o profissional habilitado para compreender e operar em todas as camadas do desenvolvimento de um projeto, desde a criação de servidores internos até interfaces de comunicação com o usuário final.','https://exame.com/wp-content/uploads/2021/02/bill.jpg','2021-04-12 16:46:47','2021-04-12 16:46:47'),(2,'Júlia Moura Garcia','21','O Desenvolvedor mobile é o profissional que tem habilidades para criar um projeto de elaboração de aplicativo de celular, para qualquer finalidade, inclusive a educação.','https://s2.glbimg.com/LC0BkSbOs0672gk85aQQDlysN4c=/e.glbimg.com/og/ed/f/original/2019/04/11/captura_de_tela_2019-04-11_as_13.13.44.png','2021-04-12 16:46:47','2021-04-12 16:46:47'),(3,'Ana Silva','32','Administrador de banco de dados, comumente chamado de DBA (sigla em inglês de Database administrator), é o profissional responsável por gerenciar, instalar, configurar, atualizar e monitorar um banco de dados ou sistemas de bancos de dados.','https://live.staticflickr.com/6129/6195500334_91c7240acd_b.jpg','2021-04-12 16:46:47','2021-04-12 16:46:47'),(4,'Josimar Júnior','25','A infraestrutura de TI consiste nos componentes e serviços que fornecem a base para sustentar todos os sistemas de informação de uma organização.','https://s2.glbimg.com/hOQeWyRlurqGohHz2rDzpirVqgo=/e.glbimg.com/og/ed/f/original/2021/06/26/gettyimages-1229892421.jpg','2021-04-12 16:46:47','2021-04-12 16:46:47');
/*!40000 ALTER TABLE `developers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_08_03_233149_service',1),(5,'2021_08_04_010323_developer',1),(6,'2021_08_04_014438_developer_service',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `promotional_price` double(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Desenvolvimento Mobile',6500.00,5800.00,'React Native é uma biblioteca Javascript criada pelo Facebook. É usada para desenvolver aplicativos para os sistemas Android e iOS de forma nativa.','https://www.appstud.com/wp-content/uploads/2018/03/React-Native-Titre-1500x750.png','2021-04-12 16:46:47','2021-04-12 16:46:47'),(2,'Desenvolvimento Web',4500.00,3800.00,'Desenvolvimento web é o termo utilizado para descrever o desenvolvimento de sites, na Internet ou numa intranet. O profissional que trabalha desenvolvendo websites pode ser um web designer ou um web developer.','data:image/jpeg;base64,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','2021-04-12 16:46:47','2021-04-12 16:46:47'),(3,'Desenvolvimento Laravel',5500.00,4900.00,'Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC.','https://mazer.dev/wp-content/uploads/2021/03/laravel-8.png','2021-04-12 16:46:47','2021-04-12 16:46:47'),(4,'Analista de banco de dados - MYSQL',8500.00,7800.00,'O MySQL é um sistema de gerenciamento de banco de dados, que utiliza a linguagem SQL como interface. É atualmente um dos sistemas de gerenciamento de bancos de dados mais populares da Oracle Corporation, com mais de 10 milhões de instalações pelo mundo.','data:image/png;base64,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','2021-04-12 16:46:47','2021-04-12 16:46:47'),(5,'Analista de cloud',8000.00,7800.00,'Google Cloud Platform é uma suíte de computação em nuvem oferecida pelo Google, funcionando na mesma infraestrutura que a empresa usa para seus produtos dirigidos aos usuários, dentre eles o Buscador Google e o Youtube.','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRau3Q-jSo6R_aszA2rn5hkYq2yLjMC89elHtNCMmHpTK9Op2vBKASPNlhiyBn5Gy7-XRc&usqp=CAU','2021-04-12 16:46:47','2021-04-12 16:46:47');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-04  0:29:59
