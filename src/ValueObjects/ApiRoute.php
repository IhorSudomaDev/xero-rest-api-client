<?php

namespace XeroRestApiClient\ValueObjects;

use RuntimeException;

/**
 * Class ApiRoute
 * @package XeroRestApiClient\ValueObjects
 */
class ApiRoute
{
	/*** @var string */
	public const BASE_URL = 'https://api.xero.com/api.xro/2.0/';
	/*** @var string */
	public const URL_AUTHORIZE = 'https://login.xero.com/identity/connect/authorize';
	/*** @var string */
	public const URL_ACCESS_TOKEN = 'https://identity.xero.com/connect/token';
	/*** @var string */
	public const URL_RESOURCE_OWNER_DETAILS = 'https://identity.xero.com/resources';
	/*** @var string */
	public const ACCOUNTS = 'Accounts';
	/*** @var string */
	public const BATCH_PAYMENTS = 'BatchPayments';
	/*** @var string */
	public const CONTACTS = 'Contacts';
	/*** @var string */
	public const CONTACT_GROUPS = 'ContactGroups';
	/*** @var string */
	public const CURRENCIES = 'Currencies';
	/*** @var string */
	public const INVOICES = 'Invoices';
	/*** @var string */
	public const ITEMS = 'Items';
	/*** @var string */
	public const ORGANISATIONS = 'Organisation';
	/*** @var string */
	public const REPEATING_INVOICES = 'RepeatingInvoices';

	/*** @var array */
	private const URL_PREFIX = [
		self::ACCOUNTS           => 'Accounts/%s',
		self::BATCH_PAYMENTS     => 'BatchPayments/%s',
		self::CONTACTS           => 'Contacts/%s',
		self::CONTACT_GROUPS     => 'ContactGroups/%s',
		self::CURRENCIES         => 'Currencies',
		self::INVOICES           => 'Invoices/%s',
		self::ITEMS              => 'Items/%s',
		self::ORGANISATIONS      => 'Organisation',
		self::REPEATING_INVOICES => 'RepeatingInvoices/%s',
	];

	/**
	 * @param string $prefix
	 * @return string
	 */
	public static function getFor(string $prefix): string
	{
		if (isset(self::URL_PREFIX[$prefix])) {
			return sprintf('%s%s', self::BASE_URL, self::URL_PREFIX[$prefix] ?? '');
		}
		throw new RuntimeException('Prefix is incorrect');
	}
}