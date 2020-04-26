<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * "My Wish List" link
 */
namespace SageKit\Bootstrap4Wishlist\Block;

use Magento\Customer\Block\Account\SortLinkInterface;

class Link extends \SageKit\Bootstrap4Element\View\Element\Html\Link implements SortLinkInterface {
    
 public function getHref() {
  return $this->getUrl('wishlist');
 }
 
 public function getLabel() {
  return __('My Wish List');
 }
    
 public function getSortOrder() {
  return $this->getData(self::SORT_ORDER);
 }

}
