<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PathToExceptionFieldType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPathToExceptionFieldType extends EwsBasePathToElementType
{
    /**
     * The FieldURI
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FieldURI;
    /**
     * Constructor method for PathToExceptionFieldType
     * @uses EwsPathToExceptionFieldType::setFieldURI()
     * @param string $fieldURI
     */
    public function __construct($fieldURI = null)
    {
        $this
            ->setFieldURI($fieldURI);
    }
    /**
     * Get FieldURI value
     * @return string
     */
    public function getFieldURI()
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @uses \Ews\EnumType\EwsExceptionPropertyURIType::valueIsValid()
     * @uses \Ews\EnumType\EwsExceptionPropertyURIType::getValidValues()
     * @param string $fieldURI
     * @return \Ews\StructType\EwsPathToExceptionFieldType
     */
    public function setFieldURI($fieldURI = null)
    {
        if (!\Ews\EnumType\EwsExceptionPropertyURIType::valueIsValid($fieldURI)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fieldURI, implode(', ', \Ews\EnumType\EwsExceptionPropertyURIType::getValidValues())), __LINE__);
        }
        $this->FieldURI = $fieldURI;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPathToExceptionFieldType
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
