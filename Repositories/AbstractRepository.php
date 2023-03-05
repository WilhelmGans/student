<?php

abstract class AbstractRepository
{
    abstract public function getTable();

    abstract public function getClass();

    public function save(AbstractModel $model)
    {

    }
}
