<?php

namespace App\Enums;

use Closure;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self default()
 * @method static self admin()
 * @method static self attendee()
 * @method static self host()
 * @method static self moderator()
 * @method static self staff()
 * @method static self superAdmin()
 */
final class RoleEnum extends Enum
{
    protected static function values(): Closure
    {
        return fn (string $name) => mb_strtolower(implode(' ', (array) preg_split('/(?=[A-Z])/', $name)));
    }
}
