<?php
namespace UiBuilder\Navigation\Factories;

use Illuminate\Support\Str;
use UiBuilder\Navigation\Data\Logo;
use UiBuilder\Navigation\Adapters\ConfigAdapter;

class LogoFactory
{
    protected ConfigAdapter $config;

    public function __construct(ConfigAdapter $config)
    {
        $this->config = $config;
    }

    public function get(): Logo
    {
        $src = $this->getSrc();

        return new Logo($src);
    }

    protected function getSrc(): string
    {
        $src = $this->config->getLogo();

        $isSrc = Str::startsWith($src,'http');

        if(!$isSrc)
        {
            $src = asset($src);
        }
        
        return $src;
    }
}