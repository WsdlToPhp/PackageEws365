<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmartResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSmartResponseType extends EwsSmartResponseBaseType
{
    /**
     * The NewBodyContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $NewBodyContent;
    /**
     * Constructor method for SmartResponseType
     * @uses EwsSmartResponseType::setNewBodyContent()
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
     * @return \Ews\StructType\EwsSmartResponseType
     */
    public function setNewBodyContent(\Ews\StructType\EwsBodyType $newBodyContent = null)
    {
        $this->NewBodyContent = $newBodyContent;
        return $this;
    }
}
