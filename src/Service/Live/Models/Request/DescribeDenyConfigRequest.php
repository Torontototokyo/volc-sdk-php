<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: live/request/request_live.proto

namespace Volc\Service\Live\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Live.Models.Request.DescribeDenyConfigRequest</code>
 */
class DescribeDenyConfigRequest
{
    /**
     *域名空间名称
     *
     * Generated from protobuf field <code>string Vhost = 1;</code>
     */
    public $Vhost = '';
    /**
     *推拉流域名，domain和app二选一填
     *
     * Generated from protobuf field <code>string Domain = 2;</code>
     */
    public $Domain = '';
    /**
     * App的名称，由 1 到 30
     * 位数字、字母、下划线及"-"和"."组成。domain和app二选一填。
     *
     * Generated from protobuf field <code>string App = 3;</code>
     */
    public $App = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vhost
     *          域名空间名称
     *     @type string $Domain
     *          推拉流域名，domain和app二选一填
     *     @type string $App
     *           App的名称，由 1 到 30
     *           位数字、字母、下划线及"-"和"."组成。domain和app二选一填。
     * }
     */

    /**
     *域名空间名称
     *
     * Generated from protobuf field <code>string Vhost = 1;</code>
     * @return string
     */
    public function getVhost()
    {
        return $this->Vhost;
    }

    /**
     *域名空间名称
     *
     * Generated from protobuf field <code>string Vhost = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVhost($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vhost = $var;

        return $this;
    }

    /**
     *推拉流域名，domain和app二选一填
     *
     * Generated from protobuf field <code>string Domain = 2;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     *推拉流域名，domain和app二选一填
     *
     * Generated from protobuf field <code>string Domain = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domain = $var;

        return $this;
    }

    /**
     * App的名称，由 1 到 30
     * 位数字、字母、下划线及"-"和"."组成。domain和app二选一填。
     *
     * Generated from protobuf field <code>string App = 3;</code>
     * @return string
     */
    public function getApp()
    {
        return $this->App;
    }

    /**
     * App的名称，由 1 到 30
     * 位数字、字母、下划线及"-"和"."组成。domain和app二选一填。
     *
     * Generated from protobuf field <code>string App = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkString($var, True);
        $this->App = $var;

        return $this;
    }

}

