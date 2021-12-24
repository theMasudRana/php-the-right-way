<?php
declare(strict_types=1);

/**
 *
 */
class Transaction
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function add_tax(float $rate)
    {
        $this->amount += $this->amount * $rate / 100;
    }

    public function apply_discount(float $rate)
    {
        $this->amount -= $this->amount * $rate / 100;
    }

    public function get_amount(): float
    {
        return $this->amount;
    }

    public function get_description(): string
    {
        return $this->description;
    }
}