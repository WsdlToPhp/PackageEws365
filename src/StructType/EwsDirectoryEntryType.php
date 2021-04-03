<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectoryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDirectoryEntryType extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Id = null;
    /**
     * Constructor method for DirectoryEntryType
     * @uses EwsDirectoryEntryType::setId()
     * @param \StructType\EwsEmailAddressType $id
     */
    public function __construct(?\StructType\EwsEmailAddressType $id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getId(): ?\StructType\EwsEmailAddressType
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param \StructType\EwsEmailAddressType $id
     * @return \StructType\EwsDirectoryEntryType
     */
    public function setId(?\StructType\EwsEmailAddressType $id = null): self
    {
        $this->Id = $id;
        
        return $this;
    }
}
