  
CREATE SCHEMA IF NOT EXISTS `sacur` DEFAULT CHARACTER SET latin1 ;
USE `sacur` ;

-- -----------------------------------------------------
-- Table `sacur`.`asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`asignatura` (
  `id_Asignatura` VARCHAR(50) NOT NULL,
  `nombre` VARCHAR(100s) NOT NULL,
  `credito` INT NOT NULL,
  PRIMARY KEY (`id_Asignatura`));


-- -----------------------------------------------------
-- Table `sacur`.`clase`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`clase` (
  `idclase` VARCHAR(20) NOT NULL,
  `fecha` VARCHAR(60) NULL,
  `tema` VARCHAR(80) NOT NULL,
  `contenido` TEXT NULL,
  `asignatura_id_Asignatura` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idclase`),
  INDEX `fk_clase_asignatura1_idx` (`asignatura_id_Asignatura` ASC),
CONSTRAINT `fk_clase_asignatura1_idx`
    FOREIGN KEY (`asignatura_id_Asignatura`)
    REFERENCES `sacur`.`asignatura` (`id_Asignatura`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

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
-- Table `sacur`.`archivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`archivo` (
  `id_archivo` INT NOT NULL AUTO_INCREMENT,
  `archivo_nombre` varchar(255) NOT NULL,
  `descripcion` VARCHAR(255) NULL,
  `ruta` varchar(255) NOT NULL,
  `fk_clase` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_archivo`),
  INDEX `fk_archivo_clase1_idx` (`fk_clase` ASC),
CONSTRAINT `fk_archivo_clase1`
    FOREIGN KEY (`fk_clase`)
    REFERENCES `sacur`.`clase` (`idclase`)
    ON DELETE CASCADE
    ON UPDATE CASCADE

  );


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
  `fk_clase` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idPreguntas`),
  INDEX `fk_preguntas_clase1_idx` (`fk_clase` ASC),
CONSTRAINT `fk_preguntas_clase1`
    FOREIGN KEY (`fk_clase`)
    REFERENCES `sacur`.`clase` (`idclase`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);


-- -----------------------------------------------------
-- Table `sacur`.`asignar_tarea`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`asignar_tarea` (
  `id_tarea` INT NOT NULL AUTO_INCREMENT,
  `deacrpcion_tarea` VARCHAR(50) NOT NULL,
  `contenido_tarea` VARCHAR(50) NOT NULL,
  `fecha_entrega` DATE NULL DEFAULT NULL,
  `puntaje` INT NULL DEFAULT NULL,
  `archivo` BLOB NULL DEFAULT NULL,
  `id_profesor` INT NOT NULL,
   `fk_clase` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_tarea`),
  INDEX `fk_asignar_tarea_clase1_idx` (`fk_clase` ASC),
CONSTRAINT `fk_asignar_tarea_clase1`
    FOREIGN KEY (`fk_clase`)
    REFERENCES `sacur`.`clase` (`idclase`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
  );


-- -----------------------------------------------------
-- Table `sacur`.`asistencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`asistencia` (
  `clase_idclase` VARCHAR(20) NOT NULL,
  `estudiante_carnet` VARCHAR(10) NOT NULL,
  `fecha` VARCHAR(30) NULL,
  INDEX `fk_asistencia_clase1_idx` (`clase_idclase` ASC),
  INDEX `fk_asistencia_estudiante1_idx` (`estudiante_carnet` ASC),
   CONSTRAINT `fk_asistencia_estudiante1`
    FOREIGN KEY (`estudiante_carnet`)
    REFERENCES `sacur`.`estudiante` (`carnet`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    CONSTRAINT `fk_asistencia_clase1`
    FOREIGN KEY (`clase_idclase`)
    REFERENCES `sacur`.`clase` (`idclase`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `sacur`.`profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`profesor` (
  `idprofesor` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(100) NOT NULL,
  `apellidos` VARCHAR(100) NOT NULL,
  `usuario` VARCHAR(50) NOT NULL,
  `pass_prof` VARCHAR(30) NOT NULL,
  `genero` VARCHAR(2) NOT NULL,
  `emailProf` VARCHAR(50) NOT NULL,
  `carrera` VARCHAR(50) NULL,
  `Estado` INT NULL,
PRIMARY KEY (`idprofesor`));


-- -----------------------------------------------------
-- Table `sacur`.`recibe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`recibe` (
  `anio_escolar` INT NULL,
  `estudiante_carnet` VARCHAR(10) NOT NULL,
  `asignatura_id_Asignatura` VARCHAR(50) NOT NULL,
  INDEX `fk_recibe_estudiante1_idx` (`estudiante_carnet` ASC),
  INDEX `fk_recibe_asignatura1_idx` (`asignatura_id_Asignatura` ASC),
  CONSTRAINT `fk_recibe_estudiante1`
    FOREIGN KEY (`estudiante_carnet`)
    REFERENCES `sacur`.`estudiante` (`carnet`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_recibe_asignatura1`
    FOREIGN KEY (`asignatura_id_Asignatura`)
    REFERENCES `sacur`.`asignatura` (`id_Asignatura`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
  );


-- -----------------------------------------------------
-- Table `sacur`.`imparte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sacur`.`imparte` (
  `profesor_idprofesor` INT(11) NOT NULL,
  `asignatura_id_Asignatura` VARCHAR(50) NOT NULL,
  INDEX `fk_profesor_profesor1_idx` (`profesor_idprofesor` ASC),
  INDEX `fk_imparte_asignatura1_idx` (`asignatura_id_Asignatura` ASC),
  CONSTRAINT `fk_profesor_profesor1_idx`
    FOREIGN KEY (`profesor_idprofesor`)
    REFERENCES `sacur`.`profesor` (`idprofesor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_imparte_asignatura1_idx`
    FOREIGN KEY (`asignatura_id_Asignatura`)
    REFERENCES `sacur`.`asignatura` (`id_Asignatura`)
    ON DELETE CASCADE
    ON UPDATE CASCADE );


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
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Notas_asignatura1`
    FOREIGN KEY (`asignatura_id_Asignatura`)
    REFERENCES `sacur`.`asignatura` (`id_Asignatura`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


