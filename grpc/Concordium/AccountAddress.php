<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: concordium_p2p_rpc.proto

namespace Concordium;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An account address. Uses a base58-check encoding with a version byte set to 1. Is always 50 characters long.
 * Example: "3DJoe7aUwMwVmdFdRU2QsnJfsBbCmQu1QHvEg7YtWFZWmsoBXe"
 *
 * Generated from protobuf message <code>concordium.AccountAddress</code>
 */
class AccountAddress extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string account_address = 1;</code>
     */
    private $account_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ConcordiumP2PRpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string account_address = 1;</code>
     * @return string
     */
    public function getAccountAddress()
    {
        return $this->account_address;
    }

    /**
     * Generated from protobuf field <code>string account_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_address = $var;

        return $this;
    }

}

