<?php
/**
 * Copyright © 2015 aaoo . All rights reserved.
 */
namespace Pengo\Ajaxlogin\Block\Ajax;
use Pengo\Ajaxlogin\Block\BaseBlock;
class Index extends BaseBlock
{
	public function getClass (){
		return $this->scopeConfig->getValue('ajaxconfig/parameters/login_class');
	}
}
