<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Model;

use Macademy\Jumpstart\Api\CategoryInterface;

class Category implements CategoryInterface
{
    protected $name;

    public function getName()
    {
        return $this->category->getName();
    }
}