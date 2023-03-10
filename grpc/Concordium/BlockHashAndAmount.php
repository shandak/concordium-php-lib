<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: concordium_p2p_rpc.proto

namespace Concordium;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for getting the ancestors of a block.
 *
 * Generated from protobuf message <code>concordium.BlockHashAndAmount</code>
 */
class BlockHashAndAmount extends \Google\Protobuf\Internal\Message
{
    /**
     * The block to get ancestors of.
     *
     * Generated from protobuf field <code>string block_hash = 1;</code>
     */
    private $block_hash = '';
    /**
     * The maximum amount of ancestors that will be returned.
     *
     * Generated from protobuf field <code>uint64 amount = 2 [jstype = JS_STRING];</code>
     */
    private $amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $block_hash
     *           The block to get ancestors of.
     *     @type int|string $amount
     *           The maximum amount of ancestors that will be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ConcordiumP2PRpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The block to get ancestors of.
     *
     * Generated from protobuf field <code>string block_hash = 1;</code>
     * @return string
     */
    public function getBlockHash()
    {
        return $this->block_hash;
    }

    /**
     * The block to get ancestors of.
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
     * The maximum amount of ancestors that will be returned.
     *
     * Generated from protobuf field <code>uint64 amount = 2 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The maximum amount of ancestors that will be returned.
     *
     * Generated from protobuf field <code>uint64 amount = 2 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkUint64($var);
        $this->amount = $var;

        return $this;
    }

}

