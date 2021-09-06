<?php

declare(strict_types=1);

namespace Currency;


class Currency
{
    private string $isoCode;


    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    private function setIsoCode(string $isoCode)
    {

        $isoCode = strtoupper($isoCode);

        $this->validate($isoCode);

        $this->isoCode = $isoCode;
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }


    private array $cur = ['USD', 'EUR', 'GBP', 'JPY', 'CHF', 'CNY', 'RUB', 'UAH', 'AED', 'AFN', 'ALL',
        'AOA', 'ARS', 'AUD', 'AZN', 'BDT', 'BGN', 'BHD', 'BIF', 'BND', 'BOB', 'BRL', 'BWP', 'BYN', 'CAD',
        'CLP', 'COP', 'CRC', 'CUP', 'CZK', 'DJF', 'DKK', 'DZD', 'EGP', 'ETB', 'GEL', 'GHS', 'GMD', 'GNF',
        'HKD', 'HRK', 'HUF', 'IDR', 'ILS', 'INR', 'IQD', 'IRR', 'ISK', 'JOD', 'KES', 'KGS', 'KHR', 'KPW',
        'KRW', 'KWD', 'KZT', 'LAK', 'LBP', 'LKR', 'LYD', 'MAD', 'MDL', 'MGA', 'MKD', 'MNT', 'MRO', 'MUR',
        'MVR', 'MWK', 'MXN', 'MYR', 'MZN', 'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'OMR', 'PEN', 'PHP',
        'PKR', 'PLN', 'PYG', 'QAR', 'RON', 'RSD', 'SAR', 'SCR', 'SDG', 'SEK', 'SGD', 'SLL', 'SOS', 'SRD',
        'SYP', 'SZL', 'THB', 'TJS', 'TMT', 'TND', 'TRY', 'TWD', 'TZS', 'UGX', 'UYU', 'UZS', 'VEF', 'VND',
        'XAF', 'XDR', 'XOF', 'YER', 'ZAR', 'ZMK', 'CDF', 'AMD'];


    private function validate($value)
    {

        if (!in_array($value, $this->cur)) {
            exit ('InvalidArgumentException');
        }

    }


    public function equals(Currency $currency): bool
    {
        return $this->getIsoCode() == $currency->getIsoCode();
    }

}