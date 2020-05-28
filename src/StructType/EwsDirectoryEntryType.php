<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Id;
    /**
     * Constructor method for DirectoryEntryType
     * @uses EwsDirectoryEntryType::setId()
     * @param \Ews\StructType\EwsEmailAddressType $id
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param \Ews\StructType\EwsEmailAddressType $id
     * @return \Ews\StructType\EwsDirectoryEntryType
     */
    public function setId(\Ews\StructType\EwsEmailAddressType $id = null)
    {
        $this->Id = $id;
        return $this;
    }
}
