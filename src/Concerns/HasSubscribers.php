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

namespace KodeKeep\Subscribers\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;

trait HasSubscribers
{
    public function subscribers(): MorphMany
    {
        return $this->morphMany(Config::get('subscribers.models.subscriber'), 'subscribable');
    }

    public function addSubscriber(string $email): void
    {
        $this->subscribers()->updateOrCreate(compact('email'));
    }

    public function removeSubscriber(string $email): void
    {
        $subscriber = $this->subscribers()->where(compact('email'))->firstOrFail();

        if ($subscriber) {
            $subscriber->delete();
        }
    }
}
