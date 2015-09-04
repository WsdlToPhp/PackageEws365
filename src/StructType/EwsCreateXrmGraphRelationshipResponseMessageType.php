<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateXrmGraphRelationshipResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsCreateXrmGraphRelationshipResponseMessageType extends EwsResponseMessageType
{
    /**
     * The LinkId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $LinkId;
    /**
     * Constructor method for CreateXrmGraphRelationshipResponseMessageType
     * @uses EwsCreateXrmGraphRelationshipResponseMessageType::setLinkId()
     * @param string $linkId
     */
    public function __construct($linkId = null)
    {
        $this
            ->setLinkId($linkId);
    }
    /**
     * Get LinkId value
     * @return string
     */
    public function getLinkId()
    {
        return $this->LinkId;
    }
    /**
     * Set LinkId value
     * @param string $linkId
     * @return \Ews\StructType\EwsCreateXrmGraphRelationshipResponseMessageType
     */
    public function setLinkId($linkId = null)
    {
        $this->LinkId = $linkId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateXrmGraphRelationshipResponseMessageType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
