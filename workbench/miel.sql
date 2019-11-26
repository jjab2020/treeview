-- MySQL Script generated by MySQL Workbench
-- Mon Nov 25 21:26:42 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema miel
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `miel` ;

-- -----------------------------------------------------
-- Schema miel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `miel` DEFAULT CHARACTER SET utf8 ;
USE `miel` ;




-- -----------------------------------------------------
-- Table `miel`.`citoyennete`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`citoyennete` ;

CREATE TABLE IF NOT EXISTS `miel`.`citoyennete` (
  `id_citoyennete` INT NOT NULL,
  `citoyennete_membre` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id_citoyennete`))
ENGINE = InnoDB;




-- -----------------------------------------------------
-- Table `miel`.`etat_civil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`etat_civil` ;

CREATE TABLE IF NOT EXISTS `miel`.`etat_civil` (
  `id_etat_civil` INT NOT NULL,
  `etat_civil_membre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_etat_civil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`groupes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`groupes` ;

CREATE TABLE IF NOT EXISTS `miel`.`groupes` (
  `id_groupe` INT NOT NULL AUTO_INCREMENT,
  `nom_groupe` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id_groupe`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`langue`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`langue` ;

CREATE TABLE IF NOT EXISTS `miel`.`langue` (
  `id_langue` INT NOT NULL,
  `langue_membre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_langue`))
ENGINE = InnoDB;






-- -----------------------------------------------------
-- Table `miel`.`lien`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`lien` ;

CREATE TABLE IF NOT EXISTS `miel`.`lien` (
  `id_lien` INT NOT NULL,
  `lien_membre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_lien`))
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `miel`.`contact_urgence`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`contact_urgence` ;

CREATE TABLE IF NOT EXISTS `miel`.`contact_urgence` (
  `id_contact_urgence` INT NOT NULL,
  `nom_Contact` VARCHAR(60) NOT NULL,
  `telephone_contact` INT NOT NULL,
  `connait_stat_vih` TINYINT(1) NOT NULL,
  `lien_id_lien` INT NOT NULL,
  PRIMARY KEY (`id_contact_urgence`),
  INDEX `fk_contact_urgence_lien1_idx` (`lien_id_lien` ASC),
  CONSTRAINT `fk_contact_urgence_lien1`
    FOREIGN KEY (`lien_id_lien`)
    REFERENCES `miel`.`lien` (`id_lien`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;









-- -----------------------------------------------------
-- Table `miel`.`menu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`menu` ;

CREATE TABLE IF NOT EXISTS `miel`.`menu` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `text` VARCHAR(100) NOT NULL,
  `parent_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`permissions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`permissions` ;

CREATE TABLE IF NOT EXISTS `miel`.`permissions` (
  `groupes_id_groupe` INT NOT NULL,
  `menu_id` INT NOT NULL,
  PRIMARY KEY (`groupes_id_groupe`, `menu_id`),
  INDEX `fk_groupes_has_menu_menu1_idx` (`menu_id` ASC) ,
  INDEX `fk_groupes_has_menu_groupes1_idx` (`groupes_id_groupe` ASC) ,
  CONSTRAINT `fk_groupes_has_menu_groupes1`
    FOREIGN KEY (`groupes_id_groupe`)
    REFERENCES `miel`.`groupes` (`id_groupe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_groupes_has_menu_menu1`
    FOREIGN KEY (`menu_id`)
    REFERENCES `miel`.`menu` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`province`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`province` ;

CREATE TABLE IF NOT EXISTS `miel`.`province` (
  `id_province` INT NOT NULL,
  `nom_province` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_province`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`sexe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`sexe` ;

CREATE TABLE IF NOT EXISTS `miel`.`sexe` (
  `id_sexe` INT NOT NULL,
  `sexe` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_sexe`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`telephone`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`telephone` ;

CREATE TABLE IF NOT EXISTS `miel`.`telephone` (
  `id_telephone` INT NOT NULL,
  `type_telephone` VARCHAR(60) NULL,
  `numero_telephone` INT NULL,
  `message_telephone` TINYINT(1) NULL,
  PRIMARY KEY (`id_telephone`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`type_membre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`type_membre` ;

CREATE TABLE IF NOT EXISTS `miel`.`type_membre` (
  `id_type_membre` INT NOT NULL,
  `type_membre` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id_type_membre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`user` ;

CREATE TABLE IF NOT EXISTS `miel`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `password_user` VARCHAR(60) NOT NULL,
  `nom_user` VARCHAR(100) NOT NULL,
  `courriel_employe` VARCHAR(100) NOT NULL,
  `created at` TIMESTAMP NOT NULL,
  `titre_employe` VARCHAR(60) NOT NULL,
  `updated at` DATE NOT NULL,
  `picture_user` VARCHAR(100) NULL,
  `groupes_id_groupe` INT NOT NULL,
  PRIMARY KEY (`id_user`),
  INDEX `fk_user_groupes1_idx` (`groupes_id_groupe` ASC) ,
  CONSTRAINT `fk_user_groupes1`
    FOREIGN KEY (`groupes_id_groupe`)
    REFERENCES `miel`.`groupes` (`id_groupe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`ville`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`ville` ;

CREATE TABLE IF NOT EXISTS `miel`.`ville` (
  `id_ville` INT NOT NULL,
  `nom_ville` VARCHAR(45) NOT NULL,
  `province_id_province` INT NOT NULL,
  INDEX `fk_ville_province1_idx` (`province_id_province` ASC) ,
  PRIMARY KEY (`id_ville`),
  CONSTRAINT `fk_ville_province1`
    FOREIGN KEY (`province_id_province`)
    REFERENCES `miel`.`province` (`id_province`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`adresse_membre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`adresse_membre` ;

CREATE TABLE IF NOT EXISTS `miel`.`adresse_membre` (
  `id_adresse_membre` INT NOT NULL,
  `no` INT NOT NULL,
  `rue` VARCHAR(60) NOT NULL,
  `code_postale` VARCHAR(6) NOT NULL,
  `ville_id_ville` INT NOT NULL,
  PRIMARY KEY (`id_adresse_membre`),
  INDEX `fk_id_ville` (`ville_id_ville`) ,
  CONSTRAINT `fk_adresse_membre_ville`
    FOREIGN KEY (`ville_id_ville`)
    REFERENCES `miel`.`ville` (`id_ville`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `miel`.`membre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`membre` ;

CREATE TABLE IF NOT EXISTS `miel`.`membre` (
  `id_membre` INT NOT NULL,
  `nom_membre` VARCHAR(60) NOT NULL,
  `prenom_membre` VARCHAR(60) NOT NULL,
  `sexe_id_sexe` INT NOT NULL,
  `type_membre_id_type_membre` INT NOT NULL,
  `adresse_membre_id_adresse_membre` INT NOT NULL,
  `citoyennete_id_citoyennete` INT NOT NULL,
  `date_naissance` DATE NOT NULL,
  `courriel_membre` VARCHAR(60) NOT NULL,
  `etat_civil_id_etat_civil` INT NOT NULL,
  `contact_urgence_id_contact_urgence` INT NOT NULL,
  PRIMARY KEY (`id_membre`),
  INDEX `fk_membre_sexe1_idx` (`sexe_id_sexe` ASC),
  INDEX `fk_membre_type_membre1_idx` (`type_membre_id_type_membre` ASC) ,
  INDEX `fk_membre_adresse_membre1_idx` (`adresse_membre_id_adresse_membre` ASC) ,
  INDEX `fk_membre_citoyennete1_idx` (`citoyennete_id_citoyennete` ASC) ,
  INDEX `fk_membre_etat_civil1_idx` (`etat_civil_id_etat_civil` ASC) ,
  INDEX `fk_membre_contact_urgence1_idx` (`contact_urgence_id_contact_urgence` ASC) ,
  CONSTRAINT `fk_membre_sexe1`
    FOREIGN KEY (`sexe_id_sexe`)
    REFERENCES `miel`.`sexe` (`id_sexe`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membre_type_membre1`
    FOREIGN KEY (`type_membre_id_type_membre`)
    REFERENCES `miel`.`type_membre` (`id_type_membre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membre_adresse_membre1`
    FOREIGN KEY (`adresse_membre_id_adresse_membre`)
    REFERENCES `miel`.`adresse_membre` (`id_adresse_membre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membre_citoyennete1`
    FOREIGN KEY (`citoyennete_id_citoyennete`)
    REFERENCES `miel`.`citoyennete` (`id_citoyennete`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membre_etat_civil1`
    FOREIGN KEY (`etat_civil_id_etat_civil`)
    REFERENCES `miel`.`etat_civil` (`id_etat_civil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membre_contact_urgence1`
    FOREIGN KEY (`contact_urgence_id_contact_urgence`)
    REFERENCES `miel`.`contact_urgence` (`id_contact_urgence`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`membre_has_langue`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`membre_has_langue` ;

CREATE TABLE IF NOT EXISTS `miel`.`membre_has_langue` (
  `membre_id_membre` INT NOT NULL,
  `langue_id_langue` INT NOT NULL,
  PRIMARY KEY (`membre_id_membre`, `langue_id_langue`),
  INDEX `fk_membre_has_langue_langue1_idx` (`langue_id_langue` ASC) ,
  INDEX `fk_membre_has_langue_membre1_idx` (`membre_id_membre` ASC) ,
  CONSTRAINT `fk_membre_has_langue_membre1`
    FOREIGN KEY (`membre_id_membre`)
    REFERENCES `miel`.`membre` (`id_membre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membre_has_langue_langue1`
    FOREIGN KEY (`langue_id_langue`)
    REFERENCES `miel`.`langue` (`id_langue`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miel`.`membre_has_telephone`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miel`.`membre_has_telephone` ;

CREATE TABLE IF NOT EXISTS `miel`.`membre_has_telephone` (
  `membre_id_membre` INT NOT NULL,
  `telephone_id_telephone` INT NOT NULL,
  PRIMARY KEY (`membre_id_membre`, `telephone_id_telephone`),
  INDEX `fk_membre_has_telephone_telephone1_idx` (`telephone_id_telephone` ASC) ,
  INDEX `fk_membre_has_telephone_membre1_idx` (`membre_id_membre` ASC) ,
  CONSTRAINT `fk_membre_has_telephone_membre1`
    FOREIGN KEY (`membre_id_membre`)
    REFERENCES `miel`.`membre` (`id_membre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membre_has_telephone_telephone1`
    FOREIGN KEY (`telephone_id_telephone`)
    REFERENCES `miel`.`telephone` (`id_telephone`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;