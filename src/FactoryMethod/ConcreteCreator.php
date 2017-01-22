<?php

namespace SON\FactoryMethod;

class ConcreteCreator implements CreatorInterface
{
    public function factoryMethod(ProductInterface $product): ProductInterface
    {
        $product->setDirectory('images');
        return $product;
    }
}
