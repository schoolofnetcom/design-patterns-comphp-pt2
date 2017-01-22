<?php

namespace SON\FactoryMethod;

interface CreatorInterface
{
    public function factoryMethod(ProductInterface $product): ProductInterface;
}
