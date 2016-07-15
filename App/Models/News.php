<?php

namespace App\Models;

use App\AModel;
use App\Db;
use App\Exceptions\Multi;

class News extends AModel
{
    const TABLE= 'news';

    public $title;
    public $text;
    public $user_id;

    public function __get($name)
    {
        switch ($name) {
            case 'user':
                return User::findById($this->user_id);
            default:
                return null;
        }
    }

    public function __isset($name)
    {
        switch ($name) {
            case 'user':
                return !empty($this->user_id);
            default:
                return false;
        }
    }

    public function fill($data = [] )
    {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
        $e = new Multi();

        if (empty($this->title)) {
            $e[] = new \Exception('Заголовок неверный');
        }
        if (empty($this->text)) {
            $e[] = new \Exception('Текст неверный');
        }
        if (0 != count($e)) {
            throw $e;
        }
    }

    /**
     * Test Generator
     * @return \Generator
     * @throws \App\Exceptions\Db
     */
    public static function findAllGenerator()
    {
        $db = new Db();
        return $db->fetchEach('SELECT * FROM ' . static::TABLE);
    }
}