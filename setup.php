<?php

require "config.php";

$db->query("drop table Users");
$db->query("drop table Payment");

$db->query("create table Users (email char(255) UNIQUE NOT NULL, firstName char(255) NOT NULL, lastName char(255) NOT NULL, address char(255) NOT NULL, city char(255) NOT NULL, state char(255) NOT NULL, zipCode int NOT NULL, PRIMARY KEY (email))") or die ("users ".$db->error);
$db->query("create table Payment (email char(255) NOT NULL, card_num int NOT NULL, exp_month int NOT NULL, exp_year int NOT NULL, cvv int NOT NULL, FOREIGN KEY (email) REFERENCES Users(email))") or die ("users ".$db->error);

