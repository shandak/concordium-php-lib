<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: concordium_p2p_rpc.proto

namespace Concordium;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response in binary format.
 * The encoding of the data is dependent on the endpoint.
 *
 * Generated from protobuf message <code>concordium.BytesResponse</code>
 */
class BytesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes value = 1;</code>
     */
    private $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ConcordiumP2PRpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bytes value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

}
