<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsArrayOfResolutionType
     */
    public $ResolutionSet;
    /**
     * Constructor method for ResolveNamesResponseMessageType
     * @uses EwsResolveNamesResponseMessageType::setResolutionSet()
     * @param \Ews\StructType\EwsArrayOfResolutionType $resolutionSet
     */
    public function __construct(\Ews\StructType\EwsArrayOfResolutionType $resolutionSet = null)
    {
        $this
            ->setResolutionSet($resolutionSet);
    }
    /**
     * Get ResolutionSet value
     * @return \Ews\StructType\EwsArrayOfResolutionType|null
     */
    public function getResolutionSet()
    {
        return $this->ResolutionSet;
    }
    /**
     * Set ResolutionSet value
     * @param \Ews\StructType\EwsArrayOfResolutionType $resolutionSet
     * @return \Ews\StructType\EwsResolveNamesResponseMessageType
     */
    public function setResolutionSet(\Ews\StructType\EwsArrayOfResolutionType $resolutionSet = null)
    {
        $this->ResolutionSet = $resolutionSet;
        return $this;
    }
}
