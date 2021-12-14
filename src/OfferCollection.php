<?php

namespace App;

use Contracts\OfferCollectionInterface;
use Contracts\OfferInterface;
use Iterator;

class OfferCollection implements OfferCollectionInterface
{
    private array $collection = [];

    public function add(OfferInterface $offer): void
    {
        $this->collection[] = $offer;
    }

    public function get(int $index): OfferInterface
    {
        return $this->collection[0];
    }
}