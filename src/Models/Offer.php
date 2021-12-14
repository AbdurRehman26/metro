<?php

namespace Models;

use Contracts\OfferInterface;


class Offer implements OfferInterface
{
    private int $offerId, $vendorId;
    private string $productTitle;
    private float $price;

    public function setOfferId(int $id): void
    {
        $this->offerId = $id;
    }

    public function getOfferId(): int
    {
        return $this->offerId;
    }

    public function setProductTitle(string $title): void
    {
        $this->productTitle = $title;
    }

    public function getProductTitle(): string
    {
        return $this->productTitle;
    }

    public function setVendorId(int $id): void
    {
        $this->vendorId = $id;
    }

    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    public function setPrice(float $value): void
    {
        $this->price = $value;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}