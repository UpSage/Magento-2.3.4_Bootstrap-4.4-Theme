<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace SageKit\Bootstrap4Element\View\Element\Html;

class Date extends \Magento\Framework\View\Element\Html\Date {
    
 protected function _toHtml() {
     
  $html = '<input type="date" name="' . $this->getName() . '" id="' . $this->getId() . '" ';
  $html .= 'value="' . $this->escapeHtml($this->getValue()) . '" ';
  $html .= 'class="form-control' . $this->getClass() . '" ' . $this->getExtraParams() . '/> ';
  $calendarYearsRange = $this->getYearsRange();
  $changeMonth = $this->getChangeMonth();
  $changeYear = $this->getChangeYear();
  $maxDate = $this->getMaxDate();
  $showOn = $this->getShowOn();
  $firstDay = $this->getFirstDay();
  
  return $html;

 }

}