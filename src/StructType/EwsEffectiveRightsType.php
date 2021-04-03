<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EffectiveRightsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEffectiveRightsType extends AbstractStructBase
{
    /**
     * The CreateAssociated
     * @var bool|null
     */
    protected ?bool $CreateAssociated = null;
    /**
     * The CreateContents
     * @var bool|null
     */
    protected ?bool $CreateContents = null;
    /**
     * The CreateHierarchy
     * @var bool|null
     */
    protected ?bool $CreateHierarchy = null;
    /**
     * The Delete
     * @var bool|null
     */
    protected ?bool $Delete = null;
    /**
     * The Modify
     * @var bool|null
     */
    protected ?bool $Modify = null;
    /**
     * The Read
     * @var bool|null
     */
    protected ?bool $Read = null;
    /**
     * The ViewPrivateItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ViewPrivateItems = null;
    /**
     * Constructor method for EffectiveRightsType
     * @uses EwsEffectiveRightsType::setCreateAssociated()
     * @uses EwsEffectiveRightsType::setCreateContents()
     * @uses EwsEffectiveRightsType::setCreateHierarchy()
     * @uses EwsEffectiveRightsType::setDelete()
     * @uses EwsEffectiveRightsType::setModify()
     * @uses EwsEffectiveRightsType::setRead()
     * @uses EwsEffectiveRightsType::setViewPrivateItems()
     * @param bool $createAssociated
     * @param bool $createContents
     * @param bool $createHierarchy
     * @param bool $delete
     * @param bool $modify
     * @param bool $read
     * @param bool $viewPrivateItems
     */
    public function __construct(?bool $createAssociated = null, ?bool $createContents = null, ?bool $createHierarchy = null, ?bool $delete = null, ?bool $modify = null, ?bool $read = null, ?bool $viewPrivateItems = null)
    {
        $this
            ->setCreateAssociated($createAssociated)
            ->setCreateContents($createContents)
            ->setCreateHierarchy($createHierarchy)
            ->setDelete($delete)
            ->setModify($modify)
            ->setRead($read)
            ->setViewPrivateItems($viewPrivateItems);
    }
    /**
     * Get CreateAssociated value
     * @return bool|null
     */
    public function getCreateAssociated(): ?bool
    {
        return $this->CreateAssociated;
    }
    /**
     * Set CreateAssociated value
     * @param bool $createAssociated
     * @return \StructType\EwsEffectiveRightsType
     */
    public function setCreateAssociated(?bool $createAssociated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createAssociated) && !is_bool($createAssociated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createAssociated, true), gettype($createAssociated)), __LINE__);
        }
        $this->CreateAssociated = $createAssociated;
        
        return $this;
    }
    /**
     * Get CreateContents value
     * @return bool|null
     */
    public function getCreateContents(): ?bool
    {
        return $this->CreateContents;
    }
    /**
     * Set CreateContents value
     * @param bool $createContents
     * @return \StructType\EwsEffectiveRightsType
     */
    public function setCreateContents(?bool $createContents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createContents) && !is_bool($createContents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createContents, true), gettype($createContents)), __LINE__);
        }
        $this->CreateContents = $createContents;
        
        return $this;
    }
    /**
     * Get CreateHierarchy value
     * @return bool|null
     */
    public function getCreateHierarchy(): ?bool
    {
        return $this->CreateHierarchy;
    }
    /**
     * Set CreateHierarchy value
     * @param bool $createHierarchy
     * @return \StructType\EwsEffectiveRightsType
     */
    public function setCreateHierarchy(?bool $createHierarchy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createHierarchy) && !is_bool($createHierarchy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createHierarchy, true), gettype($createHierarchy)), __LINE__);
        }
        $this->CreateHierarchy = $createHierarchy;
        
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete(): ?bool
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\EwsEffectiveRightsType
     */
    public function setDelete(?bool $delete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        
        return $this;
    }
    /**
     * Get Modify value
     * @return bool|null
     */
    public function getModify(): ?bool
    {
        return $this->Modify;
    }
    /**
     * Set Modify value
     * @param bool $modify
     * @return \StructType\EwsEffectiveRightsType
     */
    public function setModify(?bool $modify = null): self
    {
        // validation for constraint: boolean
        if (!is_null($modify) && !is_bool($modify)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($modify, true), gettype($modify)), __LINE__);
        }
        $this->Modify = $modify;
        
        return $this;
    }
    /**
     * Get Read value
     * @return bool|null
     */
    public function getRead(): ?bool
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \StructType\EwsEffectiveRightsType
     */
    public function setRead(?bool $read = null): self
    {
        // validation for constraint: boolean
        if (!is_null($read) && !is_bool($read)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($read, true), gettype($read)), __LINE__);
        }
        $this->Read = $read;
        
        return $this;
    }
    /**
     * Get ViewPrivateItems value
     * @return bool|null
     */
    public function getViewPrivateItems(): ?bool
    {
        return $this->ViewPrivateItems;
    }
    /**
     * Set ViewPrivateItems value
     * @param bool $viewPrivateItems
     * @return \StructType\EwsEffectiveRightsType
     */
    public function setViewPrivateItems(?bool $viewPrivateItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($viewPrivateItems) && !is_bool($viewPrivateItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($viewPrivateItems, true), gettype($viewPrivateItems)), __LINE__);
        }
        $this->ViewPrivateItems = $viewPrivateItems;
        
        return $this;
    }
}
