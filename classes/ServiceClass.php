<?php

class ServiceClass
{
    public static $serviceTypes = [
        'Private Standard Car' => 'PE',
        'VIP Service' => 'VIP',
        'Sport Utility Vehicle' => 'SUV',
        'Luxury Car' => 'LX',
        'Shuttle' => 'SH',
        'Minivan' => 'MV',
        'Extra Large' => 'XL',
        'Economy Class' => 'EC',
        'Business Class' => 'BC',
        'Transfer Service' => 'TR',
        'Medium car' => 'MC',
        'Private car' => 'PC',
        'Unescorted van' => 'UV'
    ];

    public static function getServiceCode($serviceName)
    {
        return self::$serviceTypes[$serviceName] ?? "";
    }
}
