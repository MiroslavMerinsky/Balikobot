# Balikobot
Balikobot API

It offers implementation of Balikobot API described in the [documentation, ver.1.79](http://www.balikobot.cz/dokumentace/Balikobot-dokumentace-API.pdf).

Installation
------------
```console
composer require merinsky/balikobot
```

Usage
-----
To **order shipment** you should done these steps:
1. add packages to the front
2. order packages collection (for each shipper)
```php
use Merinsky\Balikobot\Balikobot;

define('API_USER', '...');
define('API_KEY', '...');
define('SHOP', 100);

// create instance of the class
$balikobot = new Balikobot(API_USER, API_KEY, SHOP);

// add package
$package = $balikobot->service(Balikobot::SHIPPER_PPL, 4, [
        Balikobot::OPTION_ORDER => '2017000001',
    ])
        ->customer('Jan Novak', 'Jankovcova 2', 'Praha', '17000', '+420773145254', 'jan.novak@email.cz')
        ->add();

/*
dump($package);
[ 
    carrier_id => 40458564564,
    package_id => 7338,
    label_url => http://pdf.balikobot.cz/ppl/eNorpelvMdA1trS0NAJcMA_plao.,
    status => 200,
]
*/

// order packages collection
$response = $balikobot->order(Balikobot::SHIPPER_PPL, [$package['package_id'], ...]);

/*
dump($response);
[
    order_id => 788,
    handover_url => http://pdf.balikobot.cz/ppl/eNrpelMTIyMaA1r6elNANcMA_xAn4.,
    labels_url => http://pdf.balikobot.cz/ppl/eNrpelIyMdAgfrSrpelVcMA_wAn0.,
    status => 200,
]
*/
```

Use the **getServices** method to get available services for a given shipper. It returns associative array, serviceId => description. Use the **serviceId** as a service method parameter.
```php
$response = $balikobot->getServices(Balikobot::SHIPPER_PPL);

/*
dump($response);
[
    2 => PPL Parcel Connect,
    3 => PPL Parcel CZ Dopolední balík,
    4 => PPL Parcel CZ Private,
    8 => PPL Parcel CZ Business,
    9 => PPL Parcel CZ Private - Večerní doručení,
    15 => PPL Firemní paleta,
    19 => PPL Soukromá paleta,
]
*/
```

Use the **getOptions** method to get available options for a given shipper. It returns list of options.
```php
$response = $balikobot->getOptions(Balikobot::SHIPPER_DPD);

/*
dump($response);
[
    0 => price,
    1 => real_order_id,
    2 => sms_notification,
    3 => branch_id,
    4 => del_insurance,
    5 => note,
    6 => weight,
]
*/
```

The **getBranches** method is useful for pickup services. You can get list of pickup places (branches). This method is available only for some services.
```php
$response = $balikobot->getBranches(Balikobot::SHIPPER_CP, 'NP');

/*
dump($response);
[
    67152 => [
        name => Hluboké Mašůvky,
        city => Hluboké Mašůvky,
        street => 230,
        zip => 67152,
        country => CZ,
        type => branch
    ],
    74282 => [
    ]
    ...
]
*/
```

Use the **getZipCodes** method to get available zip codes for given shipper and service. This method is not available for pickup services, of course.
```php
$response = $balikobot->getZipCodes(Balikobot::SHIPPER_ULOZENKA, 2);

/*
dump($response);
[
    0 => 97401,
    1 => 97405,
    2 => 97411,
    ...
]
*/
```

You can create labels only for given packages by calling **getLabels** method.
```php
$response = $balikobot->getLabels(Balikobot::SHIPPER_PPL, [1258, 544, 5454, ...]);

/*
dump($response);
http://pdf.balikobot.cz/ppl/eNsrMadfMdA1trS0NffcMA_vAnw.
*/
```

Call **overview** method to get list of packages in the front (added by add method).
```php
$response = $balikobot->overview(Balikobot::SHIPPER_PPL);

/*
dump($response);
[
    0 => [
        eshop_id => 20170000071490299455,
        carrier_id => 13805004931509,
        package_id => 5732,
        label_url => http://pdf.balikobot.cz/dpd/eNfaMTIyMdAtwrt1BFwzDWECQA..,
    ],     
    ...
]
*/
```

Call **trackPackage** method to get list of tracking information.
```php
$response = $balikobot->trackPackage(Balikobot::SHIPPER_PPL, '40425465434');

/*
dump($response);
[
    0 => 01.07.2014 11:11 1383 Hradec Kralove - Pouchov (CZ)  6211385 doručeno : BALIKOBOT  CZ •50311 • 1383 351 327,
    1 => 01.07.2014 06:37 1383 Hradec Kralove - Pouchov (CZ)rozvoz  CZ •50311 • 1383 351 327,
    2 => 01.07.2014 06:32 1383 Hradec Kralove - Pouchov (CZ)příjem na depo  CZ •50311 • 1383 64 327,
    3 => 30.06.2014 16:56 1381 Ricany (CZ)vyzvednutí  CZ •50311 • 1383 686 327,
]
*/
```

Call **trackPackageLast** method to get status id and message of the last tracking information. It is useful to summarize status of several packages.
```php
$response = $balikobot->trackPackageLast(Balikobot::SHIPPER_PPL, '40425465434');

/*
dump($response);
[
    status_id => 2,
    status_text => Zásilka je doručována příjemci.,
]
*/
```

The methods you use very rarely:
- **getCountryCodes()**
- **getCurrencies()**
- **getCountriesForService($shipper)**
- **getOptionServices()**
- **getManipulationUnits($shipper)**
- **dropPackage($shipper, $packageId)**




