<?php

namespace XeroRestApiClient\ValueObjects;

use Exception;
use stdClass;
use XeroRestApiClient\Models\Address;
use XeroRestApiClient\Models\Contact;
use XeroRestApiClient\Models\ContactGroup;
use XeroRestApiClient\Models\ContactPerson;
use XeroRestApiClient\Models\Currency;
use XeroRestApiClient\Models\Invoice;
use XeroRestApiClient\Models\Payment;
use XeroRestApiClient\Models\Phone;
use XeroRestApiClient\Models\RepeatingInvoice;

/**
 * Class ModelFactory
 * @package XeroRestApiClient\ValueObjects
 */
class ModelFactory
{
	/**
	 * @param $model
	 * @param $data
	 * @return mixed
	 */
	public static function create($model, $data)
	{
		foreach ($data as $key => $value) {
			if ($value instanceof stdClass) {
				try {
					$modelClass = '\XeroApiClient\Models\\' . str_replace('_', '', ucwords($key, '_'));
					if (class_exists($modelClass)) {
						$model->$key = self::create(new $modelClass(), $value);
					} else {
						$model->$key = $value;
					}
				} catch (Exception $e) {
					echo $e->getMessage();
				}
			} else if (is_array($value)) {
				$model->$key = [];
				foreach ($value as $item) {
					switch ($key) {
						case 'Addresses':
							$newModel = new Address();
							break;
						case 'Contacts':
							$newModel = new Contact();
							break;
						case 'ContactGroups':
							$newModel = new ContactGroup();
							break;
						case 'ContactPersons':
							$newModel = new ContactPerson();
							break;
						case 'Currencies':
							$newModel = new Currency();
							break;
						case 'Invoices':
							$newModel = new Invoice();
							break;
						case 'Payments':
							$newModel = new Payment();
							break;
						case 'Phones':
							$newModel = new Phone();
							break;
						case 'RepeatingInvoices':
							$newModel = new RepeatingInvoice();
							break;
						default:
							$newModel = new stdClass();
							break;
					}
					try {
						$model->$key[] = self::create($newModel, $item);
					} catch (Exception $e) {
						echo $e->getMessage();
					}
				}
			} else {
				$model->$key = $value;
			}
		}
		return $model;
	}

}