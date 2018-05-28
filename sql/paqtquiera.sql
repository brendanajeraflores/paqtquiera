CREATE DATABASE paqtquiera;
USE paqtquiera; 

create sequence seq_ocasion
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_tipo
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_articulo
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_formaPago
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_perfil
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_delegacion
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_colonia
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_cp
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_direccion
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_usuario
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_pedido
minvalue 1
maxvalue 9999
increment by 1;

create sequence seq_pedidoArticulo
minvalue 1
maxvalue 9999
increment by 1;

CREATE TABLE ocasion(
	idOcasion		INTEGER			NOT NULL,
	nombreOcasion	VARCHAR(25)		NOT NULL,

	CONSTRAINT pkOcasion
    PRIMARY KEY (idOcasion)	
	
);

CREATE TABLE tipo(
	idTipo 			INTEGER			NOT NULL,
	nombreTipo		VARCHAR(25)		NOT NULL,
	idTipoPadre		INTEGER			NULL,

	CONSTRAINT pkTipo
    PRIMARY KEY (idTipo),

    CONSTRAINT fkTipoTipo
    FOREIGN KEY (idTipoPadre)
	REFERENCES 	tipo(idTipo)

);

CREATE TABLE articulo(
	idArticulo		INTEGER			NOT NULL,
	nombreArticulo	VARCHAR(50) 	NOT NULL,
	existencia		INTEGER			NOT NULL,
	descripcion		TEXT			NOT NULL,
	descuento		CHAR(5)			NULL,
	idTipo 			INTEGER			NOT NULL,
	idOcasion 		INTEGER 			NULL,
	foto 			VARCHAR(80)		NOT NULL,

	CONSTRAINT pkArticulo
    PRIMARY KEY (idArticulo),

    CONSTRAINT fkArticuloTipo
    FOREIGN KEY (idTipo)
	REFERENCES 	tipo(idTipo),

	CONSTRAINT fkArticuloOcasion
    FOREIGN KEY (idOcasion)
	REFERENCES 	ocasion(idOcasion)		
);

CREATE TABLE formaPago(
	idFormaPago		INTEGER			NOT NULL,
	nombrePago		VARCHAR(25)		NOT NULL,

	CONSTRAINT pkFormaPago
    PRIMARY KEY (idFormaPago)
);

CREATE TABLE perfil(
	idPerfil			INTEGER			NOT NULL,
	nombrePerfil		VARCHAR(25)		NOT NULL,

	CONSTRAINT pkPerfil
    PRIMARY KEY (idPerfil)
);

CREATE TABLE delegacion(
	idDelegacion		INTEGER			NOT NULL,
	nombreDelegacion	VARCHAR(50)		NOT NULL,

	CONSTRAINT pkDelegacion
    PRIMARY KEY (idDelegacion)
);

CREATE TABLE colonia(
	idColonia		INTEGER			NOT NULL,
	nombreColonia	VARCHAR(50)		NOT NULL,
	idDelegacion 	INTEGER			NOT NULL,

	CONSTRAINT pkColonia
    PRIMARY KEY (idColonia),

    CONSTRAINT fkColoniaDelegacion
    FOREIGN KEY (idDelegacion)
	REFERENCES 	delegacion(idDelegacion)
);

CREATE TABLE cp(
	idCp		INTEGER		NOT NULL,
	codigo		VARCHAR(5)	NOT NULL,
	idColonia 	INTEGER		NOT NULL,

	CONSTRAINT pkCP
	PRIMARY KEY	(idCp),

	CONSTRAINT fkCpColonia
    FOREIGN KEY (idColonia)
	REFERENCES 	colonia(idColonia)
);

CREATE TABLE direccion(
	idDireccion 	INTEGER 			NOT NULL,
	calle 			VARCHAR(25)		NOT NULL,
	numExt			CHAR(10)		NULL,
	numInt			CHAR(5)			NULL,
	idColonia		INTEGER 			NOT NULL,

	CONSTRAINT pkDireccion
    PRIMARY KEY (idDireccion),

    CONSTRAINT fkDireccionColonia
    FOREIGN KEY (idColonia)
	REFERENCES 	colonia(idColonia)
);

CREATE TABLE usuario(
	idUsuario 			INTEGER 			NOT NULL,
	nombre				VARCHAR(25)		NOT NULL,
	primerApellido		VARCHAR(25)		NOT NULL,
	segundoApellido		VARCHAR(25)		NOT NULL,
	usuario 			VARCHAR(50)		NOT NULL,
	contrasenia			VARCHAR(50)		NOT NULL,
	correo				VARCHAR(80)		NOT NULL,
	telefono			VARCHAR(20)		NOT NULL,
	idDireccion			INTEGER			NOT NULL,
	idPerfil			INTEGER			NOT NULL,

	CONSTRAINT pkUsuario
    PRIMARY KEY (idUsuario),

    CONSTRAINT fkUsuarioDireccion
    FOREIGN KEY (idDireccion)
	REFERENCES 	direccion(idDireccion),

	CONSTRAINT fkUsuarioPerfil
    FOREIGN KEY (idPerfil)
	REFERENCES 	perfil(idPerfil),

	CONSTRAINT uqUsuarioUsuario
    UNIQUE(usuario),

    CONSTRAINT uqUsuarioCorreo
    UNIQUE(correo)
);


CREATE TABLE pedido(
	idPedido			INTEGER			NOT NULL,
	fechaPedido			DATE 			NOT NULL,
	fechaEntrega		DATE 			NOT NULL,
	idUsuario			INTEGER 			NOT NULL,
	idFormaPago			INTEGER 			NOT NULL,

	CONSTRAINT pkPedido
    PRIMARY KEY (idPedido),

    CONSTRAINT fkPedidoUsuario
    FOREIGN KEY (idUsuario)
	REFERENCES 	usuario(idUsuario),

	CONSTRAINT fkPedidoFormaPago
    FOREIGN KEY (idFormaPago)
	REFERENCES 	formaPago(idFormaPago)
);

CREATE TABLE pedidoArticulo(
	idPedido			INTEGER			NOT NULL,
	idArticulo			INTEGER			NOT NULL,
	cantidad			INTEGER			NOT NULL,

	CONSTRAINT pkDetallePedido
    PRIMARY KEY (idPedido, idArticulo),

    CONSTRAINT fkDetallePedidoPedido
    FOREIGN KEY (idPedido)
	REFERENCES 	pedido(idPedido),

	CONSTRAINT fkDetallePedidoArticulo
    FOREIGN KEY (idArticulo)
	REFERENCES 	articulo(idArticulo)
);

ALTER TABLE ocasion ALTER COLUMN idOcasion SET DEFAULT NEXTVAL('seq_ocasion');
ALTER TABLE tipo ALTER COLUMN idTipo SET DEFAULT NEXTVAL('seq_tipo');
ALTER TABLE articulo ALTER COLUMN idArticulo SET DEFAULT NEXTVAL('seq_articulo');
ALTER TABLE formaPago ALTER COLUMN idFormaPago SET DEFAULT NEXTVAL('seq_formaPago');
ALTER TABLE perfil ALTER COLUMN idPerfil SET DEFAULT NEXTVAL('seq_perfil');
ALTER TABLE delegacion ALTER COLUMN idDelegacion SET DEFAULT NEXTVAL('seq_delegacion');
ALTER TABLE colonia ALTER COLUMN idColonia SET DEFAULT NEXTVAL('seq_colonia');
ALTER TABLE cp ALTER COLUMN idCp SET DEFAULT NEXTVAL('seq_cp');
ALTER TABLE direccion ALTER COLUMN idDireccion SET DEFAULT NEXTVAL('seq_direccion');
ALTER TABLE usuario ALTER COLUMN idUsuario SET DEFAULT NEXTVAL('seq_usuario');
ALTER TABLE pedido ALTER COLUMN idPedido SET DEFAULT NEXTVAL('seq_pedido');





