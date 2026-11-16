-- 1. Crear el usuario restringido a localhost
create user 'user'@'localhost' IDENTIFIED BY 'clave';

-- 2. Darle permisos solo sobre la base de datos 'centro' (principio de mínimo privilegio)
grant all privileges ON centro.* TO 'user'@'localhost';

-- 3. Aplicar los cambios de privilegios
flush privileges;