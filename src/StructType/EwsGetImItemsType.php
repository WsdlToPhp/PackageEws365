<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $ContactIds = null;
    /**
     * The GroupIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $GroupIds = null;
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $ExtendedProperties = null;
    /**
     * Constructor method for GetImItemsType
     * @uses EwsGetImItemsType::setContactIds()
     * @uses EwsGetImItemsType::setGroupIds()
     * @uses EwsGetImItemsType::setExtendedProperties()
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $contactIds
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $groupIds
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     */
    public function __construct(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $contactIds = null, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $groupIds = null, ?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null)
    {
        $this
            ->setContactIds($contactIds)
            ->setGroupIds($groupIds)
            ->setExtendedProperties($extendedProperties);
    }
    /**
     * Get ContactIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getContactIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->ContactIds;
    }
    /**
     * Set ContactIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $contactIds
     * @return \StructType\EwsGetImItemsType
     */
    public function setContactIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $contactIds = null): self
    {
        $this->ContactIds = $contactIds;
        
        return $this;
    }
    /**
     * Get GroupIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getGroupIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->GroupIds;
    }
    /**
     * Set GroupIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $groupIds
     * @return \StructType\EwsGetImItemsType
     */
    public function setGroupIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $groupIds = null): self
    {
        $this->GroupIds = $groupIds;
        
        return $this;
    }
    /**
     * Get ExtendedProperties value
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs|null
     */
    public function getExtendedProperties(): ?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     * @return \StructType\EwsGetImItemsType
     */
    public function setExtendedProperties(?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null): self
    {
        $this->ExtendedProperties = $extendedProperties;
        
        return $this;
    }
}
