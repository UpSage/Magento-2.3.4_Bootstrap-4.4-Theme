<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace SageKit\Bootstrap4Customer\Block\Account;

use \Magento\Customer\Block\Account\SortLinkInterface;

/**
 * Class for sortable links.
 */
class SortLink extends \SageKit\Bootstrap4LinkCurrent\View\Element\Html\Link\Current implements SortLinkInterface {
    
 public function getSortOrder() {
  return $this->getData(self::SORT_ORDER);
 }
 
}
