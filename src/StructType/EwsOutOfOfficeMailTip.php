<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OutOfOfficeMailTip StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOutOfOfficeMailTip extends AbstractStructBase
{
    /**
     * The ReplyBody
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsReplyBody
     */
    public $ReplyBody;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsDuration
     */
    public $Duration;
    /**
     * Constructor method for OutOfOfficeMailTip
     * @uses EwsOutOfOfficeMailTip::setReplyBody()
     * @uses EwsOutOfOfficeMailTip::setDuration()
     * @param \Ews\StructType\EwsReplyBody $replyBody
     * @param \Ews\StructType\EwsDuration $duration
     */
    public function __construct(\Ews\StructType\EwsReplyBody $replyBody = null, \Ews\StructType\EwsDuration $duration = null)
    {
        $this
            ->setReplyBody($replyBody)
            ->setDuration($duration);
    }
    /**
     * Get ReplyBody value
     * @return \Ews\StructType\EwsReplyBody
     */
    public function getReplyBody()
    {
        return $this->ReplyBody;
    }
    /**
     * Set ReplyBody value
     * @param \Ews\StructType\EwsReplyBody $replyBody
     * @return \Ews\StructType\EwsOutOfOfficeMailTip
     */
    public function setReplyBody(\Ews\StructType\EwsReplyBody $replyBody = null)
    {
        $this->ReplyBody = $replyBody;
        return $this;
    }
    /**
     * Get Duration value
     * @return \Ews\StructType\EwsDuration|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param \Ews\StructType\EwsDuration $duration
     * @return \Ews\StructType\EwsOutOfOfficeMailTip
     */
    public function setDuration(\Ews\StructType\EwsDuration $duration = null)
    {
        $this->Duration = $duration;
        return $this;
    }
}
