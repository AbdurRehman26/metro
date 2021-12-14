<?php

namespace App;

use Contracts\ReaderInterface;
use Contracts\OfferCollectionInterface;
use Models\Offer;

class JsonReader implements ReaderInterface
{
    public function read(string $input): OfferCollectionInterface
    {
        $offerCollection = new OfferCollection();

        foreach (json_decode($input, true) as $value){
            $offer = new Offer();
            $offer->setOfferId($value['offerId']);
            $offer->setProductTitle($value['productTitle']);
            $offer->setVendorId($value['vendorId']);
            $offer->setPrice($value['price']);
            $offerCollection->add($offer);
        }

        return $offerCollection;
    }
}