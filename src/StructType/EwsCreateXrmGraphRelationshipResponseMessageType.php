<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateXrmGraphRelationshipResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateXrmGraphRelationshipResponseMessageType extends EwsResponseMessageType
{
    /**
     * The LinkId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $LinkId;
    /**
     * Constructor method for CreateXrmGraphRelationshipResponseMessageType
     * @uses EwsCreateXrmGraphRelationshipResponseMessageType::setLinkId()
     * @param string $linkId
     */
    public function __construct(string $linkId)
    {
        $this
            ->setLinkId($linkId);
    }
    /**
     * Get LinkId value
     * @return string
     */
    public function getLinkId(): string
    {
        return $this->LinkId;
    }
    /**
     * Set LinkId value
     * @param string $linkId
     * @return \StructType\EwsCreateXrmGraphRelationshipResponseMessageType
     */
    public function setLinkId(string $linkId): self
    {
        // validation for constraint: string
        if (!is_null($linkId) && !is_string($linkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkId, true), gettype($linkId)), __LINE__);
        }
        $this->LinkId = $linkId;
        
        return $this;
    }
}
