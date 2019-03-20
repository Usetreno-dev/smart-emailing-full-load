<?php

declare(strict_types=1);

namespace MyComponent;

use Keboola\Component\BaseComponent;

class Component extends BaseComponent
{
    public function run(): void
    {
        echo 'ja ';

        /**
         * @var Config $config
         */
        $config = $this->getConfig();
        echo $config->getToken();
    }

    protected function getConfigClass(): string
    {
        return Config::class;
    }

    protected function getConfigDefinitionClass(): string
    {
        return ConfigDefinition::class;
    }
}
