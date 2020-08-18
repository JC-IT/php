<?php

namespace PubNub\Models\Consumer\PubSub;


class PNPresenceEventResult
{
    /** @var  String */
    private $event;

    /** @var  String */
    private $uuid;

    /** @var  Int */
    private $timestamp;

    /** @var  Int */
    private $occupancy;

    /** @var  String */
    private $state;

    private $channel;

    private $subscription;

    private $timetoken;

    private $userMetadata;

    function __construct($event, $uuid, $timestamp, $occupancy, $subscription, $channel, $timetoken, $state,
                         $userMetadata = null)
    {
        $this->event = $event;
        $this->uuid = $uuid;
        $this->timestamp = $timestamp;
        $this->occupancy = $occupancy;
        $this->subscription = $subscription;
        $this->channel = $channel;
        $this->timetoken = $timetoken;
        $this->state = $state;
        $this->userMetadata = $userMetadata;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @return String
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return String
     */
    public function getUuid()
    {
        return $this->uuid;
    }
}