C:\DEV\IT30A\backup

CREATE DATABASE <database_name>;
SHOW DATABASES;
CONNECT <database_name>;
CREATE TABLE <table_name_in_plural> ();
INSERT INTO <table_name_in_plural> ();
   (columns)
   VALUES(values);

Utility Commands
\! cls
mysqldump -u root -p --databases library_db > C:\DEV\IT30A\backup\08182026_library_db.mysql

mysqldump -u root -p --databases library_db > "C:\DEV\IT30A\backup\%date:~6,4%-%date:~3,2%-%date:~0,2%_%time:~0,2%-%time:~3,2%-%time:~6,2%_library_db.sql"
ALTER TABLE students ADD COLUMN student_cretaed_at TIMESTAMP NULL DEFAULT NULL;
UPDATE students SET student_cretaed_at = CURRENT_TIMESTAMP WHERE student_created_at IS NULL;
ALTER TABLE students MODIFY COLUMN student_created+at TIMESTAMP NOT  NULL DEFAULT CURRENT_TIMESTAMP;
