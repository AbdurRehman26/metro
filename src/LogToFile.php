<?php

namespace App;

use Contracts\Logger;

class LogToFile implements Logger
{
    private array $logs = [];
    private string $fileName;

    public function __construct(string $fileName='log_'.new DateTime()){
        $this->fileName = $fileName;
    }

    public function log(string $text): void
    {
        $this->logs[] = $text;
    }

    public function toString($dimiliter=", "): string
    {
        return implode($this->logs, $dimiliter);
    }

    public function save(string $text): void
    {
        $fp = fopen($this->fileName,"w");
        fwrite($fp,$this->toString("\n"));
        fclose($fp);
    }
}