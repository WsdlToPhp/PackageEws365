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
     * Meta information extracted from the WSDL
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
}
