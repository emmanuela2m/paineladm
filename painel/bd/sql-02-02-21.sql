-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para paineladm
CREATE DATABASE IF NOT EXISTS `paineladm` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `paineladm`;

-- Copiando estrutura para tabela paineladm.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `dataCriacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela paineladm.contato: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
REPLACE INTO `contato` (`id`, `nome`, `email`, `msg`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, 'Reginaldo', 'regi@site.com', 'Minha primeira mensagem', '2021-01-29 09:00:33', '2021-01-29 09:00:33'),
	(2, 'Senac', 'senac@senac.com', 'Mensagem Senac', '2021-01-29 09:02:34', '2021-01-29 09:02:38');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

-- Copiando estrutura para tabela paineladm.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT 'Anônimo',
  `tipo` varchar(50) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `dataCriacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela paineladm.produtos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela paineladm.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT 'Anônimo',
  `tipo` varchar(15) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `dataCriacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela paineladm.servicos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
REPLACE INTO `servicos` (`id`, `nome`, `tipo`, `valor`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, 'Formatacão de Micro', 'Manutencão', 35, '2021-01-27 11:00:00', '2021-01-27 11:17:57'),
	(2, 'Remoção de conta Google', 'Software', 50, '2021-01-27 11:01:49', '2021-01-27 11:01:49'),
	(3, 'Xerox', 'impressão', 0.25, '2021-01-27 11:05:23', '2021-01-27 11:06:46'),
	(4, 'Impresão Col', 'Impressão Col', 0.4, '2021-01-27 11:07:48', '2021-01-27 11:07:49'),
	(5, 'Impressão PB', 'impressão', 0.35, '2021-01-27 11:10:23', '2021-01-27 11:10:26'),
	(6, 'Instalação de Programas', 'Manutenção', 25, '2021-01-27 11:10:59', '2021-01-27 11:11:00');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
