<?php

namespace Educasoftware\Docs;

use Symfony\Component\Finder\Finder;

class Reader
{
    public static function read($filePath, $filename)
    {
        $finder = new Finder();
        $finder->in($filePath);
        $finder->files()->name($filename);
        
        foreach ($finder as $key => $file) {
            $contents = $file->getContents();
        }

        return $contents;
    }
}