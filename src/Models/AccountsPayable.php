<?php

namespace XeroRestApiClient\Models;

/**
 * Class AccountsPayable
 * @property float Outstanding
 * @property float Overdue
 * @package XeroApiClient\Models
 */
class AccountsPayable
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