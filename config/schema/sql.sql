-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: rogerio
-- ------------------------------------------------------
-- Server version	5.6.26

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areceber`
--

LOCK TABLES `areceber` WRITE;
/*!40000 ALTER TABLE `areceber` DISABLE KEYS */;
INSERT  IGNORE INTO `areceber` (`nro_docto`, `dt_vencto`, `cliente_id`, `valor`, `parcela`, `vl_juros`, `vl_multa`, `status`, `dt_recebe`, `total_recebe`, `created`, `modified`, `os_cliente_id`, `id`) VALUES ('11/1','0037-04-19',1,100.00,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:39:54','2015-11-29 19:39:54',1,1),('11/2','0037-04-19',1,100.00,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:39:54','2015-11-29 19:39:54',1,2),('21/1','0037-04-19',2,100.00,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:39:54','2015-11-29 19:39:54',2,3),('21/2','0037-04-19',2,100.00,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:39:54','2015-11-29 19:39:54',2,4),('19/1','2015-12-12',1,83.33,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:00','2015-11-29 19:56:00',16,5),('19/2','2016-01-12',1,83.33,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:00','2015-11-29 19:56:00',16,6),('19/3','2016-02-12',1,83.33,3,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:01','2015-11-29 19:56:01',16,7),('29/1','2015-12-12',2,83.33,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:01','2015-11-29 19:56:01',17,8),('29/2','2016-01-12',2,83.33,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:01','2015-11-29 19:56:01',17,9),('29/3','2016-02-12',2,83.33,3,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:01','2015-11-29 19:56:01',17,10),('110/1','2015-12-12',1,83.33,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:48','2015-11-29 19:56:48',18,11),('110/2','2016-01-12',1,83.33,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:48','2015-11-29 19:56:48',18,12),('110/3','2016-02-12',1,83.33,3,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:48','2015-11-29 19:56:48',18,13),('210/1','2015-12-12',2,83.33,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:49','2015-11-29 19:56:49',19,14),('210/2','2016-01-12',2,83.33,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:49','2015-11-29 19:56:49',19,15),('210/3','2016-02-12',2,83.33,3,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:49','2015-11-29 19:56:49',19,16),('111/1','2015-12-12',1,83.33,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:52','2015-11-29 19:56:52',20,17),('111/2','2016-01-12',1,83.33,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:52','2015-11-29 19:56:52',20,18),('111/3','2016-02-12',1,83.33,3,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:52','2015-11-29 19:56:52',20,19),('211/1','2015-12-12',2,83.33,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:52','2015-11-29 19:56:52',21,20),('211/2','2016-01-12',2,83.33,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:53','2015-11-29 19:56:53',21,21),('211/3','2016-02-12',2,83.33,3,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:56:53','2015-11-29 19:56:53',21,22),('112/1','2015-12-12',1,83.33,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',22,23),('112/2','2016-01-12',1,83.33,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',22,24),('112/3','2016-02-12',1,83.33,3,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',22,25),('212/1','2015-12-12',2,83.33,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',23,26),('212/2','2016-01-12',2,83.33,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',23,27),('212/3','2016-02-12',2,83.33,3,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:57:28','2015-11-29 19:57:28',23,28),('113/1','2015-12-20',1,350.00,1,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:58:54','2015-11-29 19:58:54',24,29),('113/2','2016-01-20',1,350.00,2,NULL,NULL,'A',NULL,NULL,'2015-11-29 19:58:54','2015-11-29 19:58:54',24,30);
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
INSERT  IGNORE INTO `clientes` (`id`, `nome`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `estado_civil`, `nacionalidade`, `profissao`, `dt_nascimento`, `mae`, `ctps`, `nit`, `cpf`) VALUES (1,'Renan Goncalves','Rua Andre Veloni','741','casa','Parque Bandeirantes','Ribeirao Preto','SP','14090450','Casado','Brasileiro','Autonomo','2010-06-07','Magarida Zeviani da Silva','234565-45 ','23455','61771813849'),(2,'Luca Pinheiro','','','','','','','','','','',NULL,'','','',''),(3,'Lucas Pinheiro','Rua Joaquim Francisco','233','casa','parque ribeirao','ribeiro','sp','','','','','1984-07-03','','','','');
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
INSERT  IGNORE INTO `contratos` (`id`, `nome`, `modelo`) VALUES (1,'Teste 01','CONTRATO DE LICENCIAMENTO DE USO E  MANUTENÇÃO DE SOFTWARE\r\n\r\n\r\nLICENCIANTE: TC INFORMÁTICA LTDA.\r\nENDEREÇO    : RUA EDGARD DE MOURA BITENCOURT, 79\r\nBAIRRO          :  VILA VIRGINIA\r\nCIC/CGC         : 617.718.138-49\r\nCLIENTE         :\r\nENDEREÇO    :\r\nCEP                  :\r\nBAIRRO          :                                                           CIDADE:                                                UF:\r\nCIC/CGC         :\r\nINSC/RG         :\r\nRESPONS.      :\r\nFONE              :\r\n\r\nREGISTRO     :\r\n\r\nSOFTWARE LICENCIADO:\r\n\r\nPREÇOS E CONDIÇÕES:\r\n\r\n- Incluindo o uso e a manutenção mensal : R$\r\n\r\nCONDIÇÕES DE PAGAMENTO:\r\n\r\n- 1a. parcela no momento da instalaçao do software, e as restantes sempre no dia 10 do mes subsequente.\r\n\r\nO presente contrato será regido pelas clausulas  e condições abaixo:\r\n\r\n1 -  Por este instruento particular, a TC INFORMÁTICA LTDA., já qualifica acima, doravante simplesmente chamada de LICENCIANTE, concede ao CLIENTE, também qualificado acima, o uso do software por esta desenvolvido. O direito permanente, não exclusivo e intransferível, de usar o programa de computador, qualificado acima, em forma de código objeto, bem como manuais, e outro documentos de natureza técnica fornecida pela LICENCIANTE, tudo de acordo com os termos e condiões deste Contrato. O CLIENTE não poderá copiar, traduzir, modificar, adaptar, separar, desmontar ou reconstruir o software, podendo no entanto, produzir uma cópia de segurança do mesmo, e de quaisquer outras atualizações ou novas versões para arquivo (backup). O CLIENTE reproduzirá todas as advertências de confiabilidade e propriedade em cada uma destas cópias.\r\n2 - Mediante pagamento da taxa de manutenção abaixo, a LICENCIANTE fornecerá ao CLIENTE, suporte total por telefone, ou por chamado, treinamento aos usuários e atualizações do software, casa venha a acontecer.\r\n3 - O pagamento da manutenção mensal será cobrada mensalmente, e a 1a. parcela a partir da instalação do software pelo CLIENTE. Os pagamentos restantes, serão feitos em carteira, ou qualquer outra forma que a LICENCIANTE vier a indicar, sempre no dia 10 (dez), ou primeiro dia útil posterior, de cadas mes.\r\n4 - O pagamento está estipula em 40% (quarenta por cento) do Salário Mínino vigente no país.\r\n5 - O reajuste do preço na manutenção mensal, acontecerá sempre que houver aumento do Salário Mínimo, sem prévio aviso ao CLIENTE.\r\n6 - A LICENCIANTE fornecerá ao CLIENTE, e sem custo adicional, as atualizações do software que por ventura vier a acontecer. O disposto nesta cláusula, não será interpretado de forma que a LICENCIANTE fique obrigada a desenvolver e publicar atualizações. \r\n7 - A manutenção mensal e uso do software permanecerão em vigor até que ocorra um dos eventos abaixo:\r\na) Requerimento de concordata, falência, dissolução ou comprovação de insolvência do CLIENTE.\r\nb) Inadimplência do CLIENTE em qualquer uma das cláusulas deste contrato.\r\nc) Defeito no funcionamento do sofware que não possa ser remediado pela LICENCIANTE, no prazo de 60 (sessenta) dias.\r\nd) Utilização do software por terceiros sem autorização da LICENCIANTE.\r\ne) Atraso no pagamento de manutenção por mais de 60 (sessenta) dias.\r\n8 - Na ocorrência de qualquer dos eventos relacionados acima, a LICENCIANTE poderá  rescindir o contrato mediante aviso prévio de 30 (trinta) dias.\r\n9 - Qualquer das partes poderá rescindir este contrato a qualquer tempo, desde que a outra parte aviso prévio escrito de 30 (trinta) dias. Durante o prazo do aviso prévio as partes deverão continuar cumprindo as obrigações assumidas neste contrato, especialmento as de fornecimento de atualizações do software, e pagamento da manutenção mensal pelo CLIENTE.\r\n10 - Imediatamente após a rescisão deste contrato, por qualquer das razões descritas acima, o CLIENTE compromete-se de apagar e destruir todas as cópias que porventura estiverem em seu poder.\r\n11 - Em caso de mora no pagamento, o CLIENTE estará obrigado a pagar a quantia reajustada de 20% (vinte por cento) calculado sobre o valor da parcela. Enquanto perdurar a mora, a LICENCIANTE  estará desobrigada do cumprimento de suas obrigações.\r\n12 - Fica eleito o Forum Central de Ribeirão Preto para dirimir qualquer dúvida oriunda deste contrato, com exclusão de qualquer outro, por mais previligiado que seja.\r\nE por estarem justo e contratados, as partes assinam o presente em 2 (duas) vias de igual teor.\r\n\r\nRibeirão Preto, \r\n\r\nLicenciante: _______________________\r\n\r\nCliente      : ________________________\r\n\r\n\r\n');
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
  `valor` float(6,2) DEFAULT NULL,
  `parcelas` int(2) DEFAULT NULL,
  `dt_vencto` date DEFAULT NULL,
  `juros` float(6,2) DEFAULT NULL,
  `multa` float(6,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordem_servico`
--

LOCK TABLES `ordem_servico` WRITE;
/*!40000 ALTER TABLE `ordem_servico` DISABLE KEYS */;
INSERT  IGNORE INTO `ordem_servico` (`id`, `servico`, `valor`, `parcelas`, `dt_vencto`, `juros`, `multa`, `created`, `modified`) VALUES (1,'aaaa',400.00,2,'2015-12-12',1.00,1.00,'2015-11-29 19:39:54','2015-11-29 19:39:54'),(2,'aa',500.00,3,'2015-12-12',2.00,2.00,'2015-11-29 19:46:51','2015-11-29 19:46:51'),(3,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:48:50','2015-11-29 19:48:50'),(4,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:50:06','2015-11-29 19:50:06'),(5,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:50:52','2015-11-29 19:50:52'),(6,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:51:51','2015-11-29 19:51:51'),(7,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:52:24','2015-11-29 19:52:24'),(8,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:55:00','2015-11-29 19:55:00'),(9,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:56:00','2015-11-29 19:56:00'),(10,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:56:48','2015-11-29 19:56:48'),(11,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:56:52','2015-11-29 19:56:52'),(12,'fff5000',500.00,3,'2015-12-12',3.00,3.00,'2015-11-29 19:57:28','2015-11-29 19:57:28'),(13,'prestacai de servuci de pensao alimenticia',700.00,2,'2015-12-20',2.00,2.00,'2015-11-29 19:58:54','2015-11-29 19:58:54');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `os_clientes`
--

LOCK TABLES `os_clientes` WRITE;
/*!40000 ALTER TABLE `os_clientes` DISABLE KEYS */;
INSERT  IGNORE INTO `os_clientes` (`id`, `ordem_servico_id`, `cliente_id`, `valor`, `parcela`, `dt_vencto`) VALUES (1,1,1,200.00,2,'2015-12-12'),(2,1,2,200.00,2,'2015-12-12'),(3,2,1,250.00,3,'2015-12-12'),(4,2,2,250.00,3,'2015-12-12'),(5,3,1,250.00,3,'2015-12-12'),(6,4,1,250.00,3,'2015-12-12'),(7,4,2,250.00,3,'2015-12-12'),(8,5,1,250.00,3,'2015-12-12'),(9,5,2,250.00,3,'2015-12-12'),(10,6,1,250.00,3,'2015-12-12'),(11,6,2,250.00,3,'2015-12-12'),(12,7,1,250.00,3,'2015-12-12'),(13,7,2,250.00,3,'2015-12-12'),(14,8,1,250.00,3,'2015-12-12'),(15,8,2,250.00,3,'2015-12-12'),(16,9,1,250.00,3,'2015-12-12'),(17,9,2,250.00,3,'2015-12-12'),(18,10,1,250.00,3,'2015-12-12'),(19,10,2,250.00,3,'2015-12-12'),(20,11,1,250.00,3,'2015-12-12'),(21,11,2,250.00,3,'2015-12-12'),(22,12,1,250.00,3,'2015-12-12'),(23,12,2,250.00,3,'2015-12-12'),(24,13,1,700.00,2,'2015-12-20');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `param_boletos`
--

LOCK TABLES `param_boletos` WRITE;
/*!40000 ALTER TABLE `param_boletos` DISABLE KEYS */;
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
  `senha` varchar(32) DEFAULT NULL,
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
INSERT  IGNORE INTO `usuarios` (`id`, `nome`, `username`, `senha`, `created`, `modified`) VALUES (1,'Rogerio Pinheiro','rpinheiro','12345','2015-11-29 15:37:02','2015-11-29 15:37:47');
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

-- Dump completed on 2015-11-30 10:14:17
