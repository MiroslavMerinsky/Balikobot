<?php

include_once '../src/Balikobot/Balikobot.php';
include_once 'config.php';

use Merinsky\Balikobot\Balikobot;

// tests
$testGetters = false;
$testOrder = false;
$testLabels = false;
$testOverview = false;
$testOrderShipment = false;
$testTracking = false;

$b = new Balikobot(API_USER, API_KEY, SHOP);

// shippers + services
$shippers = $b->getShippers();

// getters
if ($testGetters) {
    printf("Shippers & its services\n");
    foreach ($shippers as $itemShippers) {
        printf("%s: %s\n", $itemShippers, arrayToString($b->getServices($itemShippers)));
    }
    printf("\n\n");

    // Countries
    printf("Countries\n");
    printf("%s", arrayToString($b->getCountryCodes()));
    printf("\n\n");

    // Currencies
    printf("Currencies\n");
    printf("%s", arrayToString($b->getCurrencies()));
    printf("\n\n");

    // shippers + services
    printf("Countries For Service\n");
    foreach ($shippers as $itemShippers) {
        printf("%s: %s\n", $itemShippers, arrayToString($b->getCountriesForService($itemShippers)));
    }
    printf("\n\n");

    // branches
    printf("Branches\n");
    foreach ($shippers as $itemShippers) {
        $services = $b->getServices($itemShippers);
        foreach ($services as $servicesKey => $servicesItem) {
            try {
                printf("%s:%s: %s\n", $itemShippers, $servicesKey, arrayToString($b->getBranches($itemShippers, $servicesKey)));
            } catch (\Exception $e) {
                printf("\nException: %d: %s\n", $e->getCode(), $e->getMessage());
            }
        }
    }
    printf("\n\n");

    // zip
    printf("Zip\n");
    foreach ($shippers as $itemShippers) {
        $services = $b->getServices($itemShippers);
        foreach ($services as $servicesKey => $servicesItem) {
            try {
                printf("%s:%s: %s\n", $itemShippers, $servicesKey, arrayToString($b->getZipCodes($itemShippers, $servicesKey)));
            } catch (\Exception $e) {
                printf("\nException: %d: %s\n", $e->getCode(), $e->getMessage());
            }
        }
    }
    printf("\n\n");

    // options
    printf("Options\n");
    foreach ($shippers as $itemShippers) {
        printf("%s: %s\n", $itemShippers, arrayToString($b->getOptions($itemShippers)));
    }
    printf("\n\n");

    // option services
    printf("Option services\n");
    printf("%s\n", arrayToString($b->getOptionServices()));
    printf("\n\n");

    // manipulation units
    printf("Manipulation units\n");
    foreach ($shippers as $itemShippers) {
        printf("%s: %s\n", $itemShippers, arrayToString($b->getManipulationUnits($itemShippers)));
    }
    printf("\n\n");
}

// order
if ($testOrder) {
    $package1 = $b->service(Balikobot::SHIPPER_PPL, 4, [
        Balikobot::OPTION_ORDER => '2017000005',
    ])
        ->customer('Miroslav Měřínský', 'Jankovcova 2', 'Praha', '17000', '+420773145254', 'miroslav12@email.cz')
        ->add();

    printf("Package 1: %s\n", arrayToString($package1));

    $package2 = $b->service(Balikobot::SHIPPER_PPL, 8, [
        Balikobot::OPTION_ORDER => '2017000006',
    ])
        ->customer('Miroslav Měřínský', 'Jankovcova 2', 'Praha', '17000', '+420773145254', 'miroslav12@email.cz')
        ->add();

    printf("Package 2: %s\n", arrayToString($package2));

    $package3 = $b->service(Balikobot::SHIPPER_DPD, 1, [
        Balikobot::OPTION_ORDER => '2017000007',
    ])
        ->customer('Miroslav Měřínský', 'Jankovcova 2', 'Praha', '17000', '+420773145254', 'miroslav12@email.cz')
        ->add();

    printf("Package 3: %s\n", arrayToString($package3));

    $package4 = $b->service(Balikobot::SHIPPER_DPD, 2, [
        Balikobot::OPTION_ORDER => '2017000008',
    ])
        ->customer('Miroslav Měřínský', 'Jankovcova 2', 'Praha', '17000', '+420773145254', 'miroslav12@email.cz', 'Test s.r.o.')
        ->add();

    printf("Package 4: %s\n", arrayToString($package4));
}

// labels
if ($testLabels) {
    $response = $b->getLabels(Balikobot::SHIPPER_PPL, [$package1['package_id'], $package2['package_id']]);
    printf("Response: %s\n", $response);

    $response = $b->getLabels(Balikobot::SHIPPER_DPD, [$package3['package_id'], $package4['package_id']]);
    printf("Response: %s\n", $response);
}

// overview
if ($testOverview) {
    $response1 = $b->overview(Balikobot::SHIPPER_PPL);
    printf("Response: %s\n", arrayToString($response1));
    $response2 = $b->overview(Balikobot::SHIPPER_DPD);
    printf("Response: %s\n", arrayToString($response2));
}

if ($testOrderShipment) {
    $packagesPPL = [];
    foreach ($response1 as $item) {
        $packagesPPL[] = $item['package_id'];
    }

    $packagesDPD = [];
    foreach ($response2 as $item) {
        $packagesDPD[] = $item['package_id'];
    }

    printf("Packages PPL: %s\n", arrayToString($packagesPPL));
    printf("Packages DPD: %s\n", arrayToString($packagesDPD));

    $response = $b->order(Balikobot::SHIPPER_PPL, $packagesPPL);
    printf("Response: %s\n", arrayToString($response));
    $response = $b->order(Balikobot::SHIPPER_DPD, $packagesDPD);
    printf("Response: %s\n", arrayToString($response));
}

if ($testTracking) {
    $response = $b->trackPackage(Balikobot::SHIPPER_PPL, '40450318559');
    printf("Response: %s\n", arrayToString($response));
    $response = $b->trackPackage(Balikobot::SHIPPER_DPD, '13805004931504');
    printf("Response: %s\n", arrayToString($response));

    $response = $b->trackPackageLast(Balikobot::SHIPPER_PPL, '40450318559');
    printf("Response: %s\n", arrayToString($response));
    $response = $b->trackPackageLast(Balikobot::SHIPPER_DPD, '13805004931504');
    printf("Response: %s\n", arrayToString($response));
}




/**
 * @param array $data
 * @return string
 */
function arrayToString(array $data) {
    $s = '[';
    foreach ($data as $key => $item) {
         if (is_array($item)) {
             $s .= "$key => " . arrayToString($item) .',';
         } else {
             $s .= "$key => $item,";
         }
    }
    $s = substr($s, 0, -1);
    $s .= ']';

    return $s;
}

