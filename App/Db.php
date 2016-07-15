<?php

namespace App;

class Db
{
    protected $dbh;

    function __construct()
    {
        $config = Config::instance();

        $driver = $config->data['db']['default']['driver'];
        $host = $config->data['db']['default']['host'];
        $name = $config->data['db']['default']['dbname'];
        $login = $config->data['db']['default']['login'];
        $password = $config->data['db']['default']['password'];

        $sth = $driver . ':host=' . $host . ';dbname=' . $name;

        try {
            $this->dbh = new \PDO($sth, $login, $password);
        } catch (\Exception $e) {
            $db = new \App\Exceptions\Db('Невозможно подключиться к базе данных');
            $db->report();
            throw $db;
        }
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false === $res) {
            throw new \App\Exceptions\Db('Ошибка запроса к бд');
        }
    }

    public function query($sql, $class, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        throw new \App\Exceptions\Db('Ошибка запроса к бд');

    }

    /**
     * Test Generator
     * @param $sql
     * @param array $params
     * @return \Generator
     * @throws Exceptions\Db
     */
    public function fetchEach($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false !== $res) {
            while ($row = $sth->fetch(\PDO::FETCH_OBJ)) {
                yield $row;
            }
        } else {
            throw new \App\Exceptions\Db('Ошибка запроса к бд');
        }
    }
}