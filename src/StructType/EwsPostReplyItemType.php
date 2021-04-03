<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsBodyType|null
     */
    protected ?\StructType\EwsBodyType $NewBodyContent = null;
    /**
     * Constructor method for PostReplyItemType
     * @uses EwsPostReplyItemType::setNewBodyContent()
     * @param \StructType\EwsBodyType $newBodyContent
     */
    public function __construct(?\StructType\EwsBodyType $newBodyContent = null)
    {
        $this
            ->setNewBodyContent($newBodyContent);
    }
    /**
     * Get NewBodyContent value
     * @return \StructType\EwsBodyType|null
     */
    public function getNewBodyContent(): ?\StructType\EwsBodyType
    {
        return $this->NewBodyContent;
    }
    /**
     * Set NewBodyContent value
     * @param \StructType\EwsBodyType $newBodyContent
     * @return \StructType\EwsPostReplyItemType
     */
    public function setNewBodyContent(?\StructType\EwsBodyType $newBodyContent = null): self
    {
        $this->NewBodyContent = $newBodyContent;
        
        return $this;
    }
}
