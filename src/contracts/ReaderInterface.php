<?php

namespace Contracts;

interface ReaderInterface
{
    public function read(string $input): OfferCollectionInterface;
}