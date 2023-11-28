<?php

namespace XeroRestApiClient\Requests\RepeatingInvoice;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Models\Contact;
use XeroRestApiClient\Models\LineItem;
use XeroRestApiClient\Models\Schedule;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\RepeatingInvoice\CreateRepeatingInvoiceResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\LineAmountType;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class CreateRepeatingInvoiceRequest
 * @package XeroRestApiClient\Requests\RepeatingInvoice
 */
class CreateRepeatingInvoiceRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::REPEATING_INVOICES;

	/*** @var string */
	protected string $method = RequestMethod::POST;

	/*** @var string */
	protected string $responseClass = CreateRepeatingInvoiceResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [
		'Type'            => NULL,
		'Contact'         => NULL,
		'Date'            => NULL,
		'Schedule'        => NULL,
		'LineAmountTypes' => NULL,
		'LineItems'       => [],
		'Status'          => NULL,
		'CurrencyCode'    => NULL,
	];

	/**
	 * @param Authorization $authorization
	 * @param string        $type
	 * @param Contact       $contact
	 */
	public function __construct(Authorization $authorization, string $type, Contact $contact)
	{
		parent::__construct($authorization);
		$this->withType($type);
		$this->withContact($contact);
	}

	/**
	 * @param string $type
	 * @return $this
	 */
	public function withType(string $type): self
	{
		$this->availableInputParameters['Type'] = $type;
		return $this;
	}

	/**
	 * @param Contact $contact
	 * @return $this
	 */
	public function withContact(Contact $contact): self
	{
		$this->availableInputParameters['Contact'] = $contact;
		return $this;
	}

	/**
	 * @param string $date
	 * @return $this
	 */
	public function withDate(string $date): self
	{
		$this->availableInputParameters['Date'] = $date;
		return $this;
	}

	/**
	 * @param Schedule $schedule
	 * @return $this
	 */
	public function withSchedule(Schedule $schedule): self
	{
		$this->availableInputParameters['Schedule'] = $schedule;
		return $this;
	}

	/**
	 * @param string $lineAmountTypes
	 * @return $this
	 */
	public function withLineAmountTypes(string $lineAmountTypes): self
	{
		$this->availableInputParameters['LineAmountTypes'] = $lineAmountTypes;
		return $this;
	}

	/**
	 * @param string $status
	 * @return $this
	 */
	public function withStatus(string $status): self
	{
		$this->availableInputParameters['Status'] = $status;
		return $this;
	}

	/**
	 * @param bool $vatCalcMethodInclude
	 * @return $this
	 */
	public function withVatCalcMethodInclude(bool $vatCalcMethodInclude): self
	{
		if ($vatCalcMethodInclude) {
			$this->withLineAmountTypes(LineAmountType::INCLUSIVE);
		} else {
			$this->withLineAmountTypes(LineAmountType::EXCLUSIVE);
		}
		return $this;
	}

	/**
	 * @param LineItem $lineItem
	 * @return $this
	 */
	public function addLineItem(LineItem $lineItem): self
	{
		$this->availableInputParameters['LineItems'][] = $lineItem;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}