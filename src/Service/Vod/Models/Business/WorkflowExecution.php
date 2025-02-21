<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.WorkflowExecution</code>
 */
class WorkflowExecution extends \Google\Protobuf\Internal\Message
{
    /**
     *工作流执行ID
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     */
    protected $RunId = '';
    /**
     * 视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     */
    protected $Vid = '';
    /**
     *模板ID，即工作流ID
     *
     * Generated from protobuf field <code>string TemplateId = 3;</code>
     */
    protected $TemplateId = '';
    /**
     * 工作流名称
     *
     * Generated from protobuf field <code>string TemplateName = 4;</code>
     */
    protected $TemplateName = '';
    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 5;</code>
     */
    protected $SpaceName = '';
    /**
     *执行状态
     *
     * Generated from protobuf field <code>string Status = 6;</code>
     */
    protected $Status = '';
    /**
     *任务队列ID
     *
     * Generated from protobuf field <code>string TaskListId = 7;</code>
     */
    protected $TaskListId = '';
    /**
     *闲时转码
     *
     * Generated from protobuf field <code>bool EnableLowPriority = 8;</code>
     */
    protected $EnableLowPriority = false;
    /**
     *任务来源
     *
     * Generated from protobuf field <code>string JobSource = 9;</code>
     */
    protected $JobSource = '';
    /**
     *任务创建时间，即触发任务的时间，格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp CreateTime = 10;</code>
     */
    protected $CreateTime = null;
    /**
     *任务开始执行时间，即任务被调度到的时间戳，可用于计算执行时间，格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp StartTime = 11;</code>
     */
    protected $StartTime = null;
    /**
     *任务结束时间，可用于排序，格式：格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp EndTime = 12;</code>
     */
    protected $EndTime = null;
    /**
     *工作流输入参数
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.WorkflowParams Input = 13;</code>
     */
    protected $Input = null;
    /**
     *转码记录优先级
     *
     * Generated from protobuf field <code>int32 Priority = 14;</code>
     */
    protected $Priority = 0;
    /**
     *回调透传参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 15;</code>
     */
    protected $CallbackArgs = '';
    /**
     * 子任务详情
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.TaskDetail TasksDetail = 16;</code>
     */
    private $TasksDetail;
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DirectUrl DirectUrl = 17;</code>
     */
    protected $DirectUrl = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $RunId
     *          工作流执行ID
     *     @type string $Vid
     *           视频ID
     *     @type string $TemplateId
     *          模板ID，即工作流ID
     *     @type string $TemplateName
     *           工作流名称
     *     @type string $SpaceName
     *           空间名
     *     @type string $Status
     *          执行状态
     *     @type string $TaskListId
     *          任务队列ID
     *     @type bool $EnableLowPriority
     *          闲时转码
     *     @type string $JobSource
     *          任务来源
     *     @type \Google\Protobuf\Timestamp $CreateTime
     *          任务创建时间，即触发任务的时间，格式：rfc3339。如果不存在则为空
     *     @type \Google\Protobuf\Timestamp $StartTime
     *          任务开始执行时间，即任务被调度到的时间戳，可用于计算执行时间，格式：rfc3339。如果不存在则为空
     *     @type \Google\Protobuf\Timestamp $EndTime
     *          任务结束时间，可用于排序，格式：格式：rfc3339。如果不存在则为空
     *     @type \Volc\Service\Vod\Models\Business\WorkflowParams $Input
     *          工作流输入参数
     *     @type int $Priority
     *          转码记录优先级
     *     @type string $CallbackArgs
     *          回调透传参数
     *     @type \Volc\Service\Vod\Models\Business\TaskDetail[]|\Google\Protobuf\Internal\RepeatedField $TasksDetail
     *           子任务详情
     *     @type \Volc\Service\Vod\Models\Business\DirectUrl $DirectUrl
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     *工作流执行ID
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     * @return string
     */
    public function getRunId()
    {
        return $this->RunId;
    }

    /**
     *工作流执行ID
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->RunId = $var;

        return $this;
    }

    /**
     * 视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
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
     *模板ID，即工作流ID
     *
     * Generated from protobuf field <code>string TemplateId = 3;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     *模板ID，即工作流ID
     *
     * Generated from protobuf field <code>string TemplateId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateId = $var;

        return $this;
    }

    /**
     * 工作流名称
     *
     * Generated from protobuf field <code>string TemplateName = 4;</code>
     * @return string
     */
    public function getTemplateName()
    {
        return $this->TemplateName;
    }

    /**
     * 工作流名称
     *
     * Generated from protobuf field <code>string TemplateName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateName = $var;

        return $this;
    }

    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 5;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 5;</code>
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
     *执行状态
     *
     * Generated from protobuf field <code>string Status = 6;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     *执行状态
     *
     * Generated from protobuf field <code>string Status = 6;</code>
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
     *任务队列ID
     *
     * Generated from protobuf field <code>string TaskListId = 7;</code>
     * @return string
     */
    public function getTaskListId()
    {
        return $this->TaskListId;
    }

    /**
     *任务队列ID
     *
     * Generated from protobuf field <code>string TaskListId = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskListId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TaskListId = $var;

        return $this;
    }

    /**
     *闲时转码
     *
     * Generated from protobuf field <code>bool EnableLowPriority = 8;</code>
     * @return bool
     */
    public function getEnableLowPriority()
    {
        return $this->EnableLowPriority;
    }

    /**
     *闲时转码
     *
     * Generated from protobuf field <code>bool EnableLowPriority = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableLowPriority($var)
    {
        GPBUtil::checkBool($var);
        $this->EnableLowPriority = $var;

        return $this;
    }

    /**
     *任务来源
     *
     * Generated from protobuf field <code>string JobSource = 9;</code>
     * @return string
     */
    public function getJobSource()
    {
        return $this->JobSource;
    }

    /**
     *任务来源
     *
     * Generated from protobuf field <code>string JobSource = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setJobSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->JobSource = $var;

        return $this;
    }

    /**
     *任务创建时间，即触发任务的时间，格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp CreateTime = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    public function hasCreateTime()
    {
        return isset($this->CreateTime);
    }

    public function clearCreateTime()
    {
        unset($this->CreateTime);
    }

    /**
     *任务创建时间，即触发任务的时间，格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp CreateTime = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->CreateTime = $var;

        return $this;
    }

    /**
     *任务开始执行时间，即任务被调度到的时间戳，可用于计算执行时间，格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp StartTime = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    public function hasStartTime()
    {
        return isset($this->StartTime);
    }

    public function clearStartTime()
    {
        unset($this->StartTime);
    }

    /**
     *任务开始执行时间，即任务被调度到的时间戳，可用于计算执行时间，格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp StartTime = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->StartTime = $var;

        return $this;
    }

    /**
     *任务结束时间，可用于排序，格式：格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp EndTime = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    public function hasEndTime()
    {
        return isset($this->EndTime);
    }

    public function clearEndTime()
    {
        unset($this->EndTime);
    }

    /**
     *任务结束时间，可用于排序，格式：格式：rfc3339。如果不存在则为空
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp EndTime = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->EndTime = $var;

        return $this;
    }

    /**
     *工作流输入参数
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.WorkflowParams Input = 13;</code>
     * @return \Volc\Service\Vod\Models\Business\WorkflowParams|null
     */
    public function getInput()
    {
        return $this->Input;
    }

    public function hasInput()
    {
        return isset($this->Input);
    }

    public function clearInput()
    {
        unset($this->Input);
    }

    /**
     *工作流输入参数
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.WorkflowParams Input = 13;</code>
     * @param \Volc\Service\Vod\Models\Business\WorkflowParams $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\WorkflowParams::class);
        $this->Input = $var;

        return $this;
    }

    /**
     *转码记录优先级
     *
     * Generated from protobuf field <code>int32 Priority = 14;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     *转码记录优先级
     *
     * Generated from protobuf field <code>int32 Priority = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->Priority = $var;

        return $this;
    }

    /**
     *回调透传参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 15;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
     *回调透传参数
     *
     * Generated from protobuf field <code>string CallbackArgs = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackArgs($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackArgs = $var;

        return $this;
    }

    /**
     * 子任务详情
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.TaskDetail TasksDetail = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTasksDetail()
    {
        return $this->TasksDetail;
    }

    /**
     * 子任务详情
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.TaskDetail TasksDetail = 16;</code>
     * @param \Volc\Service\Vod\Models\Business\TaskDetail[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTasksDetail($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\TaskDetail::class);
        $this->TasksDetail = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DirectUrl DirectUrl = 17;</code>
     * @return \Volc\Service\Vod\Models\Business\DirectUrl|null
     */
    public function getDirectUrl()
    {
        return $this->DirectUrl;
    }

    public function hasDirectUrl()
    {
        return isset($this->DirectUrl);
    }

    public function clearDirectUrl()
    {
        unset($this->DirectUrl);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DirectUrl DirectUrl = 17;</code>
     * @param \Volc\Service\Vod\Models\Business\DirectUrl $var
     * @return $this
     */
    public function setDirectUrl($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\DirectUrl::class);
        $this->DirectUrl = $var;

        return $this;
    }

}

