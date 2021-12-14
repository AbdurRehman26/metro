<?php

namespace Contracts;

interface OfferInterface
{
    public function setOfferId(int $id): void;
    public function getOfferId(): int;

    public function setProductTitle(string $title): void;
    public function getProductTitle(): string;

    public function setVendorId(int $id): void;
    public function getVendorId(): int;

    public function setPrice(float $value): void;
    public function getPrice(): float;

}