<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetImItemListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetImItemListType extends EwsBaseRequestType
{
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
     */
    public $ExtendedProperties;
    /**
     * Constructor method for GetImItemListType
     * @uses EwsGetImItemListType::setExtendedProperties()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null)
    {
        $this
            ->setExtendedProperties($extendedProperties);
    }
    /**
     * Get ExtendedProperties value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs|null
     */
    public function getExtendedProperties()
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     * @return \Ews\StructType\EwsGetImItemListType
     */
    public function setExtendedProperties(\Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null)
    {
        $this->ExtendedProperties = $extendedProperties;
        return $this;
    }
}
