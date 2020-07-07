<?php declare(strict_types = 1);

namespace Core;

use League\Plates\Engine;
use Core\RenderInterface;

class PlatesRenderer implements RenderInterface {
    private $engine;

    public function __construct(Engine $engine){
        $this->engine = $engine;
    }

    public function render($template, $data = []) : string
    {
        return $this->engine->render($template, $data);
    }
}