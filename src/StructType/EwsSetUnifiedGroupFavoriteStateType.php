<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupFavoriteStateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupFavoriteStateType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The IsFavoriteUnifiedGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFavoriteUnifiedGroup = null;
    /**
     * Constructor method for SetUnifiedGroupFavoriteStateType
     * @uses EwsSetUnifiedGroupFavoriteStateType::setIsFavoriteUnifiedGroup()
     * @param bool $isFavoriteUnifiedGroup
     */
    public function __construct(?bool $isFavoriteUnifiedGroup = null)
    {
        $this
            ->setIsFavoriteUnifiedGroup($isFavoriteUnifiedGroup);
    }
    /**
     * Get IsFavoriteUnifiedGroup value
     * @return bool|null
     */
    public function getIsFavoriteUnifiedGroup(): ?bool
    {
        return $this->IsFavoriteUnifiedGroup;
    }
    /**
     * Set IsFavoriteUnifiedGroup value
     * @param bool $isFavoriteUnifiedGroup
     * @return \StructType\EwsSetUnifiedGroupFavoriteStateType
     */
    public function setIsFavoriteUnifiedGroup(?bool $isFavoriteUnifiedGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFavoriteUnifiedGroup) && !is_bool($isFavoriteUnifiedGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFavoriteUnifiedGroup, true), gettype($isFavoriteUnifiedGroup)), __LINE__);
        }
        $this->IsFavoriteUnifiedGroup = $isFavoriteUnifiedGroup;
        
        return $this;
    }
}
