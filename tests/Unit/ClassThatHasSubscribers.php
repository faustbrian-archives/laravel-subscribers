<?php

declare(strict_types=1);

/*
 * This file is part of kodekeep/laravel-subscribers.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Subscribers\Tests\Unit;

use Illuminate\Foundation\Auth\User;
use KodeKeep\Subscribers\Concerns\HasSubscribers;

class ClassThatHasSubscribers extends User
{
    use HasSubscribers;

    public $table = 'users';

    public $guarded = [];
}
