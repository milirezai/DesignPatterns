<?php
namespace Creational\builder;

interface QueryBuilder
{
    public function select(string $table , array $fields):queryBuilder;
    public function where(string $field , string $value , string $operator = "="):queryBuilder;
    public function delete(string $table):queryBuilder;
    public function update(string $table , array $fields):queryBuilder;
    public function insert(string $table , array $fields):queryBuilder;
    public function getQuery():string;
}