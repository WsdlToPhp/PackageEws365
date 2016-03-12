<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReplyBody StructType
 * Meta informations extracted from the WSDL
 * - ref: xml:lang
 * - use: optional
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReplyBody extends AbstractStructBase
{
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The lang
     * @var UNKNOWN
     */
    public $lang;
    /**
     * Constructor method for ReplyBody
     * @uses EwsReplyBody::setMessage()
     * @uses EwsReplyBody::setLang()
     * @param string $message
     * @param UNKNOWN $lang
     */
    public function __construct($message = null, UNKNOWN $lang = null)
    {
        $this
            ->setMessage($message)
            ->setLang($lang);
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Ews\StructType\EwsReplyBody
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get lang value
     * @return UNKNOWN|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param UNKNOWN $lang
     * @return \Ews\StructType\EwsReplyBody
     */
    public function setLang(UNKNOWN $lang = null)
    {
        $this->lang = $lang;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsReplyBody
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
