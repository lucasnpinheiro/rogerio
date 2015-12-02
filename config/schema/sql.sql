-- MySQL dump 10.15  Distrib 10.0.21-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: rogerio
-- ------------------------------------------------------
-- Server version	10.0.21-MariaDB

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
-- Table structure for table `areceber`
--

DROP TABLE IF EXISTS `areceber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areceber` (
  `nro_docto` varchar(100) DEFAULT NULL,
  `dt_vencto` date DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `valor` float(6,2) DEFAULT NULL,
  `parcela` int(2) DEFAULT NULL,
  `vl_juros` float(6,2) DEFAULT NULL,
  `vl_multa` float(6,2) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `dt_recebe` date DEFAULT NULL,
  `total_recebe` float(6,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `os_cliente_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nro_seq` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areceber`
--

LOCK TABLES `areceber` WRITE;
/*!40000 ALTER TABLE `areceber` DISABLE KEYS */;
INSERT INTO `areceber` VALUES ('11/1','0037-04-19',1,100.00,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:39:54','2015-11-29 19:39:54',1,1,NULL),('11/2','0037-04-19',1,100.00,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:39:54','2015-11-29 19:39:54',1,2,NULL),('21/1','0037-04-19',2,100.00,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:39:54','2015-11-29 19:39:54',2,3,NULL),('21/2','0037-04-19',2,100.00,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:39:54','2015-11-29 19:39:54',2,4,NULL),('19/1','2015-12-12',1,83.33,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:00','2015-11-29 19:56:00',16,5,NULL),('19/2','2016-01-12',1,83.33,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:00','2015-11-29 19:56:00',16,6,NULL),('19/3','2016-02-12',1,83.33,3,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:01','2015-11-29 19:56:01',16,7,NULL),('29/1','2015-12-12',2,83.33,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:01','2015-11-29 19:56:01',17,8,NULL),('29/2','2016-01-12',2,83.33,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:01','2015-11-29 19:56:01',17,9,NULL),('29/3','2016-02-12',2,83.33,3,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:01','2015-11-29 19:56:01',17,10,NULL),('110/1','2015-12-12',1,83.33,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:48','2015-11-29 19:56:48',18,11,NULL),('110/2','2016-01-12',1,83.33,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:48','2015-11-29 19:56:48',18,12,NULL),('110/3','2016-02-12',1,83.33,3,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:48','2015-11-29 19:56:48',18,13,NULL),('210/1','2015-12-12',2,83.33,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:49','2015-11-29 19:56:49',19,14,NULL),('210/2','2016-01-12',2,83.33,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:49','2015-11-29 19:56:49',19,15,NULL),('210/3','2016-02-12',2,83.33,3,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:49','2015-11-29 19:56:49',19,16,NULL),('111/1','2015-12-12',1,83.33,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:52','2015-11-29 19:56:52',20,17,NULL),('111/2','2016-01-12',1,83.33,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:52','2015-11-29 19:56:52',20,18,NULL),('111/3','2016-02-12',1,83.33,3,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:52','2015-11-29 19:56:52',20,19,NULL),('211/1','2015-12-12',2,83.33,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:52','2015-11-29 19:56:52',21,20,NULL),('211/2','2016-01-12',2,83.33,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:53','2015-11-29 19:56:53',21,21,NULL),('211/3','2016-02-12',2,83.33,3,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:56:53','2015-11-29 19:56:53',21,22,NULL),('112/1','2015-12-12',1,83.33,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',22,23,NULL),('112/2','2016-01-12',1,83.33,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',22,24,NULL),('112/3','2016-02-12',1,83.33,3,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',22,25,NULL),('212/1','2015-12-12',2,83.33,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',23,26,NULL),('212/2','2016-01-12',2,83.33,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',23,27,NULL),('212/3','2016-02-12',2,83.33,3,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',23,28,NULL),('113/1','2015-12-20',1,350.00,1,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:58:54','2015-11-30 12:24:16',24,29,1018),('113/2','2016-01-20',1,350.00,2,5.00,6.00,'A',NULL,NULL,'2015-11-29 19:58:54','2015-11-30 12:24:16',24,30,1019),('114/1','2015-12-01',1,125.00,1,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:12','2015-11-30 16:40:21',25,31,1020),('114/2','2016-01-01',1,125.00,2,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:12','2015-11-30 16:40:22',25,32,1021),('114/3','2016-02-01',1,125.00,3,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:12','2015-11-30 16:40:22',25,33,1022),('114/4','2016-03-01',1,125.00,4,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:12','2015-11-30 16:40:22',25,34,1023),('114/5','2016-04-01',1,125.00,5,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:12','2015-11-30 16:40:22',25,35,1024),('114/6','2016-05-01',1,125.00,6,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:12','2015-11-30 16:40:22',25,36,1025),('314/1','2015-12-01',3,125.00,1,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:13','2015-11-30 16:40:13',26,37,NULL),('314/2','2016-01-01',3,125.00,2,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:13','2015-11-30 16:40:13',26,38,NULL),('314/3','2016-02-01',3,125.00,3,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:13','2015-11-30 16:40:13',26,39,NULL),('314/4','2016-03-01',3,125.00,4,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:13','2015-11-30 16:40:13',26,40,NULL),('314/5','2016-04-01',3,125.00,5,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:13','2015-11-30 16:40:13',26,41,NULL),('314/6','2016-05-01',3,125.00,6,5.00,3.00,'A',NULL,NULL,'2015-11-30 16:40:13','2015-11-30 16:40:13',26,42,NULL);
/*!40000 ALTER TABLE `areceber` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(2555) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(45) DEFAULT NULL,
  `profissao` varchar(45) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `mae` varchar(255) DEFAULT NULL,
  `ctps` varchar(60) DEFAULT NULL,
  `nit` varchar(60) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Renan Goncalves','Rua Andre Veloni','741','casa','Parque Bandeirantes','Ribeirao Preto','SP','14090450','Casado','Brasileiro','Autonomo','2010-06-07','Magarida Zeviani da Silva','234565-45 ','23455','61771813849'),(2,'Luca Pinheiro','','','','','','','','','','',NULL,'','','',''),(3,'Lucas Pinheiro','Rua Joaquim Francisco','233','casa','parque ribeirao','ribeiro','sp','','','','','1984-07-03','','','','');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratos`
--

DROP TABLE IF EXISTS `contratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `modelo` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratos`
--

LOCK TABLES `contratos` WRITE;
/*!40000 ALTER TABLE `contratos` DISABLE KEYS */;
INSERT INTO `contratos` VALUES (1,'Contrato 1','ARRENDAMENTO RURAL PARA FINS DE EXPLORAÇÃO PECUÁRIA  \n\nPelo presente instrumento particular de arrendamento de imóvel rural para fins de exploração de pecuária, de um lado, {{cliente.nome}}, nacionalidade {{cliente.nascionalidade}}, estado civil {{cliente.estado_civil}}, profissão {{cliente.profissao}}, CIC n.º {{cliente.cpf}}, Cédula de Identidade RG n.º {{cliente.rg}}, residente e domiciliado à{{cliente.logradouro}}, na {{cliente.cidade}} - {{cliente.estado}}, de ora em diante chamado simplesmente de ARRENDADOR, e de outro lado {{parametro.nome}}, nacionalidade {{parametro.nascionalidade}}, estado civil {{parametro.estado_civil}}, profissão {{parametro.profissao}}, CIC n.º {{parametro.cpf}}, Cédula de Identidade RG n.º {{parametro.rg}}, residente e domiciliado à {{parametro.logradouro}}, na cidade {{parametro.cidade}} e estado {{parametro.estado}}, de ora em diante chamado simplesmente de ARRENDATÁRIO, têm, entre si, como justo e contratado o que se segue:\n\n \n\n1º - O ARRENDADOR é proprietário da fazenda (ou sítio) denominada.............., situada no Bairro de............................, Município de....................., Estado de........................., conforme título de propriedade (ou de posse) (descrever detalhadamente o título de posse, inclusive o cadastro do INCRA).\n\n \n\n2º - O ARRENDADOR cede para o ARRENDATÁRIO uma gleba de terra com área de........................ alqueires ou............................... hectares, para exploração de pecuária (cria, recria, engorda).\n\n \n\n3º - A área arrendada consiste em invernada(s) ou pasto(s) formado(s) com capim (colonião, jaraguá, catingueiro etc.), ou grama, toda cercada com arame farpado de três ou quatro fios, em perfeitas condições de conservação. A área referida está pidida em duas (ou mais) glebas, devidamente, cercadas, com as dimensões seguintes: (discriminá-las com suas características).\n\n  completamente desocupada, bem como as casas, galpões, mangueiras etc., cedidos pelo ARRENDADOR.\n\n \n\n5º - O preço do arrendamento será de R$......................................(valor por extenso) por ano contratual, e o pagamento deverá ser feito até o dia........de..............de .........\n\n \n\n6º - O ARRENDADOR também cede ao ARRENDATÁRIO casa de moradia para seu uso, casa para campeiro, depósito, mangueira, galpões etc. que por eles deve pagar a quantia anual de R$............................(por extenso) a título de aluguel (ou que por eles não pagará aluguel, mas terá o encargo de bem conservá-los e mantê-los no estado em que os recebeu).\n\n \n\n7º - O número de cabeças de gado a ser colocado nas pastagens não pode ultrapassar a ..............(quantidade e por extenso) por alqueire ou por hectare, a fim de que não ocorra o pisoteio intensivo e prejudicial ao capim.\n\n4º - O presente contrato é feito pelo prazo de................anos, ou.........meses, iniciando sua vigência a partir da data de sua assinatura, até o dia.........de........, quando o ARRENDATÁRIO, deverá restituir a gleba arrendada,\n\n \n\n8º - Para preservação das pastagens, o pastoreio deve obedecer às seguintes normas: cada pasto ou gleba da invernada deve descansar (30, 40 ou 60) dias após ter sido utilizado em período nunca inferior a (60, 80, 90, 100) dias, sendo, pois, obrigatória a rotação das pastagens.\n\n \n\n9º - O ARRENDATÁRIO não pode transferir o presente contrato, subarrendar, ceder ou emprestar o imóvel ou parte dele, sem prévio e expresso consentimento do ARRENDADOR, bem como não pode mudar a destinação do imóvel expressa neste contrato. A violação desta cláusula importará na extinção do contrato e, conseqüentemente, despejo do ARRENDATÁRIO.\n\n \n\n10º - O preço do arrendamento será reajustado anualmente de acordo com o índice de correção monetária específico pulgado, ou de acordo com o índice de majoração no ITR estabelecido pelo INCRA.\n\n \n\n11º - Fica eleito o Foro da Comarca de ................................ para solucionar qualquer questão judicial decorrente deste contrato, inclusive para as ações de despejo e de cobrança de aluguel, se necessárias.\n\n \n\nE por estarem as partes, ARRENDANTE e ARRENDATÁRIO, em pleno acordo com tudo quanto se encontra disposto neste instrumento particular, assinam-no na presença das duas testemunhas abaixo, em 2 (duas) vias de igual teor e forma, destinando-se uma via para cada uma das partes interessadas.\n\n \n\n.............................,.......de...................de ........\n \n\n............................................................................ \nArrendante\n\n \n\n............................................................................ \nArrendatário\n \n\nTestemunhas:\n \n\n1ª - ...................\n \n\n2ª - ...................');
/*!40000 ALTER TABLE `contratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordem_servico`
--

DROP TABLE IF EXISTS `ordem_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordem_servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico` text,
  `valor` float(11,2) DEFAULT NULL,
  `parcelas` int(2) DEFAULT NULL,
  `dt_vencto` date DEFAULT NULL,
  `juros` float(6,2) DEFAULT NULL,
  `multa` float(6,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordem_servico`
--

LOCK TABLES `ordem_servico` WRITE;
/*!40000 ALTER TABLE `ordem_servico` DISABLE KEYS */;
INSERT INTO `ordem_servico` VALUES (1,'aaaa',400.00,2,'2015-12-12',1.00,1.00,'2015-11-29 19:39:54','2015-11-29 19:39:54'),(2,'aa',500.00,3,'2015-12-12',2.00,2.00,'2015-11-29 19:46:51','2015-11-29 19:46:51'),(3,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:48:50','2015-11-29 19:48:50'),(4,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:50:06','2015-11-29 19:50:06'),(5,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:50:52','2015-11-29 19:50:52'),(6,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:51:51','2015-11-29 19:51:51'),(7,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:52:24','2015-11-29 19:52:24'),(8,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:55:00','2015-11-29 19:55:00'),(9,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:56:00','2015-11-29 19:56:00'),(10,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:56:48','2015-11-29 19:56:48'),(11,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:56:52','2015-11-29 19:56:52'),(12,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:57:28','2015-11-29 19:57:28'),(13,'prestacai de servuci de pensao alimenticia',700.00,2,'2015-12-20',2.00,2.00,'2015-11-29 19:58:54','2015-11-29 19:58:54'),(14,'teste de serviço',1500.00,6,'2015-12-01',5.00,3.00,'2015-11-30 16:40:12','2015-11-30 16:40:12');
/*!40000 ALTER TABLE `ordem_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `os_clientes`
--

DROP TABLE IF EXISTS `os_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `os_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordem_servico_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `valor` float(6,2) DEFAULT NULL,
  `parcela` int(2) DEFAULT NULL,
  `dt_vencto` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `os_clientes`
--

LOCK TABLES `os_clientes` WRITE;
/*!40000 ALTER TABLE `os_clientes` DISABLE KEYS */;
INSERT INTO `os_clientes` VALUES (1,1,1,200.00,2,'2015-12-12'),(2,1,2,200.00,2,'2015-12-12'),(3,2,1,250.00,3,'2015-12-12'),(4,2,2,250.00,3,'2015-12-12'),(5,3,1,250.00,3,'2015-12-12'),(6,4,1,250.00,3,'2015-12-12'),(7,4,2,250.00,3,'2015-12-12'),(8,5,1,250.00,3,'2015-12-12'),(9,5,2,250.00,3,'2015-12-12'),(10,6,1,250.00,3,'2015-12-12'),(11,6,2,250.00,3,'2015-12-12'),(12,7,1,250.00,3,'2015-12-12'),(13,7,2,250.00,3,'2015-12-12'),(14,8,1,250.00,3,'2015-12-12'),(15,8,2,250.00,3,'2015-12-12'),(16,9,1,250.00,3,'2015-12-12'),(17,9,2,250.00,3,'2015-12-12'),(18,10,1,250.00,3,'2015-12-12'),(19,10,2,250.00,3,'2015-12-12'),(20,11,1,250.00,3,'2015-12-12'),(21,11,2,250.00,3,'2015-12-12'),(22,12,1,250.00,3,'2015-12-12'),(23,12,2,250.00,3,'2015-12-12'),(24,13,1,700.00,2,'2015-12-20'),(25,14,1,750.00,6,'2015-12-01'),(26,14,3,750.00,6,'2015-12-01');
/*!40000 ALTER TABLE `os_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `param_boletos`
--

DROP TABLE IF EXISTS `param_boletos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `param_boletos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `banco` varchar(20) DEFAULT NULL,
  `agencia` varchar(45) DEFAULT NULL,
  `ccorrente` varchar(45) DEFAULT NULL,
  `carteira` varchar(10) DEFAULT NULL,
  `convenio` varchar(20) DEFAULT NULL,
  `cedente` varchar(255) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `nro_seq` int(11) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `instrucao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `param_boletos`
--

LOCK TABLES `param_boletos` WRITE;
/*!40000 ALTER TABLE `param_boletos` DISABLE KEYS */;
INSERT INTO `param_boletos` VALUES (1,'santander','123456','1234','123456','102','1234','Rogerio Pinto Pinheiro','312.838.758-37',1025,'Rua Joaquim Francisco Galiano','109','14031-010','RIBEIRÃO PRETO','SP','Após o vencimento cobrar juros de {{vl_juros}}% ao dia e multa de R$ {{vl_multa}}. ');
/*!40000 ALTER TABLE `param_boletos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Rogerio Pinheiro','rpinheiro','$2y$10$eloh9Jvs5lUvrwh1YBzw.uRSH4vqIxPOBz8hybTorO2ZZqyeLMqUO','2015-11-29 15:37:02','2015-12-02 18:18:35');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-02 18:26:32
