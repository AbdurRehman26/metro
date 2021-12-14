<?php

namespace App;

use Contracts\OfferCollectionInterface;
use Contracts\OfferInterface;
use Iterator;
use Models\Offer;

class OfferCollection implements OfferCollectionInterface
{
    private array $collection = [];

    public function add(OfferInterface $offer): void
    {
        $this->collection[] = $offer;
    }

    public function get(int $index): OfferInterface
    {
        $key = array_search('123', array_column($this->collection, 'offerId'));

        return $this->collection[$key];
    }
}