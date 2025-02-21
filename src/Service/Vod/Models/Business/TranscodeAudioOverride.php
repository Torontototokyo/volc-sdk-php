<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.TranscodeAudioOverride</code>
 */
class TranscodeAudioOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * 被覆盖的音频模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     */
    private $TemplateId;
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.Clip Clip = 2;</code>
     */
    protected $Clip = null;
    /**
     * 文件名
     *
     * Generated from protobuf field <code>string FileName = 3;</code>
     */
    protected $FileName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $TemplateId
     *           被覆盖的音频模板Id, 支持ALL
     *     @type \Volc\Service\Vod\Models\Business\Clip $Clip
     *     @type string $FileName
     *           文件名
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 被覆盖的音频模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * 被覆盖的音频模板Id, 支持ALL
     *
     * Generated from protobuf field <code>repeated string TemplateId = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->TemplateId = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.Clip Clip = 2;</code>
     * @return \Volc\Service\Vod\Models\Business\Clip|null
     */
    public function getClip()
    {
        return $this->Clip;
    }

    public function hasClip()
    {
        return isset($this->Clip);
    }

    public function clearClip()
    {
        unset($this->Clip);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.Clip Clip = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\Clip $var
     * @return $this
     */
    public function setClip($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\Clip::class);
        $this->Clip = $var;

        return $this;
    }

    /**
     * 文件名
     *
     * Generated from protobuf field <code>string FileName = 3;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * 文件名
     *
     * Generated from protobuf field <code>string FileName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

}

