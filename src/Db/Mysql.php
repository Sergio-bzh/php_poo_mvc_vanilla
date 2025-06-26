<?php

namespace App\Db;

/**
 * Cette classe est un singleton permettant d'interagir avec le SGDBR
 */
class Mysql
{
    /**
     * Liste des paramètres venant du fichier d'environnement (.env.local)
     * à passer au constructeur lors de l'instanciation l'objet PDO
    */
    private string $dbHostname;
    private string $dbName;
    private string $dbPort;
    private string $dbUsername;
    private string $dbPassword;
     
    private ?\PDO $pdo = null;
    private static ?self $_instance = null; // Propriété privée permettant de contenir l'instance dans la classe

    private function __construct()
    {
        // La méthode parse_ini_file() converti le fichier passé (ici la constante APP_ENV) en tableau
        $dbConf = parse_ini_file(APP_ROOT . '/' . APP_ENV );

        // echo('<pre>');
        // var_dump($dbConf);
        // echo('</pre>');
        // die();
        // var_dump($dbConf['db_user']);
        // die();

        $this->dbHostname = $dbConf['db_host'];
        $this->dbName = $dbConf['db_name'];
        $this->dbPort = $dbConf['db_port'];
        $this->dbUsername = $dbConf['db_user'];
        $this->dbPassword = $dbConf['db_password'];
    }

    // Méthode permettant d'appeler l'instance depuis l'extérieur pour interagir avec la BDD
    public static function getInstance(): self
    {
        if(is_null(self::$_instance)){
            return self::$_instance = new Mysql();
        }
        return self::$_instance;
    }

    public function getPDO():\PDO
    {
        if(is_null($this->pdo))
        {
            $this->pdo = new \PDO("mysql:host={$this->dbHostname}:{$this->dbPort};dbname={$this->dbName};charset=utf8",$this->dbUsername,$this->dbPassword);
        }
        return $this->pdo;
    }
}