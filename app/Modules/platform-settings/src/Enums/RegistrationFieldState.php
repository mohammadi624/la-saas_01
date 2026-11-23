<?php

namespace Saas\PlatformConfig\Enums;

enum RegistrationFieldState: string
{
    case REQUIRED = 'required';
    case OPTIONAL = 'optional';
    case HIDDEN = 'hidden';
}
