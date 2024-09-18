<?php

declare(strict_types=1);

namespace Fangx\Dumper;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                    'collectors' => [
                    ],
                ],
            ],
            'publish' => [
                //                [
                //                    'id' => 'config',
                //                    'description' => 'The config for hyperf component.',
                //                    'source' => __DIR__ . '/../publish/config.php',
                //                    'destination' => BASE_PATH . '/config/autoload/package-name.php',
                //                ],
            ],
        ];
    }
}
