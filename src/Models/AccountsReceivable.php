<?php

namespace XeroRestApiClient\Models;

/**
 * Class AccountsReceivable
 * @property float Outstanding
 * @property float Overdue
 * @package XeroApiClient\Models
 */
class AccountsReceivable
{
	/*** @return float */
	public function getOutstanding(): float
	{
		return $this->Outstanding;
	}

	/*** @param float $Outstanding */
	public function setOutstanding(float $Outstanding): void
	{
		$this->Outstanding = $Outstanding;
	}

	/*** @return float */
	public function getOverdue(): float
	{
		return $this->Overdue;
	}

	/*** @param float $Overdue */
	public function setOverdue(float $Overdue): void
	{
		$this->Overdue = $Overdue;
	}
}