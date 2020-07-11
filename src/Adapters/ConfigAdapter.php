<?php
namespace UiBuilder\Navigation\Adapters;

use Illuminate\Support\Collection;

class ConfigAdapter
{
    protected Collection $features;

    protected string $logo = '';

    public function __construct()
    {
        $this->setFeatures(
            collect(config('navigation.features'))
        );

        $this->setLogo(
            config('navigation.logo') ?? ''
        );
    }

    /**
     * Get the value of features
     */ 
    public function getFeatures(): Collection
    {
        return $this->features;
    }

    /**
     * Set the value of features
     *
     * @return  self
     */ 
    public function setFeatures(Collection $features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Get the value of logo
     */ 
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }
}