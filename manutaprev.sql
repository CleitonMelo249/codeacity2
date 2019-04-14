-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 03:26 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manutaprev`
--

-- --------------------------------------------------------

--
-- Table structure for table `condominios`
--

CREATE TABLE `condominios` (
  `id_condominio` int(11) NOT NULL,
  `id_sindico` int(11) NOT NULL,
  `nome_condominio` varchar(40) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `endereco_condominio` varchar(50) NOT NULL,
  `numero_blocos` int(11) NOT NULL,
  `numero_pavimentos` int(11) NOT NULL,
  `numero_apartamentos` int(11) NOT NULL,
  `idade_condominio` int(11) NOT NULL,
  `area_construida` decimal(5,2) DEFAULT NULL,
  `area_total_uso` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `fisura` varchar(64) DEFAULT NULL,
  `fisura_local` varchar(64) DEFAULT NULL,
  `fisura_obs` varchar(64) DEFAULT NULL,
  `fisura_img` varchar(64) DEFAULT NULL,
  `ddd` varchar(64) DEFAULT NULL,
  `ddd_local` varchar(64) DEFAULT NULL,
  `ddd_obs` varchar(64) DEFAULT NULL,
  `ddd_img` varchar(64) DEFAULT NULL,
  `dbe` varchar(64) DEFAULT NULL,
  `dbe_local` varchar(64) DEFAULT NULL,
  `dbe_obs` varchar(64) DEFAULT NULL,
  `dbe_img` varchar(64) DEFAULT NULL,
  `emb` varchar(64) DEFAULT NULL,
  `emb_local` varchar(64) DEFAULT NULL,
  `emb_obs` varchar(64) DEFAULT NULL,
  `emb_img` varchar(64) DEFAULT NULL,
  `fdjtr` varchar(64) DEFAULT NULL,
  `fdjtr_local` varchar(64) DEFAULT NULL,
  `fdjtr_obs` varchar(64) DEFAULT NULL,
  `fdjtr_img` varchar(64) DEFAULT NULL,
  `dpoce` varchar(64) DEFAULT NULL,
  `dpoce_local` varchar(64) DEFAULT NULL,
  `dpoce_obs` varchar(64) DEFAULT NULL,
  `dpoce_img` varchar(64) DEFAULT NULL,
  `de` varchar(64) DEFAULT NULL,
  `de_local` varchar(64) DEFAULT NULL,
  `de_obs` varchar(64) DEFAULT NULL,
  `de_img` varchar(64) DEFAULT NULL,
  `ape` varchar(64) DEFAULT NULL,
  `ape_local` varchar(64) DEFAULT NULL,
  `ape_obs` varchar(64) DEFAULT NULL,
  `ape_img` varchar(64) DEFAULT NULL,
  `vsq` varchar(64) DEFAULT NULL,
  `vsq_local` varchar(64) DEFAULT NULL,
  `vsq_obs` varchar(64) DEFAULT NULL,
  `vsq_img` varchar(64) DEFAULT NULL,
  `rdms` varchar(64) DEFAULT NULL,
  `rdms_local` varchar(64) DEFAULT NULL,
  `rdms_obs` varchar(64) DEFAULT NULL,
  `rdms_img` varchar(64) DEFAULT NULL,
  `cacd` varchar(64) DEFAULT NULL,
  `cacd_local` varchar(64) DEFAULT NULL,
  `cacd_obs` varchar(64) DEFAULT NULL,
  `cacd_img` varchar(64) DEFAULT NULL,
  `infiltracao` varchar(64) DEFAULT NULL,
  `infiltracao_local` varchar(64) DEFAULT NULL,
  `infiltracao_obs` varchar(64) DEFAULT NULL,
  `infiltracao_img` varchar(64) DEFAULT NULL,
  `dm` varchar(64) DEFAULT NULL,
  `dm_local` varchar(64) DEFAULT NULL,
  `dm_obs` varchar(64) DEFAULT NULL,
  `dm_img` varchar(64) DEFAULT NULL,
  `sip` varchar(64) DEFAULT NULL,
  `sip_local` varchar(64) DEFAULT NULL,
  `sip_obs` varchar(64) DEFAULT NULL,
  `sip_img` varchar(64) DEFAULT NULL,
  `rcs` varchar(64) DEFAULT NULL,
  `rcs_local` varchar(64) DEFAULT NULL,
  `rcs_obs` varchar(64) DEFAULT NULL,
  `rcs_img` varchar(64) DEFAULT NULL,
  `fjdpm` varchar(64) DEFAULT NULL,
  `fjdpm_local` varchar(64) DEFAULT NULL,
  `fjdpm_obs` varchar(64) DEFAULT NULL,
  `fjdpm_img` varchar(64) DEFAULT NULL,
  `fcr` varchar(64) DEFAULT NULL,
  `fcr_local` varchar(64) DEFAULT NULL,
  `fcr_obs` varchar(64) DEFAULT NULL,
  `fcr_img` varchar(64) DEFAULT NULL,
  `fitr` varchar(64) DEFAULT NULL,
  `fitr_local` varchar(64) DEFAULT NULL,
  `fitr_obs` varchar(64) DEFAULT NULL,
  `fitr_img` varchar(64) DEFAULT NULL,
  `lq` varchar(64) DEFAULT NULL,
  `lq_local` varchar(64) DEFAULT NULL,
  `lq_obs` varchar(64) DEFAULT NULL,
  `lq_img` varchar(64) DEFAULT NULL,
  `apu` varchar(64) DEFAULT NULL,
  `apu_local` varchar(64) DEFAULT NULL,
  `apu_obs` varchar(64) DEFAULT NULL,
  `apu_img` varchar(64) DEFAULT NULL,
  `miie` varchar(64) DEFAULT NULL,
  `miie_local` varchar(64) DEFAULT NULL,
  `miie_obs` varchar(64) DEFAULT NULL,
  `miie_img` varchar(64) DEFAULT NULL,
  `superaquecimento` varchar(64) DEFAULT NULL,
  `superaquecimento_local` varchar(64) DEFAULT NULL,
  `superaquecimento_obs` varchar(64) DEFAULT NULL,
  `superaquecimento_img` varchar(64) DEFAULT NULL,
  `fica` varchar(64) DEFAULT NULL,
  `fica_local` varchar(64) DEFAULT NULL,
  `fica_obs` varchar(64) DEFAULT NULL,
  `fica_img` varchar(64) DEFAULT NULL,
  `cc` varchar(64) DEFAULT NULL,
  `cc_local` varchar(64) DEFAULT NULL,
  `cc_obs` varchar(64) DEFAULT NULL,
  `cc_img` varchar(64) DEFAULT NULL,
  `qlo` varchar(64) DEFAULT NULL,
  `qlo_local` varchar(64) DEFAULT NULL,
  `qlo_obs` varchar(64) DEFAULT NULL,
  `qlo_img` varchar(64) DEFAULT NULL,
  `apb` varchar(64) DEFAULT NULL,
  `apb_local` varchar(64) DEFAULT NULL,
  `apb_obs` varchar(64) DEFAULT NULL,
  `apb_img` varchar(64) DEFAULT NULL,
  `ft` varchar(64) DEFAULT NULL,
  `ft_local` varchar(64) DEFAULT NULL,
  `ft_obs` varchar(64) DEFAULT NULL,
  `ft_img` varchar(64) DEFAULT NULL,
  `ced` varchar(64) DEFAULT NULL,
  `ced_local` varchar(64) DEFAULT NULL,
  `ced_obs` varchar(64) DEFAULT NULL,
  `ced_img` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inspecao`
--

CREATE TABLE `inspecao` (
  `id_inspecao` int(11) NOT NULL,
  `data_agendada` date NOT NULL,
  `data_inspecao_realizada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inspetor`
--

CREATE TABLE `inspetor` (
  `id_inspetor` int(11) NOT NULL,
  `nome_inpetor` varchar(40) NOT NULL,
  `email_inpetor` varchar(40) NOT NULL,
  `telefone_inspetor` varchar(20) NOT NULL,
  `senha_inspetor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sindico`
--

CREATE TABLE `sindico` (
  `id_sindico` int(11) NOT NULL,
  `nome_sindico` varchar(40) NOT NULL,
  `email_sindico` varchar(40) NOT NULL,
  `telefone_sindico` varchar(20) NOT NULL,
  `id_payment` varchar(40) NOT NULL,
  `senha_sindico` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `condominios`
--
ALTER TABLE `condominios`
  ADD PRIMARY KEY (`id_condominio`);

--
-- Indexes for table `inspecao`
--
ALTER TABLE `inspecao`
  ADD PRIMARY KEY (`id_inspecao`);

--
-- Indexes for table `inspetor`
--
ALTER TABLE `inspetor`
  ADD PRIMARY KEY (`id_inspetor`);

--
-- Indexes for table `sindico`
--
ALTER TABLE `sindico`
  ADD PRIMARY KEY (`id_sindico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condominios`
--
ALTER TABLE `condominios`
  MODIFY `id_condominio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspecao`
--
ALTER TABLE `inspecao`
  MODIFY `id_inspecao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspetor`
--
ALTER TABLE `inspetor`
  MODIFY `id_inspetor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sindico`
--
ALTER TABLE `sindico`
  MODIFY `id_sindico` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
