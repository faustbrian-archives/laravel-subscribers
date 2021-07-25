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

namespace Konceiver\Subscribers\Tests\Unit\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Konceiver\Subscribers\Tests\TestCase;

/**
 * @covers \Konceiver\Subscribers\Concerns\HasSubscribers
 */
class HasSubscribersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function morphs_to_a_subscriberable(): void
    {
        $user = $this->user();

        $user->subscribers()->create([
            'email' => $this->faker->email,
        ]);

        $this->assertInstanceOf(MorphMany::class, $user->subscribers());
        $this->assertInstanceOf(Collection::class, $user->subscribers);
    }
}
