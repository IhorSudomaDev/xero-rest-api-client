<?php

namespace XeroRestApiClient\Models;

/**
 * Class Schedule
 * @property int|NULL    Period
 * @property string|NULL Unit
 * @property int|NULL    dueDate
 * @property string|NULL dueDateType
 * @property string|NULL startDate
 * @property string|NULL nextScheduledDate
 * @property string|NULL endDate
 * @package XeroApiClient\Models
 */
class Schedule
{
	/*** @return int|NULL */
	public function getPeriod(): ?int
	{
		return $this->Period;
	}

	/*** @param int|NULL $Period */
	public function setPeriod(?int $Period): void
	{
		$this->Period = $Period;
	}

	/*** @return string|NULL */
	public function getUnit(): ?string
	{
		return $this->Unit;
	}

	/*** @param string|NULL $Unit */
	public function setUnit(?string $Unit): void
	{
		$this->Unit = $Unit;
	}

	/*** @return int|NULL */
	public function getDueDate(): ?int
	{
		return $this->dueDate;
	}

	/*** @param int|NULL $dueDate */
	public function setDueDate(?int $dueDate): void
	{
		$this->dueDate = $dueDate;
	}

	/*** @return string|NULL */
	public function getDueDateType(): ?string
	{
		return $this->dueDateType;
	}

	/*** @param string|NULL $dueDateType */
	public function setDueDateType(?string $dueDateType): void
	{
		$this->dueDateType = $dueDateType;
	}

	/*** @return string|NULL */
	public function getStartDate(): ?string
	{
		return $this->startDate;
	}

	/*** @param string|NULL $startDate */
	public function setStartDate(?string $startDate): void
	{
		$this->startDate = $startDate;
	}

	/*** @return string|NULL */
	public function getNextScheduledDate(): ?string
	{
		return $this->nextScheduledDate;
	}

	/*** @param string|NULL $nextScheduledDate */
	public function setNextScheduledDate(?string $nextScheduledDate): void
	{
		$this->nextScheduledDate = $nextScheduledDate;
	}

	/*** @return string|NULL */
	public function getEndDate(): ?string
	{
		return $this->endDate;
	}

	/*** @param string|NULL $endDate */
	public function setEndDate(?string $endDate): void
	{
		$this->endDate = $endDate;
	}
}