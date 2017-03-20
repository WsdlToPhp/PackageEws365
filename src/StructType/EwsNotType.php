<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNotType extends EwsSearchExpressionType
{
    /**
     * The Exists
     * @var \Ews\StructType\EwsExistsType
     */
    public $Exists;
    /**
     * The Excludes
     * @var \Ews\StructType\EwsExcludesType
     */
    public $Excludes;
    /**
     * The IsEqualTo
     * @var \Ews\StructType\EwsIsEqualToType
     */
    public $IsEqualTo;
    /**
     * The IsNotEqualTo
     * @var \Ews\StructType\EwsIsNotEqualToType
     */
    public $IsNotEqualTo;
    /**
     * The IsGreaterThan
     * @var \Ews\StructType\EwsIsGreaterThanType
     */
    public $IsGreaterThan;
    /**
     * The IsGreaterThanOrEqualTo
     * @var \Ews\StructType\EwsIsGreaterThanOrEqualToType
     */
    public $IsGreaterThanOrEqualTo;
    /**
     * The IsLessThan
     * @var \Ews\StructType\EwsIsLessThanType
     */
    public $IsLessThan;
    /**
     * The IsLessThanOrEqualTo
     * @var \Ews\StructType\EwsIsLessThanOrEqualToType
     */
    public $IsLessThanOrEqualTo;
    /**
     * The Contains
     * @var \Ews\StructType\EwsContainsExpressionType
     */
    public $Contains;
    /**
     * The Not
     * @var \Ews\StructType\EwsNotType
     */
    public $Not;
    /**
     * The And
     * @var \Ews\StructType\EwsAndType
     */
    public $And;
    /**
     * The Or
     * @var \Ews\StructType\EwsOrType
     */
    public $Or;
    /**
     * Constructor method for NotType
     * @uses EwsNotType::setExists()
     * @uses EwsNotType::setExcludes()
     * @uses EwsNotType::setIsEqualTo()
     * @uses EwsNotType::setIsNotEqualTo()
     * @uses EwsNotType::setIsGreaterThan()
     * @uses EwsNotType::setIsGreaterThanOrEqualTo()
     * @uses EwsNotType::setIsLessThan()
     * @uses EwsNotType::setIsLessThanOrEqualTo()
     * @uses EwsNotType::setContains()
     * @uses EwsNotType::setNot()
     * @uses EwsNotType::setAnd()
     * @uses EwsNotType::setOr()
     * @param \Ews\StructType\EwsExistsType $exists
     * @param \Ews\StructType\EwsExcludesType $excludes
     * @param \Ews\StructType\EwsIsEqualToType $isEqualTo
     * @param \Ews\StructType\EwsIsNotEqualToType $isNotEqualTo
     * @param \Ews\StructType\EwsIsGreaterThanType $isGreaterThan
     * @param \Ews\StructType\EwsIsGreaterThanOrEqualToType $isGreaterThanOrEqualTo
     * @param \Ews\StructType\EwsIsLessThanType $isLessThan
     * @param \Ews\StructType\EwsIsLessThanOrEqualToType $isLessThanOrEqualTo
     * @param \Ews\StructType\EwsContainsExpressionType $contains
     * @param \Ews\StructType\EwsNotType $not
     * @param \Ews\StructType\EwsAndType $and
     * @param \Ews\StructType\EwsOrType $or
     */
    public function __construct(\Ews\StructType\EwsExistsType $exists = null, \Ews\StructType\EwsExcludesType $excludes = null, \Ews\StructType\EwsIsEqualToType $isEqualTo = null, \Ews\StructType\EwsIsNotEqualToType $isNotEqualTo = null, \Ews\StructType\EwsIsGreaterThanType $isGreaterThan = null, \Ews\StructType\EwsIsGreaterThanOrEqualToType $isGreaterThanOrEqualTo = null, \Ews\StructType\EwsIsLessThanType $isLessThan = null, \Ews\StructType\EwsIsLessThanOrEqualToType $isLessThanOrEqualTo = null, \Ews\StructType\EwsContainsExpressionType $contains = null, \Ews\StructType\EwsNotType $not = null, \Ews\StructType\EwsAndType $and = null, \Ews\StructType\EwsOrType $or = null)
    {
        $this
            ->setExists($exists)
            ->setExcludes($excludes)
            ->setIsEqualTo($isEqualTo)
            ->setIsNotEqualTo($isNotEqualTo)
            ->setIsGreaterThan($isGreaterThan)
            ->setIsGreaterThanOrEqualTo($isGreaterThanOrEqualTo)
            ->setIsLessThan($isLessThan)
            ->setIsLessThanOrEqualTo($isLessThanOrEqualTo)
            ->setContains($contains)
            ->setNot($not)
            ->setAnd($and)
            ->setOr($or);
    }
    /**
     * Get Exists value
     * @return \Ews\StructType\EwsExistsType|null
     */
    public function getExists()
    {
        return $this->Exists;
    }
    /**
     * Set Exists value
     * @param \Ews\StructType\EwsExistsType $exists
     * @return \Ews\StructType\EwsNotType
     */
    public function setExists(\Ews\StructType\EwsExistsType $exists = null)
    {
        $this->Exists = $exists;
        return $this;
    }
    /**
     * Get Excludes value
     * @return \Ews\StructType\EwsExcludesType|null
     */
    public function getExcludes()
    {
        return $this->Excludes;
    }
    /**
     * Set Excludes value
     * @param \Ews\StructType\EwsExcludesType $excludes
     * @return \Ews\StructType\EwsNotType
     */
    public function setExcludes(\Ews\StructType\EwsExcludesType $excludes = null)
    {
        $this->Excludes = $excludes;
        return $this;
    }
    /**
     * Get IsEqualTo value
     * @return \Ews\StructType\EwsIsEqualToType|null
     */
    public function getIsEqualTo()
    {
        return $this->IsEqualTo;
    }
    /**
     * Set IsEqualTo value
     * @param \Ews\StructType\EwsIsEqualToType $isEqualTo
     * @return \Ews\StructType\EwsNotType
     */
    public function setIsEqualTo(\Ews\StructType\EwsIsEqualToType $isEqualTo = null)
    {
        $this->IsEqualTo = $isEqualTo;
        return $this;
    }
    /**
     * Get IsNotEqualTo value
     * @return \Ews\StructType\EwsIsNotEqualToType|null
     */
    public function getIsNotEqualTo()
    {
        return $this->IsNotEqualTo;
    }
    /**
     * Set IsNotEqualTo value
     * @param \Ews\StructType\EwsIsNotEqualToType $isNotEqualTo
     * @return \Ews\StructType\EwsNotType
     */
    public function setIsNotEqualTo(\Ews\StructType\EwsIsNotEqualToType $isNotEqualTo = null)
    {
        $this->IsNotEqualTo = $isNotEqualTo;
        return $this;
    }
    /**
     * Get IsGreaterThan value
     * @return \Ews\StructType\EwsIsGreaterThanType|null
     */
    public function getIsGreaterThan()
    {
        return $this->IsGreaterThan;
    }
    /**
     * Set IsGreaterThan value
     * @param \Ews\StructType\EwsIsGreaterThanType $isGreaterThan
     * @return \Ews\StructType\EwsNotType
     */
    public function setIsGreaterThan(\Ews\StructType\EwsIsGreaterThanType $isGreaterThan = null)
    {
        $this->IsGreaterThan = $isGreaterThan;
        return $this;
    }
    /**
     * Get IsGreaterThanOrEqualTo value
     * @return \Ews\StructType\EwsIsGreaterThanOrEqualToType|null
     */
    public function getIsGreaterThanOrEqualTo()
    {
        return $this->IsGreaterThanOrEqualTo;
    }
    /**
     * Set IsGreaterThanOrEqualTo value
     * @param \Ews\StructType\EwsIsGreaterThanOrEqualToType $isGreaterThanOrEqualTo
     * @return \Ews\StructType\EwsNotType
     */
    public function setIsGreaterThanOrEqualTo(\Ews\StructType\EwsIsGreaterThanOrEqualToType $isGreaterThanOrEqualTo = null)
    {
        $this->IsGreaterThanOrEqualTo = $isGreaterThanOrEqualTo;
        return $this;
    }
    /**
     * Get IsLessThan value
     * @return \Ews\StructType\EwsIsLessThanType|null
     */
    public function getIsLessThan()
    {
        return $this->IsLessThan;
    }
    /**
     * Set IsLessThan value
     * @param \Ews\StructType\EwsIsLessThanType $isLessThan
     * @return \Ews\StructType\EwsNotType
     */
    public function setIsLessThan(\Ews\StructType\EwsIsLessThanType $isLessThan = null)
    {
        $this->IsLessThan = $isLessThan;
        return $this;
    }
    /**
     * Get IsLessThanOrEqualTo value
     * @return \Ews\StructType\EwsIsLessThanOrEqualToType|null
     */
    public function getIsLessThanOrEqualTo()
    {
        return $this->IsLessThanOrEqualTo;
    }
    /**
     * Set IsLessThanOrEqualTo value
     * @param \Ews\StructType\EwsIsLessThanOrEqualToType $isLessThanOrEqualTo
     * @return \Ews\StructType\EwsNotType
     */
    public function setIsLessThanOrEqualTo(\Ews\StructType\EwsIsLessThanOrEqualToType $isLessThanOrEqualTo = null)
    {
        $this->IsLessThanOrEqualTo = $isLessThanOrEqualTo;
        return $this;
    }
    /**
     * Get Contains value
     * @return \Ews\StructType\EwsContainsExpressionType|null
     */
    public function getContains()
    {
        return $this->Contains;
    }
    /**
     * Set Contains value
     * @param \Ews\StructType\EwsContainsExpressionType $contains
     * @return \Ews\StructType\EwsNotType
     */
    public function setContains(\Ews\StructType\EwsContainsExpressionType $contains = null)
    {
        $this->Contains = $contains;
        return $this;
    }
    /**
     * Get Not value
     * @return \Ews\StructType\EwsNotType|null
     */
    public function getNot()
    {
        return $this->Not;
    }
    /**
     * Set Not value
     * @param \Ews\StructType\EwsNotType $not
     * @return \Ews\StructType\EwsNotType
     */
    public function setNot(\Ews\StructType\EwsNotType $not = null)
    {
        $this->Not = $not;
        return $this;
    }
    /**
     * Get And value
     * @return \Ews\StructType\EwsAndType|null
     */
    public function getAnd()
    {
        return $this->And;
    }
    /**
     * Set And value
     * @param \Ews\StructType\EwsAndType $and
     * @return \Ews\StructType\EwsNotType
     */
    public function setAnd(\Ews\StructType\EwsAndType $and = null)
    {
        $this->And = $and;
        return $this;
    }
    /**
     * Get Or value
     * @return \Ews\StructType\EwsOrType|null
     */
    public function getOr()
    {
        return $this->Or;
    }
    /**
     * Set Or value
     * @param \Ews\StructType\EwsOrType $or
     * @return \Ews\StructType\EwsNotType
     */
    public function setOr(\Ews\StructType\EwsOrType $or = null)
    {
        $this->Or = $or;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNotType
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
