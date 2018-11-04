<?php
pg_connect("host=localhost user=auto dbname=postgres") or die("<h3>Could not connect to database<br></h3>");
echo"_";
/*pg_query("create table custdri(dri_name varchar(30),cname varchar(30),contact numeric(10,0),pick_date date,time time,fromloc text,toloc text,no_of_auto int)") or die("Error");
echo"Hell";
/*pg_query("create table complaint(comp_id varchar(20)primary key,user_name varchar(30),contact_no numeric(10,0),subject_of_complaint text,city varchar(20),details text,upfile varchar(20),status varchar(10)check(status in('accepted','pending','solved')))")or die("Error");
echo "hi";
pg_query("create table payment(trans_id varchar(20)primary key,cust_phone numeric(10,0),from_loc text,to_loc text,km int,batch_no varchar(20)references driver(batch_no) on delete cascade on update cascade,payment_date date,amount float, payment_mode varchar(20),unique(trans_id,cust_phone,batch_no,payment_date))") or die("Error");
echo"Hell";
/*pg_query("create table custregister(customer_name varchar(20)not null,address varchar(50)not null,age varchar(10),gender varchar(6),mobile_no numeric(10,0)primary key,email_id varchar(40)not null,disable_status varchar(3)not null,password varchar(20))")or die ("error");
echo "<br>cust created";
pg_query("create table driver(dr_name varchar(20),address text, date_of_joining date,age varchar(10),gender varchar(6),batch_no varchar(20)primary key,lic_no varchar(15),autono varchar(10),contact numeric(10,0) unique,email varchar(30),password varchar(20))") or die("Errror driver");
echo" driver  create";

pg_query(" create table driverlogin(batch varchar(20)references driver(batch_no)on delete cascade on update cascade,password varchar(20))");
echo "Done driverlogin";

pg_query("create table bookauto(cust_name varchar(20),contact numeric(10,0)references custregister(mobile_no)on delete cascade,pickdate date,from_loc varchar(30),to_loc varchar(30),no_of_auto int)")or die("Mela");
echo "Jagla"


postgres=# create table bookauto1(contact numeric(10,0) references custregister(mobile_no) on delete cascade on update cascade,pickdate date,from_loc text,to_loc text,no_of_seats int,Batch_no varchar(15
) references driver(batch_no) on delete cascade on update cascade,time time);
CREATE TABLE

pg_query(" create table admin(emp_id varchar(20)primary key,emp_name varchar(20),contact_no numeric(10,0)not null,email varchar(30),gender varchar(6),password varchar(30))") or die("la");





pg_query("create table bookauto1(contact numeric(10,0) references custregister(mobile_no) on delete cascade on update cascade,pickdate date,from_loc text,to_loc text,no_of_seats int,Batch_no varchar(15
) references driver(batch_no) on delete cascade on update cascade,time time);")or die("Mela");
echo "Jagla";
*/?>
