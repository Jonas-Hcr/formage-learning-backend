<?php

namespace ForMage\Learning\Controller\Index;

use ForMage\Learning\Api\ColorInterface;
use ForMage\Learning\Api\SizeInterface;
//use Magento\Framework\App\Action\Context;
use ForMage\Learning\Model\Product\Shoe;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    protected $size;
    protected $color;
    protected $pageFactory;
    protected Shoe $product;

    public function __construct(
        SizeInterface $size,
        ColorInterface $color,
        PageFactory $pageFactory,
        Shoe $product
    ) {
        $this->size = $size;
        $this->color = $color;
        $this->pageFactory = $pageFactory;
        $this->product = $product;
    }

    public function execute()
    {
        echo $this->product->getShoe();

        return $this->pageFactory->create();
    }
}
