<?php

namespace Saas\PlatformConfig\Enums;

enum SettingType: string
{
    case STRING = 'string';
    case INTEGER = 'integer';
    case FLOAT = 'float';
    case DECIMAL = 'decimal';
    case BOOLEAN = 'boolean';
    case JSON = 'json';
}
