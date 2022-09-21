CREATE TABLE `ACTUALITE`  (
  `id_actu` varchar(255) NOT NULL,
  `name_actu` varchar(255) NOT NULL,
  `message_actu` varchar(255) NOT NULL,
  `theme_actu` varchar(255) NOT NULL,
  PRIMARY KEY (`id_actu`)
);

CREATE TABLE `GROUP`  (
  `id_group` int NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_users` varchar(255) NOT NULL,
  `group_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id_group`)
);

CREATE TABLE `GROUP_MSG`  (
  `message_text` text NOT NULL,
  `message_date` date NOT NULL,
  `message_readBy` varchar(255) NULL,
  `id_message` int NOT NULL,
  PRIMARY KEY (`id_message`)
);

CREATE TABLE `PERSONAL_MSG`  (
  `message_text` text NOT NULL,
  `message_date` date NOT NULL,
  `message_read` tinyint NOT NULL DEFAULT 0,
  `id_message` int NOT NULL,
  PRIMARY KEY (`id_message`)
);

CREATE TABLE `REUNION`  (
  `nom_reunion` varchar(255) NULL,
  `explication_reunion` varchar(255) NULL,
  `heure_reunion` time NULL,
  `jour_reunion` date NULL,
  `id_reunion` int NOT NULL,
  PRIMARY KEY (`id_reunion`)
);

CREATE TABLE `USER_TO_USER`  (
  `date` date NOT NULL,
  `temps_reunion` varchar(255) NOT NULL,
  `id_appel` int NOT NULL,
  PRIMARY KEY (`id_appel`)
);

CREATE TABLE `UTILISATEUR`  (
  `id_user` int NOT NULL,
  `pseudo_user` varchar(24) NOT NULL,
  `mail_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `socity_user` varchar(255) NULL,
  `bio_user` varchar(255) NULL,
  `contact_user` text NULL,
  `img_user` text NULL,
  PRIMARY KEY (`id_user`)
);

CREATE TABLE `VISIO_GROUP`  (
  `temps_reunion` time NOT NULL,
  `personnes` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id_group_visio` int NOT NULL,
  PRIMARY KEY (`id_group_visio`)
);

ALTER TABLE `GROUP` ADD CONSTRAINT `UTILISER` FOREIGN KEY (`id_group`) REFERENCES `GROUP_MSG` (`id_message`);
ALTER TABLE `GROUP` ADD CONSTRAINT `APELLER_copy_1` FOREIGN KEY (`id_group`) REFERENCES `VISIO_GROUP` (`id_group_visio`);
ALTER TABLE `UTILISATEUR` ADD CONSTRAINT `ENVOYER_MSG_PERSO` FOREIGN KEY (`id_user`) REFERENCES `PERSONAL_MSG` (`id_message`);
ALTER TABLE `UTILISATEUR` ADD CONSTRAINT `ENVOYER_MSG_GRP` FOREIGN KEY (`id_user`) REFERENCES `GROUP_MSG` (`id_message`);
ALTER TABLE `UTILISATEUR` ADD CONSTRAINT `APELLER` FOREIGN KEY (`id_user`) REFERENCES `USER_TO_USER` (`id_appel`);
ALTER TABLE `UTILISATEUR` ADD CONSTRAINT `CREER` FOREIGN KEY (`id_user`) REFERENCES `REUNION` (`id_reunion`);

