<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResolveNamesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResolveNamesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ResolutionSet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsArrayOfResolutionType|null
     */
    protected ?\StructType\EwsArrayOfResolutionType $ResolutionSet = null;
    /**
     * Constructor method for ResolveNamesResponseMessageType
     * @uses EwsResolveNamesResponseMessageType::setResolutionSet()
     * @param \StructType\EwsArrayOfResolutionType $resolutionSet
     */
    public function __construct(?\StructType\EwsArrayOfResolutionType $resolutionSet = null)
    {
        $this
            ->setResolutionSet($resolutionSet);
    }
    /**
     * Get ResolutionSet value
     * @return \StructType\EwsArrayOfResolutionType|null
     */
    public function getResolutionSet(): ?\StructType\EwsArrayOfResolutionType
    {
        return $this->ResolutionSet;
    }
    /**
     * Set ResolutionSet value
     * @param \StructType\EwsArrayOfResolutionType $resolutionSet
     * @return \StructType\EwsResolveNamesResponseMessageType
     */
    public function setResolutionSet(?\StructType\EwsArrayOfResolutionType $resolutionSet = null): self
    {
        $this->ResolutionSet = $resolutionSet;
        
        return $this;
    }
}
