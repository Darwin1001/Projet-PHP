<?php
include_once('bdd.php');

class UsersModel
{

    private $bdd;

    public function __construct()
    {
        $this->bdd=Bdd::connexion();
    }

    public function getUsers()
    {
        return $this->bdd->query("SELECT * FROM utilisateur")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getUserByEmail($email)
    {
        return $this->bdd->query("SELECT * FROM utilisateur WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);

    }

    public function setUser($nom,$prenom,$email,$mdp)
    {
        $setUser=$this->bdd->prepare("INSERT INTO utilisateur(nom,prenom,email,mot_de_passe) VALUES(?,?,?,?)");
        return $setUser->execute([$nom,$prenom,$email,$mdp]);
        
    }


}


 