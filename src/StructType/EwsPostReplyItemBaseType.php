<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostReplyItemBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPostReplyItemBaseType extends AbstractStructBase
{
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsBodyType|null
     */
    protected ?\StructType\EwsBodyType $Body = null;
    /**
     * The ReferenceItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ReferenceItemId = null;
    /**
     * The ObjectName
     * Meta information extracted from the WSDL
     * - use: prohibited
     * @var string|null
     */
    protected ?string $ObjectName = null;
    /**
     * Constructor method for PostReplyItemBaseType
     * @uses EwsPostReplyItemBaseType::setSubject()
     * @uses EwsPostReplyItemBaseType::setBody()
     * @uses EwsPostReplyItemBaseType::setReferenceItemId()
     * @uses EwsPostReplyItemBaseType::setObjectName()
     * @param string $subject
     * @param \StructType\EwsBodyType $body
     * @param \StructType\EwsItemIdType $referenceItemId
     * @param string $objectName
     */
    public function __construct(?string $subject = null, ?\StructType\EwsBodyType $body = null, ?\StructType\EwsItemIdType $referenceItemId = null, ?string $objectName = null)
    {
        $this
            ->setSubject($subject)
            ->setBody($body)
            ->setReferenceItemId($referenceItemId)
            ->setObjectName($objectName);
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsPostReplyItemBaseType
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
        return $this;
    }
    /**
     * Get Body value
     * @return \StructType\EwsBodyType|null
     */
    public function getBody(): ?\StructType\EwsBodyType
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \StructType\EwsBodyType $body
     * @return \StructType\EwsPostReplyItemBaseType
     */
    public function setBody(?\StructType\EwsBodyType $body = null): self
    {
        $this->Body = $body;
        
        return $this;
    }
    /**
     * Get ReferenceItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getReferenceItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ReferenceItemId;
    }
    /**
     * Set ReferenceItemId value
     * @param \StructType\EwsItemIdType $referenceItemId
     * @return \StructType\EwsPostReplyItemBaseType
     */
    public function setReferenceItemId(?\StructType\EwsItemIdType $referenceItemId = null): self
    {
        $this->ReferenceItemId = $referenceItemId;
        
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName(): ?string
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \StructType\EwsPostReplyItemBaseType
     */
    public function setObjectName(?string $objectName = null): self
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectName, true), gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        
        return $this;
    }
}
