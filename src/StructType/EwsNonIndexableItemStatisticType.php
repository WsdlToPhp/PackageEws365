<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonIndexableItemStatisticType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Non indexable item statistic.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonIndexableItemStatisticType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Mailbox;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $ItemCount;
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for NonIndexableItemStatisticType
     * @uses EwsNonIndexableItemStatisticType::setMailbox()
     * @uses EwsNonIndexableItemStatisticType::setItemCount()
     * @uses EwsNonIndexableItemStatisticType::setErrorMessage()
     * @param string $mailbox
     * @param long $itemCount
     * @param string $errorMessage
     */
    public function __construct($mailbox = null, $itemCount = null, $errorMessage = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setItemCount($itemCount)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Mailbox value
     * @return string
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param string $mailbox
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType
     */
    public function setMailbox($mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return long
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param long $itemCount
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType
     */
    public function setItemCount($itemCount = null)
    {
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType
     */
    public function setErrorMessage($errorMessage = null)
    {
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType
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
