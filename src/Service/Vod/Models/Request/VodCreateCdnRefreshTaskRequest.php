<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodCreateCdnRefreshTaskRequest</code>
 */
class VodCreateCdnRefreshTaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 刷新Url或目录
     *
     * Generated from protobuf field <code>string Urls = 2;</code>
     */
    protected $Urls = '';
    /**
     * 刷新任务类型
     *
     * Generated from protobuf field <code>string Type = 3;</code>
     */
    protected $Type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名
     *     @type string $Urls
     *           刷新Url或目录
     *     @type string $Type
     *           刷新任务类型
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     * 刷新Url或目录
     *
     * Generated from protobuf field <code>string Urls = 2;</code>
     * @return string
     */
    public function getUrls()
    {
        return $this->Urls;
    }

    /**
     * 刷新Url或目录
     *
     * Generated from protobuf field <code>string Urls = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrls($var)
    {
        GPBUtil::checkString($var, True);
        $this->Urls = $var;

        return $this;
    }

    /**
     * 刷新任务类型
     *
     * Generated from protobuf field <code>string Type = 3;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * 刷新任务类型
     *
     * Generated from protobuf field <code>string Type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

}

