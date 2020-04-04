<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace SageKit\Bootstrap4Link\View\Element\Html;

class Link extends \Magento\Framework\View\Element\Html\Link {
    
 protected function _toHtml() {
     
  if (false != $this->getTemplate()) {
   return parent::_toHtml();
  }
  
  return '<li class="nav-item"><a ' . $this->getLinkAttributes() . '  class="nav-link">' . $this->escapeHtml($this->getLabel()) . '</a></li>';

 }

}