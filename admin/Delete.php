<?php
require_once "../classes/crud_produit.php";
$crud = new Crud_produit();
$id = $_GET['id'];
$res = $crud->delete($id);
if ($res) {
    header("location:all.php");
    exit;
} else
    echo "pb de suppression!!!";
