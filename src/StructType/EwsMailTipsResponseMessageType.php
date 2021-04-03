<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailTipsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailTipsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MailTips
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsMailTips|null
     */
    protected ?\StructType\EwsMailTips $MailTips = null;
    /**
     * Constructor method for MailTipsResponseMessageType
     * @uses EwsMailTipsResponseMessageType::setMailTips()
     * @param \StructType\EwsMailTips $mailTips
     */
    public function __construct(?\StructType\EwsMailTips $mailTips = null)
    {
        $this
            ->setMailTips($mailTips);
    }
    /**
     * Get MailTips value
     * @return \StructType\EwsMailTips|null
     */
    public function getMailTips(): ?\StructType\EwsMailTips
    {
        return $this->MailTips;
    }
    /**
     * Set MailTips value
     * @param \StructType\EwsMailTips $mailTips
     * @return \StructType\EwsMailTipsResponseMessageType
     */
    public function setMailTips(?\StructType\EwsMailTips $mailTips = null): self
    {
        $this->MailTips = $mailTips;
        
        return $this;
    }
}
