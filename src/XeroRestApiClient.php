<?php

namespace XeroRestApiClient;

use GuzzleHttp\Exception\GuzzleException;
use Throwable;
use XeroRestApiClient\Authorization\AccessToken;
use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Exceptions\InvoiceNotFoundException;
use XeroRestApiClient\Models\Contact;
use XeroRestApiClient\Models\Invoice;
use XeroRestApiClient\Models\Organisation;
use XeroRestApiClient\Requests\Contact\CreateContactRequest;
use XeroRestApiClient\Requests\Contact\GetContactByEmailOrNameRequest;
use XeroRestApiClient\Requests\Contact\GetContactListRequest;
use XeroRestApiClient\Requests\Contact\GetContactRequest;
use XeroRestApiClient\Requests\ContactGroup\GetContactGroupListRequest;
use XeroRestApiClient\Requests\ContactGroup\GetContactGroupRequest;
use XeroRestApiClient\Requests\Currency\GetCurrencyListRequest;
use XeroRestApiClient\Requests\Invoice\CreateInvoiceRequest;
use XeroRestApiClient\Requests\Invoice\DeleteInvoiceRequest;
use XeroRestApiClient\Requests\Invoice\GetInvoiceListRequest;
use XeroRestApiClient\Requests\Invoice\GetInvoiceRequest;
use XeroRestApiClient\Requests\Invoice\SendInvoiceRequest;
use XeroRestApiClient\Requests\Invoice\VoidInvoiceRequest;
use XeroRestApiClient\Requests\Organisation\GetOrganisationRequest;
use XeroRestApiClient\Requests\RepeatingInvoice\CreateRepeatingInvoiceRequest;
use XeroRestApiClient\Requests\RepeatingInvoice\GetRepeatingInvoiceListRequest;
use XeroRestApiClient\Requests\RepeatingInvoice\GetRepeatingInvoiceRequest;

/**
 * Class XeroRestApiClient
 * @package XeroRestApiClient
 */
class XeroRestApiClient
{
	/*** @var Authorization */
	private Authorization $authorization;

	/*** @param Authorization $authorization */
	public function __construct(Authorization $authorization)
	{
		$this->setAuthorization($authorization);
	}

	/*** @return Authorization */
	public function getAuthorization(): Authorization
	{
		return $this->authorization;
	}

	/*** @param Authorization $authorization */
	public function setAuthorization(Authorization $authorization): void
	{
		$this->authorization = $authorization;
	}

	/*** @return AccessToken */
	public function getToken(): AccessToken
	{
		return $this->getAuthorization()->getAccessToken();
	}

	/*** @return string|NULL */
	public function getTenantId(): ?string
	{
		/*** @var Organisation $organisation */
		try {
			$organisation = $this->getOrganisationRequest()->send();
			return $organisation->getOrganisationID();
		} catch (GuzzleException|Throwable $e) {
			return NULL;
		}
	}

	/*** @return bool */
	public function isValid(): bool
	{
		return $this->getTenantId() !== NULL;
	}

	/**
	 * @param string $name
	 * @return CreateContactRequest
	 */
	public function createContactRequest(string $name): CreateContactRequest
	{
		return new CreateContactRequest($this->getAuthorization(), $name);
	}

	/**
	 * @param string $contactNumber
	 * @return GetContactRequest
	 */
	public function getContactRequest(string $contactNumber): GetContactRequest
	{
		return new GetContactRequest($this->getAuthorization(), $contactNumber);
	}

	/*** @return GetContactListRequest */
	public function getContactListRequest(): GetContactListRequest
	{
		return new GetContactListRequest($this->getAuthorization());
	}

	/**
	 * @return GetContactByEmailOrNameRequest
	 */
	public function getContactByEmailOrNameRequest(): GetContactByEmailOrNameRequest
	{
		return new GetContactByEmailOrNameRequest($this->authorization);
	}

	/**
	 * @param string $contactGroupId
	 * @return GetContactGroupRequest
	 */
	public function getContactGroupRequest(string $contactGroupId): GetContactGroupRequest
	{
		return new GetContactGroupRequest($this->getAuthorization(), $contactGroupId);
	}

	/*** @return GetContactGroupListRequest */
	public function getContactGroupListRequest(): GetContactGroupListRequest
	{
		return new GetContactGroupListRequest($this->getAuthorization());
	}

	/*** @return GetCurrencyListRequest */
	public function getCurrencyListRequest(): GetCurrencyListRequest
	{
		return new GetCurrencyListRequest($this->getAuthorization());
	}

	/**
	 * @return array|NULL
	 * @throws InvoiceNotFoundException
	 */
	public function getDebtorListRequest(): ?array
	{
		$debtors = [];
		try {
			$invoices = $this->getInvoiceListRequest()->send();
			foreach ($invoices as $invoice) {
				/*** @var Invoice $invoice */
				$debtors[] = $invoice->getContact();
			}
			return $debtors;
		} catch (GuzzleException|Throwable $e) {
			throw new InvoiceNotFoundException($e->getMessage());
		}
	}

	/**
	 * @param string  $type
	 * @param Contact $contact
	 * @return CreateInvoiceRequest
	 */
	public function createInvoiceRequest(string $type, Contact $contact): CreateInvoiceRequest
	{
		return new CreateInvoiceRequest($this->getAuthorization(), $type, $contact);
	}

	/**
	 * @param string $invoiceNumber
	 * @return DeleteInvoiceRequest
	 */
	public function deleteInvoiceRequest(string $invoiceNumber): DeleteInvoiceRequest
	{
		/*** @var Invoice $invoice */
		$invoice = $this->getInvoiceRequest($invoiceNumber);
		return new DeleteInvoiceRequest($this->getAuthorization(), $invoiceNumber, $invoice->getStatus());
	}

	/**
	 * @param string $invoiceNumber
	 * @return VoidInvoiceRequest
	 */
	public function voidInvoiceRequest(string $invoiceNumber): VoidInvoiceRequest
	{
		/*** @var Invoice $invoice */
		$invoice = $this->getInvoiceRequest($invoiceNumber);
		return new VoidInvoiceRequest($this->getAuthorization(), $invoiceNumber, $invoice->getStatus());
	}

	/**
	 * @param string $identifier
	 * @return GetInvoiceRequest
	 */
	public function getInvoiceRequest(string $identifier): GetInvoiceRequest
	{
		return new GetInvoiceRequest($this->getAuthorization(), $identifier);
	}

	/*** @return GetInvoiceListRequest */
	public function getInvoiceListRequest(): GetInvoiceListRequest
	{
		return new GetInvoiceListRequest($this->getAuthorization());
	}

	/**
	 * @param string $identifier
	 * @return SendInvoiceRequest
	 * @throws GuzzleException|Throwable
	 */
	public function sendInvoiceRequest(string $identifier): SendInvoiceRequest
	{
		/*** @var Invoice $invoice */
		$invoice = $this->getInvoiceRequest($identifier)->send();
		return new SendInvoiceRequest($this->getAuthorization(), $invoice->getInvoiceID());
	}

	/*** @return GetOrganisationRequest */
	public function getOrganisationRequest(): GetOrganisationRequest
	{
		return new GetOrganisationRequest($this->getAuthorization());
	}

	/**
	 * @param string  $type
	 * @param Contact $contact
	 * @return CreateRepeatingInvoiceRequest
	 */
	public function createRepeatingInvoiceRequest(string $type, Contact $contact): CreateRepeatingInvoiceRequest
	{
		return new CreateRepeatingInvoiceRequest($this->getAuthorization(), $type, $contact);
	}

	/**
	 * @param string $identifier
	 * @return GetRepeatingInvoiceRequest
	 */
	public function getRepeatingInvoiceRequestById(string $identifier): GetRepeatingInvoiceRequest
	{
		return new GetRepeatingInvoiceRequest($this->getAuthorization(), $identifier);
	}

	/*** @return GetRepeatingInvoiceListRequest */
	public function getRepeatingInvoiceListRequest(): GetRepeatingInvoiceListRequest
	{
		return new GetRepeatingInvoiceListRequest($this->getAuthorization());
	}
}