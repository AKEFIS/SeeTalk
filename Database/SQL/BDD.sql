CREATE TABLE `ACTUALITE`  (
  `id_actu` varchar(255) NOT NULL,
  `name_actu` varchar(255) NOT NULL,
  `message_actu` varchar(255) NOT NULL,
  `theme_actu` varchar(255) NOT NULL,
  PRIMARY KEY (`id_actu`)
);

CREATE TABLE `GROUPE`  (
  `id_group` int NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_users` varchar(255) NOT NULL,
  `group_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id_group`)
);

CREATE TABLE `GROUPE_MSG`  (
  `message_text` text NOT NULL,
  `message_date` date NOT NULL,
  `message_readBy` varchar(255) NULL
);

CREATE TABLE `PERSONAL_MSG`  (
  `message_text` text NOT NULL,
  `message_date` date NOT NULL,
  `message_read` tinyint NOT NULL DEFAULT 0
);

CREATE TABLE `REUNION`  (
  `nom_reunion` varchar(255) NULL,
  `explication_reunion` varchar(255) NULL,
  `heure_reunion` time NULL,
  `jour_reunion` date NULL
);

CREATE TABLE `USER_TO_USER`  (
  `date` date NOT NULL,
  `temps_reunion` varchar(255) NOT NULL
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
  `date` date NOT NULL
);

ALTER TABLE `GROUPE` ADD CONSTRAINT `UTILISER` FOREIGN KEY () REFERENCES `GROUPE_MSG` ();
ALTER TABLE `GROUPE` ADD CONSTRAINT `APELLER_copy_1` FOREIGN KEY () REFERENCES `VISIO_GROUP` ();
ALTER TABLE `UTILISATEUR` ADD CONSTRAINT `       ENVOYER` FOREIGN KEY () REFERENCES `PERSONAL_MSG` ();
ALTER TABLE `UTILISATEUR` ADD CONSTRAINT `ENVOYER` FOREIGN KEY () REFERENCES `GROUPE_MSG` ();
ALTER TABLE `UTILISATEUR` ADD CONSTRAINT `APELLER` FOREIGN KEY () REFERENCES `USER_TO_USER` ();
ALTER TABLE `UTILISATEUR` ADD CONSTRAINT `CRÉER` FOREIGN KEY () REFERENCES `REUNION` ();

