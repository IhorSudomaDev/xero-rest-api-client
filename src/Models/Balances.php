<?php

namespace XeroRestApiClient\Models;

/**
 * Class Balances
 * @property AccountsReceivable|NULL AccountsReceivable
 * @property AccountsPayable|NULL    AccountsPayable
 * @package XeroApiClient\Models
 */
class Balances
{
	/*** @return AccountsReceivable|NULL */
	public function getAccountsReceivable(): ?AccountsReceivable
	{
		return $this->AccountsReceivable;
	}

	/*** @param AccountsReceivable|NULL $AccountsReceivable */
	public function setAccountsReceivable(?AccountsReceivable $AccountsReceivable): void
	{
		$this->AccountsReceivable = $AccountsReceivable;
	}

	/*** @return AccountsPayable|NULL */
	public function getAccountsPayable(): ?AccountsPayable
	{
		return $this->AccountsPayable;
	}

	/*** @param AccountsPayable|NULL $AccountsPayable */
	public function setAccountsPayable(?AccountsPayable $AccountsPayable): void
	{
		$this->AccountsPayable = $AccountsPayable;
	}
}