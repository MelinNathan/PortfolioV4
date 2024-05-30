<?php

class PdoPortfolio
{

    private static $server = 'mysql:dbname=portfoliov4;host=localhost';
    private static $user = 'root';
    private static $mdp = '';
    private static $myPdo;
    private static $mypdo = null;







    private function __construct()
    {
        PdoPortfolio::$myPdo = new PDO(PdoPortfolio::$server,PdoPortfolio::$user,PdoPortfolio::$mdp);
        PdoPortfolio::$myPdo->query("SET CHARACTER SET utf8");
    }
    public function _destruct()
    {
        PdoPortfolio::$myPdo = null;
    }

    public static function getPdoPortfolio()
    {
        if (PdoPortfolio::$mypdo == null) {
            PdoPortfolio::$mypdo = new PdoPortfolio();
        }
        return PdoPortfolio::$mypdo;
    }

    /**
     * Retourne toutes les informations sous forme d'un tableau associatif
     *
     * @return array  tableau associatif des catégories 
     */
    public function getPendingApprentissage()
    {
        $req = "SELECT * from apprentissage WHERE encours = 1";
        $res = PdoPortfolio::$myPdo->query($req);
        $someLines = $res->fetchAll();
        return $someLines;
    }


    /**
     * Ajoute une ligne dans la table usermakeo
     *
     * 
     */
    public function newPendingApprentissage($libelle, $raison, $encours)
    {

        $req = "INSERT INTO `apprentissage` (`libelle`, `raison`, `encours`) VALUES (:libelle, :raison, :encours);";
        $res = PdoPortfolio::$myPdo->prepare($req);
        $res->bindParam(":libelle", $libelle, PDO::PARAM_STR);
        $res->bindParam(":raison", $raison, PDO::PARAM_STR);
        $res->bindParam(":encours", $encours, PDO::PARAM_STR);
        $res->execute();
    }

}


?>