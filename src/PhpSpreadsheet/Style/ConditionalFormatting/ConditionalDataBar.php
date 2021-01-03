<?php

namespace PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting;

use PhpOffice\PhpSpreadsheet\Style\Color;

class ConditionalDataBar
{
    /** <dataBar> attribute  */
    /** @var boolean|null */
    private $showValue;

    /** <dataBar> children */
    /** @var ConditionalFormatValueObject */
    private $minimumConditionalFormatValueObject;
    /** @var ConditionalFormatValueObject */
    private $maximumConditionalFormatValueObject;

    /** @var Color */
    private $color;

    /** <extLst> */
    /** @var ConditionalFormattingRuleExtension */
    private $conditionalFormattingRuleExt;

    /**
     * @return boolean|null
     */
    public function getShowValue()
    {
        return $this->showValue;
    }

    /**
     * @param boolean $showValue
     */
    public function setShowValue($showValue)
    {
        $this->showValue = $showValue;

        return $this;
    }

    /**
     * @return ConditionalFormatValueObject
     */
    public function getMinimumConditionalFormatValueObject()
    {
        return $this->minimumConditionalFormatValueObject;
    }

    /**
     * @param ConditionalFormatValueObject $minimumConditionalFormatValueObject
     */
    public function setMinimumConditionalFormatValueObject(ConditionalFormatValueObject $minimumConditionalFormatValueObject)
    {
        $this->minimumConditionalFormatValueObject = $minimumConditionalFormatValueObject;
        return $this;
    }

    /**
     * @return ConditionalFormatValueObject
     */
    public function getMaximumConditionalFormatValueObject()
    {
        return $this->maximumConditionalFormatValueObject;
    }

    /**
     * @param ConditionalFormatValueObject $maximumConditionalFormatValueObject
     */
    public function setMaximumConditionalFormatValueObject(ConditionalFormatValueObject $maximumConditionalFormatValueObject)
    {
        $this->maximumConditionalFormatValueObject = $maximumConditionalFormatValueObject;
        return $this;
    }


    public function getColor(): Color
    {
        return $this->color;
    }

    public function setColor(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return ConditionalFormattingRuleExtension
     */
    public function getConditionalFormattingRuleExt()
    {
        return $this->conditionalFormattingRuleExt;
    }

    /**
     * @param ConditionalFormattingRuleExtension $conditionalFormattingRuleExt
     */
    public function setConditionalFormattingRuleExt(ConditionalFormattingRuleExtension $conditionalFormattingRuleExt)
    {
        $this->conditionalFormattingRuleExt = $conditionalFormattingRuleExt;
        return $this;
    }
}
