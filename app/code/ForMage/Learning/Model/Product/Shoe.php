<?php

namespace ForMage\Learning\Model\Product;

use ForMage\Learning\Api\ColorInterface;
use ForMage\Learning\Api\SizeInterface;

class Shoe
{
    protected $size;
    protected $color;

    public function __construct(
        ColorInterface $color,
        SizeInterface $size
    ) {
        $this->size = $size;
        $this->color = $color;
    }

    public function getShoe(): string
    {
        return "My shirt is {$this->color->getColor()} and its size is {$this->size->getSize()}";
    }
}
