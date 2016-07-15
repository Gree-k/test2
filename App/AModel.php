<?php

namespace App;

abstract class AModel
{
    const TABLE = '';
    public $id;

    public function isNew()
    {
        return empty($this->id);
    }

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $data = $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id = :id', static::class, [':id' => $id]);
        if (!empty($data)) {
            return $data[0];
        }
        return false;
    }

    public function save()
    {
        $this->isNew() ? static::insert() : static::update();
    }

    protected function insert()
    {
        $column = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $column[] = $k;
            $values[':' . $k] = $v;
        }

        $sql='INSERT INTO ' . static::TABLE . '(' . implode(',', $column) . ') VALUES (' . implode(',', array_keys($values)) . ')';
        $db = new Db();
        $db->execute($sql,$values);
        $this->id = $db->lastInsertId();
    }

    protected function update()
    {
        $column = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $column[] = $k . '=:' . $k;
            $values[':' . $k] = $v;
        }

        $sql='UPDATE ' . static::TABLE . ' SET ' . implode(',', $column) . ' WHERE id=' . $this->id;
        $db = new Db();
        $db->execute($sql,$values);
    }

    public function delete()
    {
        $db = new Db();
        $db->execute('DELETE FROM ' . static::TABLE . ' WHERE id=?', [$this->id]);
    }
}