<?php
/* ====     la classe parent  ===   */

abstract class Produit
{
    protected $nom;
    protected $prixHT;

    // Constructeur initialisant le nom et le prix hors taxe
    public function __construct($nom, $prixHT)
    {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
    }
// Méthode abstraite pour calculer le prix TTC
    abstract public function calculerPrixTTC();

    public function afficherDetails()
    {
        echo "Produit: " . $this->nom . ", Prix HT: " . $this->prixHT . "€\n";
    }

    public function getFraisDePort()
    {
        return 0;
    }
}
/*====     les classes enfants  ===   */


// classe Livre héritant de Produit
class Livre extends Produit
{
    public function calculerPrixTTC()
    {
        echo $this->prixHT * 1.05;
    }
}
// Classe Ebook héritant de Produit
class Ebook extends Produit
{
    public function calculerPrixTTC()
    {
        echo $this->prixHT * 1.20;
    }
}
// Classe Musique héritant de Produit
class Musique extends Produit
{
    public function calculerPrixTTC()
    {
        echo $this->prixHT * 1.20;
    }
}

// Classe Film héritant de Produit
class Film extends Produit
{
    public function calculerPrixTTC()
    {
        echo $this->prixHT * 1.20;
    }
}


// Instance des produits et appel des fonctions de calcul et d'affichage
$livre = new Livre("Collectors de Tintin en voyage", 25);
$ebook = new Ebook("Encyclopédie de la musique", 8);
$musique = new Musique("Groove", 15);
$film = new Film("Les misérables", 20);
echo "<pre>";

// Affichage des détails des produits
$livre->afficherDetails();
$ebook->afficherDetails();
$musique->afficherDetails();
$film->afficherDetails();

// Calcul des prix TTC et affichage
    echo "Prix TTC du livre: ";$livre->calculerPrixTTC();
    echo "\nPrix TTC de l'ebook: ";$ebook->calculerPrixTTC();
    echo "\nPrix TTC de la musique: ";$musique->calculerPrixTTC();
    echo "\nPrix TTC du film: ";$film->calculerPrixTTC();
echo "</pre>";
?>