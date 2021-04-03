<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactsViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactsViewType extends EwsBasePagingType
{
    /**
     * The InitialName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $InitialName = null;
    /**
     * The FinalName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FinalName = null;
    /**
     * Constructor method for ContactsViewType
     * @uses EwsContactsViewType::setInitialName()
     * @uses EwsContactsViewType::setFinalName()
     * @param string $initialName
     * @param string $finalName
     */
    public function __construct(?string $initialName = null, ?string $finalName = null)
    {
        $this
            ->setInitialName($initialName)
            ->setFinalName($finalName);
    }
    /**
     * Get InitialName value
     * @return string|null
     */
    public function getInitialName(): ?string
    {
        return $this->InitialName;
    }
    /**
     * Set InitialName value
     * @param string $initialName
     * @return \StructType\EwsContactsViewType
     */
    public function setInitialName(?string $initialName = null): self
    {
        // validation for constraint: string
        if (!is_null($initialName) && !is_string($initialName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initialName, true), gettype($initialName)), __LINE__);
        }
        $this->InitialName = $initialName;
        
        return $this;
    }
    /**
     * Get FinalName value
     * @return string|null
     */
    public function getFinalName(): ?string
    {
        return $this->FinalName;
    }
    /**
     * Set FinalName value
     * @param string $finalName
     * @return \StructType\EwsContactsViewType
     */
    public function setFinalName(?string $finalName = null): self
    {
        // validation for constraint: string
        if (!is_null($finalName) && !is_string($finalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalName, true), gettype($finalName)), __LINE__);
        }
        $this->FinalName = $finalName;
        
        return $this;
    }
}
