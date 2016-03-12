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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPrimaryMailboxSearchScopeType
     */
    public $PrimaryMailboxSearchScope;
    /**
     * The LargeArchiveSearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsLargeArchiveSearchScopeType
     */
    public $LargeArchiveSearchScope;
    /**
     * The GroupSearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsGroupSearchScopeType
     */
    public $GroupSearchScope;
    /**
     * The CustomSearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCustomSearchScopeType[]
     */
    public $CustomSearchScope;
    /**
     * The SingleGroupSearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleGroupSearchScopeType
     */
    public $SingleGroupSearchScope;
    /**
     * The OneDriveSearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsOneDriveSearchScopeType
     */
    public $OneDriveSearchScope;
    /**
     * The SingleLargeArchiveSearchScope
     * Meta informations extracted from the WSDL
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
     * @param \Ews\StructType\EwsPrimaryMailboxSearchScopeType
     * $primaryMailboxSearchScope
     * @param \Ews\StructType\EwsLargeArchiveSearchScopeType $largeArchiveSearchScope
     * @param \Ews\StructType\EwsGroupSearchScopeType $groupSearchScope
     * @param \Ews\StructType\EwsCustomSearchScopeType[] $customSearchScope
     * @param \Ews\StructType\EwsSingleGroupSearchScopeType $singleGroupSearchScope
     * @param \Ews\StructType\EwsOneDriveSearchScopeType $oneDriveSearchScope
     * @param \Ews\StructType\EwsSingleLargeArchiveSearchScopeType
     * $singleLargeArchiveSearchScope
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
     * @param \Ews\StructType\EwsPrimaryMailboxSearchScopeType
     * $primaryMailboxSearchScope
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
     * Set CustomSearchScope value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCustomSearchScopeType[] $customSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setCustomSearchScope(array $customSearchScope = array())
    {
        foreach ($customSearchScope as $arrayOfSearchScopeTypeCustomSearchScopeItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchScopeTypeCustomSearchScopeItem instanceof \Ews\StructType\EwsCustomSearchScopeType) {
                throw new \InvalidArgumentException(sprintf('The CustomSearchScope property can only contain items of \Ews\StructType\EwsCustomSearchScopeType, "%s" given', is_object($arrayOfSearchScopeTypeCustomSearchScopeItem) ? get_class($arrayOfSearchScopeTypeCustomSearchScopeItem) : gettype($arrayOfSearchScopeTypeCustomSearchScopeItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The CustomSearchScope property can only contain items of \Ews\StructType\EwsCustomSearchScopeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @param \Ews\StructType\EwsSingleLargeArchiveSearchScopeType
     * $singleLargeArchiveSearchScope
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function setSingleLargeArchiveSearchScope(\Ews\StructType\EwsSingleLargeArchiveSearchScopeType $singleLargeArchiveSearchScope = null)
    {
        $this->SingleLargeArchiveSearchScope = $singleLargeArchiveSearchScope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
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
