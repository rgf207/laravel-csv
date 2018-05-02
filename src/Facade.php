<?php

namespace onethirtyone\csv;

class Facade extends \Illuminate\Support\Facades\Facade {

    public static function getFacadeAccessor()
    {
        return 'csv';
    }
}