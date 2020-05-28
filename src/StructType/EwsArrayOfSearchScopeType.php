<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchScopeType extends AbstractStructBase
{
    /**
     * The PrimaryMailboxSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPrimaryMailboxSearchScopeType
     */
    public $PrimaryMailboxSearchScope;
    /**
     * The LargeArchiveSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsLargeArchiveSearchScopeType
     */
    public $LargeArchiveSearchScope;
    /**
     * The GroupSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsGroupSearchScopeType
     */
    public $GroupSearchScope;
    /**
     * The CustomSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCustomSearchScopeType[]
     */
    public $CustomSearchScope;
    /**
     * The SingleGroupSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleGroupSearchScopeType
     */
    public $SingleGroupSearchScope;
    /**
     * The OneDriveSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsOneDriveSearchScopeType
     */
    public $OneDriveSearchScope;
    /**
     * The SingleLargeArchiveSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleLargeArchiveSearchScopeType
     */
    public $SingleLargeArchiveSearchScope;
    /**
     * Constructor method for ArrayOfSearchScopeType
     * @uses EwsArrayOfSearchScopeType::setPrimaryMailboxSearchScope()
     * @uses EwsArrayOfSearchScopeType::setLargeArchiveSearchScope()
     * @uses EwsArrayOfSearchScopeType::setGroupSearchScope()
     * @uses EwsArrayOfSearchScopeType::setCustomSearchScope()
     * @uses EwsArrayOfSearchScopeType::setSingleGroupSearchScope()
     * @uses EwsArrayOfSearchScopeType::setOneDriveSearchScope()
     * @uses EwsArrayOfSearchScopeType::setSingleLargeArchiveSearchScope()
     * @param \Ews\StructType\EwsPrimaryMailboxSearchScopeType $primaryMailboxSearchScope
     * @param \Ews\StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope
     * @param \Ews\StructType\EwsGroupSearchScopeType $groupSearchScope
     * @param \Ews\StructType\EwsCustomSearchScopeType[] $customSearchScope
     * @param \Ews\StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope
     * @param \Ews\StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope
     * @param \Ews\StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope
     */
    public function __construct(\Ews\StructType\EwsPrimaryMailboxSearchScopeType $primaryMailboxSearchScope = null, \Ews\StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope = null, \Ews\StructType\EwsGroupSearchScopeType $groupSearchScope = null, array $customSearchScope = array(), \Ews\StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope = null, \Ews\StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope = null, \Ews\StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope = null)
    {
        $this
            ->setPrimaryMailboxSearchScope($primaryMailboxSearchScope)
            ->setLargeArchiveSearchScope($largeArchiveSearchScope)
            ->setGroupSearchScope($groupSearchScope)
            ->setCustomSearchScope($customSearchScope)
            ->setSingleGroupSearchScope($singleGroupSearchScope)
            ->setOneDriveSearchScope($oneDriveSearchScope)
            ->setSingleLargeArchiveSearchScope($singleLargeArchiveSearchScope);
    }
    /**
     * Get PrimaryMailboxSearchScope value
     * @return \Ews\StructType\EwsPrimaryMailboxSearchScopeType|null
     */
    public function getPrimaryMailboxSearchScope()
    {
        return $this->PrimaryMailboxSearchScope;
    }
    /**
     * Set PrimaryMailboxSearchScope value
     * @param \Ews\StructType\EwsPrimaryMailboxSearchScopeType $primaryMailboxSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setPrimaryMailboxSearchScope(\Ews\StructType\EwsPrimaryMailboxSearchScopeType $primaryMailboxSearchScope = null)
    {
        $this->PrimaryMailboxSearchScope = $primaryMailboxSearchScope;
        return $this;
    }
    /**
     * Get LargeArchiveSearchScope value
     * @return \Ews\StructType\EwsLargeArchiveSearchScopeType|null
     */
    public function getLargeArchiveSearchScope()
    {
        return $this->LargeArchiveSearchScope;
    }
    /**
     * Set LargeArchiveSearchScope value
     * @param \Ews\StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setLargeArchiveSearchScope(\Ews\StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope = null)
    {
        $this->LargeArchiveSearchScope = $largeArchiveSearchScope;
        return $this;
    }
    /**
     * Get GroupSearchScope value
     * @return \Ews\StructType\EwsGroupSearchScopeType|null
     */
    public function getGroupSearchScope()
    {
        return $this->GroupSearchScope;
    }
    /**
     * Set GroupSearchScope value
     * @param \Ews\StructType\EwsGroupSearchScopeType $groupSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setGroupSearchScope(\Ews\StructType\EwsGroupSearchScopeType $groupSearchScope = null)
    {
        $this->GroupSearchScope = $groupSearchScope;
        return $this;
    }
    /**
     * Get CustomSearchScope value
     * @return \Ews\StructType\EwsCustomSearchScopeType[]|null
     */
    public function getCustomSearchScope()
    {
        return $this->CustomSearchScope;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomSearchScope method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomSearchScope method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomSearchScopeForArrayConstraintsFromSetCustomSearchScope(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchScopeTypeCustomSearchScopeItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchScopeTypeCustomSearchScopeItem instanceof \Ews\StructType\EwsCustomSearchScopeType) {
                $invalidValues[] = is_object($arrayOfSearchScopeTypeCustomSearchScopeItem) ? get_class($arrayOfSearchScopeTypeCustomSearchScopeItem) : sprintf('%s(%s)', gettype($arrayOfSearchScopeTypeCustomSearchScopeItem), var_export($arrayOfSearchScopeTypeCustomSearchScopeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomSearchScope property can only contain items of type \Ews\StructType\EwsCustomSearchScopeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CustomSearchScope value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCustomSearchScopeType[] $customSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setCustomSearchScope(array $customSearchScope = array())
    {
        // validation for constraint: array
        if ('' !== ($customSearchScopeArrayErrorMessage = self::validateCustomSearchScopeForArrayConstraintsFromSetCustomSearchScope($customSearchScope))) {
            throw new \InvalidArgumentException($customSearchScopeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($customSearchScope) && count($customSearchScope) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($customSearchScope)), __LINE__);
        }
        $this->CustomSearchScope = $customSearchScope;
        return $this;
    }
    /**
     * Add item to CustomSearchScope value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCustomSearchScopeType $item
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function addToCustomSearchScope(\Ews\StructType\EwsCustomSearchScopeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsCustomSearchScopeType) {
            throw new \InvalidArgumentException(sprintf('The CustomSearchScope property can only contain items of type \Ews\StructType\EwsCustomSearchScopeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->CustomSearchScope) && count($this->CustomSearchScope) >= 4) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->CustomSearchScope)), __LINE__);
        }
        $this->CustomSearchScope[] = $item;
        return $this;
    }
    /**
     * Get SingleGroupSearchScope value
     * @return \Ews\StructType\EwsSingleGroupSearchScopeType|null
     */
    public function getSingleGroupSearchScope()
    {
        return $this->SingleGroupSearchScope;
    }
    /**
     * Set SingleGroupSearchScope value
     * @param \Ews\StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setSingleGroupSearchScope(\Ews\StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope = null)
    {
        $this->SingleGroupSearchScope = $singleGroupSearchScope;
        return $this;
    }
    /**
     * Get OneDriveSearchScope value
     * @return \Ews\StructType\EwsOneDriveSearchScopeType|null
     */
    public function getOneDriveSearchScope()
    {
        return $this->OneDriveSearchScope;
    }
    /**
     * Set OneDriveSearchScope value
     * @param \Ews\StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setOneDriveSearchScope(\Ews\StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope = null)
    {
        $this->OneDriveSearchScope = $oneDriveSearchScope;
        return $this;
    }
    /**
     * Get SingleLargeArchiveSearchScope value
     * @return \Ews\StructType\EwsSingleLargeArchiveSearchScopeType|null
     */
    public function getSingleLargeArchiveSearchScope()
    {
        return $this->SingleLargeArchiveSearchScope;
    }
    /**
     * Set SingleLargeArchiveSearchScope value
     * @param \Ews\StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setSingleLargeArchiveSearchScope(\Ews\StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope = null)
    {
        $this->SingleLargeArchiveSearchScope = $singleLargeArchiveSearchScope;
        return $this;
    }
}
