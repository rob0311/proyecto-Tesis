CREATE DATABASE sacur ;
USE `sacur` ;

-- -----------------------------------------------------
-- Table `sacur`.`asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`asignatura` (
  `id_Asignatura` VARCHAR(50) NOT NULL,
  `nombre` VARCHAR(30) NOT NULL,
  `credito` INT NOT NULL,
  PRIMARY KEY (`id_Asignatura`));


-- -----------------------------------------------------
-- Table `sacur`.`estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`estudiante` (
  `carnet` VARCHAR(10) NOT NULL,
  `nombres` VARCHAR(100) NOT NULL,
  `apellidos` VARCHAR(100) NOT NULL,
  `sexo` VARCHAR(2) NOT NULL,
  `telefono` INT NULL DEFAULT NULL,
  `departamento` VARCHAR(50) NULL DEFAULT NULL,
  `ciudad` VARCHAR(50) NULL DEFAULT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `carrera` VARCHAR(50) NOT NULL,
  `pass` VARCHAR(25) NOT NULL,
  `FechaNac` DATE NOT NULL,
  `Estado` INT NOT NULL,
  PRIMARY KEY (`carnet`));


-- -----------------------------------------------------
-- Table `sacur`.`clase`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`clase` (
  `idclase` VARCHAR(20) NOT NULL,
  `Nombre` VARCHAR(50) NOT NULL,
  `asignatura_id_Asignatura` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idclase`),
  INDEX `fk_clase_asignatura1_idx` (`asignatura_id_Asignatura` ASC));


-- -----------------------------------------------------
-- Table `sacur`.`preguntas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`preguntas` (
  `idPreguntas` INT NOT NULL AUTO_INCREMENT,
  `repuesta` VARCHAR(250) NOT NULL,
  `puntos` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `pregunta` VARCHAR(200) NOT NULL,
  `activada` TINYINT NULL DEFAULT NULL,
  PRIMARY KEY (`idPreguntas`));


-- -----------------------------------------------------
-- Table `sacur`.`profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`profesor` (
  `idprofesor` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(100) NOT NULL,
  `apellidos` VARCHAR(100) NOT NULL,
  `usuario` VARCHAR(50) NOT NULL,
  `pass_prof` VARCHAR(30) NOT NULL,
  `emailProf` VARCHAR(50) NOT NULL,
  `carrera` VARCHAR(50) NULL,
  PRIMARY KEY (`idprofesor`));


-- -----------------------------------------------------
-- Table `sacur`.`asignar_tarea`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`asignar_tarea` (
  `id_tare` INT NOT NULL AUTO_INCREMENT,
  `deacrpcion_tarea` VARCHAR(50) NOT NULL,
  `contenido_tarea` VARCHAR(50) NOT NULL,
  `fecha_entrega` DATE NULL DEFAULT NULL,
  `puntaje` INT NULL DEFAULT NULL,
  `archivo` BLOB NULL DEFAULT NULL,
  `id_profesor` INT NOT NULL,
  `profesor_idprofesor` INT NOT NULL,
  PRIMARY KEY (`id_tare`),
  INDEX `fk_asignar_tarea_profesor1_idx` (`profesor_idprofesor` ASC));


-- -----------------------------------------------------
-- Table `sacur`.`clase_dia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`clase_dia` (
  `idclaseDia` VARCHAR(20) NOT NULL,
  `fecha` DATE NOT NULL,
  `tema` VARCHAR(45) NOT NULL,
  `contenido` MEDIUMTEXT NOT NULL,
  `clase_idclase` VARCHAR(20) NOT NULL,
  `preguntas_idPreguntas` INT NOT NULL,
  `asignar_tarea_id_tare` INT NOT NULL,
  INDEX `fk_clase_dia_clase1_idx` (`clase_idclase` ASC),
  INDEX `fk_clase_dia_preguntas1_idx` (`preguntas_idPreguntas` ASC),
  INDEX `fk_clase_dia_asignar_tarea1_idx` (`asignar_tarea_id_tare` ASC),
  PRIMARY KEY (`idclaseDia`),
  CONSTRAINT `fk_clase_dia_clase1`
    FOREIGN KEY (`clase_idclase`)
    REFERENCES `sacur`.`clase` (`idclase`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clase_dia_preguntas1`
    FOREIGN KEY (`preguntas_idPreguntas`)
    REFERENCES `sacur`.`preguntas` (`idPreguntas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clase_dia_asignar_tarea1`
    FOREIGN KEY (`asignar_tarea_id_tare`)
    REFERENCES `sacur`.`asignar_tarea` (`id_tare`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Table `sacur`.`asistencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`asistencia` (
  `estudiante_carnet` VARCHAR(10) NOT NULL,
  `clase_dia_idclaseDia` VARCHAR(20) NOT NULL,
  INDEX `fk_asistencia_estudiante1_idx` (`estudiante_carnet` ASC),
  INDEX `fk_asistencia_clase_dia2_idx` (`clase_dia_idclaseDia` ASC));


-- -----------------------------------------------------
-- Table `sacur`.`recibe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`recibe` (
  `estudiante_carnet` VARCHAR(10) NOT NULL,
  `anio_escolar` INT NULL,
  `clase_idclase` VARCHAR(20) NOT NULL,
  INDEX `fk_recibe_estudiante1_idx` (`estudiante_carnet` ASC),
  INDEX `fk_recibe_clase1_idx` (`clase_idclase` ASC));


-- -----------------------------------------------------
-- Table `sacur`.`imparte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`imparte` (
  `profesor_idprofesor` INT(11) NOT NULL,
  `clase_idclase` VARCHAR(20) NOT NULL,
  INDEX `fk_asignatura_has_profesor_profesor1_idx` (`profesor_idprofesor` ASC) ,
  INDEX `fk_imparte_clase1_idx` (`clase_idclase` ASC));


-- -----------------------------------------------------
-- Table `sacur`.`Notas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`Notas` (
  `estudiante_carnet` VARCHAR(10) NOT NULL,
  `asignatura_id_Asignatura` VARCHAR(50) NOT NULL,
  `Nota` INT NULL,
  INDEX `fk_Notas_estudiante1_idx` (`estudiante_carnet` ASC),
  INDEX `fk_Notas_asignatura1_idx` (`asignatura_id_Asignatura` ASC),
  CONSTRAINT `fk_Notas_estudiante1`
    FOREIGN KEY (`estudiante_carnet`)
    REFERENCES `sacur`.`estudiante` (`carnet`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Notas_asignatura1`
    FOREIGN KEY (`asignatura_id_Asignatura`)
    REFERENCES `sacur`.`asignatura` (`id_Asignatura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Table `sacur`.`Multimedia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`Multimedia` (
  `idMultimedia` INT NOT NULL AUTO_INCREMENT,
  `imagenes` BLOB NULL,
  `Documentos` BLOB NULL,
  `clase_dia_idclaseDia` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idMultimedia`),
  INDEX `fk_Multimedia_clase_dia1_idx` (`clase_dia_idclaseDia` ASC),
  CONSTRAINT `fk_Multimedia_clase_dia1`
    FOREIGN KEY (`clase_dia_idclaseDia`)
    REFERENCES `sacur`.`clase_dia` (`idclaseDia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

