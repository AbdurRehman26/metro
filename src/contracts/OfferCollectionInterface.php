<?php

namespace Contracts;

interface OfferCollectionInterface
{
    public function get(int $index): OfferInterface;
}