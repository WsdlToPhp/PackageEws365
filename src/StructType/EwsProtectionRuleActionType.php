<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleActionType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Name;
    /**
     * The Argument
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsProtectionRuleArgumentType
     */
    public $Argument;
    /**
     * Constructor method for ProtectionRuleActionType
     * @uses EwsProtectionRuleActionType::setName()
     * @uses EwsProtectionRuleActionType::setArgument()
     * @param string $name
     * @param \Ews\StructType\EwsProtectionRuleArgumentType $argument
     */
    public function __construct($name = null, \Ews\StructType\EwsProtectionRuleArgumentType $argument = null)
    {
        $this
            ->setName($name)
            ->setArgument($argument);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \Ews\EnumType\EwsProtectionRuleActionKindType::valueIsValid()
     * @uses \Ews\EnumType\EwsProtectionRuleActionKindType::getValidValues()
     * @param string $name
     * @return \Ews\StructType\EwsProtectionRuleActionType
     */
    public function setName($name = null)
    {
        if (!\Ews\EnumType\EwsProtectionRuleActionKindType::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \Ews\EnumType\EwsProtectionRuleActionKindType::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Argument value
     * @return \Ews\StructType\EwsProtectionRuleArgumentType|null
     */
    public function getArgument()
    {
        return $this->Argument;
    }
    /**
     * Set Argument value
     * @param \Ews\StructType\EwsProtectionRuleArgumentType $argument
     * @return \Ews\StructType\EwsProtectionRuleActionType
     */
    public function setArgument(\Ews\StructType\EwsProtectionRuleArgumentType $argument = null)
    {
        $this->Argument = $argument;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsProtectionRuleActionType
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
