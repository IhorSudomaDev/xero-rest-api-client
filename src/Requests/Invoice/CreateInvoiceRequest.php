<?php

namespace XeroRestApiClient\Requests\Invoice;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Models\Contact;
use XeroRestApiClient\Models\LineItem;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Invoice\CreateInvoiceResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\LineAmountType;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class CreateInvoiceRequest
 * @package XeroRestApiClient\Requests\Invoice
 */
class CreateInvoiceRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::INVOICES;

	/*** @var string */
	protected string $method = RequestMethod::POST;

	/*** @var string */
	protected string $responseClass = CreateInvoiceResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [
		'Type'                => NULL,
		'Contact'             => NULL,
		'Date'                => NULL,
		'DueDate'             => NULL,
		'Status'              => NULL,
		'LineAmountTypes'     => NULL,
		'LineItems'           => [],
		'SubTotal'            => NULL,
		'TotalTax'            => NULL,
		'Total'               => NULL,
		'TotalDiscount'       => NULL,
		'UpdatedDateUTC'      => NULL,
		'CurrencyCode'        => NULL,
		'CurrencyRate'        => NULL,
		'InvoiceID'           => NULL,
		'InvoiceNumber'       => NULL,
		'Reference'           => NULL,
		'BrandingThemeID'     => NULL,
		'Url'                 => NULL,
		'SentToContact'       => NULL,
		'ExpectedPaymentDate' => NULL,
		'PlannedPaymentDate'  => NULL,
		'HasAttachments'      => NULL,
		'RepeatingInvoiceID'  => NULL,
		'Payments'            => NULL,
		'CreditNotes'         => NULL,
		'Prepayments'         => NULL,
		'Overpayments'        => NULL,
		'AmountDue'           => NULL,
		'AmountPaid'          => NULL,
		'CISDeduction'        => NULL,
		'FullyPaidOnDate'     => NULL,
		'AmountCredited'      => NULL,
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
	 * @param string $dueDate
	 * @return $this
	 */
	public function withDueDate(string $dueDate): self
	{
		$this->availableInputParameters['DueDate'] = $dueDate;
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
	 * @param string $lineAmountTypes
	 * @return $this
	 */
	public function withLineAmountTypes(string $lineAmountTypes): self
	{
		$this->availableInputParameters['LineAmountTypes'] = $lineAmountTypes;
		return $this;
	}

	/**
	 * @param float $subTotal
	 * @return $this
	 */
	public function withSubTotal(float $subTotal): self
	{
		$this->availableInputParameters['SubTotal'] = $subTotal;
		return $this;
	}

	/**
	 * @param float $totalTax
	 * @return $this
	 */
	public function withTotalTax(float $totalTax): self
	{
		$this->availableInputParameters['TotalTax'] = $totalTax;
		return $this;
	}

	/**
	 * @param float $total
	 * @return $this
	 */
	public function withTotal(float $total): self
	{
		$this->availableInputParameters['Total'] = $total;
		return $this;
	}

	/**
	 * @param float $totalDiscount
	 * @return $this
	 */
	public function withTotalDiscount(float $totalDiscount): self
	{
		$this->availableInputParameters['TotalDiscount'] = $totalDiscount;
		return $this;
	}

	/**
	 * @param string $updateDateUtc
	 * @return $this
	 */
	public function withUpdatedDateUTC(string $updateDateUtc): self
	{
		$this->availableInputParameters['UpdatedDateUTC'] = $updateDateUtc;
		return $this;
	}

	/**
	 * @param string $currencyCode
	 * @return $this
	 */
	public function withCurrencyCode(string $currencyCode): self
	{
		$this->availableInputParameters['CurrencyCode'] = $currencyCode;
		return $this;
	}

	/**
	 * @param float $currencyRate
	 * @return $this
	 */
	public function withCurrencyRate(float $currencyRate): self
	{
		$this->availableInputParameters['CurrencyRate'] = $currencyRate;
		return $this;
	}

	/**
	 * @param string $invoiceNumber
	 * @return $this
	 */
	public function withInvoiceNumber(string $invoiceNumber): self
	{
		$this->availableInputParameters['InvoiceNumber'] = $invoiceNumber;
		return $this;
	}

	/**
	 * @param string $reference
	 * @return $this
	 */
	public function withReference(string $reference): self
	{
		$this->availableInputParameters['Reference'] = $reference;
		return $this;
	}

	/**
	 * @param string $brandingThemeId
	 * @return $this
	 */
	public function withBrandingThemeId(string $brandingThemeId): self
	{
		$this->availableInputParameters['BrandingThemeID'] = $brandingThemeId;
		return $this;
	}

	/**
	 * @param string $url
	 * @return $this
	 */
	public function withUrl(string $url): self
	{
		$this->availableInputParameters['Url'] = $url;
		return $this;
	}

	/**
	 * @param bool $sentToContact
	 * @return $this
	 */
	public function withSentToContact(bool $sentToContact): self
	{
		$this->availableInputParameters['SentToContact'] = $sentToContact;
		return $this;
	}

	/**
	 * @param string $expectedPaymentDate
	 * @return $this
	 */
	public function withExpectedPaymentDate(string $expectedPaymentDate): self
	{
		$this->availableInputParameters['ExpectedPaymentDate'] = $expectedPaymentDate;
		return $this;
	}

	/**
	 * @param string $plannedPaymentDate
	 * @return $this
	 */
	public function withPlannedPaymentDate(string $plannedPaymentDate): self
	{
		$this->availableInputParameters['PlannedPaymentDate'] = $plannedPaymentDate;
		return $this;
	}

	/**
	 * @param bool $hasAttachments
	 * @return $this
	 */
	public function withHasAttachments(bool $hasAttachments): self
	{
		$this->availableInputParameters['HasAttachments'] = $hasAttachments;
		return $this;
	}

	/**
	 * @param string $repeatingInvoiceId
	 * @return $this
	 */
	public function withRepeatingInvoiceId(string $repeatingInvoiceId): self
	{
		$this->availableInputParameters['RepeatingInvoiceID'] = $repeatingInvoiceId;
		return $this;
	}

	/**
	 * @param array $payments
	 * @return $this
	 */
	public function withPayments(array $payments): self
	{
		$this->availableInputParameters['Payments'] = $payments;
		return $this;
	}

	/**
	 * @param array $creditNotes
	 * @return $this
	 */
	public function withCreditNotes(array $creditNotes): self
	{
		$this->availableInputParameters['CreditNotes'] = $creditNotes;
		return $this;
	}

	/**
	 * @param array $prepayments
	 * @return $this
	 */
	public function withPrepayments(array $prepayments): self
	{
		$this->availableInputParameters['Prepayments'] = $prepayments;
		return $this;
	}

	/**
	 * @param array $overpayments
	 * @return $this
	 */
	public function withOverpayments(array $overpayments): self
	{
		$this->availableInputParameters['Overpayments'] = $overpayments;
		return $this;
	}

	/**
	 * @param float $amountDue
	 * @return $this
	 */
	public function withAmountDue(float $amountDue): self
	{
		$this->availableInputParameters['AmountDue'] = $amountDue;
		return $this;
	}

	/**
	 * @param float $amountPaid
	 * @return $this
	 */
	public function withAmountPaid(float $amountPaid): self
	{
		$this->availableInputParameters['AmountPaid'] = $amountPaid;
		return $this;
	}

	/**
	 * @param float $cisDeduction
	 * @return $this
	 */
	public function withCisDeduction(float $cisDeduction): self
	{
		$this->availableInputParameters['CISDeduction'] = $cisDeduction;
		return $this;
	}

	/**
	 * @param string $fullyPaidOnDate
	 * @return $this
	 */
	public function withFullyPaidOnDate(string $fullyPaidOnDate): self
	{
		$this->availableInputParameters['FullyPaidOnDate'] = $fullyPaidOnDate;
		return $this;
	}

	/**
	 * @param float $amountCredited
	 * @return $this
	 */
	public function withAmountCredited(float $amountCredited): self
	{
		$this->availableInputParameters['AmountCredited'] = $amountCredited;
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