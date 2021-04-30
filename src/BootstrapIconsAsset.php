<?php

declare(strict_types=1);

namespace RazonYang\Yii\Bootstrap\Icons;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

class BootstrapIconsAsset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/bootstrap-icons';

    public array $css = [
        'font/bootstrap-icons.css',
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**.css',
                '**.woff',
                '**.woff2',
            ),
        ];
    }
}
