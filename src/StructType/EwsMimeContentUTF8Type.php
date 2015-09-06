<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MimeContentUTF8Type StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMimeContentUTF8Type extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The CharacterSet
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CharacterSet;
    /**
     * Constructor method for MimeContentUTF8Type
     * @uses EwsMimeContentUTF8Type::set_()
     * @uses EwsMimeContentUTF8Type::setCharacterSet()
     * @param string $_
     * @param string $characterSet
     */
    public function __construct($_ = null, $characterSet = null)
    {
        $this
            ->set_($_)
            ->setCharacterSet($characterSet);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsMimeContentUTF8Type
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get CharacterSet value
     * @return string|null
     */
    public function getCharacterSet()
    {
        return $this->CharacterSet;
    }
    /**
     * Set CharacterSet value
     * @param string $characterSet
     * @return \Ews\StructType\EwsMimeContentUTF8Type
     */
    public function setCharacterSet($characterSet = null)
    {
        $this->CharacterSet = $characterSet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMimeContentUTF8Type
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
