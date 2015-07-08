create database studenti;

use studenti;
drop table student;
create table student(
id int not null primary key auto_increment,
First_Name varchar(20) not null,
Last_Name varchar(20) not null,
Gender varchar(10) not null,
Birth_date date not null,
Email varchar(50) not null,
Phone varchar(10) not null,
Faculty int not null,
Faculty_start_year year not null,
Event int not null,
Period_of_event int not null,
Departamanet int not null,
Task_received int not null,
Remarks varchar (200) not null,
constraint fk foreign key (faculty) references facultati(id),
constraint fk1 foreign key (Event) references events(id),
constraint fk2 foreign key (Departamanet) references departamente(id),
constraint fk3 foreign key (Task_received) references tasks(id),
check(Gender='barbat' or Gender='femeie')
);

create table facultati(
id int not null primary key auto_increment,
Nume varchar (50) not null
);

create table  events(
id int not null primary key auto_increment,
Nume varchar (50) not null
);

create table departamente(
id int not null primary key auto_increment,
Nume varchar (50) not null
);

create table tasks(
id int not null primary key auto_increment,
Nume varchar (50) not null
);

create table users(
id int not null primary key auto_increment,
username varchar (20) not null unique,
password varchar (20) not null
);

insert into facultati(Nume) values('Matematica si stinte ale naturi'),('Automatica');
insert into events (Nume) values ('Practica'), ('Intership');
insert into departamente (Nume) values ('Informatica'), ('Matematica');
insert into tasks (Nume) values ('Students Organizer'), (' Customer services');
insert into student(First_Name,Last_Name,Gender,Birth_date,Email,Phone,Faculty,Faculty_start_year,Event,Period_of_event,Departamanet,Task_received,Remarks) values
  ('Voicu','Florentin','barbat', '1994-04-05','voicu_florentin@yahoo.com', '0766198503', 1, 2013,2, '10',1,2,'PHP' ),
  ('Elena','Udrea','femeie', '1970-07-02','elena@yahoo.com', '0766198803', 2, 2000,2, '10',1,2,'word' ),
  ('Ponta','Victor','barbat', '1975-05-01','ponti@yahoo.com', '0766155503', 1, 2013,2, '10',1,2,'plagiat' );
  
select *from student;

insert into users (username, password) values('user1','pass1'),('user2','pass2');