<?php

declare(strict_types=1);

namespace MyComponent;

use Keboola\Component\Config\BaseConfig;

class Config extends BaseConfig
{
    // @todo implement your custom getters
    public function getToken(): string
    {
        return $this->getValue(['parameters', 'token']);
    }
}
