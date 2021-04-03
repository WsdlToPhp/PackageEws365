<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmGraphRelationshipResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindXrmGraphRelationshipResponseMessageType extends EwsResponseMessageType
{
    /**
     * The XrmRelationships
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    protected \ArrayType\EwsArrayOfXrmRelationshipBaseType $XrmRelationships;
    /**
     * Constructor method for FindXrmGraphRelationshipResponseMessageType
     * @uses EwsFindXrmGraphRelationshipResponseMessageType::setXrmRelationships()
     * @param \ArrayType\EwsArrayOfXrmRelationshipBaseType $xrmRelationships
     */
    public function __construct(\ArrayType\EwsArrayOfXrmRelationshipBaseType $xrmRelationships)
    {
        $this
            ->setXrmRelationships($xrmRelationships);
    }
    /**
     * Get XrmRelationships value
     * @return \ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function getXrmRelationships(): \ArrayType\EwsArrayOfXrmRelationshipBaseType
    {
        return $this->XrmRelationships;
    }
    /**
     * Set XrmRelationships value
     * @param \ArrayType\EwsArrayOfXrmRelationshipBaseType $xrmRelationships
     * @return \StructType\EwsFindXrmGraphRelationshipResponseMessageType
     */
    public function setXrmRelationships(\ArrayType\EwsArrayOfXrmRelationshipBaseType $xrmRelationships): self
    {
        $this->XrmRelationships = $xrmRelationships;
        
        return $this;
    }
}
