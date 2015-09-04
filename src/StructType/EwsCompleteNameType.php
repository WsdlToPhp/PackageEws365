<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteNameType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsCompleteNameType extends AbstractStructBase
{
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MiddleName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The Suffix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Suffix;
    /**
     * The Initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Initials;
    /**
     * The FullName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FullName;
    /**
     * The Nickname
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Nickname;
    /**
     * The YomiFirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $YomiFirstName;
    /**
     * The YomiLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $YomiLastName;
    /**
     * Constructor method for CompleteNameType
     * @uses EwsCompleteNameType::setTitle()
     * @uses EwsCompleteNameType::setFirstName()
     * @uses EwsCompleteNameType::setMiddleName()
     * @uses EwsCompleteNameType::setLastName()
     * @uses EwsCompleteNameType::setSuffix()
     * @uses EwsCompleteNameType::setInitials()
     * @uses EwsCompleteNameType::setFullName()
     * @uses EwsCompleteNameType::setNickname()
     * @uses EwsCompleteNameType::setYomiFirstName()
     * @uses EwsCompleteNameType::setYomiLastName()
     * @param string $title
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $suffix
     * @param string $initials
     * @param string $fullName
     * @param string $nickname
     * @param string $yomiFirstName
     * @param string $yomiLastName
     */
    public function __construct($title = null, $firstName = null, $middleName = null, $lastName = null, $suffix = null, $initials = null, $fullName = null, $nickname = null, $yomiFirstName = null, $yomiLastName = null)
    {
        $this
            ->setTitle($title)
            ->setFirstName($firstName)
            ->setMiddleName($middleName)
            ->setLastName($lastName)
            ->setSuffix($suffix)
            ->setInitials($initials)
            ->setFullName($fullName)
            ->setNickname($nickname)
            ->setYomiFirstName($yomiFirstName)
            ->setYomiLastName($yomiLastName);
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setTitle($title = null)
    {
        $this->Title = $title;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setFirstName($firstName = null)
    {
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $middleName
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setMiddleName($middleName = null)
    {
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setLastName($lastName = null)
    {
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Suffix value
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->Suffix;
    }
    /**
     * Set Suffix value
     * @param string $suffix
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setSuffix($suffix = null)
    {
        $this->Suffix = $suffix;
        return $this;
    }
    /**
     * Get Initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param string $initials
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setInitials($initials = null)
    {
        $this->Initials = $initials;
        return $this;
    }
    /**
     * Get FullName value
     * @return string|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setFullName($fullName = null)
    {
        $this->FullName = $fullName;
        return $this;
    }
    /**
     * Get Nickname value
     * @return string|null
     */
    public function getNickname()
    {
        return $this->Nickname;
    }
    /**
     * Set Nickname value
     * @param string $nickname
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setNickname($nickname = null)
    {
        $this->Nickname = $nickname;
        return $this;
    }
    /**
     * Get YomiFirstName value
     * @return string|null
     */
    public function getYomiFirstName()
    {
        return $this->YomiFirstName;
    }
    /**
     * Set YomiFirstName value
     * @param string $yomiFirstName
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setYomiFirstName($yomiFirstName = null)
    {
        $this->YomiFirstName = $yomiFirstName;
        return $this;
    }
    /**
     * Get YomiLastName value
     * @return string|null
     */
    public function getYomiLastName()
    {
        return $this->YomiLastName;
    }
    /**
     * Set YomiLastName value
     * @param string $yomiLastName
     * @return \Ews\StructType\EwsCompleteNameType
     */
    public function setYomiLastName($yomiLastName = null)
    {
        $this->YomiLastName = $yomiLastName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCompleteNameType
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
