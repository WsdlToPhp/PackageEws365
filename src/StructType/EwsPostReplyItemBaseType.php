<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Subject;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $Body;
    /**
     * The ReferenceItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ReferenceItemId;
    /**
     * The ObjectName
     * Meta information extracted from the WSDL
     * - use: prohibited
     * @var string
     */
    public $ObjectName;
    /**
     * Constructor method for PostReplyItemBaseType
     * @uses EwsPostReplyItemBaseType::setSubject()
     * @uses EwsPostReplyItemBaseType::setBody()
     * @uses EwsPostReplyItemBaseType::setReferenceItemId()
     * @uses EwsPostReplyItemBaseType::setObjectName()
     * @param string $subject
     * @param \Ews\StructType\EwsBodyType $body
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     * @param string $objectName
     */
    public function __construct($subject = null, \Ews\StructType\EwsBodyType $body = null, \Ews\StructType\EwsItemIdType $referenceItemId = null, $objectName = null)
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
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsPostReplyItemBaseType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get Body value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \Ews\StructType\EwsBodyType $body
     * @return \Ews\StructType\EwsPostReplyItemBaseType
     */
    public function setBody(\Ews\StructType\EwsBodyType $body = null)
    {
        $this->Body = $body;
        return $this;
    }
    /**
     * Get ReferenceItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getReferenceItemId()
    {
        return $this->ReferenceItemId;
    }
    /**
     * Set ReferenceItemId value
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     * @return \Ews\StructType\EwsPostReplyItemBaseType
     */
    public function setReferenceItemId(\Ews\StructType\EwsItemIdType $referenceItemId = null)
    {
        $this->ReferenceItemId = $referenceItemId;
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \Ews\StructType\EwsPostReplyItemBaseType
     */
    public function setObjectName($objectName = null)
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectName, true), gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        return $this;
    }
}
