<?php

final class SkinRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM student');

        return $data->fetchAll(PDO::FETCH_CLASS, Skin::class);
    }
}