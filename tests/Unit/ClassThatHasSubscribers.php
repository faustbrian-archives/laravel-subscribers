<?php

declare(strict_types=1);

/*
 * This file is part of konceiver/laravel-subscribers.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Subscribers\Tests\Unit;

use Illuminate\Foundation\Auth\User;
use Konceiver\Subscribers\Concerns\HasSubscribers;

class ClassThatHasSubscribers extends User
{
    use HasSubscribers;

    public $table = 'users';

    public $guarded = [];
}
