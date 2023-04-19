<?php

namespace ForMage\Learning\Model\Product;

class Shirt
{
    protected $typeText;
    protected $typeNumber;
    protected $typeArray = [];
    protected $typeInitParameter;

    const MY_CONSTANT = 'MY CUSTOM CONSTANT';

    public function __construct(
        $typeText = 'my custom string',
        $typeNumber = 2023,
        $typeArray = ['customName' => 'Jonas Hcr', 'customColor' => 'Red'],
        $typeInitParameter = self::MY_CONSTANT
    ) {
        $this->typeText = $typeText;
        $this->typeNumber = $typeNumber;
        $this->typeArray = $typeArray;
        $this->typeInitParameter = $typeInitParameter;
    }
}
