<?php

class Utilisateur implements interfaceUtilisateur
{
    private string $name;

    public function __construct($nom)
    {
        $this->name = $nom;
    }

    public function __get($arg)
    {
        echo "la propriété $arg n'existe pas";
    }
    // public function __isset($name){
    //     return isset($this->$arg);
    //  }

    public function __toString()
    {
        return "Vous tentez d'afficher un objet";
    }

    public function __clone()
    {
        //invoqué lors de l'utilisateur du clonage d'objet
    }

    // {
    //     echo "la propriété $arg n'existe pas";
    // }

    public function __invoke($argument)
    {
        echo "vous tentez d'utiliser un objet comme fonction avec pour argument $argument";
    }


    public function __set($propriete, $valeur)
    {
        echo "Vous essayer de mettre la valeur $valeur à la propriété $propriete";
    }

    public function __call($methode, $arguments)
    {
        echo "La méthode $methode n'est pas accessible";
        echo "Les arguments passées sont " . implode(' / ', $arguments);
    }


    public static function  __callStatic($name, $arguments)
    {
        // Même chose que __call()  dans un contexte d'appel de méthode statique
    }

    public function inscrireUtilisateur()
    {
    }

    public function modifierUtilisateur()
    {
    }

    public function supprimerUtilisateur()
    {
    }

    public function connecterUtilisateur()
    {
    }

    public function deconnecterUtilisateur()
    {
    }
}
