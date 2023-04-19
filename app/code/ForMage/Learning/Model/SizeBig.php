<?php

namespace ForMage\Learning\Model;

class SizeBig implements \ForMage\Learning\Api\SizeInterface
{

    public function getSize(): string
    {
        return "Big";
    }
}
