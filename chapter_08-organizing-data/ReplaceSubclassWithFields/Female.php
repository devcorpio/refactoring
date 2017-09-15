<?php

class Female extends Person
{
    public function isMale(): bool {
        return false;
    }

    public function getCode(): string {
        return 'F';
    }
}