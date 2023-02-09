<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: concordium_p2p_rpc.proto

namespace Concordium\PeerStatsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>concordium.PeerStatsResponse.PeerStats</code>
 */
class PeerStats extends \Google\Protobuf\Internal\Message
{
    /**
     * The node id.
     *
     * Generated from protobuf field <code>string node_id = 1;</code>
     */
    private $node_id = '';
    /**
     * The number of messages sent to the peer.
     *
     * Generated from protobuf field <code>uint64 packets_sent = 2 [jstype = JS_STRING];</code>
     */
    private $packets_sent = 0;
    /**
     * The number of messages received from the peer.
     *
     * Generated from protobuf field <code>uint64 packets_received = 3 [jstype = JS_STRING];</code>
     */
    private $packets_received = 0;
    /**
     * The connection latency (i.e., ping time) in milliseconds.
     *
     * Generated from protobuf field <code>uint64 latency = 4 [jstype = JS_STRING];</code>
     */
    private $latency = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_id
     *           The node id.
     *     @type int|string $packets_sent
     *           The number of messages sent to the peer.
     *     @type int|string $packets_received
     *           The number of messages received from the peer.
     *     @type int|string $latency
     *           The connection latency (i.e., ping time) in milliseconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ConcordiumP2PRpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The node id.
     *
     * Generated from protobuf field <code>string node_id = 1;</code>
     * @return string
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * The node id.
     *
     * Generated from protobuf field <code>string node_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_id = $var;

        return $this;
    }

    /**
     * The number of messages sent to the peer.
     *
     * Generated from protobuf field <code>uint64 packets_sent = 2 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getPacketsSent()
    {
        return $this->packets_sent;
    }

    /**
     * The number of messages sent to the peer.
     *
     * Generated from protobuf field <code>uint64 packets_sent = 2 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPacketsSent($var)
    {
        GPBUtil::checkUint64($var);
        $this->packets_sent = $var;

        return $this;
    }

    /**
     * The number of messages received from the peer.
     *
     * Generated from protobuf field <code>uint64 packets_received = 3 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getPacketsReceived()
    {
        return $this->packets_received;
    }

    /**
     * The number of messages received from the peer.
     *
     * Generated from protobuf field <code>uint64 packets_received = 3 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPacketsReceived($var)
    {
        GPBUtil::checkUint64($var);
        $this->packets_received = $var;

        return $this;
    }

    /**
     * The connection latency (i.e., ping time) in milliseconds.
     *
     * Generated from protobuf field <code>uint64 latency = 4 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getLatency()
    {
        return $this->latency;
    }

    /**
     * The connection latency (i.e., ping time) in milliseconds.
     *
     * Generated from protobuf field <code>uint64 latency = 4 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLatency($var)
    {
        GPBUtil::checkUint64($var);
        $this->latency = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PeerStats::class, \Concordium\PeerStatsResponse_PeerStats::class);
