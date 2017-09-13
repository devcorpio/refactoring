<?php

class Performance {
    private $name;
    private $wins;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $arg): void {
        $this->name = $arg;
    }

    public function getWins(): int {
        return $this->wins;
    }

    public function setWins(int $arg): void {
        $this->wins = $arg;
    }
}

$row = new Performance();
$row->setName('Liverpool');
$row->setWins(15);

$name = $row->getName();
$wins = $row->getWins();