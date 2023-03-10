<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: concordium_p2p_rpc.proto

namespace Concordium;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for getting information about an account address.
 *
 * Generated from protobuf message <code>concordium.GetAddressInfoRequest</code>
 */
class GetAddressInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Hash of the block (encoded in hex) at which the information should be gathered.
     *
     * Generated from protobuf field <code>string block_hash = 1;</code>
     */
    private $block_hash = '';
    /**
     * The account address to request information about.
     *
     * Generated from protobuf field <code>string address = 2;</code>
     */
    private $address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $block_hash
     *           Hash of the block (encoded in hex) at which the information should be gathered.
     *     @type string $address
     *           The account address to request information about.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ConcordiumP2PRpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Hash of the block (encoded in hex) at which the information should be gathered.
     *
     * Generated from protobuf field <code>string block_hash = 1;</code>
     * @return string
     */
    public function getBlockHash()
    {
        return $this->block_hash;
    }

    /**
     * Hash of the block (encoded in hex) at which the information should be gathered.
     *
     * Generated from protobuf field <code>string block_hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBlockHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->block_hash = $var;

        return $this;
    }

    /**
     * The account address to request information about.
     *
     * Generated from protobuf field <code>string address = 2;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * The account address to request information about.
     *
     * Generated from protobuf field <code>string address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

}

