<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace SageKit\Bootstrap4Customer\Block\Account;

use Magento\Customer\Block\Account\SortLinkInterface;

class Link extends \SageKit\Bootstrap4Element\View\Element\Html\Link implements SortLinkInterface {
    
 public function getSortOrder() {
  return $this->getData(self::SORT_ORDER);
 }
 
}
