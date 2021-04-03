<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrimaryMailboxSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPrimaryMailboxSearchScopeType extends AbstractStructBase
{
    /**
     * The FolderScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSearchFolderScopeType|null
     */
    protected ?\StructType\EwsSearchFolderScopeType $FolderScope = null;
    /**
     * The IsDeepTraversal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDeepTraversal = null;
    /**
     * Constructor method for PrimaryMailboxSearchScopeType
     * @uses EwsPrimaryMailboxSearchScopeType::setFolderScope()
     * @uses EwsPrimaryMailboxSearchScopeType::setIsDeepTraversal()
     * @param \StructType\EwsSearchFolderScopeType $folderScope
     * @param bool $isDeepTraversal
     */
    public function __construct(?\StructType\EwsSearchFolderScopeType $folderScope = null, ?bool $isDeepTraversal = null)
    {
        $this
            ->setFolderScope($folderScope)
            ->setIsDeepTraversal($isDeepTraversal);
    }
    /**
     * Get FolderScope value
     * @return \StructType\EwsSearchFolderScopeType|null
     */
    public function getFolderScope(): ?\StructType\EwsSearchFolderScopeType
    {
        return $this->FolderScope;
    }
    /**
     * Set FolderScope value
     * @param \StructType\EwsSearchFolderScopeType $folderScope
     * @return \StructType\EwsPrimaryMailboxSearchScopeType
     */
    public function setFolderScope(?\StructType\EwsSearchFolderScopeType $folderScope = null): self
    {
        $this->FolderScope = $folderScope;
        
        return $this;
    }
    /**
     * Get IsDeepTraversal value
     * @return bool|null
     */
    public function getIsDeepTraversal(): ?bool
    {
        return $this->IsDeepTraversal;
    }
    /**
     * Set IsDeepTraversal value
     * @param bool $isDeepTraversal
     * @return \StructType\EwsPrimaryMailboxSearchScopeType
     */
    public function setIsDeepTraversal(?bool $isDeepTraversal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeepTraversal) && !is_bool($isDeepTraversal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeepTraversal, true), gettype($isDeepTraversal)), __LINE__);
        }
        $this->IsDeepTraversal = $isDeepTraversal;
        
        return $this;
    }
}
