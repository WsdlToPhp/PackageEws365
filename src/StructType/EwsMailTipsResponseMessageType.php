<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsMailTips
     */
    public $MailTips;
    /**
     * Constructor method for MailTipsResponseMessageType
     * @uses EwsMailTipsResponseMessageType::setMailTips()
     * @param \Ews\StructType\EwsMailTips $mailTips
     */
    public function __construct(\Ews\StructType\EwsMailTips $mailTips = null)
    {
        $this
            ->setMailTips($mailTips);
    }
    /**
     * Get MailTips value
     * @return \Ews\StructType\EwsMailTips|null
     */
    public function getMailTips()
    {
        return $this->MailTips;
    }
    /**
     * Set MailTips value
     * @param \Ews\StructType\EwsMailTips $mailTips
     * @return \Ews\StructType\EwsMailTipsResponseMessageType
     */
    public function setMailTips(\Ews\StructType\EwsMailTips $mailTips = null)
    {
        $this->MailTips = $mailTips;
        return $this;
    }
}
