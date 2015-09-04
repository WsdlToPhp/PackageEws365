<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailTipsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMailTipsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MailTips
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailTipsResponseMessageType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
