<?php
/**
 * @package     Aesirx\Concordium
 *
 * @copyright   Copyright (C) 2016 - 2023 Aesir. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 * @since       __DEPLOY_VERSION__
 */

namespace Aesirx\Concordium\Request\AccountTransactionSignature;

/**
 * @package     Aesirx\Concordium\Request\AccountTransactionSignature
 *
 * @since       __DEPLOY_VERSION__
 */
class AccountTransactionSignature implements \Countable
{
	/**
	 * @var array
	 */
	protected $data = [];

	/**
	 * @param   array  $data  Data
	 */
	public function __construct(array $data)
	{
		foreach ($data as $key => $values)
		{
			$this->data[$key] = new CredentialSignature($values);
		}
	}

	/**
	 * @return CredentialSignature[]
	 *
	 * @since __DEPLOY_VERSION__
	 */
	public function getData():array
	{
		return $this->data;
	}

	/**
	 *
	 * @return integer
	 *
	 * @since __DEPLOY_VERSION__
	 */
	public function count(): int
	{
		return count($this->data);
	}
}
