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
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $XrmOrganizationId;
    /**
     * The XrmContactType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $XrmContactType;
    /**
     * The XrmCompanySize
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($xrmOrganizationId) && !is_string($xrmOrganizationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xrmOrganizationId, true), gettype($xrmOrganizationId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($xrmOrganizationId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $xrmOrganizationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($xrmOrganizationId, true)), __LINE__);
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
        if (!is_null($xrmContactType) && !(is_int($xrmContactType) || ctype_digit($xrmContactType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($xrmContactType, true), gettype($xrmContactType)), __LINE__);
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
        if (!is_null($xrmCompanySize) && !(is_int($xrmCompanySize) || ctype_digit($xrmCompanySize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($xrmCompanySize, true), gettype($xrmCompanySize)), __LINE__);
        }
        $this->XrmCompanySize = $xrmCompanySize;
        return $this;
    }
}
