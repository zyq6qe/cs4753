<?php

require "config.php";

$db->query("drop table Users");
$db->query("create table Users (email char(255) primary key, firstName char(255) not null, lastName char(255) not null, address char(255) not null, city char(255) not null, state char(255) not null, zipCode int not null)") or die ("users ".$db->error);