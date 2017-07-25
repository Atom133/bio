<?php
require 'header.html';
$rate = $_POST['rate'];
$id = $_POST['id'];
$sql = "UPDATE produits SET rate = rate + $rate WHERE id_prod=$id";
$sql1 = "UPDATE produits SET total = total + 1 WHERE id_prod=$id";

$db->update($sql);
$db->update($sql1);