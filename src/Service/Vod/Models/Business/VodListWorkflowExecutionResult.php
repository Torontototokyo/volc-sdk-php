<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodListWorkflowExecutionResult</code>
 */
class VodListWorkflowExecutionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 工作流记录
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.WorkflowExecution Data = 1;</code>
     */
    private $Data;
    /**
     * 符合条件的结果总数
     *
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     */
    protected $TotalCount = 0;
    /**
     * 分页大小
     *
     * Generated from protobuf field <code>int32 PageSize = 3;</code>
     */
    protected $PageSize = 0;
    /**
     * 数据偏移量
     *
     * Generated from protobuf field <code>int32 Offset = 4;</code>
     */
    protected $Offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\WorkflowExecution[]|\Google\Protobuf\Internal\RepeatedField $Data
     *           工作流记录
     *     @type int $TotalCount
     *           符合条件的结果总数
     *     @type int $PageSize
     *           分页大小
     *     @type int $Offset
     *           数据偏移量
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 工作流记录
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.WorkflowExecution Data = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * 工作流记录
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.WorkflowExecution Data = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\WorkflowExecution[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\WorkflowExecution::class);
        $this->Data = $arr;

        return $this;
    }

    /**
     * 符合条件的结果总数
     *
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }

    /**
     * 符合条件的结果总数
     *
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->TotalCount = $var;

        return $this;
    }

    /**
     * 分页大小
     *
     * Generated from protobuf field <code>int32 PageSize = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     * 分页大小
     *
     * Generated from protobuf field <code>int32 PageSize = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->PageSize = $var;

        return $this;
    }

    /**
     * 数据偏移量
     *
     * Generated from protobuf field <code>int32 Offset = 4;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * 数据偏移量
     *
     * Generated from protobuf field <code>int32 Offset = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->Offset = $var;

        return $this;
    }

}

