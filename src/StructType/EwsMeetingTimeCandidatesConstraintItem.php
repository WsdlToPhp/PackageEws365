<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingTimeCandidatesConstraintItem StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingTimeCandidatesConstraintItem extends AbstractStructBase
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * Constructor method for MeetingTimeCandidatesConstraintItem
     * @uses EwsMeetingTimeCandidatesConstraintItem::setEmail()
     * @param string $email
     */
    public function __construct($email = null)
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \Ews\StructType\EwsMeetingTimeCandidatesConstraintItem
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
}
