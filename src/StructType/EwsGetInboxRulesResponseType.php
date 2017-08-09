<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInboxRulesResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetInboxRulesResponseType extends EwsResponseMessageType
{
    /**
     * The OutlookRuleBlobExists
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $OutlookRuleBlobExists;
    /**
     * The InboxRules
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRulesType
     */
    public $InboxRules;
    /**
     * Constructor method for GetInboxRulesResponseType
     * @uses EwsGetInboxRulesResponseType::setOutlookRuleBlobExists()
     * @uses EwsGetInboxRulesResponseType::setInboxRules()
     * @param bool $outlookRuleBlobExists
     * @param \Ews\ArrayType\EwsArrayOfRulesType $inboxRules
     */
    public function __construct($outlookRuleBlobExists = null, \Ews\ArrayType\EwsArrayOfRulesType $inboxRules = null)
    {
        $this
            ->setOutlookRuleBlobExists($outlookRuleBlobExists)
            ->setInboxRules($inboxRules);
    }
    /**
     * Get OutlookRuleBlobExists value
     * @return bool|null
     */
    public function getOutlookRuleBlobExists()
    {
        return $this->OutlookRuleBlobExists;
    }
    /**
     * Set OutlookRuleBlobExists value
     * @param bool $outlookRuleBlobExists
     * @return \Ews\StructType\EwsGetInboxRulesResponseType
     */
    public function setOutlookRuleBlobExists($outlookRuleBlobExists = null)
    {
        // validation for constraint: boolean
        if (!is_null($outlookRuleBlobExists) && !is_bool($outlookRuleBlobExists)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($outlookRuleBlobExists)), __LINE__);
        }
        $this->OutlookRuleBlobExists = $outlookRuleBlobExists;
        return $this;
    }
    /**
     * Get InboxRules value
     * @return \Ews\ArrayType\EwsArrayOfRulesType|null
     */
    public function getInboxRules()
    {
        return $this->InboxRules;
    }
    /**
     * Set InboxRules value
     * @param \Ews\ArrayType\EwsArrayOfRulesType $inboxRules
     * @return \Ews\StructType\EwsGetInboxRulesResponseType
     */
    public function setInboxRules(\Ews\ArrayType\EwsArrayOfRulesType $inboxRules = null)
    {
        $this->InboxRules = $inboxRules;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetInboxRulesResponseType
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
