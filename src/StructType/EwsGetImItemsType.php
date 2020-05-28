<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetImItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetImItemsType extends EwsBaseRequestType
{
    /**
     * The ContactIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ContactIds;
    /**
     * The GroupIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $GroupIds;
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
     */
    public $ExtendedProperties;
    /**
     * Constructor method for GetImItemsType
     * @uses EwsGetImItemsType::setContactIds()
     * @uses EwsGetImItemsType::setGroupIds()
     * @uses EwsGetImItemsType::setExtendedProperties()
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $contactIds
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $groupIds
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     */
    public function __construct(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $contactIds = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $groupIds = null, \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null)
    {
        $this
            ->setContactIds($contactIds)
            ->setGroupIds($groupIds)
            ->setExtendedProperties($extendedProperties);
    }
    /**
     * Get ContactIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getContactIds()
    {
        return $this->ContactIds;
    }
    /**
     * Set ContactIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $contactIds
     * @return \Ews\StructType\EwsGetImItemsType
     */
    public function setContactIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $contactIds = null)
    {
        $this->ContactIds = $contactIds;
        return $this;
    }
    /**
     * Get GroupIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getGroupIds()
    {
        return $this->GroupIds;
    }
    /**
     * Set GroupIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $groupIds
     * @return \Ews\StructType\EwsGetImItemsType
     */
    public function setGroupIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $groupIds = null)
    {
        $this->GroupIds = $groupIds;
        return $this;
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
     * @return \Ews\StructType\EwsGetImItemsType
     */
    public function setExtendedProperties(\Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null)
    {
        $this->ExtendedProperties = $extendedProperties;
        return $this;
    }
}
