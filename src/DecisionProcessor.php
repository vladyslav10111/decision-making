<?php

namespace Vladyslav10111\DecisionMaking;

class DecisionProcessor
{
    private array $options = [];

    public function processInput(string $input): void
    {
        $this->options = array_map('trim', explode(',', $input));
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
