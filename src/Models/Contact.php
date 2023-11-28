<?php

namespace XeroRestApiClient\Models;

/**
 * Class Contact
 * The following elements are returned in the Contacts response
 * @property string                       ContactID
 * @property string|NULL                  ContactNumber
 * @property string|NULL                  AccountNumber
 * @property string|NULL                  ContactStatus
 * @property string|NULL                  Name
 * @property string|NULL                  FirstName
 * @property string|NULL                  LastName
 * @property string|NULL                  EmailAddress
 * @property string|NULL                  SkypeUserName
 * @property string|NULL                  BankAccountDetails
 * @property string|NULL                  CompanyNumber
 * @property string|NULL                  TaxNumber
 * @property string|NULL                  AccountsReceivableTaxType
 * @property string|NULL                  AccountsPayableTaxType
 * @property Address[]|NULL               Addresses
 * @property Phone[]|NULL                 Phones
 * @property bool|NULL                    IsSupplier
 * @property bool|NULL                    IsCustomer
 * @property string|NULL                  DefaultCurrency
 * @property string|NULL                  UpdatedDateUTC
 * The following are only retrieved on GET requests for a single contact or when pagination is used
 * @property ContactPerson[]|NULL         ContactPersons
 * @property string|NULL                  XeroNetworkKey
 * @property string                       MergedToContactID
 * @property string|NULL                  SalesDefaultAccountCode
 * @property string|NULL                  PurchasesDefaultAccountCode
 * @property SalesTrackingCategory[]|NULL SalesTrackingCategories
 * @property SalesTrackingCategory[]|NULL PurchasesTrackingCategories
 * @property string|NULL                  SalesDefaultLineAmountType
 * @property string|NULL                  PurchasesDefaultLineAmountType
 * @property string|NULL                  TrackingCategoryName
 * @property string|NULL                  TrackingOptionName
 * @property PaymentTerm|NULL             PaymentTerms
 * @property ContactGroup[]|NULL          ContactGroups
 * @property string|NULL                  Website
 * @property BrandingTheme|NULL           BrandingTheme
 * @property BatchPaymentDetails|NULL     BatchPayments
 * @property float                        Discount
 * @property Balances|NULL                Balances
 * @property bool|NULL                    HasAttachments
 * @package XeroApiClient\Models
 */
class Contact
{
	/*** @return string */
	public function getContactID(): string
	{
		return $this->ContactID;
	}

	/*** @param string $ContactID */
	public function setContactID(string $ContactID): void
	{
		$this->ContactID = $ContactID;
	}

	/*** @return string|NULL */
	public function getContactNumber(): ?string
	{
		return $this->ContactNumber;
	}

	/*** @param string|NULL $ContactNumber */
	public function setContactNumber(?string $ContactNumber): void
	{
		$this->ContactNumber = $ContactNumber;
	}

	/*** @return string|NULL */
	public function getAccountNumber(): ?string
	{
		return $this->AccountNumber;
	}

	/*** @param string|NULL $AccountNumber */
	public function setAccountNumber(?string $AccountNumber): void
	{
		$this->AccountNumber = $AccountNumber;
	}

	/*** @return string|NULL */
	public function getContactStatus(): ?string
	{
		return $this->ContactStatus;
	}

	/*** @param string|NULL $ContactStatus */
	public function setContactStatus(?string $ContactStatus): void
	{
		$this->ContactStatus = $ContactStatus;
	}

	/*** @return string|NULL */
	public function getName(): ?string
	{
		return $this->Name;
	}

	/*** @param string|NULL $Name */
	public function setName(?string $Name): void
	{
		$this->Name = $Name;
	}

	/*** @return string|NULL */
	public function getFirstName(): ?string
	{
		return $this->FirstName;
	}

	/*** @param string|NULL $FirstName */
	public function setFirstName(?string $FirstName): void
	{
		$this->FirstName = $FirstName;
	}

	/*** @return string|NULL */
	public function getLastName(): ?string
	{
		return $this->LastName;
	}

	/*** @param string|NULL $LastName */
	public function setLastName(?string $LastName): void
	{
		$this->LastName = $LastName;
	}

	/*** @return string|NULL */
	public function getEmailAddress(): ?string
	{
		return $this->EmailAddress;
	}

	/*** @param string|NULL $EmailAddress */
	public function setEmailAddress(?string $EmailAddress): void
	{
		$this->EmailAddress = $EmailAddress;
	}

	/*** @return string|NULL */
	public function getSkypeUserName(): ?string
	{
		return $this->SkypeUserName;
	}

	/*** @param string|NULL $SkypeUserName */
	public function setSkypeUserName(?string $SkypeUserName): void
	{
		$this->SkypeUserName = $SkypeUserName;
	}

	/*** @return string|NULL */
	public function getBankAccountDetails(): ?string
	{
		return $this->BankAccountDetails;
	}

	/*** @param string|NULL $BankAccountDetails */
	public function setBankAccountDetails(?string $BankAccountDetails): void
	{
		$this->BankAccountDetails = $BankAccountDetails;
	}

	/*** @return string|NULL */
	public function getCompanyNumber(): ?string
	{
		return $this->CompanyNumber;
	}

	/*** @param string|NULL $CompanyNumber */
	public function setCompanyNumber(?string $CompanyNumber): void
	{
		$this->CompanyNumber = $CompanyNumber;
	}

	/*** @return string|NULL */
	public function getTaxNumber(): ?string
	{
		return $this->TaxNumber;
	}

	/*** @param string|NULL $TaxNumber */
	public function setTaxNumber(?string $TaxNumber): void
	{
		$this->TaxNumber = $TaxNumber;
	}

	/*** @return string|NULL */
	public function getAccountsReceivableTaxType(): ?string
	{
		return $this->AccountsReceivableTaxType;
	}

	/*** @param string|NULL $AccountsReceivableTaxType */
	public function setAccountsReceivableTaxType(?string $AccountsReceivableTaxType): void
	{
		$this->AccountsReceivableTaxType = $AccountsReceivableTaxType;
	}

	/*** @return string|NULL */
	public function getAccountsPayableTaxType(): ?string
	{
		return $this->AccountsPayableTaxType;
	}

	/*** @param string|NULL $AccountsPayableTaxType */
	public function setAccountsPayableTaxType(?string $AccountsPayableTaxType): void
	{
		$this->AccountsPayableTaxType = $AccountsPayableTaxType;
	}

	/*** @return Address[]|NULL */
	public function getAddresses(): ?array
	{
		return $this->Addresses;
	}

	/*** @param Address[]|NULL $Addresses */
	public function setAddresses(?array $Addresses): void
	{
		$this->Addresses = $Addresses;
	}

	/*** @return Phone[]|NULL */
	public function getPhones(): ?array
	{
		return $this->Phones;
	}

	/*** @param Phone[]|NULL $Phones */
	public function setPhones(?array $Phones): void
	{
		$this->Phones = $Phones;
	}

	/*** @return bool|NULL */
	public function getIsSupplier(): ?bool
	{
		return $this->IsSupplier;
	}

	/*** @param bool|NULL $IsSupplier */
	public function setIsSupplier(?bool $IsSupplier): void
	{
		$this->IsSupplier = $IsSupplier;
	}

	/*** @return bool|NULL */
	public function getIsCustomer(): ?bool
	{
		return $this->IsCustomer;
	}

	/*** @param bool|NULL $IsCustomer */
	public function setIsCustomer(?bool $IsCustomer): void
	{
		$this->IsCustomer = $IsCustomer;
	}

	/*** @return string|NULL */
	public function getDefaultCurrency(): ?string
	{
		return $this->DefaultCurrency;
	}

	/*** @param string|NULL $DefaultCurrency */
	public function setDefaultCurrency(?string $DefaultCurrency): void
	{
		$this->DefaultCurrency = $DefaultCurrency;
	}

	/*** @return string|NULL */
	public function getUpdatedDateUTC(): ?string
	{
		return $this->UpdatedDateUTC;
	}

	/*** @param string|NULL $UpdatedDateUTC */
	public function setUpdatedDateUTC(?string $UpdatedDateUTC): void
	{
		$this->UpdatedDateUTC = $UpdatedDateUTC;
	}

	/*** @return ContactPerson[]|NULL */
	public function getContactPersons(): ?array
	{
		return $this->ContactPersons;
	}

	/*** @param ContactPerson[]|NULL $ContactPersons */
	public function setContactPersons(?array $ContactPersons): void
	{
		$this->ContactPersons = $ContactPersons;
	}

	/*** @return string|NULL */
	public function getXeroNetworkKey(): ?string
	{
		return $this->XeroNetworkKey;
	}

	/*** @param string|NULL $XeroNetworkKey */
	public function setXeroNetworkKey(?string $XeroNetworkKey): void
	{
		$this->XeroNetworkKey = $XeroNetworkKey;
	}

	/*** @return string */
	public function getMergedToContactID(): string
	{
		return $this->MergedToContactID;
	}

	/*** @param string $MergedToContactID */
	public function setMergedToContactID(string $MergedToContactID): void
	{
		$this->MergedToContactID = $MergedToContactID;
	}

	/*** @return string|NULL */
	public function getSalesDefaultAccountCode(): ?string
	{
		return $this->SalesDefaultAccountCode;
	}

	/*** @param string|NULL $SalesDefaultAccountCode */
	public function setSalesDefaultAccountCode(?string $SalesDefaultAccountCode): void
	{
		$this->SalesDefaultAccountCode = $SalesDefaultAccountCode;
	}

	/*** @return string|NULL */
	public function getPurchasesDefaultAccountCode(): ?string
	{
		return $this->PurchasesDefaultAccountCode;
	}

	/*** @param string|NULL $PurchasesDefaultAccountCode */
	public function setPurchasesDefaultAccountCode(?string $PurchasesDefaultAccountCode): void
	{
		$this->PurchasesDefaultAccountCode = $PurchasesDefaultAccountCode;
	}

	/*** @return SalesTrackingCategory[]|NULL */
	public function getSalesTrackingCategories(): ?array
	{
		return $this->SalesTrackingCategories;
	}

	/*** @param SalesTrackingCategory[]|NULL $SalesTrackingCategories */
	public function setSalesTrackingCategories(?array $SalesTrackingCategories): void
	{
		$this->SalesTrackingCategories = $SalesTrackingCategories;
	}

	/*** @return SalesTrackingCategory[]|NULL */
	public function getPurchasesTrackingCategories(): ?array
	{
		return $this->PurchasesTrackingCategories;
	}

	/*** @param SalesTrackingCategory[]|NULL $PurchasesTrackingCategories */
	public function setPurchasesTrackingCategories(?array $PurchasesTrackingCategories): void
	{
		$this->PurchasesTrackingCategories = $PurchasesTrackingCategories;
	}

	/*** @return string|NULL */
	public function getSalesDefaultLineAmountType(): ?string
	{
		return $this->SalesDefaultLineAmountType;
	}

	/*** @param string|NULL $SalesDefaultLineAmountType */
	public function setSalesDefaultLineAmountType(?string $SalesDefaultLineAmountType): void
	{
		$this->SalesDefaultLineAmountType = $SalesDefaultLineAmountType;
	}

	/*** @return string|NULL */
	public function getPurchasesDefaultLineAmountType(): ?string
	{
		return $this->PurchasesDefaultLineAmountType;
	}

	/*** @param string|NULL $PurchasesDefaultLineAmountType */
	public function setPurchasesDefaultLineAmountType(?string $PurchasesDefaultLineAmountType): void
	{
		$this->PurchasesDefaultLineAmountType = $PurchasesDefaultLineAmountType;
	}

	/*** @return string|NULL */
	public function getTrackingCategoryName(): ?string
	{
		return $this->TrackingCategoryName;
	}

	/*** @param string|NULL $TrackingCategoryName */
	public function setTrackingCategoryName(?string $TrackingCategoryName): void
	{
		$this->TrackingCategoryName = $TrackingCategoryName;
	}

	/*** @return string|NULL */
	public function getTrackingOptionName(): ?string
	{
		return $this->TrackingOptionName;
	}

	/*** @param string|NULL $TrackingOptionName */
	public function setTrackingOptionName(?string $TrackingOptionName): void
	{
		$this->TrackingOptionName = $TrackingOptionName;
	}

	/*** @return PaymentTerm|NULL */
	public function getPaymentTerms(): ?PaymentTerm
	{
		return $this->PaymentTerms;
	}

	/*** @param PaymentTerm|NULL $PaymentTerms */
	public function setPaymentTerms(?PaymentTerm $PaymentTerms): void
	{
		$this->PaymentTerms = $PaymentTerms;
	}

	/*** @return ContactGroup[]|NULL */
	public function getContactGroups(): ?array
	{
		return $this->ContactGroups;
	}

	/*** @param ContactGroup[]|NULL $ContactGroups */
	public function setContactGroups(?array $ContactGroups): void
	{
		$this->ContactGroups = $ContactGroups;
	}

	/*** @return string|NULL */
	public function getWebsite(): ?string
	{
		return $this->Website;
	}

	/*** @param string|NULL $Website */
	public function setWebsite(?string $Website): void
	{
		$this->Website = $Website;
	}

	/*** @return BrandingTheme|NULL */
	public function getBrandingTheme(): ?BrandingTheme
	{
		return $this->BrandingTheme;
	}

	/*** @param BrandingTheme|NULL $BrandingTheme */
	public function setBrandingTheme(?BrandingTheme $BrandingTheme): void
	{
		$this->BrandingTheme = $BrandingTheme;
	}

	/*** @return BatchPaymentDetails|NULL */
	public function getBatchPayments(): ?BatchPaymentDetails
	{
		return $this->BatchPayments;
	}

	/*** @param BatchPaymentDetails|NULL $BatchPayments */
	public function setBatchPayments(?BatchPaymentDetails $BatchPayments): void
	{
		$this->BatchPayments = $BatchPayments;
	}

	/*** @return float */
	public function getDiscount(): float
	{
		return $this->Discount;
	}

	/*** @param float $Discount */
	public function setDiscount(float $Discount): void
	{
		$this->Discount = $Discount;
	}

	/*** @return Balances|NULL */
	public function getBalances(): ?Balances
	{
		return $this->Balances;
	}

	/*** @param Balances|NULL $Balances */
	public function setBalances(?Balances $Balances): void
	{
		$this->Balances = $Balances;
	}

	/*** @return bool|NULL */
	public function getHasAttachments(): ?bool
	{
		return $this->HasAttachments;
	}

	/*** @param bool|NULL $HasAttachments */
	public function setHasAttachments(?bool $HasAttachments): void
	{
		$this->HasAttachments = $HasAttachments;
	}
}