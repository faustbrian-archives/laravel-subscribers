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

namespace KodeKeep\Subscribers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Config;

class Subscriber extends Model
{
    protected $fillable = ['email'];

    public function subscribable(): MorphTo
    {
        return $this->morphTo();
    }

    public static function findByMail(string $email): self
    {
        return static::where('email', $email)->firstOrFail();
    }

    public function getTable(): string
    {
        return Config::get('subscribers.tables.subscribers');
    }
}
