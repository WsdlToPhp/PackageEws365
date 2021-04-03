<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsPrimaryMailboxSearchScopeType|null
     */
    protected ?\StructType\EwsPrimaryMailboxSearchScopeType $PrimaryMailboxSearchScope = null;
    /**
     * The LargeArchiveSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsLargeArchiveSearchScopeType|null
     */
    protected ?\StructType\EwsLargeArchiveSearchScopeType $LargeArchiveSearchScope = null;
    /**
     * The GroupSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsGroupSearchScopeType|null
     */
    protected ?\StructType\EwsGroupSearchScopeType $GroupSearchScope = null;
    /**
     * The CustomSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \StructType\EwsCustomSearchScopeType[]
     */
    protected array $CustomSearchScope = [];
    /**
     * The SingleGroupSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSingleGroupSearchScopeType|null
     */
    protected ?\StructType\EwsSingleGroupSearchScopeType $SingleGroupSearchScope = null;
    /**
     * The OneDriveSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsOneDriveSearchScopeType|null
     */
    protected ?\StructType\EwsOneDriveSearchScopeType $OneDriveSearchScope = null;
    /**
     * The SingleLargeArchiveSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSingleLargeArchiveSearchScopeType|null
     */
    protected ?\StructType\EwsSingleLargeArchiveSearchScopeType $SingleLargeArchiveSearchScope = null;
    /**
     * Constructor method for ArrayOfSearchScopeType
     * @uses EwsArrayOfSearchScopeType::setPrimaryMailboxSearchScope()
     * @uses EwsArrayOfSearchScopeType::setLargeArchiveSearchScope()
     * @uses EwsArrayOfSearchScopeType::setGroupSearchScope()
     * @uses EwsArrayOfSearchScopeType::setCustomSearchScope()
     * @uses EwsArrayOfSearchScopeType::setSingleGroupSearchScope()
     * @uses EwsArrayOfSearchScopeType::setOneDriveSearchScope()
     * @uses EwsArrayOfSearchScopeType::setSingleLargeArchiveSearchScope()
     * @param \StructType\EwsPrimaryMailboxSearchScopeType $primaryMailboxSearchScope
     * @param \StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope
     * @param \StructType\EwsGroupSearchScopeType $groupSearchScope
     * @param \StructType\EwsCustomSearchScopeType[] $customSearchScope
     * @param \StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope
     * @param \StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope
     * @param \StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope
     */
    public function __construct(?\StructType\EwsPrimaryMailboxSearchScopeType $primaryMailboxSearchScope = null, ?\StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope = null, ?\StructType\EwsGroupSearchScopeType $groupSearchScope = null, array $customSearchScope = [], ?\StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope = null, ?\StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope = null, ?\StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope = null)
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
     * @return \StructType\EwsPrimaryMailboxSearchScopeType|null
     */
    public function getPrimaryMailboxSearchScope(): ?\StructType\EwsPrimaryMailboxSearchScopeType
    {
        return $this->PrimaryMailboxSearchScope;
    }
    /**
     * Set PrimaryMailboxSearchScope value
     * @param \StructType\EwsPrimaryMailboxSearchScopeType $primaryMailboxSearchScope
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function setPrimaryMailboxSearchScope(?\StructType\EwsPrimaryMailboxSearchScopeType $primaryMailboxSearchScope = null): self
    {
        $this->PrimaryMailboxSearchScope = $primaryMailboxSearchScope;
        
        return $this;
    }
    /**
     * Get LargeArchiveSearchScope value
     * @return \StructType\EwsLargeArchiveSearchScopeType|null
     */
    public function getLargeArchiveSearchScope(): ?\StructType\EwsLargeArchiveSearchScopeType
    {
        return $this->LargeArchiveSearchScope;
    }
    /**
     * Set LargeArchiveSearchScope value
     * @param \StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function setLargeArchiveSearchScope(?\StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope = null): self
    {
        $this->LargeArchiveSearchScope = $largeArchiveSearchScope;
        
        return $this;
    }
    /**
     * Get GroupSearchScope value
     * @return \StructType\EwsGroupSearchScopeType|null
     */
    public function getGroupSearchScope(): ?\StructType\EwsGroupSearchScopeType
    {
        return $this->GroupSearchScope;
    }
    /**
     * Set GroupSearchScope value
     * @param \StructType\EwsGroupSearchScopeType $groupSearchScope
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function setGroupSearchScope(?\StructType\EwsGroupSearchScopeType $groupSearchScope = null): self
    {
        $this->GroupSearchScope = $groupSearchScope;
        
        return $this;
    }
    /**
     * Get CustomSearchScope value
     * @return \StructType\EwsCustomSearchScopeType[]
     */
    public function getCustomSearchScope(): array
    {
        return $this->CustomSearchScope;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomSearchScope method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomSearchScope method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomSearchScopeForArrayConstraintsFromSetCustomSearchScope(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSearchScopeTypeCustomSearchScopeItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchScopeTypeCustomSearchScopeItem instanceof \StructType\EwsCustomSearchScopeType) {
                $invalidValues[] = is_object($arrayOfSearchScopeTypeCustomSearchScopeItem) ? get_class($arrayOfSearchScopeTypeCustomSearchScopeItem) : sprintf('%s(%s)', gettype($arrayOfSearchScopeTypeCustomSearchScopeItem), var_export($arrayOfSearchScopeTypeCustomSearchScopeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomSearchScope property can only contain items of type \StructType\EwsCustomSearchScopeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomSearchScope value
     * @throws InvalidArgumentException
     * @param \StructType\EwsCustomSearchScopeType[] $customSearchScope
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function setCustomSearchScope(array $customSearchScope = []): self
    {
        // validation for constraint: array
        if ('' !== ($customSearchScopeArrayErrorMessage = self::validateCustomSearchScopeForArrayConstraintsFromSetCustomSearchScope($customSearchScope))) {
            throw new InvalidArgumentException($customSearchScopeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($customSearchScope) && count($customSearchScope) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($customSearchScope)), __LINE__);
        }
        $this->CustomSearchScope = $customSearchScope;
        
        return $this;
    }
    /**
     * Add item to CustomSearchScope value
     * @throws InvalidArgumentException
     * @param \StructType\EwsCustomSearchScopeType $item
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function addToCustomSearchScope(\StructType\EwsCustomSearchScopeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsCustomSearchScopeType) {
            throw new InvalidArgumentException(sprintf('The CustomSearchScope property can only contain items of type \StructType\EwsCustomSearchScopeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->CustomSearchScope) && count($this->CustomSearchScope) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->CustomSearchScope)), __LINE__);
        }
        $this->CustomSearchScope[] = $item;
        
        return $this;
    }
    /**
     * Get SingleGroupSearchScope value
     * @return \StructType\EwsSingleGroupSearchScopeType|null
     */
    public function getSingleGroupSearchScope(): ?\StructType\EwsSingleGroupSearchScopeType
    {
        return $this->SingleGroupSearchScope;
    }
    /**
     * Set SingleGroupSearchScope value
     * @param \StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function setSingleGroupSearchScope(?\StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope = null): self
    {
        $this->SingleGroupSearchScope = $singleGroupSearchScope;
        
        return $this;
    }
    /**
     * Get OneDriveSearchScope value
     * @return \StructType\EwsOneDriveSearchScopeType|null
     */
    public function getOneDriveSearchScope(): ?\StructType\EwsOneDriveSearchScopeType
    {
        return $this->OneDriveSearchScope;
    }
    /**
     * Set OneDriveSearchScope value
     * @param \StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function setOneDriveSearchScope(?\StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope = null): self
    {
        $this->OneDriveSearchScope = $oneDriveSearchScope;
        
        return $this;
    }
    /**
     * Get SingleLargeArchiveSearchScope value
     * @return \StructType\EwsSingleLargeArchiveSearchScopeType|null
     */
    public function getSingleLargeArchiveSearchScope(): ?\StructType\EwsSingleLargeArchiveSearchScopeType
    {
        return $this->SingleLargeArchiveSearchScope;
    }
    /**
     * Set SingleLargeArchiveSearchScope value
     * @param \StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope
     * @return \StructType\EwsArrayOfSearchScopeType
     */
    public function setSingleLargeArchiveSearchScope(?\StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope = null): self
    {
        $this->SingleLargeArchiveSearchScope = $singleLargeArchiveSearchScope;
        
        return $this;
    }
}
