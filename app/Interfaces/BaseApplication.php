<?php

namespace App;

use Illuminate\Foundation\Application as LaravelApplication;

class BaseApplication extends LaravelApplication
{
    protected $namespace = 'App\\Interfaces';

    public function path($path = ''){
        return $this->basePath.DIRECTORY_SEPARATOR.'app/Interfaces'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
