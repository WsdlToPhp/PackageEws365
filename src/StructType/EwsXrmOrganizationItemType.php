<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XrmOrganizationItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmOrganizationItemType extends EwsContactItemType
{
    /**
     * The XrmOrganizationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $XrmOrganizationId;
    /**
     * The XrmContactType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $XrmContactType;
    /**
     * The XrmCompanySize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $XrmCompanySize;
    /**
     * Constructor method for XrmOrganizationItemType
     * @uses EwsXrmOrganizationItemType::setXrmOrganizationId()
     * @uses EwsXrmOrganizationItemType::setXrmContactType()
     * @uses EwsXrmOrganizationItemType::setXrmCompanySize()
     * @param string $xrmOrganizationId
     * @param int $xrmContactType
     * @param int $xrmCompanySize
     */
    public function __construct($xrmOrganizationId = null, $xrmContactType = null, $xrmCompanySize = null)
    {
        $this
            ->setXrmOrganizationId($xrmOrganizationId)
            ->setXrmContactType($xrmContactType)
            ->setXrmCompanySize($xrmCompanySize);
    }
    /**
     * Get XrmOrganizationId value
     * @return string|null
     */
    public function getXrmOrganizationId()
    {
        return $this->XrmOrganizationId;
    }
    /**
     * Set XrmOrganizationId value
     * @param string $xrmOrganizationId
     * @return \Ews\StructType\EwsXrmOrganizationItemType
     */
    public function setXrmOrganizationId($xrmOrganizationId = null)
    {
        // validation for constraint: pattern
        if (!is_null($xrmOrganizationId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $xrmOrganizationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($xrmOrganizationId)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($xrmOrganizationId) && !is_string($xrmOrganizationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xrmOrganizationId)), __LINE__);
        }
        $this->XrmOrganizationId = $xrmOrganizationId;
        return $this;
    }
    /**
     * Get XrmContactType value
     * @return int|null
     */
    public function getXrmContactType()
    {
        return $this->XrmContactType;
    }
    /**
     * Set XrmContactType value
     * @param int $xrmContactType
     * @return \Ews\StructType\EwsXrmOrganizationItemType
     */
    public function setXrmContactType($xrmContactType = null)
    {
        // validation for constraint: int
        if (!is_null($xrmContactType) && !is_int($xrmContactType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($xrmContactType)), __LINE__);
        }
        $this->XrmContactType = $xrmContactType;
        return $this;
    }
    /**
     * Get XrmCompanySize value
     * @return int|null
     */
    public function getXrmCompanySize()
    {
        return $this->XrmCompanySize;
    }
    /**
     * Set XrmCompanySize value
     * @param int $xrmCompanySize
     * @return \Ews\StructType\EwsXrmOrganizationItemType
     */
    public function setXrmCompanySize($xrmCompanySize = null)
    {
        // validation for constraint: int
        if (!is_null($xrmCompanySize) && !is_int($xrmCompanySize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($xrmCompanySize)), __LINE__);
        }
        $this->XrmCompanySize = $xrmCompanySize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsXrmOrganizationItemType
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
