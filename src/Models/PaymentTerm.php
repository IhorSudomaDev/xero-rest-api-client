<?php

namespace XeroRestApiClient\Models;

/**
 * Class PaymentTerm
 * @property Bill|NULL Bills
 * @property Bill|NULL Sales
 * @package XeroApiClient\Models
 */
class PaymentTerm
{
	/*** @return Bill|NULL */
	public function getBills(): ?Bill
	{
		return $this->Bills;
	}

	/*** @param Bill|NULL $Bills */
	public function setBills(?Bill $Bills): void
	{
		$this->Bills = $Bills;
	}

	/*** @return Bill|NULL */
	public function getSales(): ?Bill
	{
		return $this->Sales;
	}

	/*** @param Bill|NULL $Sales */
	public function setSales(?Bill $Sales): void
	{
		$this->Sales = $Sales;
	}
}