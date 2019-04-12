<?php

namespace Merinsky\Balikobot;

/**
 * @author Miroslav Merinsky <miroslav@merinsky.biz>
 * @version 1.0
 */
class Balikobot {

    /**
     * Requests
     */
    const
        REQUEST_ADD = 'add', /*< add a package */
        REQUEST_DROP = 'drop', /*< drop a package */
        REQUEST_TRACK = 'track', /*< track a package */
        REQUEST_TRACKSTATUS = 'trackstatus', /*< track a package, get the last brief info */
        REQUEST_OVERVIEW = 'overview', /*< list of packages */
        REQUEST_PACKAGE= 'package',  /*< get the package info */
        REQUEST_ORDER = 'order',  /*< order shipment */
        REQUEST_ORDERVIEW = 'orderview',  /*< get the shipment details */
        REQUEST_SERVICES = 'services', /*< list of offered services */
        REQUEST_BRANCHES = 'branches', /*< list of available branches */
        REQUEST_FULLBRANCHES = 'fullbranches', /*< list of available branches with details */
        REQUEST_ZIPCODES = 'zipcodes', /*< list of available zip codes */
        REQUEST_LABELS = 'labels', /*< get labels */
        REQUEST_MANIPULATIONUNITS = 'manipulationunits', /*< list of units for palette shipping */
        REQUEST_COUNTRIES4SERVICE = 'countries4service'; /*< list of available countries */

    /**
     * Shippers
     */
    const
        SHIPPER_CP = 'cp', /*< Česká pošta s.p. */
        SHIPPER_DPD = 'dpd', /*< Direct Parcel Distribution CZ s.r.o. */
        SHIPPER_GEIS = 'geis', /*< Geis CZ s.r.o. */
        SHIPPER_GLS = 'gls', /*< General Logistics Systems Czech Republic s.r.o. */
        SHIPPER_INTIME = 'intime', /*< IN TIME SPEDICE s.r.o. */
        SHIPPER_PBH = 'pbh', /*< Pošta bez hranic (Frogman s.r.o.) */
        SHIPPER_PPL = 'ppl', /*< PPL CZ s.r.o. */
        SHIPPER_TOPTRANS = 'toptrans', /*< TOPTRANS EU a.s. */
        SHIPPER_ULOZENKA = 'ulozenka', /*< Uloženka s.r.o. */
        SHIPPER_ZASILKOVNA = 'zasilkovna'; /*< Zásilkovna s.r.o. */

    /**
     * Countries ISO 3166-1 alpha-2
     */
    const
        COUNTRY_AFGHANISTAN = 'AF', /*< Afghanistan */
        COUNTRY_ALAND_ISLANDS = 'AX', /*< Aland Islands */
        COUNTRY_ALBANIA = 'AL', /*< Albania */
        COUNTRY_ALGERIA = 'DZ', /*< Algeria */
        COUNTRY_AMERICAN_SAMOA = 'AS', /*< American Samoa */
        COUNTRY_ANDORRA = 'AD', /*< Andorra */
        COUNTRY_ANGOLA = 'AO', /*< Angola */
        COUNTRY_ANGUILLA = 'AI', /*< Anguilla */
        COUNTRY_ANTARCTICA = 'AQ', /*< Antarctica */
        COUNTRY_ANTIGUA_AND_BARBUDA = 'AG', /*< Antigua and Barbuda */
        COUNTRY_ARGENTINA = 'AR', /*< Argentina */
        COUNTRY_ARMENIA = 'AM', /*< Armenia */
        COUNTRY_ARUBA = 'AW', /*< Aruba */
        COUNTRY_AUSTRALIA = 'AU', /*< Australia */
        COUNTRY_AUSTRIA = 'AT', /*< Austria */
        COUNTRY_AZERBAIJAN = 'AZ', /*< Azerbaijan */
        COUNTRY_BAHAMAS = 'BS', /*< Bahamas */
        COUNTRY_BAHRAIN = 'BH', /*< Bahrain */
        COUNTRY_BANGLADESH = 'BD', /*< Bangladesh */
        COUNTRY_BARBADOS = 'BB', /*< Barbados */
        COUNTRY_BELARUS = 'BY', /*< Belarus */
        COUNTRY_BELGIUM = 'BE', /*< Belgium */
        COUNTRY_BELIZE = 'BZ', /*< Belize */
        COUNTRY_BENIN = 'BJ', /*< Benin */
        COUNTRY_BERMUDA = 'BM', /*< Bermuda */
        COUNTRY_BHUTAN = 'BT', /*< Bhutan */
        COUNTRY_BOLIVIA = 'BO', /*< Bolivia (Plurinational State of) */
        COUNTRY_BONAIRE = 'BQ', /*< Bonaire, Sint Eustatius and Saba */
        COUNTRY_BOSNIA_AND_HERZEGOVINA = 'BA', /*< Bosnia and Herzegovina */
        COUNTRY_BOTSWANA = 'BW', /*< Botswana */
        COUNTRY_BOUVET_ISLAND = 'BV', /*< Bouvet Island */
        COUNTRY_BRAZIL = 'BR', /*< Brazil */
        COUNTRY_BRITISH_INDIAN_OCEAN_TERRITORY = 'IO', /*< British Indian Ocean Territory */
        COUNTRY_BRUNEI_DARUSSALAM = 'BN', /*< Brunei Darussalam */
        COUNTRY_BULGARIA = 'BG', /*< Bulgaria */
        COUNTRY_BURKINA_FASO = 'BF', /*< Burkina Faso */
        COUNTRY_BURUNDI = 'BI', /*< Burundi */
        COUNTRY_CABO_VERDE = 'CV', /*< Cabo Verde */
        COUNTRY_CAMBODIA = 'KH', /*< Cambodia */
        COUNTRY_CAMEROON = 'CM', /*< Cameroon */
        COUNTRY_CANADA = 'CA', /*< Canada */
        COUNTRY_CAYMAN_ISLANDS = 'KY', /*< Cayman Islands */
        COUNTRY_CENTRAL_AFRICAN_REPUBLIC = 'CF', /*< Central African Republic */
        COUNTRY_CHAD = 'TD', /*< Chad */
        COUNTRY_CHILE = 'CL', /*< Chile */
        COUNTRY_CHINA = 'CN', /*< China */
        COUNTRY_CHRISTMAS_ISLAND = 'CX', /*< Christmas Island */
        COUNTRY_COCOS_ISLANDS = 'CC', /*< Cocos (Keeling) Islands */
        COUNTRY_COLOMBIA = 'CO', /*< Colombia */
        COUNTRY_COMOROS = 'KM', /*< Comoros */
        COUNTRY_CONGO = 'CG', /*< Congo */
        COUNTRY_CONGO_DEMOCRATIC_REPUBLIC = 'CD', /*< Congo (Democratic Republic of the) */
        COUNTRY_COOK_ISLANDS = 'CK', /*< Cook Islands */
        COUNTRY_COSTA_RICA = 'CR', /*< Costa Rica */
        COUNTRY_COTE_DIVOIRE = 'CI', /*< Côte d'Ivoire */
        COUNTRY_CROATIA = 'HR', /*< Croatia */
        COUNTRY_CUBA = 'CU', /*< Cuba */
        COUNTRY_CURACAO = 'CW', /*< Curaçao */
        COUNTRY_CYPRUS = 'CY', /*< Cyprus */
        COUNTRY_CZECHIA = 'CZ', /*< Czechia */
        COUNTRY_DENMARK = 'DK', /*< Denmark */
        COUNTRY_DJIBOUTI = 'DJ', /*< Djibouti */
        COUNTRY_DOMINICA = 'DM', /*< Dominica */
        COUNTRY_DOMINICAN_REPUBLIC = 'DO', /*< Dominican Republic */
        COUNTRY_ECUADOR = 'EC', /*< Ecuador */
        COUNTRY_EGYPT = 'EG', /*< Egypt */
        COUNTRY_EL_SALVADOR = 'SV', /*< El Salvador */
        COUNTRY_EQUATORIAL_GUINEA = 'GQ', /*< Equatorial Guinea */
        COUNTRY_ERITREA = 'ER', /*< Eritrea */
        COUNTRY_ESTONIA = 'EE', /*< Estonia */
        COUNTRY_ETHIOPIA = 'ET', /*< Ethiopia */
        COUNTRY_FALKLAND_ISLANDS = 'FK', /*< Falkland Islands (Malvinas) */
        COUNTRY_FAROE_ISLANDS = 'FO', /*< Faroe Islands */
        COUNTRY_FIJI = 'FJ', /*< Fiji */
        COUNTRY_FINLAND = 'FI', /*< Finland */
        COUNTRY_FRANCE = 'FR', /*< France */
        COUNTRY_FRENCH_GUIANA = 'GF', /*< French Guiana */
        COUNTRY_FRENCH_POLYNESIA = 'PF', /*< French Polynesia */
        COUNTRY_FRENCH_SOUTHERN_TERRITORIES = 'TF', /*< French Southern Territories */
        COUNTRY_GABON = 'GA', /*< Gabon */
        COUNTRY_GAMBIA = 'GM', /*< Gambia */
        COUNTRY_GEORGIA = 'GE', /*< Georgia */
        COUNTRY_GERMANY = 'DE', /*< Germany */
        COUNTRY_GHANA = 'GH', /*< Ghana */
        COUNTRY_GIBRALTAR = 'GI', /*< Gibraltar */
        COUNTRY_GREECE = 'GR', /*< Greece */
        COUNTRY_GREENLAND = 'GL', /*< Greenland */
        COUNTRY_GRENADA = 'GD', /*< Grenada */
        COUNTRY_GUADELOUPE = 'GP', /*< Guadeloupe */
        COUNTRY_GUAM = 'GU', /*< Guam */
        COUNTRY_GUATEMALA = 'GT', /*< Guatemala */
        COUNTRY_GUERNSEY = 'GG', /*< Guernsey */
        COUNTRY_GUINEA = 'GN', /*< Guinea */
        COUNTRY_GUINEA_BISSAU = 'GW', /*< Guinea-Bissau */
        COUNTRY_GUYANA = 'GY', /*< Guyana */
        COUNTRY_HAITI = 'HT', /*< Haiti */
        COUNTRY_HEARD_ISLAND_AND_MCDONALD_ISLANDS = 'HM', /*< Heard Island and McDonald Islands */
        COUNTRY_HOLY_SEE = 'VA', /*< Holy See */
        COUNTRY_HONDURAS = 'HN', /*< Honduras */
        COUNTRY_HONG_KONG = 'HK', /*< Hong Kong */
        COUNTRY_HUNGARY = 'HU', /*< Hungary */
        COUNTRY_ICELAND = 'IS', /*< Iceland */
        COUNTRY_INDIA = 'IN', /*< India */
        COUNTRY_INDONESIA = 'ID', /*< Indonesia */
        COUNTRY_IRAN = 'IR', /*< Iran (Islamic Republic of) */
        COUNTRY_IRAQ = 'IQ', /*< Iraq */
        COUNTRY_IRELAND = 'IE', /*< Ireland */
        COUNTRY_ISLE_OF_MAN = 'IM', /*< Isle of Man */
        COUNTRY_ISRAEL = 'IL', /*< Israel */
        COUNTRY_ITALY = 'IT', /*< Italy */
        COUNTRY_JAMAICA = 'JM', /*< Jamaica */
        COUNTRY_JAPAN = 'JP', /*< Japan */
        COUNTRY_JERSEY = 'JE', /*< Jersey */
        COUNTRY_JORDAN = 'JO', /*< Jordan */
        COUNTRY_KAZAKHSTAN = 'KZ', /*< Kazakhstan */
        COUNTRY_KENYA = 'KE', /*< Kenya */
        COUNTRY_KIRIBATI = 'KI', /*< Kiribati */
        COUNTRY_KOREA = 'KP', /*< Korea (Democratic People's Republic of) */
        COUNTRY_KOREA_REPUBLIC = 'KR', /*< Korea (Republic of) */
        COUNTRY_KUWAIT = 'KW', /*< Kuwait */
        COUNTRY_KYRGYZSTAN = 'KG', /*< Kyrgyzstan */
        COUNTRY_LAO = 'LA', /*< Lao People's Democratic Republic */
        COUNTRY_LATVIA = 'LV', /*< Latvia */
        COUNTRY_LEBANON = 'LB', /*< Lebanon */
        COUNTRY_LESOTHO = 'LS', /*< Lesotho */
        COUNTRY_LIBERIA = 'LR', /*< Liberia */
        COUNTRY_LIBYA = 'LY', /*< Libya */
        COUNTRY_LIECHTENSTEIN = 'LI', /*< Liechtenstein */
        COUNTRY_LITHUANIA = 'LT', /*< Lithuania */
        COUNTRY_LUXEMBOURG = 'LU', /*< Luxembourg */
        COUNTRY_MACAO = 'MO', /*< Macao */
        COUNTRY_MACEDONIA = 'MK', /*< Macedonia (the former Yugoslav Republic of) */
        COUNTRY_MADAGASCAR = 'MG', /*< Madagascar */
        COUNTRY_MALAWI = 'MW', /*< Malawi */
        COUNTRY_MALAYSIA = 'MY', /*< Malaysia */
        COUNTRY_MALDIVES = 'MV', /*< Maldives */
        COUNTRY_MALI = 'ML', /*< Mali */
        COUNTRY_MALTA = 'MT', /*< Malta */
        COUNTRY_MARSHALL_ISLANDS = 'MH', /*< Marshall Islands */
        COUNTRY_MARTINIQUE = 'MQ', /*< Martinique */
        COUNTRY_MAURITANIA = 'MR', /*< Mauritania */
        COUNTRY_MAURITIUS = 'MU', /*< Mauritius */
        COUNTRY_MAYOTTE = 'YT', /*< Mayotte */
        COUNTRY_MEXICO = 'MX', /*< Mexico */
        COUNTRY_MICRONESIA = 'FM', /*< Micronesia (Federated States of) */
        COUNTRY_MOLDOVA = 'MD', /*< Moldova (Republic of) */
        COUNTRY_MONACO = 'MC', /*< Monaco */
        COUNTRY_MONGOLIA = 'MN', /*< Mongolia */
        COUNTRY_MONTENEGRO = 'ME', /*< Montenegro */
        COUNTRY_MONTSERRAT = 'MS', /*< Montserrat */
        COUNTRY_MOROCCO = 'MA', /*< Morocco */
        COUNTRY_MOZAMBIQUE = 'MZ', /*< Mozambique */
        COUNTRY_MYANMAR = 'MM', /*< Myanmar */
        COUNTRY_NAMIBIA = 'NA', /*< Namibia */
        COUNTRY_NAURU = 'NR', /*< Nauru */
        COUNTRY_NEPAL = 'NP', /*< Nepal */
        COUNTRY_NETHERLANDS = 'NL', /*< Netherlands */
        COUNTRY_NEW_CALEDONIA = 'NC', /*< New Caledonia */
        COUNTRY_NEW_ZEALAND = 'NZ', /*< New Zealand */
        COUNTRY_NICARAGUA = 'NI', /*< Nicaragua */
        COUNTRY_NIGER = 'NE', /*< Niger */
        COUNTRY_NIGERIA = 'NG', /*< Nigeria */
        COUNTRY_NIUE = 'NU', /*< Niue */
        COUNTRY_NORFOLK_ISLAND = 'NF', /*< Norfolk Island */
        COUNTRY_NORTHERN_MARIANA_ISLANDS = 'MP', /*< Northern Mariana Islands */
        COUNTRY_NORWAY = 'NO', /*< Norway */
        COUNTRY_OMAN = 'OM', /*< Oman */
        COUNTRY_PAKISTAN = 'PK', /*< Pakistan */
        COUNTRY_PALAU = 'PW', /*< Palau */
        COUNTRY_PALESTINE = 'PS', /*< Palestine, State of */
        COUNTRY_PANAMA = 'PA', /*< Panama */
        COUNTRY_PAPUA_NEW_GUINEA = 'PG', /*< Papua New Guinea */
        COUNTRY_PARAGUAY = 'PY', /*< Paraguay */
        COUNTRY_PERU = 'PE', /*< Peru */
        COUNTRY_PHILIPPINES = 'PH', /*< Philippines */
        COUNTRY_PITCAIRN = 'PN', /*< Pitcairn */
        COUNTRY_POLAND = 'PL', /*< Poland */
        COUNTRY_PORTUGAL = 'PT', /*< Portugal */
        COUNTRY_PUERTO_RICO = 'PR', /*< Puerto Rico */
        COUNTRY_QATAR = 'QA', /*< Qatar */
        COUNTRY_REUNION = 'RE', /*< Réunion */
        COUNTRY_ROMANIA = 'RO', /*< Romania */
        COUNTRY_RUSSIAN_FEDERATION = 'RU', /*< Russian Federation */
        COUNTRY_RWANDA = 'RW', /*< Rwanda */
        COUNTRY_SAINT_BARTHELEMY = 'BL', /*< Saint Barthélemy */
        COUNTRY_SAINT_HELENA = 'SH', /*< Saint Helena, Ascension and Tristan da Cunha */
        COUNTRY_SAINT_KITTS_AND_NEVIS = 'KN', /*< Saint Kitts and Nevis */
        COUNTRY_SAINT_LUCIA = 'LC', /*< Saint Lucia */
        COUNTRY_SAINT_MARTIN = 'MF', /*< Saint Martin (French part) */
        COUNTRY_SAINT_PIERRE_AND_MIQUELON = 'PM', /*< Saint Pierre and Miquelon */
        COUNTRY_SAINT_VINCENT_AND_THE_GRENADINES = 'VC', /*< Saint Vincent and the Grenadines */
        COUNTRY_SAMOA = 'WS', /*< Samoa */
        COUNTRY_SAN_MARINO = 'SM', /*< San Marino */
        COUNTRY_SAO_TOME_AND_PRINCIPE = 'ST', /*< Sao Tome and Principe */
        COUNTRY_SAUDI_ARABIA = 'SA', /*< Saudi Arabia */
        COUNTRY_SENEGAL = 'SN', /*< Senegal */
        COUNTRY_SERBIA = 'RS', /*< Serbia */
        COUNTRY_SEYCHELLES = 'SC', /*< Seychelles */
        COUNTRY_SIERRA_LEONE = 'SL', /*< Sierra Leone */
        COUNTRY_SINGAPORE = 'SG', /*< Singapore */
        COUNTRY_SINT_MAARTEN = 'SX', /*< Sint Maarten (Dutch part) */
        COUNTRY_SLOVAKIA = 'SK', /*< Slovakia */
        COUNTRY_SLOVENIA = 'SI', /*< Slovenia */
        COUNTRY_SOLOMON_ISLANDS = 'SB', /*< Solomon Islands */
        COUNTRY_SOMALIA = 'SO', /*< Somalia */
        COUNTRY_SOUTH_AFRICA = 'ZA', /*< South Africa */
        COUNTRY_SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS = 'GS', /*< South Georgia and the South Sandwich Islands */
        COUNTRY_SOUTH_SUDAN = 'SS', /*< South Sudan */
        COUNTRY_SPAIN = 'ES', /*< Spain */
        COUNTRY_SRI_LANKA = 'LK', /*< Sri Lanka */
        COUNTRY_SUDAN = 'SD', /*< Sudan */
        COUNTRY_SURINAME = 'SR', /*< Suriname */
        COUNTRY_SVALBARD_AND_JAN_MAYEN = 'SJ', /*< Svalbard and Jan Mayen */
        COUNTRY_SWAZILAND = 'SZ', /*< Swaziland */
        COUNTRY_SWEDEN = 'SE', /*< Sweden */
        COUNTRY_SWITZERLAND = 'CH', /*< Switzerland */
        COUNTRY_SYRIAN_ARAB_REPUBLIC = 'SY', /*< Syrian Arab Republic */
        COUNTRY_TAIWAN = 'TW', /*< Taiwan, Province of China[a] */
        COUNTRY_TAJIKISTAN = 'TJ', /*< Tajikistan */
        COUNTRY_TANZANIA = 'TZ', /*< Tanzania, United Republic of */
        COUNTRY_THAILAND = 'TH', /*< Thailand */
        COUNTRY_TIMOR_LESTE = 'TL', /*< Timor-Leste */
        COUNTRY_TOGO = 'TG', /*< Togo */
        COUNTRY_TOKELAU = 'TK', /*< Tokelau */
        COUNTRY_TONGA = 'TO', /*< Tonga */
        COUNTRY_TRINIDAD_AND_TOBAGO = 'TT', /*< Trinidad and Tobago */
        COUNTRY_TUNISIA = 'TN', /*< Tunisia */
        COUNTRY_TURKEY = 'TR', /*< Turkey */
        COUNTRY_TURKMENISTAN = 'TM', /*< Turkmenistan */
        COUNTRY_TURKS_AND_CAICOS_ISLANDS = 'TC', /*< Turks and Caicos Islands */
        COUNTRY_TUVALU = 'TV', /*< Tuvalu */
        COUNTRY_UGANDA = 'UG', /*< Uganda */
        COUNTRY_UKRAINE = 'UA', /*< Ukraine */
        COUNTRY_UNITED_ARAB_EMIRATES = 'AE', /*< United Arab Emirates */
        COUNTRY_UNITED_KINGDOM_OF_GREAT_BRITAIN_AND_NORTHERN_IRELAND = 'GB', /*< United Kingdom of Great Britain and Northern Ireland */
        COUNTRY_UNITED_STATES_OF_AMERICA = 'US', /*< United States of America */
        COUNTRY_UNITED_STATES_MINOR_OUTLYING_ISLANDS = 'UM', /*< United States Minor Outlying Islands */
        COUNTRY_URUGUAY = 'UY', /*< Uruguay */
        COUNTRY_UZBEKISTAN = 'UZ', /*< Uzbekistan */
        COUNTRY_VANUATU = 'VU', /*< Vanuatu */
        COUNTRY_VENEZUELA = 'VE', /*< Venezuela (Bolivarian Republic of) */
        COUNTRY_VIET_NAM = 'VN', /*< Viet Nam */
        COUNTRY_VIRGIN_ISLANDS_BRITISH = 'VG', /*< Virgin Islands (British) */
        COUNTRY_VIRGIN_ISLANDS_US = 'VI', /*< Virgin Islands (U.S.) */
        COUNTRY_WALLIS_AND_FUTUNA = 'WF', /*< Wallis and Futuna */
        COUNTRY_WESTERN_SAHARA = 'EH', /*< Western Sahara */
        COUNTRY_YEMEN = 'YE', /*< Yemen */
        COUNTRY_ZAMBIA = 'ZM', /*< Zambia */
        COUNTRY_ZIMBABWE = 'ZW'; /*< Zimbabwe */

    /**
     * Currencies ISO 4217
     */
    const
        CURRENCY_AUD = 'AUD', /*< dolar */
        CURRENCY_BRL = 'BRL', /*< real */
        CURRENCY_BGN = 'BGN', /*< lev */
        CURRENCY_CNY = 'CNY', /*< renminbi */
        CURRENCY_DKK = 'DKK', /*< koruna */
        CURRENCY_EUR = 'EUR', /*< euro */
        CURRENCY_CZK = 'CZK', /*< koruna */
        CURRENCY_PHP = 'PHP', /*< peso */
        CURRENCY_HKD = 'HKD', /*< dolar */
        CURRENCY_HRK = 'HRK', /*< kuna */
        CURRENCY_INR = 'INR', /*< rupie */
        CURRENCY_IDR = 'IDR', /*< rupie */
        CURRENCY_ILS = 'ILS', /*< šekel */
        CURRENCY_JPY = 'JPY', /*< jen */
        CURRENCY_ZAR = 'ZAR', /*< rand */
        CURRENCY_KRW = 'KRW', /*< won */
        CURRENCY_CAD = 'CAD', /*< dolar */
        CURRENCY_HUF = 'HUF', /*< forint */
        CURRENCY_MYR = 'MYR', /*< ringgit */
        CURRENCY_MXN = 'MXN', /*< peso */
        CURRENCY_XDR = 'XDR', /*< SDR */
        CURRENCY_NOK = 'NOK', /*< koruna */
        CURRENCY_NZD = 'NZD', /*< dolar */
        CURRENCY_PLN = 'PLN', /*< zlotý */
        CURRENCY_RON = 'RON', /*< nové leu */
        CURRENCY_RUB = 'RUB', /*< rubl */
        CURRENCY_SGD = 'SGD', /*< dolar */
        CURRENCY_SEK = 'SEK', /*< koruna */
        CURRENCY_CHF = 'CHF', /*< frank */
        CURRENCY_THB = 'THB', /*< baht */
        CURRENCY_TRY = 'TRY', /*< lira */
        CURRENCY_USD = 'USD', /*< dolar */
        CURRENCY_GBP = 'GBP'; /*< libra */

    /**
     * Shippers' options
     */
    const
        OPTION_PRICE = 'price', /*< package price; float */
        OPTION_SERVICES = 'services', /*< additional services; array */
        OPTION_ORDER = 'real_order_id', /*< order id; string; max length 10 characters */
        OPTION_SMS_NOTIFICATION = 'sms_notification', /*< notifies customer by SMS; boolean */
        OPTION_BRANCH = 'branch_id', /*< branch id for pickup service */
        OPTION_INSURANCE = 'del_insurance', /*< insurance; boolean */
        OPTION_NOTE = 'note', /*< note */
        OPTION_MU_TYPE = 'mu_type', /*< manipulation unit code; call getManipulationUnits */
        OPTION_PIECES = 'pieces_count', /*< number of items if bigger than one; int */
        OPTION_TT_MU_TYPE = 'mu_type', /*< manipulation unit code; call getManipulationUnits */
        OPTION_TT_PIECES = 'pieces_count', /*< number of items if bigger than one; int */
        OPTION_WEIGHT = 'weight', /*< weight in kg; float */
        OPTION_PAY_BY_CUSTOMER = 'del_exworks', /*< pay by customer; boolean */
        OPTION_COMFORT = 'comfort_service', /*< carry to the floor and others; boolean */
        OPTION_RETURN_OLD_HA = 'app_disp', /*< return old household appliance; boolean */
        OPTION_PHONE_NOTIFICATION = 'phone_notification', /*< notifies customer by phone; boolean */
        OPTION_B2C = 'b2c_notification', /*< B2C service; boolean */
        OPTION_NOTE_DRIVER = 'note_driver', /*< note */
        OPTION_NOTE_CUSTOMER = 'note_recipient', /*< note for customer */
        OPTION_AGE = 'require_full_age', /*< taking delivery requires full age; boolean */
        OPTION_PASSWORD = 'password'; /*< taking delivery requires password */

    /**
     * CP shipper option services
     *
     * @details Set services in a services options, the services options is an array of selected services
     */
    const
        OPTION_SERVICES_1 = '1', /*< Do vlastních rukou */
        OPTION_SERVICES_2 = '2', /*< Složenka PS */
        OPTION_SERVICES_3 = '3', /*< Dodejka */
        OPTION_SERVICES_4 = '4', /*< Dobírka Pk A */
        OPTION_SERVICES_5 = '5', /*< Dobírka Pk C */
        OPTION_SERVICES_6 = '6', /*< Odpovědní zásilka */
        OPTION_SERVICES_7 = '7', /*< Udaná cena */
        OPTION_SERVICES_8 = '8', /*< Do vlastních rukou výhradně jen adresáta */
        OPTION_SERVICES_9 = '9', /*< Prioritaire (letecky) – pouze u zásilek do zahraničí. */
        OPTION_SERVICES_10 = '10', /*< Neskladně */
        OPTION_SERVICES_11 = '11', /*< Křehce */
        OPTION_SERVICES_12 = '12', /*< Uložit 7 dnů */
        OPTION_SERVICES_13 = '13', /*< Opis podací stvrzenky */
        OPTION_SERVICES_14 = '14', /*< Garantovaný čas dodání (pouze u produktu Balík Do ruky s prefixem DE) */
        OPTION_SERVICES_15 = '15', /*< Pilně */
        OPTION_SERVICES_16 = '16', /*< Neprodlužovat odběrní lhůtu */
        OPTION_SERVICES_19 = '19', /*< Doručení NE a st. svátek (pouze u EMS vnitrostátní nebo Balík Do ruky se službou Garantovaný čas dodání) */
        OPTION_SERVICES_20 = '20', /*< Neukládat */
        OPTION_SERVICES_21 = '21', /*< Uložit 3 dny */
        OPTION_SERVICES_22 = '22', /*< Uložit 10 dnů */
        OPTION_SERVICES_23 = '23', /*< Zmeškalá */
        OPTION_SERVICES_24 = '24', /*< Komplexní doručení (jen pro produkt Do ruky a Nadrozměr) */
        OPTION_SERVICES_25 = '25', /*< Odvoz starého spotřebiče (jen pro produkt Do ruky a Nadrozměr) a uložit 90 dnů (jen pro zásilky s prefixem RT) */
        OPTION_SERVICES_26 = '26', /*< Nedosílat */
        OPTION_SERVICES_27 = '27', /*< Vyzvednutí zásilky třetí osobou */
        OPTION_SERVICES_28 = '28', /*< Sleva 15% (pouze pro více zásilek určených jednomu adresátovi) */
        OPTION_SERVICES_30 = '30', /*< Prodloužení odběrní lhůty */
        OPTION_SERVICES_31 = '31', /*< Poste restante */
        OPTION_SERVICES_32 = '32', /*< Dodejka a do vlastních rukou */
        OPTION_SERVICES_33 = '33', /*< Dodejka a do vlastních rukou výhradně jen adresáta */
        OPTION_SERVICES_34 = '34', /*< Avízo adresát – SMS */
        OPTION_SERVICES_37 = '37', /*< Nevracet – vložit do schránky */
        OPTION_SERVICES_38 = '38', /*< Nevkládat do schránky */
        OPTION_SERVICES_40 = '40', /*< Dodání firmě (sleva dle poštovních podmínek) */
        OPTION_SERVICES_41 = '41', /*< Bezdokladová dobírka */
        OPTION_SERVICES_42 = '42', /*< Dokument (pouze pro zásilky do zahraničí) */
        OPTION_SERVICES_43 = '43', /*< Zboží (pouze pro zásilky do zahraničí) */
        OPTION_SERVICES_44 = '44', /*< Zboží s VDD (pouze pro zásilky do ciziny s celní zónou) */
        OPTION_SERVICES_45 = '45', /*< Avízo adresáta – SMS+E-mail */
        OPTION_SERVICES_46 = '46', /*< Avízo adresát – E-mail */
        OPTION_SERVICES_47 = '47', /*< Neklopit (pouze u nadrozměrné zásilky BN a balík Do ruky DR a DV nad 30kg) */
        OPTION_SERVICES_49 = '49', /*< Ověření údajů */
        OPTION_SERVICES_50 = '50', /*< Doporučená zásilka */
        OPTION_SERVICES_51 = '51', /*< Doporučená zásilka standard */
        OPTION_SERVICES_52 = '52', /*< Doporučená slepecká zásilka */
        OPTION_SERVICES_53 = '53', /*< Doporučená zásilka do zahraničí */
        OPTION_SERVICES_54 = '54', /*< Doporučená slepecká zásilka do zahraničí */
        OPTION_SERVICES_55 = '55', /*< Doporučený tiskovinový pytel do zahraničí */
        OPTION_SERVICES_56 = '56', /*< Úřední psaní */
        OPTION_SERVICES_57 = '57', /*< Úřední psaní standard */
        OPTION_SERVICES_58 = '58', /*< Doporučený aerogram do zahraničí */
        OPTION_SERVICES_60 = '60', /*< Firemní psaní doporučeně */
        OPTION_SERVICES_68 = '68', /*< Paleta (pro Balík Nadrozměr) */
        OPTION_SERVICES_69 = '69', /*< Vícekusová zásilka II (služba je určena pouze pro Balík Nadrozměr) */
        OPTION_SERVICES_70 = '70', /*< Vícekusová zásilka */
        OPTION_SERVICES_71 = '71', /*< Consignment */
        OPTION_SERVICES_76 = '76', /*< eDodejka SMS */
        OPTION_SERVICES_77 = '77', /*< eDodejka E-mail */
        OPTION_SERVICES_78 = '78'; /*< eDodejka SMS + E-mail */

    /**
     * Exceptions
     */
    const
        EXCEPTION_INVALID_REQUEST = 400, /*< Invalid request */
        EXCEPTION_NOT_SUPPORTED = 401, /*< Not supported */
        EXCEPTION_SERVER_ERROR = 500; /*< Unexpected response from the server */


    /** @var string */
    private $apiUser = null;

    /** @var string */
    private $apiKey = null;

    /** @var int */
    private $shopId = null;

    /** @var string */
    private $apiUrl = 'https://api.balikobot.cz';

    /** @var array */
    private $data = [
        'isService' => false,
        'isCustomer' => false,
        'isCashOnDelivery' => false,
        'shipper' => null,
        'data' => [],
    ];

    /**
     * @param string $apiUser
     * @param string $apiKey
     * @param int $shopId Own identification of the shop; will be used to identify packages if you use one account for several shops
     */
    public function __construct($apiUser, $apiKey, $shopId) {
        if (empty($apiUser) || empty($apiKey) || empty($shopId))
            throw new \InvalidArgumentException('Invalid argument has been entered.');
        if (!is_int($shopId))
            throw new \InvalidArgumentException('Invalid shopId has been entered. Enter number.');

        $this->shopId = $shopId;
        $this->apiUser = $apiUser;
        $this->apiKey = $apiKey;
    }

    /**
     * Sets service
     *
     * @param string $shipper
     * @param string|int $service
     * @param array $options
     * @return $this
     */
    public function service($shipper, $service, array $options = []) {
        if (empty($shipper) || empty($service))
            throw new \InvalidArgumentException('Invalid argument has been entered.');
        if (!in_array($shipper, $this->getShippers()))
            throw new \InvalidArgumentException("Unknown $shipper shipper.");
        if (!isset($this->getServices($shipper)[$service]))
            throw new \InvalidArgumentException("Invalid $service service for $shipper shipper.");

        // clean first
        $this->clean();

        // test if options are valid
        $validOptions = $this->getOptions($shipper);
        foreach ($options as $key => $v) {
            if (!in_array($key, $validOptions))
                throw new \InvalidArgumentException("Invalid $key option for $shipper shipper.");
        }

        switch ($shipper) {
            case self::SHIPPER_CP:
                if (!isset($options[self::OPTION_PRICE]))
                    throw new \InvalidArgumentException("The price option is required for $shipper shipper.");
                break;

            case self::SHIPPER_DPD:
                if ($service == 3 /* pickup */) {
                    if (empty($options[self::OPTION_BRANCH]))
                        throw new \InvalidArgumentException('The branch option is required for pickup service.');
                }
                break;

            case self::SHIPPER_PPL:
                if (($service == 15) || ($service == 19)) /* palette shipping */ {
                    if (!isset($options[self::OPTION_MU_TYPE]))
                        throw new \InvalidArgumentException('The mu type option is required for this service.');
                    if (!isset($options[self::OPTION_WEIGHT]))
                        throw new \InvalidArgumentException('The weight option is required for this service.');
                } else {
                    if (isset($options[self::OPTION_NOTE]))
                        throw new \InvalidArgumentException('The note option is not supported for this service.');
                }
                break;

            case self::SHIPPER_ZASILKOVNA:
                if (!isset($options[self::OPTION_BRANCH]))
                    throw new \InvalidArgumentException("The branch option is required for $shipper shipper.");
                if (!isset($options[self::OPTION_PRICE]))
                    throw new \InvalidArgumentException("The price option is required for $shipper shipper.");
                break;

            case self::SHIPPER_GEIS:
                if (isset($options[self::OPTION_INSURANCE]) && !isset($options[self::OPTION_PRICE]))
                    throw new \InvalidArgumentException('The price option is required for insurance option.');
                if ($service == 6 /* pickup */) {
                    if (empty($options[self::OPTION_BRANCH]))
                        throw new \InvalidArgumentException('The branch option is required for pickup service.');
                } elseif (($service == 4) || ($service == 5)) /* palette */ {
                    if (empty($options[self::OPTION_MU_TYPE]))
                        throw new \InvalidArgumentException('The mu type option is required for pickup service.');
                    if (empty($options[self::OPTION_WEIGHT]))
                        throw new \InvalidArgumentException('The weight option is required for pickup service.');
                }
                break;

            case self::SHIPPER_ULOZENKA:
                if (in_array($service, [1, 5, 7, 10, 11])) /* pickup */ {
                    if (empty($options[self::OPTION_BRANCH]))
                        throw new \InvalidArgumentException('The branch option is required for pickup service.');
                }
                if ($service == 2) {
                    if (!isset($options[self::OPTION_PRICE]))
                        throw new \InvalidArgumentException("The price option is required for this service.");
                }
                if (in_array($service, [2, 6, 7])) {
                    if (empty($options[self::OPTION_WEIGHT]))
                        throw new \InvalidArgumentException('The weight option is required for this service.');
                }
                break;

            case self::SHIPPER_INTIME:
                if (isset($options[self::OPTION_INSURANCE]) && !isset($options[self::OPTION_PRICE]))
                    throw new \InvalidArgumentException('The price option is required for insurance option.');
                if (($service == 4) || ($service == 5)) /* pickup */ {
                    if (empty($options[self::OPTION_BRANCH]))
                        throw new \InvalidArgumentException('The branch option is required for pickup service.');
                }
                break;

            case self::SHIPPER_GLS:
                if (!isset($options[self::OPTION_PRICE]))
                    throw new \InvalidArgumentException("The price option is required for $shipper shipper.");
                if ($service == 2 /* pickup */) {
                    if (empty($options[self::OPTION_BRANCH]))
                        throw new \InvalidArgumentException('The branch option is required for pickup service.');
                }
                break;

            case self::SHIPPER_TOPTRANS:
                if (empty($options[self::OPTION_TT_MU_TYPE]))
                    throw new \InvalidArgumentException('The mu type option is required for this service.');
                if (empty($options[self::OPTION_WEIGHT]))
                    throw new \InvalidArgumentException('The weight option is required for this service.');
                break;

            case self::SHIPPER_PBH:
                if (!isset($options[self::OPTION_PRICE]))
                    throw new \InvalidArgumentException("The price option is required for $shipper shipper.");
                break;
        }

        // save options
        foreach ($options as $name => $value) {
            $this->saveOption($name, $value, $shipper);
        }
        $this->data['data']['service_type'] = $service;
        $this->data['shipper'] = $shipper;

        $this->data['isService'] = true;

        return $this;
    }

    /**
     * Sets customer data
     *
     * @param string $name
     * @param string $street
     * @param string $city
     * @param string $zip
     * @param string $phone
     * @param string $email
     * @param string $company
     * @param string $country
     * @return $this
     */
    public function customer($name, $street, $city, $zip, $phone, $email, $company = null, $country = self::COUNTRY_CZECHIA) {
        if (empty($name) || empty($street) || empty($city) || empty($zip) || empty($phone) || empty($email))
            throw new \InvalidArgumentException('Invalid argument has been entered.');
        if (!in_array($country, $this->getCountryCodes()))
            throw new \InvalidArgumentException('Invalid country code has been entered.');

        switch ($country) {
            case self::COUNTRY_CZECHIA:
                if (!preg_match('/^\d{5}$/', $zip))
                    throw new \InvalidArgumentException('Invalid zip code has been entered. Match XXXXX pattern.');
                break;

            default:
                throw new \UnexpectedValueException("Validation method is not implemented for $country country.");
        }

        if (!preg_match('/^\+420\d{9}$/', $phone))
            throw new \InvalidArgumentException('Invalid phone has been entered. Match +420YYYYYYYYY pattern.');

        $this->data['data']['rec_name'] = $name;
        $this->data['data']['rec_street'] = $street;
        $this->data['data']['rec_city'] = $city;
        $this->data['data']['rec_zip'] = $zip;
        $this->data['data']['rec_phone'] = $phone;
        $this->data['data']['rec_email'] = $email;
        $this->data['data']['rec_country'] = $country;
        if (isset($company))
           $this->data['data']['rec_firm'] = $company;

        $this->data['isCustomer'] = true;

        return $this;
    }

    /**
     * Sets cash on delivery
     *
     * @param float $price
     * @param string|int $variableSymbol
     * @param string $currency
     * @return $this
     */
    public function cashOnDelivery($price, $variableSymbol, $currency = self::CURRENCY_CZK) {
        if (empty($price) || empty($variableSymbol))
            throw new \InvalidArgumentException('Invalid argument has been entered.');
        if (!is_numeric($price))
            throw new \InvalidArgumentException('Invalid price has been entered.');
        if (!is_numeric($variableSymbol))
            throw new \InvalidArgumentException('Invalid variable symbol has been entered.');
        if (!in_array($currency, $this->getCurrencies()))
            throw new \InvalidArgumentException('Invalid currency has been entered.');

        $this->data['data']['cod_price'] = (float)$price;
        $this->data['data']['vs'] = $variableSymbol;
        $this->data['data']['cod_currency'] = $currency;

        $this->data['isCashOnDelivery'] = true;

        return $this;
    }

    /**
     * @return array(
     *     'carrier_id' => track and trace package id,
     *     'package_id' => identification used by API request
     *     'label_url' => url to the label
     * )
     */
    public function add() {
        if (!$this->data['isService'] || !$this->data['isCustomer'])
            throw new \UnexpectedValueException('Call service and customer method before.');

        $orderId = isset($this->data['data'][self::OPTION_ORDER]) ? sprintf('%\'010s', $this->data['data'][self::OPTION_ORDER]) : '0000000000';
        $this->data['data']['eid'] = $this->getEid(null, $orderId);
        // add only one package
        $response = $this->call(self::REQUEST_ADD, $this->data['shipper'], [$this->data['data']]);
        $this->clean();

        if (!isset($response[0]['package_id']))
            throw new \InvalidArgumentException('Invalid arguments. Errors: ' . serialize($response[0]) . '.', self::EXCEPTION_INVALID_REQUEST);

        return $response[0];
    }

    /**
     * Returns available services for the given shipper
     *
     * @param string $shipper
     * @return array
     */
    public function getServices($shipper) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_SERVICES, $shipper);

        if (isset($response['status']) && ($response['status'] == 409))
            throw new \InvalidArgumentException("The $shipper shipper is not supported.", self::EXCEPTION_NOT_SUPPORTED);
        if (!isset($response['status']) || ($response['status'] != 200)) {
            $code = isset($response['status']) ? $response['status'] : 0;
            throw new \UnexpectedValueException("Unexpected server response, code = $code.", self::EXCEPTION_SERVER_ERROR);
        }

        return (!empty($response['service_types'])) ? $response['service_types'] : [];
    }

    /**
     * Returns available manipulation units for the given shipper
     *
     * @param string $shipper
     * @return array
     */
    public function getManipulationUnits($shipper) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_MANIPULATIONUNITS, $shipper);

        if (isset($response['status']) && ($response['status'] == 409))
            throw new \InvalidArgumentException("The $shipper shipper is not supported.", self::EXCEPTION_NOT_SUPPORTED);
        if (!isset($response['status']) || ($response['status'] != 200)) {
            $code = isset($response['status']) ? $response['status'] : 0;
            throw new \UnexpectedValueException("Unexpected server response, code = $code.", self::EXCEPTION_SERVER_ERROR);
        }

        if ($response['units'] === null)
            return [];

        $units = [];

        foreach ($response['units'] as $item) {
            $units[$item['code']] = $item['name'];
        }

        return $units;
    }

    /**
     * Returns available branches for the given shipper and its service
     *
     * @param string $shipper
     * @param string $service
     * @param bool $full Calls full branches instead branches request; currently available only for zasilkovna shipper
     * @return array
     */
    public function getBranches($shipper, $service = null, $full = false) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call($full ? self::REQUEST_FULLBRANCHES : self::REQUEST_BRANCHES, $shipper, [], $service);

        if (isset($response['status']) && ($response['status'] == 409))
            throw new \InvalidArgumentException("The $shipper shipper is not supported.", self::EXCEPTION_NOT_SUPPORTED);
        if (!isset($response['status']) || ($response['status'] != 200)) {
            $code = isset($response['status']) ? $response['status'] : 0;
            throw new \UnexpectedValueException("Unexpected server response, code = $code.", self::EXCEPTION_SERVER_ERROR);
        }

        if ($response['branches'] === null)
            return [];

        $branches = [];
        $id = 'id';

        if ($shipper == self::SHIPPER_CP) {
            $id = 'zip';
        } elseif ($shipper == self::SHIPPER_INTIME) {
            $id = 'name';
        }

        foreach ($response['branches'] as $item) {
            $branches[$item[$id]] = $item;
        }

        return $branches;
    }

    /**
     * Returns list of countries where service is available in
     *
     * @param string $shipper
     * @return array
     */
    public function getCountriesForService($shipper) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_COUNTRIES4SERVICE, $shipper);

        if (isset($response['status']) && ($response['status'] == 409))
            throw new \InvalidArgumentException("The $shipper shipper is not supported.", self::EXCEPTION_NOT_SUPPORTED);
        if (!isset($response['status']) || ($response['status'] != 200)) {
            $code = isset($response['status']) ? $response['status'] : 0;
            throw new \UnexpectedValueException("Unexpected server response, code = $code.", self::EXCEPTION_SERVER_ERROR);
        }

        if ($response['service_types'] === null)
            return [];

        $services = [];

        foreach ($response['service_types'] as $item) {
            $services[$item['service_type']] = $item['countries'];
        }

        return $services;
    }

    /**
     * Returns available branches for the given shipper and its service
     *
     * @param string $shipper
     * @param string $service
     * @return array
     */
    public function getZipCodes($shipper, $service, $country = self::COUNTRY_CZECHIA) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers())
            || empty($service) || !isset($this->getServices($shipper)[$service])
            || !in_array($country, $this->getCountryCodes()))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_ZIPCODES, $shipper, [], "$service/$country");

        if (isset($response['status']) && ($response['status'] == 409))
            throw new \InvalidArgumentException("The $shipper shipper is not supported.", self::EXCEPTION_NOT_SUPPORTED);
        if (!isset($response['status']) || ($response['status'] != 200)) {
            $code = isset($response['status']) ? $response['status'] : 0;
            throw new \UnexpectedValueException("Unexpected server response, code = $code.", self::EXCEPTION_SERVER_ERROR);
        }

        if ($response['zip_codes'] === null)
            return [];

        $zip = [];

        // type item indicates if structure is zip or zip codes, but for some shippers response structure is wrong
        // so we test if zip exist
        if (isset($response['zip_codes'][0]['zip'])) {
            foreach ($response['zip_codes'] as $item) {
                $zip[] = $item['zip'];
            }
        } elseif (isset($response['zip_codes'][0]['zip_start']) && isset($response['zip_codes'][0]['zip_end'])) {
            foreach ($response['zip_codes'] as $item) {
                $zip[] = [$item['zip_start'], $item['zip_end']];
            }
        }

        return $zip;
    }

    /**
     * Drops a package from the front
     * The package must not ordered
     *
     * @param string $shipper
     * @param int $packageId
     */
    public function dropPackage($shipper, $packageId) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()) || empty($packageId))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_DROP, $shipper, ['id' => $packageId]);

        if (!isset($response['status']))
            throw new \UnexpectedValueException('Unexpected server response.', self::EXCEPTION_SERVER_ERROR);
        if ($response['status'] == 404)
            throw new \UnexpectedValueException('The package does not exist or it was ordered.', self::EXCEPTION_INVALID_REQUEST);
        if ($response['status'] != 200)
            throw new \UnexpectedValueException("Unexpected server response, code={$response['status']}.", self::EXCEPTION_SERVER_ERROR);
    }

    /**
     * Tracks a package
     *
     * @param string $shipper
     * @param string $carrierId
     * @return array
     */
    public function trackPackage($shipper, $carrierId) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()) || empty($carrierId))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_TRACK, $shipper, ['id' => $carrierId]);

        if (isset($response['status']) && ($response['status'] != 200))
            throw new \UnexpectedValueException("Unexpected server response, code={$response['status']}.", self::EXCEPTION_SERVER_ERROR);
        if (empty($response[0]))
            throw new \UnexpectedValueException('Unexpected server response.', self::EXCEPTION_SERVER_ERROR);

        return $response[0];
    }

    /**
     * Tracks a package, get the last info
     *
     * @param string $shipper
     * @param string $carrierId
     * @return array
     */
    public function trackPackageLast($shipper, $carrierId) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()) || empty($carrierId))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_TRACKSTATUS, $shipper, ['id' => $carrierId]);

        if (isset($response['status']) && ($response['status'] != 200))
            throw new \UnexpectedValueException("Unexpected server response, code={$response['status']}.", self::EXCEPTION_SERVER_ERROR);
        if (empty($response[0]))
            throw new \UnexpectedValueException('Unexpected server response.', self::EXCEPTION_SERVER_ERROR);

        return $response[0];
    }

    /**
     * Checks if there are packages in the front (not ordered)
     *
     * @param string $shipper
     */
    public function overview($shipper) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_OVERVIEW, $shipper);

        if (isset($response['status']) && ($response['status'] == 404))
            throw new \UnexpectedValueException('No packages.', self::EXCEPTION_INVALID_REQUEST);

        return $response;
    }

    /**
     * Gets labels
     *
     * @param string $shipper
     * @param array $packages
     * @return string
     */
    public function getLabels($shipper, array $packages) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()) || empty($packages))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_LABELS, $shipper, ['package_ids' => $packages]);

        if (isset($response['status']) && ($response['status'] != 200))
            throw new \UnexpectedValueException('Invalid data or invalid packages number.', self::EXCEPTION_INVALID_REQUEST);

        return $response['labels_url'];
    }

    /**
     * Gets complete information about a package
     *
     * @param string $shipper
     * @param int $packageId
     * @return array
     */
    public function getPackageInfo($shipper, $packageId) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()) || empty($packageId))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_PACKAGE, $shipper, [], $packageId);

        if (isset($response['status']) && ($response['status'] == 404))
            throw new \UnexpectedValueException('Invalid package number.', self::EXCEPTION_INVALID_REQUEST);

        return $response;
    }

    /**
     * Order packages' collection
     *
     * @param string $shipper
     * @param array $packages
     * @return array
     */
    public function order($shipper, array $packages = []) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $response = $this->call(self::REQUEST_ORDER, $shipper, empty($packages) ? [] : ['package_ids' => $packages]);

        if (!isset($response['status']))
            throw new \UnexpectedValueException('Unexpected server response.', self::EXCEPTION_SERVER_ERROR);
        if ($response['status'] == 406)
            throw new \UnexpectedValueException('Invalid package numbers.', self::EXCEPTION_INVALID_REQUEST);
        if ($response['status'] != 200)
            throw new \UnexpectedValueException("Unexpected server response, code={$response['status']}.", self::EXCEPTION_SERVER_ERROR);

        return $response;
    }

    // helpers ---------------------------------------------------------------------------------------------------------

    /**
     * Returns available shippers
     */
    public function getShippers() {
        $rc = new \ReflectionClass($this);
        $constants = $rc->getConstants();

        foreach ($constants as $key => $item) {
            if (substr($key, 0, 8) !== 'SHIPPER_') {
                unset($constants[$key]);
            }
        }

        return $constants;
    }

    /**
     * Returns available options for the given shipper
     *
     * @param string $shipper
     * @return array
     */
    public function getOptions($shipper) {
        if (empty($shipper) || !in_array($shipper, $this->getShippers()))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        switch ($shipper) {
            case self::SHIPPER_CP: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_SERVICES,
                self::OPTION_WEIGHT,
            ];

            case self::SHIPPER_DPD: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_SMS_NOTIFICATION,
                self::OPTION_BRANCH,
                self::OPTION_INSURANCE,
                self::OPTION_NOTE,
                self::OPTION_WEIGHT,
            ];

            case self::SHIPPER_GEIS: return [
                self::OPTION_BRANCH,
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_INSURANCE,
                self::OPTION_PAY_BY_CUSTOMER,
                self::OPTION_NOTE,
                // palette
                self::OPTION_MU_TYPE,
                self::OPTION_PIECES,
                self::OPTION_WEIGHT,
                self::OPTION_PAY_BY_CUSTOMER,
                self::OPTION_SMS_NOTIFICATION,
                self::OPTION_PHONE_NOTIFICATION,
                self::OPTION_B2C,
                self::OPTION_NOTE_DRIVER,
                self::OPTION_NOTE_CUSTOMER,
            ];

            case self::SHIPPER_GLS: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_BRANCH,
                self::OPTION_WEIGHT,
            ];

            case self::SHIPPER_INTIME: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_BRANCH,
                self::OPTION_INSURANCE,
                self::OPTION_NOTE,
                self::OPTION_WEIGHT,
            ];

            case self::SHIPPER_PBH: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
            ];

            case self::SHIPPER_PPL: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_BRANCH,
                self::OPTION_INSURANCE,
                // palette
                self::OPTION_MU_TYPE,
                self::OPTION_PIECES,
                self::OPTION_WEIGHT,
                self::OPTION_PAY_BY_CUSTOMER,
                self::OPTION_COMFORT,
                self::OPTION_RETURN_OLD_HA,
                self::OPTION_NOTE,
            ];

            case self::SHIPPER_TOPTRANS: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_TT_MU_TYPE,
                self::OPTION_TT_PIECES,
                self::OPTION_WEIGHT,
                self::OPTION_NOTE,
                self::OPTION_COMFORT,
            ];

            case self::SHIPPER_ULOZENKA: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_BRANCH,
                self::OPTION_WEIGHT,
                self::OPTION_NOTE,
                self::OPTION_AGE,
                self::OPTION_PASSWORD,
            ];

            case self::SHIPPER_ZASILKOVNA: return [
                self::OPTION_PRICE,
                self::OPTION_ORDER,
                self::OPTION_BRANCH,
                self::OPTION_WEIGHT,
            ];
        }

        return [];
    }

    /**
     * Returns country codes
     */
    public function getCountryCodes() {
        $rc = new \ReflectionClass($this);
        $constants = $rc->getConstants();

        foreach ($constants as $key => $item) {
            if (substr($key, 0, 8) !== 'COUNTRY_') {
                unset($constants[$key]);
            }
        }

        return $constants;
    }

    /**
     * Returns currencies
     */
    public function getCurrencies() {
        $rc = new \ReflectionClass($this);
        $constants = $rc->getConstants();

        foreach ($constants as $key => $item) {
            if (substr($key, 0, 9) !== 'CURRENCY_') {
                unset($constants[$key]);
            }
        }

        return $constants;
    }

    /**
     * Returns available values for option services
     */
    public function getOptionServices() {
        $rc = new \ReflectionClass($this);
        $constants = $rc->getConstants();

        foreach ($constants as $key => $item) {
            if (substr($key, 0, 16) !== 'OPTION_SERVICES_') {
                unset($constants[$key]);
            }
        }

        return $constants;
    }

    // private ---------------------------------------------------------------------------------------------------------

    /**
     * @param string $name
     * @param mixed $value
     */
    private function saveOption($name, $value, $shipper = null) {
        if (empty($name))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        switch ($name) {
            case self::OPTION_BRANCH:
                // do nothing
                break;

            case self::OPTION_MU_TYPE:
            case self::OPTION_TT_MU_TYPE:
                // do nothing
                break;

            case self::OPTION_SERVICES:
                if (!is_array($value))
                    throw new \InvalidArgumentException('Invalid value of services option has been entered.');

                $cpServices = $this->getOptionServices();

                foreach ($value as $serviceItem) {
                    if (!in_array($serviceItem, $cpServices))
                        throw new \InvalidArgumentException("Invalid $serviceItem value of services option has been entered.");
                }

                $value = implode('+', $value);
                break;

            case self::OPTION_SMS_NOTIFICATION:
            case self::OPTION_INSURANCE:
            case self::OPTION_PAY_BY_CUSTOMER:
            case self::OPTION_COMFORT:
            case self::OPTION_RETURN_OLD_HA:
            case self::OPTION_PHONE_NOTIFICATION:
            case self::OPTION_B2C:
            case self::OPTION_AGE:
                if (!is_bool($value))
                    throw new \InvalidArgumentException("Invalid value of $name option has been entered. Enter boolean.");

                $value = (bool)$value;
                break;

            case self::OPTION_PRICE:
            case self::OPTION_WEIGHT:
                if (!is_numeric($value))
                    throw new \InvalidArgumentException("Invalid value of $name option has been entered. Enter float.");

                $value = (float)$value;
                break;

            case self::OPTION_NOTE:
            case self::OPTION_NOTE_DRIVER:
            case self::OPTION_NOTE_CUSTOMER:
            case self::OPTION_PASSWORD:
                if (!is_string($value))
                    throw new \InvalidArgumentException('Invalid value of note option has been entered. Enter string.');

                $limit = 64;

                if ($shipper == self::SHIPPER_DPD) {
                    $limit = 70;
                } elseif ($shipper == self::SHIPPER_PPL) {
                    $limit = 350;
                } elseif ($shipper == self::SHIPPER_GEIS) {
                    $limit = ($name == self::OPTION_NOTE) ? 57 : 62;
                } elseif ($shipper == self::SHIPPER_ULOZENKA) {
                    $limit = ($name == self::OPTION_PASSWORD) ? 99 : 75;
                } elseif ($shipper == self::SHIPPER_INTIME) {
                    $limit = 75;
                } elseif ($shipper == self::SHIPPER_TOPTRANS) {
                    $limit = 50;
                }

                if (strlen($value) > $limit)
                    throw new \InvalidArgumentException("Invalid value of note option has been entered. Maximum length is $limit characters.");
                break;

            case self::OPTION_PIECES:
            case self::OPTION_TT_PIECES:
                if (!is_int($value) || ($value < 1))
                    throw new \InvalidArgumentException('Invalid value of pieces has been entered. Enter positive integer.');
                break;

            case self::OPTION_ORDER:
                if (!is_numeric($value) || (strlen($value) > 10))
                    throw new \InvalidArgumentException("Invalid value of order option has been entered. Enter number, max 10 characters length.");
                break;
        }

        $this->data['data'][$name] = $value;
    }

    /**
     * @param string $shipper
     * @param string $orderId
     * @return string
     */
    private function getEid($shipper = null, $orderId = null) {
        $time = time();
        $delimeter = '';

        if (isset($shipper) && isset($orderId)) {
            return implode($delimeter, [$this->shopId, $shipper, $orderId, $time]);
        } elseif (isset($shipper)) {
            return implode($delimeter, [$this->shopId, $shipper, $time]);
        } elseif (isset($orderId)) {
            return implode($delimeter, [$this->shopId, $orderId, $time]);
        } else {
            return implode($delimeter, [$this->shopId, $time]);
        }
    }

    /**
     * @param string $request
     * @param string $shipper
     * @param array $data
     * @param string $url
     * @return array
     */
    private function call($request, $shipper, array $data = [], $url = null) {
        if (empty($request) || empty ($shipper))
            throw new \InvalidArgumentException('Invalid argument has been entered.');

        $r = curl_init();
        curl_setopt($r, CURLOPT_URL, $url ? "$this->apiUrl/$shipper/$request/$url" : "$this->apiUrl/$shipper/$request");
        curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($r, CURLOPT_HEADER, false);
        if (!empty($data)) {
            curl_setopt($r, CURLOPT_POST, true);
            curl_setopt($r, CURLOPT_POSTFIELDS, json_encode($data));
        }
        curl_setopt($r,CURLOPT_HTTPHEADER, [
            'Authorization: Basic ' . base64_encode("$this->apiUser:$this->apiKey"),
            'Content-Type: application/json',
        ]);
        $response = curl_exec($r);
        curl_close($r);

        return json_decode($response, true);
    }

    /**
     * Cleans temporary data about created package
     */
    private function clean() {
        $this->data = [
            'isService' => false,
            'isCustomer' => false,
            'isCashOnDelivery' => false,
            'shipper' => null,
            'data' => [],
        ];
    }

}
