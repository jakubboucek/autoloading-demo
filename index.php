<?php

function autoload(string $className): void
{
    if (str_starts_with($className, 'App\\')) {
        $file = str_replace(['App\\', '\\'], [__DIR__ . '/app/', '/'], $className) . '.php';
        if(is_file($file)) {
            require $file;
        }
    }
}

spl_autoload_register('autoload');

\App\Trida::test();
\App\Model\Driver::test();
