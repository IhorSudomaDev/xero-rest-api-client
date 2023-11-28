<?php

namespace XeroRestApiClient\Models;

/**
 * Class Organisation
 * @property string|NULL        APIKey
 * @property string|NULL        Name
 * @property string|NULL        LegalName
 * @property bool|NULL          PaysTax
 * @property string|NULL        Version
 * @property string|NULL        OrganisationType
 * @property string|NULL        BaseCurrency
 * @property string|NULL        CountryCode
 * @property bool|NULL          IsDemoCompany
 * @property string|NULL        OrganisationStatus
 * @property string|NULL        RegistrationNumber
 * @property string|NULL        EmployerIdentificationNumber
 * @property string|NULL        TaxNumber
 * @property int|NULL           FinancialYearEndDay
 * @property int|NULL           FinancialYearEndMonth
 * @property string|NULL        SalesTaxBasis
 * @property string|NULL        SalesTaxPeriod
 * @property string|NULL        DefaultSalesTax
 * @property string|NULL        DefaultPurchasesTax
 * @property string|NULL        PeriodLockDate
 * @property string|NULL        EndOfYearLockDate
 * @property string|NULL        CreatedDateUTC
 * @property string|NULL        Timezone
 * @property string|NULL        OrganisationEntityType
 * @property string|NULL        ShortCode
 * @property string             OrganisationID
 * @property string|NULL        Edition
 * @property string|NULL        Class
 * @property string|NULL        LineOfBusiness
 * @property Address[]|NULL     Addresses
 * @property Phone[]|NULL       Phones
 * @property ExternalLink|NULL  ExternalLinks
 * @property PaymentTerm[]|NULL PaymentTerms
 * @package XeroApiClient\Models
 */
class Organisation
{
	/*** @return string|NULL */
	public function getAPIKey(): ?string
	{
		return $this->APIKey;
	}

	/*** @param string|NULL $APIKey */
	public function setAPIKey(?string $APIKey): void
	{
		$this->APIKey = $APIKey;
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
	public function getLegalName(): ?string
	{
		return $this->LegalName;
	}

	/*** @param string|NULL $LegalName */
	public function setLegalName(?string $LegalName): void
	{
		$this->LegalName = $LegalName;
	}

	/*** @return bool|NULL */
	public function getPaysTax(): ?bool
	{
		return $this->PaysTax;
	}

	/*** @param bool|NULL $PaysTax */
	public function setPaysTax(?bool $PaysTax): void
	{
		$this->PaysTax = $PaysTax;
	}

	/*** @return string|NULL */
	public function getVersion(): ?string
	{
		return $this->Version;
	}

	/*** @param string|NULL $Version */
	public function setVersion(?string $Version): void
	{
		$this->Version = $Version;
	}

	/*** @return string|NULL */
	public function getOrganisationType(): ?string
	{
		return $this->OrganisationType;
	}

	/*** @param string|NULL $OrganisationType */
	public function setOrganisationType(?string $OrganisationType): void
	{
		$this->OrganisationType = $OrganisationType;
	}

	/*** @return string|NULL */
	public function getBaseCurrency(): ?string
	{
		return $this->BaseCurrency;
	}

	/*** @param string|NULL $BaseCurrency */
	public function setBaseCurrency(?string $BaseCurrency): void
	{
		$this->BaseCurrency = $BaseCurrency;
	}

	/*** @return string|NULL */
	public function getCountryCode(): ?string
	{
		return $this->CountryCode;
	}

	/*** @param string|NULL $CountryCode */
	public function setCountryCode(?string $CountryCode): void
	{
		$this->CountryCode = $CountryCode;
	}

	/*** @return bool|NULL */
	public function getIsDemoCompany(): ?bool
	{
		return $this->IsDemoCompany;
	}

	/*** @param bool|NULL $IsDemoCompany */
	public function setIsDemoCompany(?bool $IsDemoCompany): void
	{
		$this->IsDemoCompany = $IsDemoCompany;
	}

	/*** @return string|NULL */
	public function getOrganisationStatus(): ?string
	{
		return $this->OrganisationStatus;
	}

	/*** @param string|NULL $OrganisationStatus */
	public function setOrganisationStatus(?string $OrganisationStatus): void
	{
		$this->OrganisationStatus = $OrganisationStatus;
	}

	/*** @return string|NULL */
	public function getRegistrationNumber(): ?string
	{
		return $this->RegistrationNumber;
	}

	/*** @param string|NULL $RegistrationNumber */
	public function setRegistrationNumber(?string $RegistrationNumber): void
	{
		$this->RegistrationNumber = $RegistrationNumber;
	}

	/*** @return string|NULL */
	public function getEmployerIdentificationNumber(): ?string
	{
		return $this->EmployerIdentificationNumber;
	}

	/*** @param string|NULL $EmployerIdentificationNumber */
	public function setEmployerIdentificationNumber(?string $EmployerIdentificationNumber): void
	{
		$this->EmployerIdentificationNumber = $EmployerIdentificationNumber;
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

	/*** @return int|NULL */
	public function getFinancialYearEndDay(): ?int
	{
		return $this->FinancialYearEndDay;
	}

	/*** @param int|NULL $FinancialYearEndDay */
	public function setFinancialYearEndDay(?int $FinancialYearEndDay): void
	{
		$this->FinancialYearEndDay = $FinancialYearEndDay;
	}

	/*** @return int|NULL */
	public function getFinancialYearEndMonth(): ?int
	{
		return $this->FinancialYearEndMonth;
	}

	/*** @param int|NULL $FinancialYearEndMonth */
	public function setFinancialYearEndMonth(?int $FinancialYearEndMonth): void
	{
		$this->FinancialYearEndMonth = $FinancialYearEndMonth;
	}

	/*** @return string|NULL */
	public function getSalesTaxBasis(): ?string
	{
		return $this->SalesTaxBasis;
	}

	/*** @param string|NULL $SalesTaxBasis */
	public function setSalesTaxBasis(?string $SalesTaxBasis): void
	{
		$this->SalesTaxBasis = $SalesTaxBasis;
	}

	/*** @return string|NULL */
	public function getSalesTaxPeriod(): ?string
	{
		return $this->SalesTaxPeriod;
	}

	/*** @param string|NULL $SalesTaxPeriod */
	public function setSalesTaxPeriod(?string $SalesTaxPeriod): void
	{
		$this->SalesTaxPeriod = $SalesTaxPeriod;
	}

	/*** @return string|NULL */
	public function getDefaultSalesTax(): ?string
	{
		return $this->DefaultSalesTax;
	}

	/*** @param string|NULL $DefaultSalesTax */
	public function setDefaultSalesTax(?string $DefaultSalesTax): void
	{
		$this->DefaultSalesTax = $DefaultSalesTax;
	}

	/*** @return string|NULL */
	public function getDefaultPurchasesTax(): ?string
	{
		return $this->DefaultPurchasesTax;
	}

	/*** @param string|NULL $DefaultPurchasesTax */
	public function setDefaultPurchasesTax(?string $DefaultPurchasesTax): void
	{
		$this->DefaultPurchasesTax = $DefaultPurchasesTax;
	}

	/*** @return string|NULL */
	public function getPeriodLockDate(): ?string
	{
		return $this->PeriodLockDate;
	}

	/*** @param string|NULL $PeriodLockDate */
	public function setPeriodLockDate(?string $PeriodLockDate): void
	{
		$this->PeriodLockDate = $PeriodLockDate;
	}

	/*** @return string|NULL */
	public function getEndOfYearLockDate(): ?string
	{
		return $this->EndOfYearLockDate;
	}

	/*** @param string|NULL $EndOfYearLockDate */
	public function setEndOfYearLockDate(?string $EndOfYearLockDate): void
	{
		$this->EndOfYearLockDate = $EndOfYearLockDate;
	}

	/*** @return string|NULL */
	public function getCreatedDateUTC(): ?string
	{
		return $this->CreatedDateUTC;
	}

	/*** @param string|NULL $CreatedDateUTC */
	public function setCreatedDateUTC(?string $CreatedDateUTC): void
	{
		$this->CreatedDateUTC = $CreatedDateUTC;
	}

	/*** @return string|NULL */
	public function getTimezone(): ?string
	{
		return $this->Timezone;
	}

	/*** @param string|NULL $Timezone */
	public function setTimezone(?string $Timezone): void
	{
		$this->Timezone = $Timezone;
	}

	/*** @return string|NULL */
	public function getOrganisationEntityType(): ?string
	{
		return $this->OrganisationEntityType;
	}

	/*** @param string|NULL $OrganisationEntityType */
	public function setOrganisationEntityType(?string $OrganisationEntityType): void
	{
		$this->OrganisationEntityType = $OrganisationEntityType;
	}

	/*** @return string|NULL */
	public function getShortCode(): ?string
	{
		return $this->ShortCode;
	}

	/*** @param string|NULL $ShortCode */
	public function setShortCode(?string $ShortCode): void
	{
		$this->ShortCode = $ShortCode;
	}

	/*** @return string */
	public function getOrganisationID(): string
	{
		return $this->OrganisationID;
	}

	/*** @param string $OrganisationID */
	public function setOrganisationID(string $OrganisationID): void
	{
		$this->OrganisationID = $OrganisationID;
	}

	/*** @return string|NULL */
	public function getEdition(): ?string
	{
		return $this->Edition;
	}

	/*** @param string|NULL $Edition */
	public function setEdition(?string $Edition): void
	{
		$this->Edition = $Edition;
	}

	/*** @return string|NULL */
	public function getClass(): ?string
	{
		return $this->Class;
	}

	/*** @param string|NULL $Class */
	public function setClass(?string $Class): void
	{
		$this->Class = $Class;
	}

	/*** @return string|NULL */
	public function getLineOfBusiness(): ?string
	{
		return $this->LineOfBusiness;
	}

	/*** @param string|NULL $LineOfBusiness */
	public function setLineOfBusiness(?string $LineOfBusiness): void
	{
		$this->LineOfBusiness = $LineOfBusiness;
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

	/*** @return ExternalLink|NULL */
	public function getExternalLinks(): ?ExternalLink
	{
		return $this->ExternalLinks;
	}

	/*** @param ExternalLink|NULL $ExternalLinks */
	public function setExternalLinks(?ExternalLink $ExternalLinks): void
	{
		$this->ExternalLinks = $ExternalLinks;
	}

	/*** @return PaymentTerm[]|NULL */
	public function getPaymentTerms(): ?array
	{
		return $this->PaymentTerms;
	}

	/*** @param PaymentTerm[]|NULL $PaymentTerms */
	public function setPaymentTerms(?array $PaymentTerms): void
	{
		$this->PaymentTerms = $PaymentTerms;
	}
}