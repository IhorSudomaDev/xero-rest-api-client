<?php

namespace XeroRestApiClient\ValueObjects;

/**
 * Class TaxType
 * @package XeroRestApiClient\ValueObjects
 */
class TaxType
{
	/*** @var string */
	public const OUTPUT = 'OUTPUT';
	/*** @var string */
	public const INPUT = 'INPUT';
	/*** @var string */
	public const CAPEXINPUT = 'CAPEXINPUT';
	/*** @var string */
	public const EXEMPTEXPORT = 'EXEMPTEXPORT';
	/*** @var string */
	public const EXEMPTEXPENSES = 'EXEMPTEXPENSES';
	/*** @var string */
	public const EXEMPTCAPITAL = 'EXEMPTCAPITAL';
	/*** @var string */
	public const EXEMPTOUTPUT = 'EXEMPTOUTPUT';
	/*** @var string */
	public const INPUTTAXED = 'INPUTTAXED';
	/*** @var string */
	public const BASEXCLUDED = 'BASEXCLUDED';
	/*** @var string */
	public const GSTONCAPIMPORTS = 'GSTONCAPIMPORTS';
	/*** @var string */
	public const GSTONIMPORTS = 'GSTONIMPORTS';
	/*** @var string */
	public const NONE = 'NONE';
	/*** @var string */
	public const INPUT2 = 'INPUT2';
	/*** @var string */
	public const ZERORATED = 'ZERORATED';
	/*** @var string */
	public const OUTPUT2 = 'OUTPUT2';
	/*** @var string */
	public const CAPEXINPUT2 = 'CAPEXINPUT2';
	/*** @var string */
	public const CAPEXOUTPUT = 'CAPEXOUTPUT';
	/*** @var string */
	public const CAPEXOUTPUT2 = 'CAPEXOUTPUT2';
	/*** @var string */
	public const CAPEXSRINPUT = 'CAPEXSRINPUT';
	/*** @var string */
	public const CAPEXSROUTPUT = 'CAPEXSROUTPUT';
	/*** @var string */
	public const ECACQUISITIONS = 'ECACQUISITIONS';
	/*** @var string */
	public const ECZRINPUT = 'ECZRINPUT';
	/*** @var string */
	public const ECZROUTPUT = 'ECZROUTPUT';
	/*** @var string */
	public const ECZROUTPUTSERVICES = 'ECZROUTPUTSERVICES';
	/*** @var string */
	public const EXEMPTINPUT = 'EXEMPTINPUT';
	/*** @var string */
	public const REVERSECHARGES = 'REVERSECHARGES';
	/*** @var string */
	public const RRINPUT = 'RRINPUT';
	/*** @var string */
	public const RROUTPUT = 'RROUTPUT';
	/*** @var string */
	public const SRINPUT = 'SRINPUT';
	/*** @var string */
	public const SROUTPUT = 'SROUTPUT';
	/*** @var string */
	public const ZERORATEDINPUT = 'ZERORATEDINPUT';
	/*** @var string */
	public const ZERORATEDOUTPUT = 'ZERORATEDOUTPUT';
	/*** @var string */
	public const BLINPUT = 'BLINPUT';
	/*** @var string */
	public const DSOUTPUT = 'DSOUTPUT';
	/*** @var string */
	public const EPINPUT = 'EPINPUT';
	/*** @var string */
	public const ES33_OUTPUT = 'ES33OUTPUT';
	/*** @var string */
	public const ESN33_OUTPUT = 'ESN33OUTPUT';
	/*** @var string */
	public const IGDSINPUT2 = 'IGDSINPUT2';
	/*** @var string */
	public const IMINPUT2 = 'IMINPUT2';
	/*** @var string */
	public const MEINPUT = 'MEINPUT';
	/*** @var string */
	public const NRINPUT = 'NRINPUT';
	/*** @var string */
	public const OPINPUT = 'OPINPUT';
	/*** @var string */
	public const OSOUTPUT = 'OSOUTPUT';
	/*** @var string */
	public const TXESSINPUT = 'TXESSINPUT';
	/*** @var string */
	public const TXN33_INPUT = 'TXN33INPUT';
	/*** @var string */
	public const TXPETINPUT = 'TXPETINPUT';
	/*** @var string */
	public const TXREINPUT = 'TXREINPUT';
	/*** @var string */
	public const INPUT3 = 'INPUT3';
	/*** @var string */
	public const INPUT4 = 'INPUT4';
	/*** @var string */
	public const OUTPUT3 = 'OUTPUT3';
	/*** @var string */
	public const OUTPUT4 = 'OUTPUT4';
	/*** @var string */
	public const SROUTPUT2 = 'SROUTPUT2';
	/*** @var string */
	public const TXCA = 'TXCA';
	/*** @var string */
	public const SRCAS = 'SRCAS';
	/*** @var string */
	public const BLINPUT2 = 'BLINPUT2';
	/*** @var string */
	public const DRCHARGESUPPLY20 = 'DRCHARGESUPPLY20';
	/*** @var string */
	public const DRCHARGE20 = 'DRCHARGE20';
	/*** @var string */
	public const DRCHARGESUPPLY5 = 'DRCHARGESUPPLY5';
	/*** @var string */
	public const DRCHARGE5 = 'DRCHARGE5';
	/*** @var string */
	public const BADDEBTRELIEF = 'BADDEBTRELIEF';
	/*** @var string */
	public const IGDSINPUT3 = 'IGDSINPUT3';
	/*** @var string */
	public const SROVR = 'SROVR';
	/*** @var string */
	public const TOURISTREFUND = 'TOURISTREFUND';
	/*** @var string */
	public const TXRCN33 = 'TXRCN33';
	/*** @var string */
	public const TXRCRE = 'TXRCRE';
	/*** @var string */
	public const TXRCESS = 'TXRCESS';
	/*** @var string */
	public const TXRCTS = 'TXRCTS';
	/*** @var string */
	public const OUTPUTY23 = 'OUTPUTY23';
	/*** @var string */
	public const DSOUTPUTY23 = 'DSOUTPUTY23';
	/*** @var string */
	public const INPUTY23 = 'INPUTY23';
	/*** @var string */
	public const IMINPUT2_Y23 = 'IMINPUT2Y23';
	/*** @var string */
	public const IGDSINPUT2_Y23 = 'IGDSINPUT2Y23';
	/*** @var string */
	public const TXPETINPUTY23 = 'TXPETINPUTY23';
	/*** @var string */
	public const TXESSINPUTY23 = 'TXESSINPUTY23';
	/*** @var string */
	public const TXN33_INPUTY23 = 'TXN33INPUTY23';
	/*** @var string */
	public const TXREINPUTY23 = 'TXREINPUTY23';
	/*** @var string */
	public const TXCAY23 = 'TXCAY23';
	/*** @var string */
	public const BADDEBTRELIEFY23 = 'BADDEBTRELIEFY23';
	/*** @var string */
	public const IGDSINPUT3_Y23 = 'IGDSINPUT3Y23';
	/*** @var string */
	public const SROVRRSY23 = 'SROVRRSY23';
	/*** @var string */
	public const SROVRLVGY23 = 'SROVRLVGY23';
	/*** @var string */
	public const SRLVGY23 = 'SRLVGY23';
	/*** @var string */
	public const TXRCN33_Y23 = 'TXRCN33Y23';
	/*** @var string */
	public const TXRCREY23 = 'TXRCREY23';
	/*** @var string */
	public const TXRCESSY23 = 'TXRCESSY23';
	/*** @var string */
	public const TXRCTSY23 = 'TXRCTSY23';
	/*** @var string */
	public const IM = 'IM';
	/*** @var string */
	public const IMY23 = 'IMY23';
	/*** @var string */
	public const IMESS = 'IMESS';
	/*** @var string */
	public const IMESSY23 = 'IMESSY23';
	/*** @var string */
	public const IMN33 = 'IMN33';
	/*** @var string */
	public const IMN33_Y23 = 'IMN33Y23';
	/*** @var string */
	public const IMRE = 'IMRE';
	/*** @var string */
	public const IMREY23 = 'IMREY23';
	/*** @var string */
	public const BADDEBTRECOVERY = 'BADDEBTRECOVERY';
	/*** @var string */
	public const BADDEBTRECOVERYY23 = 'BADDEBTRECOVERYY23';

	/*** @return string[] */
	public static function getAllowableValues(): array
	{
		return [
			self::OUTPUT,
			self::INPUT,
			self::CAPEXINPUT,
			self::EXEMPTEXPORT,
			self::EXEMPTEXPENSES,
			self::EXEMPTCAPITAL,
			self::EXEMPTOUTPUT,
			self::INPUTTAXED,
			self::BASEXCLUDED,
			self::GSTONCAPIMPORTS,
			self::GSTONIMPORTS,
			self::NONE,
			self::INPUT2,
			self::ZERORATED,
			self::OUTPUT2,
			self::CAPEXINPUT2,
			self::CAPEXOUTPUT,
			self::CAPEXOUTPUT2,
			self::CAPEXSRINPUT,
			self::CAPEXSROUTPUT,
			self::ECACQUISITIONS,
			self::ECZRINPUT,
			self::ECZROUTPUT,
			self::ECZROUTPUTSERVICES,
			self::EXEMPTINPUT,
			self::REVERSECHARGES,
			self::RRINPUT,
			self::RROUTPUT,
			self::SRINPUT,
			self::SROUTPUT,
			self::ZERORATEDINPUT,
			self::ZERORATEDOUTPUT,
			self::BLINPUT,
			self::DSOUTPUT,
			self::EPINPUT,
			self::ES33_OUTPUT,
			self::ESN33_OUTPUT,
			self::IGDSINPUT2,
			self::IMINPUT2,
			self::MEINPUT,
			self::NRINPUT,
			self::OPINPUT,
			self::OSOUTPUT,
			self::TXESSINPUT,
			self::TXN33_INPUT,
			self::TXPETINPUT,
			self::TXREINPUT,
			self::INPUT3,
			self::INPUT4,
			self::OUTPUT3,
			self::OUTPUT4,
			self::SROUTPUT2,
			self::TXCA,
			self::SRCAS,
			self::BLINPUT2,
			self::DRCHARGESUPPLY20,
			self::DRCHARGE20,
			self::DRCHARGESUPPLY5,
			self::DRCHARGE5,
			self::BADDEBTRELIEF,
			self::IGDSINPUT3,
			self::SROVR,
			self::TOURISTREFUND,
			self::TXRCN33,
			self::TXRCRE,
			self::TXRCESS,
			self::TXRCTS,
			self::OUTPUTY23,
			self::DSOUTPUTY23,
			self::INPUTY23,
			self::IMINPUT2_Y23,
			self::IGDSINPUT2_Y23,
			self::TXPETINPUTY23,
			self::TXESSINPUTY23,
			self::TXN33_INPUTY23,
			self::TXREINPUTY23,
			self::TXCAY23,
			self::BADDEBTRELIEFY23,
			self::IGDSINPUT3_Y23,
			self::SROVRRSY23,
			self::SROVRLVGY23,
			self::SRLVGY23,
			self::TXRCN33_Y23,
			self::TXRCREY23,
			self::TXRCESSY23,
			self::TXRCTSY23,
			self::IM,
			self::IMY23,
			self::IMESS,
			self::IMESSY23,
			self::IMN33,
			self::IMN33_Y23,
			self::IMRE,
			self::IMREY23,
			self::BADDEBTRECOVERY,
			self::BADDEBTRECOVERYY23,
		];
	}
}