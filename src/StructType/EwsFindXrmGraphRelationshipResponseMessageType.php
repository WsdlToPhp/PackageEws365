<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public $XrmRelationships;
    /**
     * Constructor method for FindXrmGraphRelationshipResponseMessageType
     * @uses EwsFindXrmGraphRelationshipResponseMessageType::setXrmRelationships()
     * @param \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType $xrmRelationships
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType $xrmRelationships = null)
    {
        $this
            ->setXrmRelationships($xrmRelationships);
    }
    /**
     * Get XrmRelationships value
     * @return \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function getXrmRelationships()
    {
        return $this->XrmRelationships;
    }
    /**
     * Set XrmRelationships value
     * @param \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType $xrmRelationships
     * @return \Ews\StructType\EwsFindXrmGraphRelationshipResponseMessageType
     */
    public function setXrmRelationships(\Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType $xrmRelationships = null)
    {
        $this->XrmRelationships = $xrmRelationships;
        return $this;
    }
}
