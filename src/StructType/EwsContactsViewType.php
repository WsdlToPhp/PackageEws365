<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactsViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactsViewType extends EwsBasePagingType
{
    /**
     * The InitialName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $InitialName;
    /**
     * The FinalName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $FinalName;
    /**
     * Constructor method for ContactsViewType
     * @uses EwsContactsViewType::setInitialName()
     * @uses EwsContactsViewType::setFinalName()
     * @param string $initialName
     * @param string $finalName
     */
    public function __construct($initialName = null, $finalName = null)
    {
        $this
            ->setInitialName($initialName)
            ->setFinalName($finalName);
    }
    /**
     * Get InitialName value
     * @return string|null
     */
    public function getInitialName()
    {
        return $this->InitialName;
    }
    /**
     * Set InitialName value
     * @param string $initialName
     * @return \Ews\StructType\EwsContactsViewType
     */
    public function setInitialName($initialName = null)
    {
        $this->InitialName = $initialName;
        return $this;
    }
    /**
     * Get FinalName value
     * @return string|null
     */
    public function getFinalName()
    {
        return $this->FinalName;
    }
    /**
     * Set FinalName value
     * @param string $finalName
     * @return \Ews\StructType\EwsContactsViewType
     */
    public function setFinalName($finalName = null)
    {
        $this->FinalName = $finalName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContactsViewType
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
