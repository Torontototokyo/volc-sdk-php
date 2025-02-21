<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodGetFileListData</code>
 */
class VodGetFileListData extends \Google\Protobuf\Internal\Message
{
    /**
     *返回的结果是否已被截断
     *
     * Generated from protobuf field <code>bool IsTruncated = 1;</code>
     */
    protected $IsTruncated = false;
    /**
     *文件夹项（当前目录下的一级文件夹）
     *
     * Generated from protobuf field <code>repeated string CommonPrefixes = 2;</code>
     */
    private $CommonPrefixes;
    /**
     *对象数
     *
     * Generated from protobuf field <code>int64 FileSum = 3;</code>
     */
    protected $FileSum = 0;
    /**
     *如果有截断的话，下一个列举对象的起始位置
     *
     * Generated from protobuf field <code>string NextStarter = 4;</code>
     */
    protected $NextStarter = '';
    /**
     *对象列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.FileBasicInfo FileBasicInfos = 5;</code>
     */
    private $FileBasicInfos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsTruncated
     *          返回的结果是否已被截断
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $CommonPrefixes
     *          文件夹项（当前目录下的一级文件夹）
     *     @type int|string $FileSum
     *          对象数
     *     @type string $NextStarter
     *          如果有截断的话，下一个列举对象的起始位置
     *     @type \Volc\Service\Vod\Models\Business\FileBasicInfo[]|\Google\Protobuf\Internal\RepeatedField $FileBasicInfos
     *          对象列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *返回的结果是否已被截断
     *
     * Generated from protobuf field <code>bool IsTruncated = 1;</code>
     * @return bool
     */
    public function getIsTruncated()
    {
        return $this->IsTruncated;
    }

    /**
     *返回的结果是否已被截断
     *
     * Generated from protobuf field <code>bool IsTruncated = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTruncated($var)
    {
        GPBUtil::checkBool($var);
        $this->IsTruncated = $var;

        return $this;
    }

    /**
     *文件夹项（当前目录下的一级文件夹）
     *
     * Generated from protobuf field <code>repeated string CommonPrefixes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommonPrefixes()
    {
        return $this->CommonPrefixes;
    }

    /**
     *文件夹项（当前目录下的一级文件夹）
     *
     * Generated from protobuf field <code>repeated string CommonPrefixes = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommonPrefixes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->CommonPrefixes = $arr;

        return $this;
    }

    /**
     *对象数
     *
     * Generated from protobuf field <code>int64 FileSum = 3;</code>
     * @return int|string
     */
    public function getFileSum()
    {
        return $this->FileSum;
    }

    /**
     *对象数
     *
     * Generated from protobuf field <code>int64 FileSum = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFileSum($var)
    {
        GPBUtil::checkInt64($var);
        $this->FileSum = $var;

        return $this;
    }

    /**
     *如果有截断的话，下一个列举对象的起始位置
     *
     * Generated from protobuf field <code>string NextStarter = 4;</code>
     * @return string
     */
    public function getNextStarter()
    {
        return $this->NextStarter;
    }

    /**
     *如果有截断的话，下一个列举对象的起始位置
     *
     * Generated from protobuf field <code>string NextStarter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNextStarter($var)
    {
        GPBUtil::checkString($var, True);
        $this->NextStarter = $var;

        return $this;
    }

    /**
     *对象列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.FileBasicInfo FileBasicInfos = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileBasicInfos()
    {
        return $this->FileBasicInfos;
    }

    /**
     *对象列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.FileBasicInfo FileBasicInfos = 5;</code>
     * @param \Volc\Service\Vod\Models\Business\FileBasicInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileBasicInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\FileBasicInfo::class);
        $this->FileBasicInfos = $arr;

        return $this;
    }

}

