<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxLocatorType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxLocatorType extends AbstractStructBase
{
    /**
     * The ExternalDirectoryObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalDirectoryObjectId = null;
    /**
     * The LegacyDn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LegacyDn = null;
    /**
     * Constructor method for MailboxLocatorType
     * @uses EwsMailboxLocatorType::setExternalDirectoryObjectId()
     * @uses EwsMailboxLocatorType::setLegacyDn()
     * @param string $externalDirectoryObjectId
     * @param string $legacyDn
     */
    public function __construct(?string $externalDirectoryObjectId = null, ?string $legacyDn = null)
    {
        $this
            ->setExternalDirectoryObjectId($externalDirectoryObjectId)
            ->setLegacyDn($legacyDn);
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId(): ?string
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \StructType\EwsMailboxLocatorType
     */
    public function setExternalDirectoryObjectId(?string $externalDirectoryObjectId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalDirectoryObjectId) && !is_string($externalDirectoryObjectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDirectoryObjectId, true), gettype($externalDirectoryObjectId)), __LINE__);
        }
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        
        return $this;
    }
    /**
     * Get LegacyDn value
     * @return string|null
     */
    public function getLegacyDn(): ?string
    {
        return $this->LegacyDn;
    }
    /**
     * Set LegacyDn value
     * @param string $legacyDn
     * @return \StructType\EwsMailboxLocatorType
     */
    public function setLegacyDn(?string $legacyDn = null): self
    {
        // validation for constraint: string
        if (!is_null($legacyDn) && !is_string($legacyDn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legacyDn, true), gettype($legacyDn)), __LINE__);
        }
        $this->LegacyDn = $legacyDn;
        
        return $this;
    }
}
