<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsExistsType|null
     */
    protected ?\StructType\EwsExistsType $Exists = null;
    /**
     * The Excludes
     * @var \StructType\EwsExcludesType|null
     */
    protected ?\StructType\EwsExcludesType $Excludes = null;
    /**
     * The IsEqualTo
     * @var \StructType\EwsIsEqualToType|null
     */
    protected ?\StructType\EwsIsEqualToType $IsEqualTo = null;
    /**
     * The IsNotEqualTo
     * @var \StructType\EwsIsNotEqualToType|null
     */
    protected ?\StructType\EwsIsNotEqualToType $IsNotEqualTo = null;
    /**
     * The IsGreaterThan
     * @var \StructType\EwsIsGreaterThanType|null
     */
    protected ?\StructType\EwsIsGreaterThanType $IsGreaterThan = null;
    /**
     * The IsGreaterThanOrEqualTo
     * @var \StructType\EwsIsGreaterThanOrEqualToType|null
     */
    protected ?\StructType\EwsIsGreaterThanOrEqualToType $IsGreaterThanOrEqualTo = null;
    /**
     * The IsLessThan
     * @var \StructType\EwsIsLessThanType|null
     */
    protected ?\StructType\EwsIsLessThanType $IsLessThan = null;
    /**
     * The IsLessThanOrEqualTo
     * @var \StructType\EwsIsLessThanOrEqualToType|null
     */
    protected ?\StructType\EwsIsLessThanOrEqualToType $IsLessThanOrEqualTo = null;
    /**
     * The Contains
     * @var \StructType\EwsContainsExpressionType|null
     */
    protected ?\StructType\EwsContainsExpressionType $Contains = null;
    /**
     * The Not
     * @var \StructType\EwsNotType|null
     */
    protected ?\StructType\EwsNotType $Not = null;
    /**
     * The And
     * @var \StructType\EwsAndType|null
     */
    protected ?\StructType\EwsAndType $And = null;
    /**
     * The Or
     * @var \StructType\EwsOrType|null
     */
    protected ?\StructType\EwsOrType $Or = null;
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
     * @param \StructType\EwsExistsType $exists
     * @param \StructType\EwsExcludesType $excludes
     * @param \StructType\EwsIsEqualToType $isEqualTo
     * @param \StructType\EwsIsNotEqualToType $isNotEqualTo
     * @param \StructType\EwsIsGreaterThanType $isGreaterThan
     * @param \StructType\EwsIsGreaterThanOrEqualToType $isGreaterThanOrEqualTo
     * @param \StructType\EwsIsLessThanType $isLessThan
     * @param \StructType\EwsIsLessThanOrEqualToType $isLessThanOrEqualTo
     * @param \StructType\EwsContainsExpressionType $contains
     * @param \StructType\EwsNotType $not
     * @param \StructType\EwsAndType $and
     * @param \StructType\EwsOrType $or
     */
    public function __construct(?\StructType\EwsExistsType $exists = null, ?\StructType\EwsExcludesType $excludes = null, ?\StructType\EwsIsEqualToType $isEqualTo = null, ?\StructType\EwsIsNotEqualToType $isNotEqualTo = null, ?\StructType\EwsIsGreaterThanType $isGreaterThan = null, ?\StructType\EwsIsGreaterThanOrEqualToType $isGreaterThanOrEqualTo = null, ?\StructType\EwsIsLessThanType $isLessThan = null, ?\StructType\EwsIsLessThanOrEqualToType $isLessThanOrEqualTo = null, ?\StructType\EwsContainsExpressionType $contains = null, ?\StructType\EwsNotType $not = null, ?\StructType\EwsAndType $and = null, ?\StructType\EwsOrType $or = null)
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
     * @return \StructType\EwsExistsType|null
     */
    public function getExists(): ?\StructType\EwsExistsType
    {
        return $this->Exists;
    }
    /**
     * Set Exists value
     * @param \StructType\EwsExistsType $exists
     * @return \StructType\EwsNotType
     */
    public function setExists(?\StructType\EwsExistsType $exists = null): self
    {
        $this->Exists = $exists;
        
        return $this;
    }
    /**
     * Get Excludes value
     * @return \StructType\EwsExcludesType|null
     */
    public function getExcludes(): ?\StructType\EwsExcludesType
    {
        return $this->Excludes;
    }
    /**
     * Set Excludes value
     * @param \StructType\EwsExcludesType $excludes
     * @return \StructType\EwsNotType
     */
    public function setExcludes(?\StructType\EwsExcludesType $excludes = null): self
    {
        $this->Excludes = $excludes;
        
        return $this;
    }
    /**
     * Get IsEqualTo value
     * @return \StructType\EwsIsEqualToType|null
     */
    public function getIsEqualTo(): ?\StructType\EwsIsEqualToType
    {
        return $this->IsEqualTo;
    }
    /**
     * Set IsEqualTo value
     * @param \StructType\EwsIsEqualToType $isEqualTo
     * @return \StructType\EwsNotType
     */
    public function setIsEqualTo(?\StructType\EwsIsEqualToType $isEqualTo = null): self
    {
        $this->IsEqualTo = $isEqualTo;
        
        return $this;
    }
    /**
     * Get IsNotEqualTo value
     * @return \StructType\EwsIsNotEqualToType|null
     */
    public function getIsNotEqualTo(): ?\StructType\EwsIsNotEqualToType
    {
        return $this->IsNotEqualTo;
    }
    /**
     * Set IsNotEqualTo value
     * @param \StructType\EwsIsNotEqualToType $isNotEqualTo
     * @return \StructType\EwsNotType
     */
    public function setIsNotEqualTo(?\StructType\EwsIsNotEqualToType $isNotEqualTo = null): self
    {
        $this->IsNotEqualTo = $isNotEqualTo;
        
        return $this;
    }
    /**
     * Get IsGreaterThan value
     * @return \StructType\EwsIsGreaterThanType|null
     */
    public function getIsGreaterThan(): ?\StructType\EwsIsGreaterThanType
    {
        return $this->IsGreaterThan;
    }
    /**
     * Set IsGreaterThan value
     * @param \StructType\EwsIsGreaterThanType $isGreaterThan
     * @return \StructType\EwsNotType
     */
    public function setIsGreaterThan(?\StructType\EwsIsGreaterThanType $isGreaterThan = null): self
    {
        $this->IsGreaterThan = $isGreaterThan;
        
        return $this;
    }
    /**
     * Get IsGreaterThanOrEqualTo value
     * @return \StructType\EwsIsGreaterThanOrEqualToType|null
     */
    public function getIsGreaterThanOrEqualTo(): ?\StructType\EwsIsGreaterThanOrEqualToType
    {
        return $this->IsGreaterThanOrEqualTo;
    }
    /**
     * Set IsGreaterThanOrEqualTo value
     * @param \StructType\EwsIsGreaterThanOrEqualToType $isGreaterThanOrEqualTo
     * @return \StructType\EwsNotType
     */
    public function setIsGreaterThanOrEqualTo(?\StructType\EwsIsGreaterThanOrEqualToType $isGreaterThanOrEqualTo = null): self
    {
        $this->IsGreaterThanOrEqualTo = $isGreaterThanOrEqualTo;
        
        return $this;
    }
    /**
     * Get IsLessThan value
     * @return \StructType\EwsIsLessThanType|null
     */
    public function getIsLessThan(): ?\StructType\EwsIsLessThanType
    {
        return $this->IsLessThan;
    }
    /**
     * Set IsLessThan value
     * @param \StructType\EwsIsLessThanType $isLessThan
     * @return \StructType\EwsNotType
     */
    public function setIsLessThan(?\StructType\EwsIsLessThanType $isLessThan = null): self
    {
        $this->IsLessThan = $isLessThan;
        
        return $this;
    }
    /**
     * Get IsLessThanOrEqualTo value
     * @return \StructType\EwsIsLessThanOrEqualToType|null
     */
    public function getIsLessThanOrEqualTo(): ?\StructType\EwsIsLessThanOrEqualToType
    {
        return $this->IsLessThanOrEqualTo;
    }
    /**
     * Set IsLessThanOrEqualTo value
     * @param \StructType\EwsIsLessThanOrEqualToType $isLessThanOrEqualTo
     * @return \StructType\EwsNotType
     */
    public function setIsLessThanOrEqualTo(?\StructType\EwsIsLessThanOrEqualToType $isLessThanOrEqualTo = null): self
    {
        $this->IsLessThanOrEqualTo = $isLessThanOrEqualTo;
        
        return $this;
    }
    /**
     * Get Contains value
     * @return \StructType\EwsContainsExpressionType|null
     */
    public function getContains(): ?\StructType\EwsContainsExpressionType
    {
        return $this->Contains;
    }
    /**
     * Set Contains value
     * @param \StructType\EwsContainsExpressionType $contains
     * @return \StructType\EwsNotType
     */
    public function setContains(?\StructType\EwsContainsExpressionType $contains = null): self
    {
        $this->Contains = $contains;
        
        return $this;
    }
    /**
     * Get Not value
     * @return \StructType\EwsNotType|null
     */
    public function getNot(): ?\StructType\EwsNotType
    {
        return $this->Not;
    }
    /**
     * Set Not value
     * @param \StructType\EwsNotType $not
     * @return \StructType\EwsNotType
     */
    public function setNot(?\StructType\EwsNotType $not = null): self
    {
        $this->Not = $not;
        
        return $this;
    }
    /**
     * Get And value
     * @return \StructType\EwsAndType|null
     */
    public function getAnd(): ?\StructType\EwsAndType
    {
        return $this->And;
    }
    /**
     * Set And value
     * @param \StructType\EwsAndType $and
     * @return \StructType\EwsNotType
     */
    public function setAnd(?\StructType\EwsAndType $and = null): self
    {
        $this->And = $and;
        
        return $this;
    }
    /**
     * Get Or value
     * @return \StructType\EwsOrType|null
     */
    public function getOr(): ?\StructType\EwsOrType
    {
        return $this->Or;
    }
    /**
     * Set Or value
     * @param \StructType\EwsOrType $or
     * @return \StructType\EwsNotType
     */
    public function setOr(?\StructType\EwsOrType $or = null): self
    {
        $this->Or = $or;
        
        return $this;
    }
}
