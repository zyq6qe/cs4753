<?php

require "config.php";

$db->query("drop table Users");
$db->query("drop table Payment");

$db->query("create table Users (email char(255) primary key, password char(255) not null, firstName char(255) not null, lastName char(255) not null, address char(255) not null, city char(255) not null, state char(255) not null, zipCode int not null)") or die ($db->error);
$db->query("create table Payment (email char(255), card_num int not null, exp_month int not null, exp_year int not null, cvv int not null, foreign key(email) references Users(email))") or die ($db->error);




