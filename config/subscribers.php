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

use KodeKeep\Subscribers\Models\Subscriber;

return [

    'models' => [

        'subscriber' => Subscriber::class,

    ],

    'tables' => [

        'subscribers' => 'subscribers',

    ],

];
