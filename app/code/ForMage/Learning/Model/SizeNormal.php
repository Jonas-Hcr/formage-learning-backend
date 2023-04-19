<?php

namespace ForMage\Learning\Model;

class SizeNormal implements \ForMage\Learning\Api\SizeInterface
{

    public function getSize(): string
    {
        return "Normal";
    }
}
