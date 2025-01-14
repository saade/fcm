<?php

namespace NotificationChannels\Fcm\Test;

use Illuminate\Contracts\Events\Dispatcher;
use Mockery;
use NotificationChannels\Fcm\FcmChannel;
use PHPUnit\Framework\TestCase;

class FcmChannelTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $events = Mockery::mock(Dispatcher::class);

        $channel = new FcmChannel($events);

        $this->assertInstanceOf(FcmChannel::class, $channel);
    }
}
