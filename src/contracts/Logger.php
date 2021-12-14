<?php

namespace Contracts;

interface Logger
{
    public function log(string $text): void;

    public function toString(): string;

    public function save(string $text): void;

}