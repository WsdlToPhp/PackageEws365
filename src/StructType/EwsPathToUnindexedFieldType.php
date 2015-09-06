<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PathToUnindexedFieldType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPathToUnindexedFieldType extends EwsBasePathToElementType
{
    /**
     * The FieldURI
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FieldURI;
    /**
     * Constructor method for PathToUnindexedFieldType
     * @uses EwsPathToUnindexedFieldType::setFieldURI()
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
     * @uses \Ews\EnumType\EwsUnindexedFieldURIType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnindexedFieldURIType::getValidValues()
     * @param string $fieldURI
     * @return \Ews\StructType\EwsPathToUnindexedFieldType
     */
    public function setFieldURI($fieldURI = null)
    {
        if (!\Ews\EnumType\EwsUnindexedFieldURIType::valueIsValid($fieldURI)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fieldURI, implode(', ', \Ews\EnumType\EwsUnindexedFieldURIType::getValidValues())), __LINE__);
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
     * @return \Ews\StructType\EwsPathToUnindexedFieldType
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
