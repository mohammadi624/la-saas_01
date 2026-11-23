<?php

namespace Saas\PlatformConfig\Enums;

enum SettingScope: string
{
    case PLATFORM = 'platform';
    case TENANT = 'tenant';
    case SITE = 'site';
    case USER = 'user';
}
