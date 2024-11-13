<?php
class produit
{
    protected $id;

    protected $libelle;

    protected $prix;

    protected $qte;

    protected $des;

    protected $image;

    protected $promo;

    public function __construct($id, $libelle, $prix, $qte, $des, $image, $promo)
    {
        $this->id = $id;

        $this->libelle = $libelle;

        $this->prix = $prix;


        $this->qte = $qte;

        $this->des = $des;

        $this->image = $image;

        $this->promo = $promo;
    }
}
