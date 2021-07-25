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

namespace Konceiver\Subscribers\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Konceiver\Subscribers\Models\Subscriber;
use Konceiver\Subscribers\Tests\TestCase;
use Konceiver\Subscribers\Tests\Unit\ClassThatHasSubscribers;

/**
 * @covers \Konceiver\Subscribers\Models\Subscriber
 */
class SubscriberTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_be_found_by_its_email(): void
    {
        $subscriber = $this->createSubscriber();

        $this->assertSame(Subscriber::findByMail($subscriber->email)->id, $subscriber->id);
    }

    private function createSubscriber(): Subscriber
    {
        Model::unguard();

        return Subscriber::create([
            'subscribable_id'   => $this->user()->id,
            'subscribable_type' => ClassThatHasSubscribers::class,
            'email'             => $this->faker->email,
        ]);
    }
}
