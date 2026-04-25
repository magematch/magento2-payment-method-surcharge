# Payment Method Surcharge for Magento 2

> Free, open-source Magento 2 extension  
> by **Arjun Dhiman** — 
> [Adobe Commerce Certified Master](https://magematch.com/developers/arjun-dhiman)  
> Part of the [MageMatch](https://magematch.com) 
> developer ecosystem

# Payment Method Surcharge for Magento 2

`Rameera_PaymentMethodSurcharge` adds configurable surcharge fees by payment method and displays them across cart, checkout, order totals, invoice, credit memo, PDF, and sales email outputs.

## Features

- Configure payment surcharge by payment method.
- Supports fixed, percentage, per-item, and per-row calculation strategies.
- Supports optional tax handling for surcharge totals.
- Displays surcharge in storefront and admin sales totals.
- Includes invoice/credit memo/PDF/email total integrations.
- Includes admin order-create support.

## Compatibility

- Magento Open Source / Adobe Commerce `2.4.4` and later in the `2.4.x` line.
- PHP `8.1`, `8.2`, `8.3`, and `8.4`.

## Package Name

- Packagist package: `arjundhi/magento2-payment-method-surcharge`
- Module name (backward compatible): `Rameera_PaymentMethodSurcharge`

## Installation

> Important: use **one installation mode only**.
>
> - If installed via Composer, do **not** keep a copy in `app/code/Rameera/PaymentMethodSurcharge`.
> - If using `app/code`, do **not** install `arjundhi/magento2-payment-method-surcharge` via Composer.

### Install from app/code

Place the module under:

`app/code/Rameera/PaymentMethodSurcharge`

Then run:

```bash
php bin/magento module:enable Rameera_PaymentMethodSurcharge
php bin/magento setup:upgrade
php bin/magento cache:flush
```

### Install with Composer

```bash
composer require arjundhi/magento2-payment-method-surcharge
php bin/magento module:enable Rameera_PaymentMethodSurcharge
php bin/magento setup:upgrade
php bin/magento cache:flush
```

## Configuration

In admin, configure this module in:

`Stores > Configuration > Landofcoder > Advanced Payment Fee`

## CI Matrix

This repository includes a GitHub Actions workflow at `.github/workflows/ci.yml`.

Validation runs on:

- PHP `8.2`
- PHP `8.4`

It validates Composer metadata, PHP syntax, and XML well-formedness.

### Install commands by environment

Stable production install:

```bash
composer require arjundhi/magento2-payment-method-surcharge:^1.0
```

Staging/dev install (before first stable tag is visible):

```bash
composer require arjundhi/magento2-payment-method-surcharge:"dev-main@dev"
```

## Troubleshooting: duplicate module registration

If you see duplicate module registration errors, verify you do not have both paths at the same time:

- `app/code/Rameera/PaymentMethodSurcharge`
- `vendor/arjundhi/magento2-payment-method-surcharge`

Fix (Composer-based install):

```bash
rm -rf app/code/Rameera/PaymentMethodSurcharge
composer install
php bin/magento setup:upgrade
php bin/magento cache:flush
```

## License

This project uses `GPL-3.0-or-later` (compatible with the original upstream licensing).

---
## Installation
```bash
composer require magematch/magento2-payment-method-surcharge
bin/magento module:enable MageMatch_PaymentMethodSurcharge
bin/magento setup:upgrade
bin/magento cache:clean
```

## Compatibility
- Magento Open Source 2.4.x
- Adobe Commerce 2.4.x
- PHP 8.1, 8.2, 8.3

## Support & Custom Development
Need custom Magento development?  
Find vetted Adobe Commerce developers at  
**[magematch.com](https://magematch.com)**

## License
MIT License — free to use commercially
