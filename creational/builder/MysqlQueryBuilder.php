<?php

namespace Creational\builder;

use Creational\builder\QueryBuilder;

class MysqlQueryBuilder implements QueryBuilder
{

    protected $query;
    public function reset():void
    {
        $this->query= new \stdClass;
    }

    public function select(string $table , array $fields):queryBuilder
    {
        $this->reset();
        $this->query->base= "SELECT ".implode(",",$fields)." FROM "."`$table`";
        $this->query->type= "SELECT";
        return $this;
    }

    public function where(string $field , string $value , string $operator = "="):queryBuilder
    {
        if(!in_array($this->query->type,["SELECT","UPDATE","DELETE"]))
        {
            throw new Exception("Error Processing Request");
        }
        $this->query->where[]="`$field` $operator '$value'";
        return $this;
    }

    public function delete(string $table):queryBuilder
    {
        $this->reset();
        $this->query->base="DELETE FROM "."`$table`";
        $this->query->type="DELETE";
        return $this;
    }

    public function update(string $table , array $fields):queryBuilder
    {
        $this->reset();
        echo "UPDATE `$table` SET ";
        foreach ($fields as $key => $value) {
            if(sizeof($fields) >1){
                echo $key." = "."'$value'".',';
            }else {
                echo $key." = "."'$value'";
            }
        }
        $this->query->type="UPDATE";
        return $this;
    }

    public function insert(string $table , array $fields):queryBuilder
    {
        $this->reset();
        echo "INSERT INTO `$table` SET ";
        foreach ($fields as $key => $value) {
            echo $key." = "."'$value'".",";
        }
        $this->query->type="INSERT";
        return $this;
    }

    public function getQuery():string
    {
        $query=$this->query;
        $sql=$query->base;
        if(!empty($query->where))
        {
            $sql .= " WHERE ".implode(" AND ",$query->where);
        }
        $sql .= ";";
        return $sql;
    }
}