<?php

namespace App\model\Repository;
use App\Db\Mysql; 

/**
 * Classe "parent" permettant aux repos de faire appel au singleton Mysql pour utiliser sa méthode getPDO()
 */
class Repository
{
    protected \PDO $pdo;

    public function __construct()
    {
        $mysql = Mysql::getInstance();
        $this->pdo = $mysql->getPDO();
    }
}