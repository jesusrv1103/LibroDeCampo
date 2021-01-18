/*EN CASO DE QUE EXISTA YA LA BASE DE DATOS*/
DROP DATABASE CuadernoCampo;

/*CREAR LA BASE DE DATOS*/
CREATE DATABASE CuadernoCampo;

/*ENTRAR EN LA BASE DE DATOS*/
USE CuadernoCampo;

/*--CREACION DE TABLAS*/

/*DATOS DE IDENTIFICACIÓN*/
CREATE TABLE identificacion(
	titularExplotacion VARCHAR(50),
	direccion VARCHAR(150),
	telefono INTEGER,
	municipio VARCHAR(50),
	fax VARCHAR(25),
	codigoPostal INTEGER(5),
	firmaDigital VARCHAR(50))
	ENGINE = INNODB;

/*DATOS DE LAS PARCELAS*/
CREATE TABLE parcela(
	noParcela INTEGER NOT NULL,
	municipio VARCHAR(50),
	paraje VARCHAR(20),
	superficieHa FLOAT,
	poligono VARCHAR(30),
	parcelaRecinto FLOAT,
	variedad VARCHAR(30),
	patron VARCHAR(30),
	proveedorMV VARCHAR(30),
	fechaPlant DATE,
	marcoPlant VARCHAR(30),
	cultivoAnterior VARCHAR(30),
	sistemaFormacion VARCHAR(30),
	cubirtaVegetal BOOLEAN)
	ENGINE = INNODB;

/*RIEGOS*/
CREATE TABLE riegos(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	sistemaRiego VARCHAR(25),
	gastoAgua FLOAT)
	ENGINE = INNODB;

/*ABONADOS*/
CREATE TABLE abonados(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	nombreComercial VARCHAR(30),
	composicion FLOAT,
	formaAplicacion VARCHAR(50),
	gastoAbono FLOAT)
	ENGINE = INNODB;

/*PODAS*/
CREATE TABLE podas(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	practicaRealiz VARCHAR(50))
	ENGINE = INNODB;

/*ACLAREO RACIMOS*/
CREATE TABLE aclareoRacimos(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	practicaRealiz VARCHAR(50))
	ENGINE = INNODB;

/*LABORES*/
CREATE TABLE labores(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	practicaRealiz VARCHAR(50))
	ENGINE = INNODB;

/*RECOLECCIÓN*/
CREATE TABLE recoleccion(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	varRecolectada FLOAT,
	rendimiento FLOAT,
	destinoCosecha VARCHAR(50))
	ENGINE = INNODB;

	/*PRACTICAS DE CULTIVO -- TABLA RELACIONAL*/
	CREATE TABLE practicasCultivo(
		noParcela INTEGER PRIMARY KEY,
		fecha INTEGER,
		practicaRealiz VARCHAR(50))
		ENGINE = INNODB;

/*CONTROL DE MALAS HIERBAS, PLAGAS Y ENFERMEDADES
	(Control químico, biológico y biotécnico)*/
CREATE TABLE controlPlagas(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	nombreComercial VARCHAR(30),
	materiaActiva FLOAT,
	formaAplicacion VARCHAR(50),
	gastoProducto FLOAT,
	controlHP VARCHAR(30),
	noTratamiento INTEGER)
	ENGINE = INNODB;

/*SEGUIMIENTO DE PLAGAS*/
CREATE TABLE seguimientoPlagas(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	nCepasObservadas INTEGER,
	nOrganosCepa INTEGER,
	parasitObservado VARCHAR(30),
	nivelAtaque INTEGER,
	tratamiento BOOLEAN)
	ENGINE = INNODB;

/*CAPTURAS DE TRAMPAS*/
CREATE TABLE capturasTrampas(
	noParcela INTEGER NOT NULL,
	fecha DATE,
	polillaRacimo VARCHAR(25))
	ENGINE = INNODB;

/*SEGUIMIENTO, CONTROLES Y TRATAMIENTOS -- TABLA RELACIONAL*/
CREATE TABLE segContrTrat(
	noParcela INTEGER PRIMARY KEY,
	fecha DATE)
	ENGINE = INNODB;

/*DAÑOS POR FENÓMENOS METEOROLÓGICOS*/
CREATE TABLE danosFenomMeteor(
  fecha DATE,
  dano FLOAT,
  medidasAdop VARCHAR(35))
  ENGINE = INNODB;

/*PRACTICAS DE CULTIVO*/

/*RIEGOS*/
CREATE TABLE riegosProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalRiegosHrs INTEGER,
	totalRiegosCosteU FLOAT,
	totalRiegosCosteT FLOAT)
	ENGINE = INNODB;

/*ABONADOS*/
CREATE TABLE abonadosProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalAbonadosHrs INTEGER,
	totalAbonadosCosteU FLOAT,
	totalAbonadosCosteT FLOAT)
	ENGINE = INNODB;

 /*PODAS*/
 CREATE TABLE podasProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalPodasHrs INTEGER,
	totalPodasCosteU FLOAT,
	totalPodasCosteT FLOAT)
	ENGINE = INNODB;

/*ACLAREO RACIMOS*/
CREATE TABLE aclareoRacProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalAclareoHrs INTEGER,
	totalAclareoCosteU FLOAT,
	totalAclareoCosteT FLOAT)
	ENGINE = INNODB;

/*LABORES*/
CREATE TABLE laboresProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalLaboresHrs INTEGER,
	totalLaboresCosteU FLOAT,
	totalLaboresCosteT FLOAT)
	ENGINE = INNODB;

/*RECOLECCIÓN*/
CREATE TABLE recoleccionProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalRecoleccionHrs INTEGER,
	totalRecoleccionCosteU FLOAT,
	totalRecoleccionCosteT FLOAT)
	ENGINE = INNODB;

/*CONTROLES Y TRATAMIENTOS*/

/*CONTTROL DE MALAS HIERBAS, PLAGAS Y ENFERMEDADES*/
CREATE TABLE controlPlagasProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalControlPlagsHrs INTEGER,
	totalControlPlagsCosteU FLOAT,
	totalControlPlagsCosteT FLOAT)
	ENGINE = INNODB;

/*SEGUIMIENTO DE PLAGAS*/
CREATE TABLE seguimientoPlagasProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalSegPlagsHrs INTEGER,
	totalSegPlagsCosteU FLOAT,
	totalSegPlagsCosteT FLOAT)
	ENGINE = INNODB;

/*CAPTURAS EN TRAMPAS*/
CREATE TABLE capturasTrampasProd(
	noParcela INTEGER PRIMARY KEY,
	recursosHumaHrs INTEGER,
	recursosHumaCosteU FLOAT,
	recursosHumaCosteT FLOAT,
	recursosMatHrs INTEGER,
	recursosMatCosteU FLOAT,
	recursosMatCosteT FLOAT,
	totalCapTrampPlagsHrs INTEGER,
	totalCapTrampCosteU FLOAT,
	totalCapTrampCosteT FLOAT)
	ENGINE = INNODB;

/*PRACTICAS DE CULTIVO -- RELACIONES*/

/*RIEGOS*/
ALTER TABLE riegos ADD CONSTRAINT FOREIGN KEY
	fk_riegos_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*ABONADOS*/
ALTER TABLE abonados ADD CONSTRAINT FOREIGN KEY
	fk_abonados_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*PODAS*/
ALTER TABLE podas ADD CONSTRAINT FOREIGN KEY
	fk_podas_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*ACLAREO RACIMOS*/
ALTER TABLE aclareoRacimos ADD CONSTRAINT FOREIGN KEY
	fk_aclareoRacimos_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*LABORES*/
ALTER TABLE labores ADD CONSTRAINT FOREIGN KEY
	fk_labores_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*RECOLECCION*/
ALTER TABLE recoleccion ADD CONSTRAINT FOREIGN KEY
	fk_recoleccion_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

--

/*RIEGOS PRODUCCION*/
ALTER TABLE riegosProd ADD CONSTRAINT FOREIGN KEY
	fk_riegosProd_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*ABONADOS PRODUCCION*/
ALTER TABLE abonadosProd ADD CONSTRAINT FOREIGN KEY
	fk_abonadosProd_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*PODAS PRODUCCION*/
ALTER TABLE podasProd ADD CONSTRAINT FOREIGN KEY
	fk_podasProd_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*ACLAREO RACIMOS PRODUCCION*/
ALTER TABLE aclareoRacProd ADD CONSTRAINT FOREIGN KEY
	fk_aclareoRacProd_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*LABORES PROUCCION*/
ALTER TABLE laboresProd ADD CONSTRAINT FOREIGN KEY
	fk_laboresProd_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*RECOLECCION PROUCCION*/
ALTER TABLE recoleccionProd ADD CONSTRAINT FOREIGN KEY
	fk_recoleccionProd_noParcela(noParcela) REFERENCES practicasCultivo(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*SEGUIMIENTO, CONTROLES Y TRATAMIENTOS -- RELACIONES*/

/*CONTROL DE PLAGAS*/
ALTER TABLE controlPlagas ADD CONSTRAINT FOREIGN KEY
	fk_controlPlagas_noParcela(noParcela) REFERENCES segContrTrat(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*SEGUIMIENTO DE PLAGAS*/
ALTER TABLE seguimientoPlagas ADD CONSTRAINT FOREIGN KEY
	fk_segPlagas_noParcela(noParcela) REFERENCES segContrTrat(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*CAPTURAS TRAMPAS*/
ALTER TABLE capturasTrampas ADD CONSTRAINT FOREIGN KEY
	fk_capturasTrampas_noParcela(noParcela) REFERENCES segContrTrat(noParcela)
	ON DELETE CASCADE ON UPDATE CASCADE;

/*SE INSERTARAN 3 PARCELAS*/
