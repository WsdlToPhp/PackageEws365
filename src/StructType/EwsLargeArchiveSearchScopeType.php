<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LargeArchiveSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLargeArchiveSearchScopeType extends AbstractStructBase
{
    /**
     * The ArchiveTypes
     * @var string[]
     */
    public $ArchiveTypes;
    /**
     * Constructor method for LargeArchiveSearchScopeType
     * @uses EwsLargeArchiveSearchScopeType::setArchiveTypes()
     * @param string[] $archiveTypes
     */
    public function __construct($archiveTypes = null)
    {
        $this
            ->setArchiveTypes($archiveTypes);
    }
    /**
     * Get ArchiveTypes value
     * @return string[]|null
     */
    public function getArchiveTypes()
    {
        return $this->ArchiveTypes;
    }
    /**
     * Set ArchiveTypes value
     * @uses \Ews\EnumType\EwsSearchScopeArchivesType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchScopeArchivesType::getValidValues()
     * @param string[] $archiveTypes
     * @return \Ews\StructType\EwsLargeArchiveSearchScopeType
     */
    public function setArchiveTypes($archiveTypes = null)
    {
        if (!\Ews\EnumType\EwsSearchScopeArchivesType::valueIsValid($archiveTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $archiveTypes, implode(', ', \Ews\EnumType\EwsSearchScopeArchivesType::getValidValues())), __LINE__);
        }
        $this->ArchiveTypes = $archiveTypes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsLargeArchiveSearchScopeType
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
