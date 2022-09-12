<?php

namespace App\Enums;

use Closure;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self lead()
 * @method static self appointed()
 * @method static self notAppointed()
 * @method static self waiting()
 * @method static self toRevise()
 */
final class ProjectStatusEnum extends Enum
{
    protected static function labels(): Closure
    {
        return fn (string $name) => str_replace('_', ' ', \Str::snake($name));
    }
}
