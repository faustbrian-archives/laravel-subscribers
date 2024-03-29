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

use Konceiver\Subscribers\Models\Subscriber;

return [

    'models' => [

        'subscriber' => Subscriber::class,

    ],

    'tables' => [

        'subscribers' => 'subscribers',

    ],

];
