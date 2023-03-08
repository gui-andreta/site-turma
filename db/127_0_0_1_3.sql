-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 04-Ago-2020 às 23:22
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alunos`
--
CREATE DATABASE IF NOT EXISTS `alunos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `alunos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `linkedin` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `whatsapp` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `password` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto_perfil` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `nascimento`, `email`, `facebook`, `linkedin`, `whatsapp`, `description`, `password`, `avatar`, `foto_perfil`) VALUES
(56, 'Gabriel de Avila Farias', '2000-01-20', 'avilag21@outlook.com', 'https://www.facebook.com/Gabriel.de.Avila.Farias', 'https://www.linkedin.com/in/gabriel-avila-6888981a2/', '(17) 99268-8779', 'Sou estudante de ciência da computação, sempre tive gosto pela área da computação e encontrei uma nova paixão no desenvolvimento de sistemas WEB, atualmente em 2020 busco me capacitar como desenvolvedor WEB e o término do meu curso superior está previsto para 2024. Possuo habilidades em HTML, CSS, JavaScript, php, e SQL, e estou buscando níveis intermediários e mais avançados, embora ainda novo no curso e nos estudos, tenho me aplicado a estudos teóricos de banco de dados, hypermidia, redes e em estudos práticos e teóricos das linguagens anteriormente citadas.', '594agw2', 'uploads/avatar.gabriel.png', 'uploads/gabriel-fotodeperfil.jpeg'),
(57, 'Guilherme dos Santos Andreta', '2002-04-05', 'guilherme.andretasantos@hotmail.com', 'https://www.facebook.com/guilherme.santosandreta/', 'https://www.linkedin.com/in/guilherme-andreta-7486501b2/', '17981031080', 'Sempre fui interessado na área de informática, fiz alguns cursos como Web Design e Desing Gráfico, agora recentemente obtive mais interesse na área de desenvolvimento voltado mais para a parte web e desktop, tendo em vista me especializar mais na área fazendo um curso superior de Analise e Desenvolvimento de Sistemas futuramente em uma faculdade da minha região.', 'gui0504', 'uploads/avatar.leonardo.png', 'uploads/Foto.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(140) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `codAluno` int(11) DEFAULT NULL,
  `tipo` enum('cursos','hobbies','ferramentas','areas') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `skills`
--

INSERT INTO `skills` (`id`, `descricao`, `codAluno`, `tipo`) VALUES
(45, 'Informatica Basica', 57, 'cursos'),
(43, 'Web Designer', 57, 'cursos'),
(44, 'Designer Grafico', 57, 'cursos'),
(46, 'Ingles', 57, 'cursos'),
(47, 'WEB', 57, 'areas'),
(48, 'HTML 5', 57, 'ferramentas'),
(49, 'CSS', 57, 'ferramentas'),
(50, 'JAVA SCRIPT', 57, 'cursos'),
(51, 'PHP', 57, 'ferramentas'),
(52, 'Jogar', 57, 'hobbies'),
(53, 'Ouvir Musica', 57, 'hobbies');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
