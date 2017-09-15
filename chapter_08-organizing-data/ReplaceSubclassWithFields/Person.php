<?php

abstract class Person
{
    abstract public function isMale(): bool;
    abstract public function getCode(): string;
}