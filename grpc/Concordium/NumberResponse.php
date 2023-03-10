<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: concordium_p2p_rpc.proto

namespace Concordium;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A numeric response.
 *
 * Generated from protobuf message <code>concordium.NumberResponse</code>
 */
class NumberResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 value = 1 [jstype = JS_STRING];</code>
     */
    private $value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ConcordiumP2PRpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 value = 1 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>uint64 value = 1 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkUint64($var);
        $this->value = $var;

        return $this;
    }

}

