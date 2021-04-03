<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsReplyBody
     */
    protected \StructType\EwsReplyBody $ReplyBody;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsDuration|null
     */
    protected ?\StructType\EwsDuration $Duration = null;
    /**
     * Constructor method for OutOfOfficeMailTip
     * @uses EwsOutOfOfficeMailTip::setReplyBody()
     * @uses EwsOutOfOfficeMailTip::setDuration()
     * @param \StructType\EwsReplyBody $replyBody
     * @param \StructType\EwsDuration $duration
     */
    public function __construct(\StructType\EwsReplyBody $replyBody, ?\StructType\EwsDuration $duration = null)
    {
        $this
            ->setReplyBody($replyBody)
            ->setDuration($duration);
    }
    /**
     * Get ReplyBody value
     * @return \StructType\EwsReplyBody
     */
    public function getReplyBody(): \StructType\EwsReplyBody
    {
        return $this->ReplyBody;
    }
    /**
     * Set ReplyBody value
     * @param \StructType\EwsReplyBody $replyBody
     * @return \StructType\EwsOutOfOfficeMailTip
     */
    public function setReplyBody(\StructType\EwsReplyBody $replyBody): self
    {
        $this->ReplyBody = $replyBody;
        
        return $this;
    }
    /**
     * Get Duration value
     * @return \StructType\EwsDuration|null
     */
    public function getDuration(): ?\StructType\EwsDuration
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param \StructType\EwsDuration $duration
     * @return \StructType\EwsOutOfOfficeMailTip
     */
    public function setDuration(?\StructType\EwsDuration $duration = null): self
    {
        $this->Duration = $duration;
        
        return $this;
    }
}
