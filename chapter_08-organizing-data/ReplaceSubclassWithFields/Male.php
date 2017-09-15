<?php

class Male extends Person
{
    public function isMale(): bool {
        return true;
    }

    public function getCode(): string {
        return 'M';
    }
}