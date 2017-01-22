<?php

namespace SON\Builder;

class MySqlBuilder implements BuilderInterface
{
    private $query_builder;

    public function __construct()
    {
        $this->query_builder = new Product;
    }

    public function setTable(string $table)
    {
        $this->query_builder->table = $table;
    }

    public function setQuery()
    {
        $this->query_builder->query = Product::MYSQL_QUERY;
    }

    public function getResult(): Product
    {
        return $this->query_builder;
    }
}
