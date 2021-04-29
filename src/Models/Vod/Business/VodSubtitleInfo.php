<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_common.proto

namespace Volc\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Models.Vod.Business.VodSubtitleInfo</code>
 */
class VodSubtitleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     *文件ID
     *
     * Generated from protobuf field <code>string FileId = 2;</code>
     */
    protected $FileId = '';
    /**
     *字幕语言
     *
     * Generated from protobuf field <code>string Language = 3;</code>
     */
    protected $Language = '';
    /**
     *字幕格式
     *
     * Generated from protobuf field <code>string Format = 4;</code>
     */
    protected $Format = '';
    /**
     *字幕标题
     *
     * Generated from protobuf field <code>string Title = 5;</code>
     */
    protected $Title = '';
    /**
     *字幕标签
     *
     * Generated from protobuf field <code>string Tag = 6;</code>
     */
    protected $Tag = '';
    /**
     *字幕状态
     *
     * Generated from protobuf field <code>string Status = 7;</code>
     */
    protected $Status = '';
    /**
     *字幕来源
     *
     * Generated from protobuf field <code>string Source = 8;</code>
     */
    protected $Source = '';
    /**
     *字幕uri
     *
     * Generated from protobuf field <code>string StoreUri = 9;</code>
     */
    protected $StoreUri = '';
    /**
     *字幕url
     *
     * Generated from protobuf field <code>string SubtitleUrl = 10;</code>
     */
    protected $SubtitleUrl = '';
    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 11;</code>
     */
    protected $CreateTime = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *          视频ID
     *     @type string $FileId
     *          文件ID
     *     @type string $Language
     *          字幕语言
     *     @type string $Format
     *          字幕格式
     *     @type string $Title
     *          字幕标题
     *     @type string $Tag
     *          字幕标签
     *     @type string $Status
     *          字幕状态
     *     @type string $Source
     *          字幕来源
     *     @type string $StoreUri
     *          字幕uri
     *     @type string $SubtitleUrl
     *          字幕url
     *     @type string $CreateTime
     *          创建时间
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Models\Vod\GPBMetadata\VodCommon::initOnce();
        parent::__construct($data);
    }

    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     *文件ID
     *
     * Generated from protobuf field <code>string FileId = 2;</code>
     * @return string
     */
    public function getFileId()
    {
        return $this->FileId;
    }

    /**
     *文件ID
     *
     * Generated from protobuf field <code>string FileId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileId = $var;

        return $this;
    }

    /**
     *字幕语言
     *
     * Generated from protobuf field <code>string Language = 3;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     *字幕语言
     *
     * Generated from protobuf field <code>string Language = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->Language = $var;

        return $this;
    }

    /**
     *字幕格式
     *
     * Generated from protobuf field <code>string Format = 4;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     *字幕格式
     *
     * Generated from protobuf field <code>string Format = 4;</code>
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
     *字幕标题
     *
     * Generated from protobuf field <code>string Title = 5;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     *字幕标题
     *
     * Generated from protobuf field <code>string Title = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->Title = $var;

        return $this;
    }

    /**
     *字幕标签
     *
     * Generated from protobuf field <code>string Tag = 6;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     *字幕标签
     *
     * Generated from protobuf field <code>string Tag = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tag = $var;

        return $this;
    }

    /**
     *字幕状态
     *
     * Generated from protobuf field <code>string Status = 7;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     *字幕状态
     *
     * Generated from protobuf field <code>string Status = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->Status = $var;

        return $this;
    }

    /**
     *字幕来源
     *
     * Generated from protobuf field <code>string Source = 8;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     *字幕来源
     *
     * Generated from protobuf field <code>string Source = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->Source = $var;

        return $this;
    }

    /**
     *字幕uri
     *
     * Generated from protobuf field <code>string StoreUri = 9;</code>
     * @return string
     */
    public function getStoreUri()
    {
        return $this->StoreUri;
    }

    /**
     *字幕uri
     *
     * Generated from protobuf field <code>string StoreUri = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->StoreUri = $var;

        return $this;
    }

    /**
     *字幕url
     *
     * Generated from protobuf field <code>string SubtitleUrl = 10;</code>
     * @return string
     */
    public function getSubtitleUrl()
    {
        return $this->SubtitleUrl;
    }

    /**
     *字幕url
     *
     * Generated from protobuf field <code>string SubtitleUrl = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSubtitleUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->SubtitleUrl = $var;

        return $this;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 11;</code>
     * @return string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->CreateTime = $var;

        return $this;
    }

}

