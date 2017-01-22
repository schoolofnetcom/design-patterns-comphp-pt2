<?php

namespace SON\Builder;

class PostgresBuilder implements BuilderInterface
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
        $this->query_builder->query = Product::POSTGRES_QUERY;
    }

    public function getResult(): Product
    {
        return $this->query_builder;
    }
}
