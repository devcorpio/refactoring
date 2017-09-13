<?php

class Currency {
    /**
     * @var string
     */
    private $code;

    private function __construct(string $code) {
        $this->code = $code;
    }

    public function getCode(): string {
        return $this->code;
    }

    public function get(string $code): self {
        return new self($code);
    }

    public function equals(self $arg): bool {
        return $this->code === $arg->code;
    }
}