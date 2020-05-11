drop table if exists Comments;

drop table if exists Evenements;

/*==============================================================*/
/* Table: Comments                                              */
/*==============================================================*/
create table Comments
(
   id                   int not null,
   Eve_id               int not null,
   Author               varchar(254),
   comments             varchar(254),
   primary key (id)
);

/*==============================================================*/
/* Table: Evenements                                            */
/*==============================================================*/
create table Evenements
(
   id                   int not null auto_increment,
   nom               varchar(254),
   date_de_debut             datetime,
   date_de_fin           datetime,
   organisateur         varchar(254),
   description         varchar(254),
   primary key (id)
);

alter table Comments add constraint FK_Association_1 foreign key (Eve_id)
      references Evenements (id) on delete restrict on update restrict;

      -- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 09 Avril 2020 à 23:00
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `bd_event`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `id` int(10) unsigned NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administration`
--

INSERT INTO `administration` (`id`,`nom`, `prenom`, `email`,`username`, `pass`) VALUES
(1, 'Ouedraogo', 'Sidiki', 'sidikiouedraogo2000@gmail.com', 'simplon', '77015fb3a067258009438258a4b00fa8');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;



