-- Active: 1672810922382@@tecnoweb.org.bo@5432@db_grupo02cc


CREATE TABLE persona(
    id SERIAL NOT NULL,
    ci integer NOT NULL,
    nombre character varying(30),
    sexo character varying(30),
    telefono character varying(30),
    fecha_nac date NOT NULL,
    nacionalidad character varying(30),
    PRIMARY KEY(id)
);





CREATE TABLE users( 
    id SERIAL NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    persona_id integer NOT NULL,
    tipo character(3) NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT users_persona_id_fkey FOREIGN key(persona_id) REFERENCES persona(id) on delete cascade on update cascade
);
CREATE UNIQUE INDEX users_email_unique ON "users" USING btree ("email");





CREATE TABLE roles(
    id SERIAL NOT NULL,
    nombre_corto character varying(30) NOT NULL,
    nombre_largo character varying(30) NOT NULL,
    descripcion character varying(60),
    id_user integer NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT roles_id_user_fkey FOREIGN key(id_user) REFERENCES users(id) on delete cascade on update cascade
);






CREATE TABLE items(
    id SERIAL NOT NULL,
    tipo character varying(30),
    nombre character varying(250),
    descripcion character varying(230),
    estado character varying(30),
    PRIMARY KEY(id)
);






CREATE TABLE cursos(
    codigo SERIAL NOT NULL,
    duracion character varying(30),
    requisito character varying(30),
    nivel character varying(30),
    items_id integer,
    PRIMARY KEY(codigo),
    CONSTRAINT item_id_fk FOREIGN key(items_id) REFERENCES items(id) on delete cascade on update cascade
);






CREATE TABLE servicios(
    codigo SERIAL NOT NULL,
    costo character varying(30),
    items_id integer,
    PRIMARY KEY(codigo),
    CONSTRAINT item_id_fk FOREIGN key(items_id) REFERENCES items(id) on delete cascade on update cascade
);







CREATE TABLE promociones(
    id SERIAL NOT NULL,
    descuentos integer,
    estado character varying(30),
    items_id integer,
    fecha_inicio date NOT NULL,
    fecha_fin date NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT items_id_fk FOREIGN key(items_id) REFERENCES items(id) on delete cascade on update cascade
);







CREATE TABLE ofertas(
    id SERIAL NOT NULL,
    fecha_inicio date,
    fecha_fin date,
    estado character varying(30),
    horario character varying(30),
    user_id integer NOT NULL,
    cursos_codigo integer NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT ofertas_user_id_fkey FOREIGN key(user_id) REFERENCES users(id) on delete cascade on update cascade,
    CONSTRAINT ofertas_cursos_codigo_fkey FOREIGN key(cursos_codigo) REFERENCES cursos(codigo) on delete cascade on update cascade
);




CREATE TABLE proformas(
    id SERIAL NOT NULL,
    url_qr character varying(30),
    oferta_id integer NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT proformas_oferta_id_fkey FOREIGN key(oferta_id) REFERENCES ofertas(id) on delete cascade on update cascade
);





--ESTA TABLA SOLO ESPARA EL CONTADOR DE VISTAS DEL SITIO WEB
CREATE TABLE visitas(
    id SERIAL NOT NULL,
    contador integer,
    PRIMARY KEY(id)
);
