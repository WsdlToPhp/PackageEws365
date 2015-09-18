<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleAndType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleAndType extends AbstractStructBase
{
    /**
     * The AllInternal
     * Meta informations extracted from the WSDL
     * - length: 0
     * @var string
     */
    public $AllInternal;
    /**
     * The And
     * @var \Ews\StructType\EwsProtectionRuleAndType
     */
    public $And;
    /**
     * The RecipientIs
     * @var \Ews\StructType\EwsProtectionRuleRecipientIsType
     */
    public $RecipientIs;
    /**
     * The SenderDepartments
     * @var \Ews\StructType\EwsProtectionRuleSenderDepartmentsType
     */
    public $SenderDepartments;
    /**
     * The True
     * Meta informations extracted from the WSDL
     * - length: 0
     * @var string
     */
    public $True;
    /**
     * Constructor method for ProtectionRuleAndType
     * @uses EwsProtectionRuleAndType::setAllInternal()
     * @uses EwsProtectionRuleAndType::setAnd()
     * @uses EwsProtectionRuleAndType::setRecipientIs()
     * @uses EwsProtectionRuleAndType::setSenderDepartments()
     * @uses EwsProtectionRuleAndType::setTrue()
     * @param string $allInternal
     * @param \Ews\StructType\EwsProtectionRuleAndType $and
     * @param \Ews\StructType\EwsProtectionRuleRecipientIsType $recipientIs
     * @param \Ews\StructType\EwsProtectionRuleSenderDepartmentsType $senderDepartments
     * @param string $true
     */
    public function __construct($allInternal = null, \Ews\StructType\EwsProtectionRuleAndType $and = null, \Ews\StructType\EwsProtectionRuleRecipientIsType $recipientIs = null, \Ews\StructType\EwsProtectionRuleSenderDepartmentsType $senderDepartments = null, $true = null)
    {
        $this
            ->setAllInternal($allInternal)
            ->setAnd($and)
            ->setRecipientIs($recipientIs)
            ->setSenderDepartments($senderDepartments)
            ->setTrue($true);
    }
    /**
     * Get AllInternal value
     * @return string|null
     */
    public function getAllInternal()
    {
        return $this->AllInternal;
    }
    /**
     * Set AllInternal value
     * @param string $allInternal
     * @return \Ews\StructType\EwsProtectionRuleAndType
     */
    public function setAllInternal($allInternal = null)
    {
        $this->AllInternal = $allInternal;
        return $this;
    }
    /**
     * Get And value
     * @return \Ews\StructType\EwsProtectionRuleAndType|null
     */
    public function getAnd()
    {
        return $this->And;
    }
    /**
     * Set And value
     * @param \Ews\StructType\EwsProtectionRuleAndType $and
     * @return \Ews\StructType\EwsProtectionRuleAndType
     */
    public function setAnd(\Ews\StructType\EwsProtectionRuleAndType $and = null)
    {
        $this->And = $and;
        return $this;
    }
    /**
     * Get RecipientIs value
     * @return \Ews\StructType\EwsProtectionRuleRecipientIsType|null
     */
    public function getRecipientIs()
    {
        return $this->RecipientIs;
    }
    /**
     * Set RecipientIs value
     * @param \Ews\StructType\EwsProtectionRuleRecipientIsType $recipientIs
     * @return \Ews\StructType\EwsProtectionRuleAndType
     */
    public function setRecipientIs(\Ews\StructType\EwsProtectionRuleRecipientIsType $recipientIs = null)
    {
        $this->RecipientIs = $recipientIs;
        return $this;
    }
    /**
     * Get SenderDepartments value
     * @return \Ews\StructType\EwsProtectionRuleSenderDepartmentsType|null
     */
    public function getSenderDepartments()
    {
        return $this->SenderDepartments;
    }
    /**
     * Set SenderDepartments value
     * @param \Ews\StructType\EwsProtectionRuleSenderDepartmentsType $senderDepartments
     * @return \Ews\StructType\EwsProtectionRuleAndType
     */
    public function setSenderDepartments(\Ews\StructType\EwsProtectionRuleSenderDepartmentsType $senderDepartments = null)
    {
        $this->SenderDepartments = $senderDepartments;
        return $this;
    }
    /**
     * Get True value
     * @return string|null
     */
    public function getTrue()
    {
        return $this->true;
    }
    /**
     * Set True value
     * @param string $true
     * @return \Ews\StructType\EwsProtectionRuleAndType
     */
    public function setTrue($true = null)
    {
        $this->true = $true;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsProtectionRuleAndType
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
