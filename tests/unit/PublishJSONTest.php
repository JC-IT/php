<?php

use Pubnub\Pubnub;


class PublishJSONTest extends TestCase {

    protected $pubnub_enc;
    protected static $messagea = ['Hello from publishString() ', 'test'];
    protected static $channel = 'pubnub_php_test';

    public function testPublishJSON()
    {
        $response = $this->pubnub->publish(array(
            'channel' => static::$channel,
            'message' => static::$messagea
        ));

        $this->assertEquals(1, $response[0]);
        $this->assertEquals('Sent', $response[1]);
        $this->assertGreaterThan(1400688897 * 10000000, $response[2]);
    }
}
 