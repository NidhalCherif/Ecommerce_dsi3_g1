<?php
ob_start();
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class=form-control>
    <label for="">Libellé</label><input type="text" name="lib" id="" class=form-control></br>
    <label for="">Prix</label><input type="text" name="pu" id="" class=form-control></br>
    <label for="">Quantité</label><input type="text" name="qte" id="" class=form-control></br>
    <label for="">Description</label><textarea name="des" id="" class=form-control></textarea></br>
    <label for="">Image</label><input type="text" name="img" id="" class=form-control></br>
    <label for="">En Promo</label><input type="text" name="pro" value="0" id="" class=form-control></br>
    <input type="submit" value="Ajouter" name="ok" class="btn btn-success btn-lg">
</form>
<?php
if (isset($_POST['ok'])) {
    require_once "../classes/crud_produit.php";
    $crud = new Crud_produit();
    //$produit=new Produit();
    //$res = $crud->add($produit);



    if ($res) {
        echo "insertion réussite";
    } else "pb d'insertion!!!";
}
$contenu = ob_get_clean();
$titre = "Ajout d'un produit";
include "layout.php";

?>