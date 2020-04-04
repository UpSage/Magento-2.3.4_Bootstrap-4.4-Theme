<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace SageKit\Bootstrap4LinkCurrent\View\Element\Html\Link;

class Current extends \Magento\Framework\View\Element\Html\Link\Current {
    
 protected function _toHtml() {
     
  if (false != $this->getTemplate()) {
   return parent::_toHtml();
  }
  
  $highlight = '';
  
  if ($this->getIsHighlighted()) {
   $highlight = ' active';
  }
  
  if ($this->isCurrent()) {

   $html = '<li class="nav-item">';
   $html .= '<a href="#" class="nav-link active">'. $this->escapeHtml(__($this->getLabel())). '</a>';
   $html .= '</li>';

  } else {

   $html = '<li class="nav-item' . $highlight . '"><a href="' . $this->escapeHtml($this->getHref()) . '" class="nav-link"';
   $html .= $this->getTitle() ? ' title="' . $this->escapeHtml(__($this->getTitle())) . '"' : '';
   $html .= $this->getAttributesHtml() . '>';
   
   if ($this->getIsHighlighted()) {
    $html .= '<strong>';
   }
   
   $html .= $this->escapeHtml(__($this->getLabel()));
   
   if ($this->getIsHighlighted()) {
    $html .= '</strong>';
   }
   
   $html .= '</a></li>';
  }
  
  return $html;

 }

}