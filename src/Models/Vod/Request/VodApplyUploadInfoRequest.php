<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Models\Vod\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Models.Vod.Request.VodApplyUploadInfoRequest</code>
 */
class VodApplyUploadInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     */
    protected $SessionKey = '';
    /**
     * Generated from protobuf field <code>double FileSize = 3;</code>
     */
    protected $FileSize = 0.0;
    /**
     * Generated from protobuf field <code>string FileType = 4;</code>
     */
    protected $FileType = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type string $SessionKey
     *     @type float $FileSize
     *     @type string $FileType
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Models\Vod\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
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
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return $this->SessionKey;
    }

    /**
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SessionKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double FileSize = 3;</code>
     * @return float
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }

    /**
     * Generated from protobuf field <code>double FileSize = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setFileSize($var)
    {
        GPBUtil::checkDouble($var);
        $this->FileSize = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileType = 4;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     * Generated from protobuf field <code>string FileType = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

}

