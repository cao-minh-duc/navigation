<?php
namespace UiBuilder\Navigation\Data;

class Logo 
{
    public string $src;

    public function __construct(string $src)
    {
        $this->setSrc($src);
    }

    /**
     * Get the value of src
     */ 
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * Set the value of src
     *
     * @return  self
     */ 
    public function setSrc($src): self
    {
        $this->src = $src;

        return $this;
    }
}