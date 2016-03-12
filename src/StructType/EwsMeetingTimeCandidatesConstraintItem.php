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
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingTimeCandidatesConstraintItem
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
