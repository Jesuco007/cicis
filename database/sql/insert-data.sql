-- Active: 1672810922382@@tecnoweb.org.bo@5432@db_grupo02cc


INSERT INTO public.visitas (id, contador) VALUES (1, 0);





INSERT INTO public.persona (ci, nombre, sexo, telefono, fecha_nac, nacionalidad) VALUES (837, 'Maria Fernanda', 'F', '89385434', '2021-03-23', 'BOLIVIA');
INSERT INTO public.persona (ci, nombre, sexo, telefono, fecha_nac, nacionalidad) VALUES (645345, 'Teofilo Condori Marge', 'M', '64354', '2022-12-23', 'Peruana');
INSERT INTO public.persona (ci, nombre, sexo, telefono, fecha_nac, nacionalidad) VALUES (112, 'Jessica Gutierrez', 'F', '89385434', '2021-03-23', 'Boliviana');
INSERT INTO public.persona (ci, nombre, sexo, telefono, fecha_nac, nacionalidad) VALUES (63243, 'Georgina Rodriguez', 'F', '6324526', '2022-12-03', 'Argentina');
INSERT INTO public.persona (ci, nombre, sexo, telefono, fecha_nac, nacionalidad) VALUES (798780, 'Alfredo Gonzales', 'M', '68792504', '2000-07-27', 'Boliviana');
INSERT INTO public.persona (ci, nombre, sexo, telefono, fecha_nac, nacionalidad) VALUES (93478, 'Iveth Robles Catari', 'F', '97868799', '1990-01-12', 'Boliviana');
INSERT INTO public.persona (ci, nombre, sexo, telefono, fecha_nac, nacionalidad) VALUES (67, 'Jesus Esteban', 'M', '89385434', '2021-03-23', 'BOLIVIA');








--Contrase;a para todoslos usuarios: 1234
INSERT INTO public.users (name, email, email_verified_at, password, remember_token, created_at, updated_at, persona_id, tipo) VALUES ('Georgina', 'georgina@gmail.com', null, '$2y$10$qA/tJG.06IsanjQY1bw1HOpd2q12fmm5Ca8bTAk2qfxXtL6JbaP76', null, '2023-01-04 06:47:49.000000', '2023-01-24 20:16:05.000000', 3, 'EST');
INSERT INTO public.users (name, email, email_verified_at, password, remember_token, created_at, updated_at, persona_id, tipo) VALUES ('Jessica', 'jessica@gmail.com', null, '$2y$10$RRy3xHSy46SVlQQCQ./oWOKxRAimO63S22qyio8uNpgJyA00S7Tb2', null, '2023-01-24 10:21:03.000000', '2023-01-24 20:16:29.000000', 4, 'EST');
INSERT INTO public.users (name, email, email_verified_at, password, remember_token, created_at, updated_at, persona_id, tipo) VALUES ('yisus', 'yisus@gmail.com', null, '$2y$10$..Rj3Rxx.E5hGY5LT.7Gte3FceGdHTuqLo7RDQuVvSW1S8XLNPZ6a', null, '2023-01-04 05:53:04.000000', '2023-01-24 20:16:45.000000', 5, 'COO');
INSERT INTO public.users (name, email, email_verified_at, password, remember_token, created_at, updated_at, persona_id, tipo) VALUES ('Fernanda', 'fer@gmail.com', null, '$2y$10$bnoywjdzOgGL.CpCgfmH0uIlKwljqf6/Mr/cIb1eRBF8HpjdLWeje', null, '2023-01-04 07:22:34.000000', '2023-01-24 20:17:01.000000', 1, 'SEC');
INSERT INTO public.users (name, email, email_verified_at, password, remember_token, created_at, updated_at, persona_id, tipo) VALUES ('alfreding0', 'alfredogonzales953@gmail.com', null, '$2y$10$GUWNPyETN4u5DI/uHpRuhuvBA40sKe1jlUEJsC.cB5.DyXv7pK696', null, '2023-01-24 20:17:20.000000', '2023-01-24 20:17:20.000000', 7, 'COO');
INSERT INTO public.users (name, email, email_verified_at, password, remember_token, created_at, updated_at, persona_id, tipo) VALUES ('iveth9324', 'iveth@gmail.com', null, '$2y$10$JIlqzTVnYOhH0LrucCMVze2voAGIrM4ObZkqAbC7FJIGcf1D8IyRu', null, '2023-01-24 20:17:41.000000', '2023-01-24 20:17:41.000000', 6, 'DIR');
INSERT INTO public.users (name, email, email_verified_at, password, remember_token, created_at, updated_at, persona_id, tipo) VALUES ('teofilo', 'teo@gmail.com', null, '$2y$10$uS6VAsyqNz8OevPXre0J7.GPbO0njOWdxDO0dM5uIeYNUigmNs5yS', null, '2023-01-24 20:18:11.000000', '2023-01-24 20:18:11.000000', 2, 'EST');









INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Cursos', 'cursos', '- - -', 1);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Servicios', 'servicios', '- - -', 1);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Promociones', 'promociones', '- - -', 1);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Servicios', 'servicios', '- - -', 2);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Cursos', 'cursos', '- - -', 2);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Promociones', 'promociones', '- - -', 2);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Cursos', 'cursos', null, 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Servicios', 'servicios', null, 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Promociones', 'promociones', null, 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Roles', 'roles', null, 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Usuarios', 'usuarios', null, 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Persona', 'persona', null, 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Ofertas', 'ofertas', null, 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Proformas', 'proformas', null, 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Cursos', 'cursos', '- - -',7);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Servicios', 'servicios', '- - -', 7);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Reportes', 'reportes', '- - -', 3);
INSERT INTO public.roles (nombre_corto, nombre_largo, descripcion, id_user) VALUES ('Personas', 'persona', '- - -', 5);








INSERT INTO public.items (tipo, nombre, descripcion, estado) VALUES ('Servicios', 'CURSOS', 'Avance de materia', 'DISPONIBLE');
INSERT INTO public.items (tipo, nombre, descripcion, estado) VALUES ('Cursos', 'Lógica de programación con Pascal', 'Pascal', 'NO DISPONIBLE');
INSERT INTO public.items (tipo, nombre, descripcion, estado) VALUES ('Cursos', 'Lógica de programación con Java', 'java', 'DISPONIBLE');
INSERT INTO public.items (tipo, nombre, descripcion, estado) VALUES ('Cursos', 'Cálculo Básico', 'limites', 'DISPONIBLE');
INSERT INTO public.items (tipo, nombre, descripcion, estado) VALUES ('Cursos', 'Excel Avanzado', 'Hojas de cálculo en Excel', 'DISPONIBLE');
INSERT INTO public.items (tipo, nombre, descripcion, estado) VALUES ('Servicios', 'Mantenimiento de computadores', 'Solo Escritorio', 'DISPONIBLE');
INSERT INTO public.items (tipo, nombre, descripcion, estado) VALUES ('Servicios', 'Instalación de cableado de redes', 'salas de cómputo', 'DISPONIBLE');









INSERT INTO public.cursos (duracion, requisito, nivel, items_id) VALUES ('3 semanas', 'Sin requisitos previos', '1', 2);
INSERT INTO public.cursos (duracion, requisito, nivel, items_id) VALUES ('4 semanas', 'Sin requisitos', '2', 3);
INSERT INTO public.cursos (duracion, requisito, nivel, items_id) VALUES ('5 semanas', 'Excel Básico, lógica.', '4', 4);
INSERT INTO public.cursos (duracion, requisito, nivel, items_id) VALUES ('2 semanas', 'Sin requisitos', '2', 5);







INSERT INTO public.servicios (costo, items_id) VALUES ('100', 1);
INSERT INTO public.servicios (costo, items_id) VALUES ('40', 6);
INSERT INTO public.servicios (costo, items_id) VALUES ('30 por punto', 7);








INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (8, 'ACTIVO', 1, '2022-02-21', '2022-03-15');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (2, 'ACTIVO', 1, '2022-03-12', '2022-03-29');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (5, 'ACTIVO', 2, '2022-03-01', '2022-03-18');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (2, 'ACTIVO', 2, '2022-02-25', '2022-03-12');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (2, 'ACTIVO', 1, '2023-01-01', '2023-01-20');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (3, 'ACTIVO', 1, '2022-12-06', '2022-12-22');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (5, 'ACTIVO', 2, '2022-03-15', '2022-03-30');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (5, 'ACTIVO', 1, '2022-07-15', '2022-07-29');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (7, 'ACTIVO', 2, '2022-07-06', '2022-07-18');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (30, 'ACTIVO', 3, '2023-01-17', '2023-01-31');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (20, 'ACTIVO', 7, '2023-01-09', '2023-01-14');
INSERT INTO public.promociones (descuentos, estado, items_id, fecha_inicio, fecha_fin) VALUES (20, 'ACTIVO', 4, '2022-03-01', '2022-03-12');











INSERT INTO public.ofertas (fecha_inicio, fecha_fin, estado, horario, user_id, cursos_codigo) VALUES ('2022-12-29', '2023-01-18', 'DISPONIBLE', '10am a 12pm', 4, 2);
INSERT INTO public.ofertas (fecha_inicio, fecha_fin, estado, horario, user_id, cursos_codigo) VALUES ('2023-01-05', '2023-01-05', 'NO DISPONIBLE', '8am a 11am', 7, 3);
INSERT INTO public.ofertas (fecha_inicio, fecha_fin, estado, horario, user_id, cursos_codigo) VALUES ('2022-12-01', '2022-12-15', 'DISPONIBLE', '10AM A 11:30AM', 2, 4);
INSERT INTO public.ofertas (fecha_inicio, fecha_fin, estado, horario, user_id, cursos_codigo) VALUES ('2022-11-01', '2022-11-18', 'NO DISPONIBLE', '08:30AM A 10:00AM', 4, 4);
INSERT INTO public.ofertas (fecha_inicio, fecha_fin, estado, horario, user_id, cursos_codigo) VALUES ('2023-01-08', '2023-01-14', 'DISPONIBLE', '09:30AM A 11:00AM', 7, 2);
INSERT INTO public.ofertas (fecha_inicio, fecha_fin, estado, horario, user_id, cursos_codigo) VALUES ('2023-01-11', '2023-01-18', 'DISPONIBLE', '10AM A 13PM', 4, 4);




