CREATE TABLE roles(
    id_rol              INT (11)        NOT NULL    AUTO_INCREMENT  PRIMARY KEY,
    nombre_rol          VARCHAR (100)   NOT NULL    UNIQUE KEY,

    fyh_creacion        DATETIME        NULL,
    fyh_actualizacion   DATETIME        NULL

)ENGINE=InnoDB;

INSERT INTO roles (nombre_rol,fyh_creacion) VALUES ('ADMINISTRADOR','2024-03-14 14:50:00');
INSERT INTO roles (nombre_rol,fyh_creacion) VALUES ('OPERADOR','2024-03-14 14:50:00');
INSERT INTO roles (nombre_rol,fyh_creacion) VALUES ('MOTOQUERO','2024-03-14 14:50:00');
INSERT INTO roles (nombre_rol,fyh_creacion) VALUES ('CLIENTE','2024-03-14 14:50:00');

CREATE TABLE usuarios(
    id_usuario          INT (11)        NOT NULL    AUTO_INCREMENT  PRIMARY KEY,
    rol_id              INT (11)        NOT NULL,
    email               VARCHAR (100)   NOT NULL    UNIQUE KEY,
    password            TEXT            NOT NULL,

    fyh_creacion        DATETIME        NULL,
    fyh_actualizacion   DATETIME        NULL,

    FOREIGN KEY (rol_id) REFERENCES roles (id_rol)  ON delete NO ACTION ON update CASCADE

)ENGINE=InnoDB;

INSERT INTO usuarios (rol_id,email,password,fyh_creacion) VALUES ('1','admin@admin.com','12345678','2024-03-14 14:50:00');
