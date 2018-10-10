CREATE TABLE db_mbaloyi.`ft_table`
(
    `id` INT(8) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL ,
    `login` VARCHAR(8) NOT NULL DEFAULT 'toto',
    `group` ENUM ('staff','student','other') NOT NULL,
    `creation_date` DATE NOT NULL
);