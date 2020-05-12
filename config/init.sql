create database sns2_php;

grant all on sns2_php.* to dbuser@localhost identified by '926hdfy8272tgdhy2h';

use sns2_php;

create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;
