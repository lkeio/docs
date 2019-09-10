<?php

namespace Educasoftware\Docs\Controller;

use Lkeio\Bases\View;

class DocsController
{
    public function index()
    {

        return View::make('docs', []);
    }
}