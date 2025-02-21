<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.SnapshotParamsSprite</code>
 */
class SnapshotParamsSprite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     */
    protected $Format = '';
    /**
     * Generated from protobuf field <code>repeated string StoreUris = 2;</code>
     */
    private $StoreUris;
    /**
     * Generated from protobuf field <code>int32 CellWidth = 3;</code>
     */
    protected $CellWidth = 0;
    /**
     * Generated from protobuf field <code>int32 CellHeight = 4;</code>
     */
    protected $CellHeight = 0;
    /**
     * Generated from protobuf field <code>int32 ImgXLen = 5;</code>
     */
    protected $ImgXLen = 0;
    /**
     * Generated from protobuf field <code>int32 ImgYLen = 6;</code>
     */
    protected $ImgYLen = 0;
    /**
     * Generated from protobuf field <code>float Interval = 7;</code>
     */
    protected $Interval = 0.0;
    /**
     * Generated from protobuf field <code>int32 CaptureNum = 8;</code>
     */
    protected $CaptureNum = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Format
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $StoreUris
     *     @type int $CellWidth
     *     @type int $CellHeight
     *     @type int $ImgXLen
     *     @type int $ImgYLen
     *     @type float $Interval
     *     @type int $CaptureNum
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Format = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string StoreUris = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStoreUris()
    {
        return $this->StoreUris;
    }

    /**
     * Generated from protobuf field <code>repeated string StoreUris = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStoreUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->StoreUris = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 CellWidth = 3;</code>
     * @return int
     */
    public function getCellWidth()
    {
        return $this->CellWidth;
    }

    /**
     * Generated from protobuf field <code>int32 CellWidth = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCellWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->CellWidth = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 CellHeight = 4;</code>
     * @return int
     */
    public function getCellHeight()
    {
        return $this->CellHeight;
    }

    /**
     * Generated from protobuf field <code>int32 CellHeight = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCellHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->CellHeight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ImgXLen = 5;</code>
     * @return int
     */
    public function getImgXLen()
    {
        return $this->ImgXLen;
    }

    /**
     * Generated from protobuf field <code>int32 ImgXLen = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setImgXLen($var)
    {
        GPBUtil::checkInt32($var);
        $this->ImgXLen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ImgYLen = 6;</code>
     * @return int
     */
    public function getImgYLen()
    {
        return $this->ImgYLen;
    }

    /**
     * Generated from protobuf field <code>int32 ImgYLen = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setImgYLen($var)
    {
        GPBUtil::checkInt32($var);
        $this->ImgYLen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float Interval = 7;</code>
     * @return float
     */
    public function getInterval()
    {
        return $this->Interval;
    }

    /**
     * Generated from protobuf field <code>float Interval = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkFloat($var);
        $this->Interval = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 CaptureNum = 8;</code>
     * @return int
     */
    public function getCaptureNum()
    {
        return $this->CaptureNum;
    }

    /**
     * Generated from protobuf field <code>int32 CaptureNum = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setCaptureNum($var)
    {
        GPBUtil::checkInt32($var);
        $this->CaptureNum = $var;

        return $this;
    }

}

