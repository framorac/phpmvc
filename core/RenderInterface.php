<?php declare(strict_types = 1);

namespace Core;

interface RenderInterface
{
    public function render($template, $data = []) : string;
}