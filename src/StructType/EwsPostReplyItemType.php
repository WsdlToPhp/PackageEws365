<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostReplyItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPostReplyItemType extends EwsPostReplyItemBaseType
{
    /**
     * The NewBodyContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $NewBodyContent;
    /**
     * Constructor method for PostReplyItemType
     * @uses EwsPostReplyItemType::setNewBodyContent()
     * @param \Ews\StructType\EwsBodyType $newBodyContent
     */
    public function __construct(\Ews\StructType\EwsBodyType $newBodyContent = null)
    {
        $this
            ->setNewBodyContent($newBodyContent);
    }
    /**
     * Get NewBodyContent value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getNewBodyContent()
    {
        return $this->NewBodyContent;
    }
    /**
     * Set NewBodyContent value
     * @param \Ews\StructType\EwsBodyType $newBodyContent
     * @return \Ews\StructType\EwsPostReplyItemType
     */
    public function setNewBodyContent(\Ews\StructType\EwsBodyType $newBodyContent = null)
    {
        $this->NewBodyContent = $newBodyContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPostReplyItemType
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
