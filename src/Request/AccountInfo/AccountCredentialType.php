<?php
/**
 * @package     Aesirx\Concordium
 *
 * @copyright   Copyright (C) 2016 - 2023 Aesir. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 * @since       __DEPLOY_VERSION__
 */

namespace Aesirx\Concordium\Request\AccountInfo;

use Aesirx\Concordium\Request\AbstractRequest;

/**
 * @property-read string $type
 * @property-read SharedCredentialDeploymentValues $contents
 *
 * @package     Aesirx\Concordium\Request\AccountInfo
 *
 * @since       __DEPLOY_VERSION__
 */
class AccountCredentialType extends AbstractRequest
{
	public function __construct(array $data)
	{
		parent::__construct($data);
		$this->data['contents'] = new SharedCredentialDeploymentValues($data['contents']);
	}
}
