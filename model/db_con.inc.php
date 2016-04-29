<?php
$dbh = new PDO("mysql:dbname=e-learning;host=localhost","root","1150") or die(print $con->errorInfo());
$dbh->query("SET NAMES UTF8");
