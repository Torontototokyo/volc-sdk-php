<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **********************************************************************
 * 计量计费
 * **********************************************************************
 * 转码用量
 *
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.DescribeVodSpaceTranscodeDataRequest</code>
 */
class DescribeVodSpaceTranscodeDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间列表，多个空间用逗号分割
     *
     * Generated from protobuf field <code>string SpaceList = 1;</code>
     */
    protected $SpaceList = '';
    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     */
    protected $StartTime = '';
    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     */
    protected $EndTime = '';
    /**
     * 转码类型：默认全部。Slice，Normal，LowCost，ByteHD
     *
     * Generated from protobuf field <code>string TranscodeType = 4;</code>
     */
    protected $TranscodeType = '';
    /**
     *
     * Generated from protobuf field <code>string Specification = 5;</code>
     */
    protected $Specification = '';
    /**
     * 闲忙时: busy/free，多个值用逗号分割
     *
     * Generated from protobuf field <code>string TaskStageList = 6;</code>
     */
    protected $TaskStageList = '';
    /**
     *聚合的时间粒度，单位秒，默认3600，支持3600和86400
     *
     * Generated from protobuf field <code>int64 Aggregation = 7;</code>
     */
    protected $Aggregation = 0;
    /**
     * 展示详细信息的维度，取值：TaskStage、Space，多个值用逗号分割
     *
     * Generated from protobuf field <code>string DetailFieldList = 8;</code>
     */
    protected $DetailFieldList = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceList
     *           空间列表，多个空间用逗号分割
     *     @type string $StartTime
     *           查询的起始时间, rfc3339
     *     @type string $EndTime
     *           查询的结束时间, rfc3339；查询时间跨度不超过93天
     *     @type string $TranscodeType
     *           转码类型：默认全部。Slice，Normal，LowCost，ByteHD
     *     @type string $Specification
     *     @type string $TaskStageList
     *           闲忙时: busy/free，多个值用逗号分割
     *     @type int|string $Aggregation
     *          聚合的时间粒度，单位秒，默认3600，支持3600和86400
     *     @type string $DetailFieldList
     *           展示详细信息的维度，取值：TaskStage、Space，多个值用逗号分割
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间列表，多个空间用逗号分割
     *
     * Generated from protobuf field <code>string SpaceList = 1;</code>
     * @return string
     */
    public function getSpaceList()
    {
        return $this->SpaceList;
    }

    /**
     * 空间列表，多个空间用逗号分割
     *
     * Generated from protobuf field <code>string SpaceList = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceList($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceList = $var;

        return $this;
    }

    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 查询的起始时间, rfc3339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * 转码类型：默认全部。Slice，Normal，LowCost，ByteHD
     *
     * Generated from protobuf field <code>string TranscodeType = 4;</code>
     * @return string
     */
    public function getTranscodeType()
    {
        return $this->TranscodeType;
    }

    /**
     * 转码类型：默认全部。Slice，Normal，LowCost，ByteHD
     *
     * Generated from protobuf field <code>string TranscodeType = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTranscodeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->TranscodeType = $var;

        return $this;
    }

    /**
     *
     * Generated from protobuf field <code>string Specification = 5;</code>
     * @return string
     */
    public function getSpecification()
    {
        return $this->Specification;
    }

    /**
     *
     * Generated from protobuf field <code>string Specification = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSpecification($var)
    {
        GPBUtil::checkString($var, True);
        $this->Specification = $var;

        return $this;
    }

    /**
     * 闲忙时: busy/free，多个值用逗号分割
     *
     * Generated from protobuf field <code>string TaskStageList = 6;</code>
     * @return string
     */
    public function getTaskStageList()
    {
        return $this->TaskStageList;
    }

    /**
     * 闲忙时: busy/free，多个值用逗号分割
     *
     * Generated from protobuf field <code>string TaskStageList = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskStageList($var)
    {
        GPBUtil::checkString($var, True);
        $this->TaskStageList = $var;

        return $this;
    }

    /**
     *聚合的时间粒度，单位秒，默认3600，支持3600和86400
     *
     * Generated from protobuf field <code>int64 Aggregation = 7;</code>
     * @return int|string
     */
    public function getAggregation()
    {
        return $this->Aggregation;
    }

    /**
     *聚合的时间粒度，单位秒，默认3600，支持3600和86400
     *
     * Generated from protobuf field <code>int64 Aggregation = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAggregation($var)
    {
        GPBUtil::checkInt64($var);
        $this->Aggregation = $var;

        return $this;
    }

    /**
     * 展示详细信息的维度，取值：TaskStage、Space，多个值用逗号分割
     *
     * Generated from protobuf field <code>string DetailFieldList = 8;</code>
     * @return string
     */
    public function getDetailFieldList()
    {
        return $this->DetailFieldList;
    }

    /**
     * 展示详细信息的维度，取值：TaskStage、Space，多个值用逗号分割
     *
     * Generated from protobuf field <code>string DetailFieldList = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDetailFieldList($var)
    {
        GPBUtil::checkString($var, True);
        $this->DetailFieldList = $var;

        return $this;
    }

}

