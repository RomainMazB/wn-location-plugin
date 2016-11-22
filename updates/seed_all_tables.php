<?php namespace RainLab\Location\Updates;

use October\Rain\Database\Updates\Seeder;
use RainLab\Location\Models\Country;

class SeedAllTables extends Seeder
{
    public function run()
    {
        /*
         * The countries and states table were previously seeded 
         * by RainLab.User so this occurance is detected and halt.
         * @deprecated Safe to remove if year >= 2017
         */
        if (Country::count() > 0) {
            return;
        }

        Country::insert([
            ['is_enabled' => 1, 'code' => 'AU', 'name' => 'Australia'],
            ['is_enabled' => 1, 'code' => 'CA', 'name' => 'Canada'],
            ['is_enabled' => 1, 'code' => 'GB', 'name' => 'United Kingdom'],
            ['is_enabled' => 1, 'code' => 'US', 'name' => 'United States'],

            ['is_enabled' => 0, 'code' => 'AF', 'name' => 'Afghanistan'],
            ['is_enabled' => 0, 'code' => 'AX', 'name' => 'Aland Islands '],
            ['is_enabled' => 0, 'code' => 'AL', 'name' => 'Albania'],
            ['is_enabled' => 0, 'code' => 'DZ', 'name' => 'Algeria'],
            ['is_enabled' => 0, 'code' => 'AS', 'name' => 'American Samoa'],
            ['is_enabled' => 0, 'code' => 'AD', 'name' => 'Andorra'],
            ['is_enabled' => 0, 'code' => 'AO', 'name' => 'Angola'],
            ['is_enabled' => 0, 'code' => 'AI', 'name' => 'Anguilla'],
            ['is_enabled' => 0, 'code' => 'AQ', 'name' => 'Antarctica'],
            ['is_enabled' => 0, 'code' => 'AG', 'name' => 'Antigua and Barbuda'],
            ['is_enabled' => 0, 'code' => 'AR', 'name' => 'Argentina'],
            ['is_enabled' => 0, 'code' => 'AM', 'name' => 'Armenia'],
            ['is_enabled' => 0, 'code' => 'AW', 'name' => 'Aruba'],
            ['is_enabled' => 0, 'code' => 'AT', 'name' => 'Austria'],
            ['is_enabled' => 0, 'code' => 'AZ', 'name' => 'Azerbaijan'],
            ['is_enabled' => 0, 'code' => 'BS', 'name' => 'Bahamas'],
            ['is_enabled' => 0, 'code' => 'BH', 'name' => 'Bahrain'],
            ['is_enabled' => 0, 'code' => 'BD', 'name' => 'Bangladesh'],
            ['is_enabled' => 0, 'code' => 'BB', 'name' => 'Barbados'],
            ['is_enabled' => 0, 'code' => 'BY', 'name' => 'Belarus'],
            ['is_enabled' => 0, 'code' => 'BE', 'name' => 'Belgium'],
            ['is_enabled' => 0, 'code' => 'BZ', 'name' => 'Belize'],
            ['is_enabled' => 0, 'code' => 'BJ', 'name' => 'Benin'],
            ['is_enabled' => 0, 'code' => 'BM', 'name' => 'Bermuda'],
            ['is_enabled' => 0, 'code' => 'BT', 'name' => 'Bhutan'],
            ['is_enabled' => 0, 'code' => 'BO', 'name' => 'Bolivia, Plurinational State of'],
            ['is_enabled' => 0, 'code' => 'BQ', 'name' => 'Bonaire, Sint Eustatius and Saba'],
            ['is_enabled' => 0, 'code' => 'BA', 'name' => 'Bosnia and Herzegovina'],
            ['is_enabled' => 0, 'code' => 'BW', 'name' => 'Botswana'],
            ['is_enabled' => 0, 'code' => 'BV', 'name' => 'Bouvet Island'],
            ['is_enabled' => 0, 'code' => 'BR', 'name' => 'Brazil'],
            ['is_enabled' => 0, 'code' => 'IO', 'name' => 'British Indian Ocean Territory'],
            ['is_enabled' => 0, 'code' => 'BN', 'name' => 'Brunei Darussalam'],
            ['is_enabled' => 0, 'code' => 'BG', 'name' => 'Bulgaria'],
            ['is_enabled' => 0, 'code' => 'BF', 'name' => 'Burkina Faso'],
            ['is_enabled' => 0, 'code' => 'BI', 'name' => 'Burundi'],
            ['is_enabled' => 0, 'code' => 'KH', 'name' => 'Cambodia'],
            ['is_enabled' => 0, 'code' => 'CM', 'name' => 'Cameroon'],
            ['is_enabled' => 0, 'code' => 'CV', 'name' => 'Cape Verde'],
            ['is_enabled' => 0, 'code' => 'KY', 'name' => 'Cayman Islands'],
            ['is_enabled' => 0, 'code' => 'CF', 'name' => 'Central African Republic'],
            ['is_enabled' => 0, 'code' => 'TD', 'name' => 'Chad'],
            ['is_enabled' => 0, 'code' => 'CL', 'name' => 'Chile'],
            ['is_enabled' => 0, 'code' => 'CN', 'name' => 'China'],
            ['is_enabled' => 0, 'code' => 'CX', 'name' => 'Christmas Island'],
            ['is_enabled' => 0, 'code' => 'CC', 'name' => 'Cocos (Keeling) Islands'],
            ['is_enabled' => 0, 'code' => 'CO', 'name' => 'Colombia'],
            ['is_enabled' => 0, 'code' => 'KM', 'name' => 'Comoros'],
            ['is_enabled' => 0, 'code' => 'CG', 'name' => 'Congo'],
            ['is_enabled' => 0, 'code' => 'CD', 'name' => 'Congo, the Democratic Republic of the'],
            ['is_enabled' => 0, 'code' => 'CK', 'name' => 'Cook Islands'],
            ['is_enabled' => 0, 'code' => 'CR', 'name' => 'Costa Rica'],
            ['is_enabled' => 0, 'code' => 'CI', 'name' => 'Cote d\'Ivoire'],
            ['is_enabled' => 0, 'code' => 'HR', 'name' => 'Croatia'],
            ['is_enabled' => 0, 'code' => 'CU', 'name' => 'Cuba'],
            ['is_enabled' => 0, 'code' => 'CW', 'name' => 'Curaçao'],
            ['is_enabled' => 0, 'code' => 'CY', 'name' => 'Cyprus'],
            ['is_enabled' => 0, 'code' => 'CZ', 'name' => 'Czech Republic'],
            ['is_enabled' => 0, 'code' => 'DK', 'name' => 'Denmark'],
            ['is_enabled' => 0, 'code' => 'DJ', 'name' => 'Djibouti'],
            ['is_enabled' => 0, 'code' => 'DM', 'name' => 'Dominica'],
            ['is_enabled' => 0, 'code' => 'DO', 'name' => 'Dominican Republic'],
            ['is_enabled' => 0, 'code' => 'EC', 'name' => 'Ecuador'],
            ['is_enabled' => 0, 'code' => 'EG', 'name' => 'Egypt'],
            ['is_enabled' => 0, 'code' => 'SV', 'name' => 'El Salvador'],
            ['is_enabled' => 0, 'code' => 'GQ', 'name' => 'Equatorial Guinea'],
            ['is_enabled' => 0, 'code' => 'ER', 'name' => 'Eritrea'],
            ['is_enabled' => 0, 'code' => 'EE', 'name' => 'Estonia'],
            ['is_enabled' => 0, 'code' => 'ET', 'name' => 'Ethiopia'],
            ['is_enabled' => 0, 'code' => 'FK', 'name' => 'Falkland Islands (Malvinas)'],
            ['is_enabled' => 0, 'code' => 'FO', 'name' => 'Faroe Islands'],
            ['is_enabled' => 0, 'code' => 'FI', 'name' => 'Finland'],
            ['is_enabled' => 0, 'code' => 'FJ', 'name' => 'Fiji'],
            ['is_enabled' => 1, 'code' => 'FR', 'name' => 'France'],
            ['is_enabled' => 0, 'code' => 'GF', 'name' => 'French Guiana'],
            ['is_enabled' => 0, 'code' => 'PF', 'name' => 'French Polynesia'],
            ['is_enabled' => 0, 'code' => 'TF', 'name' => 'French Southern Territories'],
            ['is_enabled' => 0, 'code' => 'GA', 'name' => 'Gabon'],
            ['is_enabled' => 0, 'code' => 'GM', 'name' => 'Gambia'],
            ['is_enabled' => 0, 'code' => 'GE', 'name' => 'Georgia'],
            ['is_enabled' => 0, 'code' => 'DE', 'name' => 'Germany'],
            ['is_enabled' => 0, 'code' => 'GH', 'name' => 'Ghana'],
            ['is_enabled' => 0, 'code' => 'GI', 'name' => 'Gibraltar'],
            ['is_enabled' => 0, 'code' => 'GR', 'name' => 'Greece'],
            ['is_enabled' => 0, 'code' => 'GL', 'name' => 'Greenland'],
            ['is_enabled' => 0, 'code' => 'GD', 'name' => 'Grenada'],
            ['is_enabled' => 0, 'code' => 'GP', 'name' => 'Guadeloupe'],
            ['is_enabled' => 0, 'code' => 'GU', 'name' => 'Guam'],
            ['is_enabled' => 0, 'code' => 'GT', 'name' => 'Guatemala'],
            ['is_enabled' => 0, 'code' => 'GG', 'name' => 'Guernsey'],
            ['is_enabled' => 0, 'code' => 'GN', 'name' => 'Guinea'],
            ['is_enabled' => 0, 'code' => 'GW', 'name' => 'Guinea-Bissau'],
            ['is_enabled' => 0, 'code' => 'GY', 'name' => 'Guyana'],
            ['is_enabled' => 0, 'code' => 'HT', 'name' => 'Haiti'],
            ['is_enabled' => 0, 'code' => 'HM', 'name' => 'Heard Island and McDonald Islands'],
            ['is_enabled' => 0, 'code' => 'VA', 'name' => 'Holy See (Vatican City State)'],
            ['is_enabled' => 0, 'code' => 'HN', 'name' => 'Honduras'],
            ['is_enabled' => 0, 'code' => 'HK', 'name' => 'Hong Kong'],
            ['is_enabled' => 1, 'code' => 'HU', 'name' => 'Hungary'],
            ['is_enabled' => 0, 'code' => 'IS', 'name' => 'Iceland'],
            ['is_enabled' => 1, 'code' => 'IN', 'name' => 'India'],
            ['is_enabled' => 0, 'code' => 'ID', 'name' => 'Indonesia'],
            ['is_enabled' => 0, 'code' => 'IR', 'name' => 'Iran, Islamic Republic of'],
            ['is_enabled' => 0, 'code' => 'IQ', 'name' => 'Iraq'],
            ['is_enabled' => 1, 'code' => 'IE', 'name' => 'Ireland'],
            ['is_enabled' => 0, 'code' => 'IM', 'name' => 'Isle of Man'],
            ['is_enabled' => 0, 'code' => 'IL', 'name' => 'Israel'],
            ['is_enabled' => 0, 'code' => 'IT', 'name' => 'Italy'],
            ['is_enabled' => 0, 'code' => 'JM', 'name' => 'Jamaica'],
            ['is_enabled' => 0, 'code' => 'JP', 'name' => 'Japan'],
            ['is_enabled' => 0, 'code' => 'JE', 'name' => 'Jersey'],
            ['is_enabled' => 0, 'code' => 'JO', 'name' => 'Jordan'],
            ['is_enabled' => 0, 'code' => 'KZ', 'name' => 'Kazakhstan'],
            ['is_enabled' => 0, 'code' => 'KE', 'name' => 'Kenya'],
            ['is_enabled' => 0, 'code' => 'KI', 'name' => 'Kiribati'],
            ['is_enabled' => 0, 'code' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of'],
            ['is_enabled' => 0, 'code' => 'KR', 'name' => 'Korea, Republic of'],
            ['is_enabled' => 0, 'code' => 'KW', 'name' => 'Kuwait'],
            ['is_enabled' => 0, 'code' => 'KG', 'name' => 'Kyrgyzstan'],
            ['is_enabled' => 0, 'code' => 'LA', 'name' => 'Lao People\'s Democratic Republic'],
            ['is_enabled' => 0, 'code' => 'LV', 'name' => 'Latvia'],
            ['is_enabled' => 0, 'code' => 'LB', 'name' => 'Lebanon'],
            ['is_enabled' => 0, 'code' => 'LS', 'name' => 'Lesotho'],
            ['is_enabled' => 0, 'code' => 'LR', 'name' => 'Liberia'],
            ['is_enabled' => 0, 'code' => 'LY', 'name' => 'Libyan Arab Jamahiriya'],
            ['is_enabled' => 0, 'code' => 'LI', 'name' => 'Liechtenstein'],
            ['is_enabled' => 0, 'code' => 'LT', 'name' => 'Lithuania'],
            ['is_enabled' => 0, 'code' => 'LU', 'name' => 'Luxembourg'],
            ['is_enabled' => 0, 'code' => 'MO', 'name' => 'Macao'],
            ['is_enabled' => 0, 'code' => 'MK', 'name' => 'Macedonia'],
            ['is_enabled' => 0, 'code' => 'MG', 'name' => 'Madagascar'],
            ['is_enabled' => 0, 'code' => 'MW', 'name' => 'Malawi'],
            ['is_enabled' => 0, 'code' => 'MY', 'name' => 'Malaysia'],
            ['is_enabled' => 0, 'code' => 'MV', 'name' => 'Maldives'],
            ['is_enabled' => 0, 'code' => 'ML', 'name' => 'Mali'],
            ['is_enabled' => 0, 'code' => 'MT', 'name' => 'Malta'],
            ['is_enabled' => 0, 'code' => 'MH', 'name' => 'Marshall Islands'],
            ['is_enabled' => 0, 'code' => 'MQ', 'name' => 'Martinique'],
            ['is_enabled' => 0, 'code' => 'MR', 'name' => 'Mauritania'],
            ['is_enabled' => 0, 'code' => 'MU', 'name' => 'Mauritius'],
            ['is_enabled' => 0, 'code' => 'YT', 'name' => 'Mayotte'],
            ['is_enabled' => 0, 'code' => 'MX', 'name' => 'Mexico'],
            ['is_enabled' => 0, 'code' => 'FM', 'name' => 'Micronesia, Federated States of'],
            ['is_enabled' => 0, 'code' => 'MD', 'name' => 'Moldova, Republic of'],
            ['is_enabled' => 0, 'code' => 'MC', 'name' => 'Monaco'],
            ['is_enabled' => 0, 'code' => 'MN', 'name' => 'Mongolia'],
            ['is_enabled' => 0, 'code' => 'ME', 'name' => 'Montenegro'],
            ['is_enabled' => 0, 'code' => 'MS', 'name' => 'Montserrat'],
            ['is_enabled' => 0, 'code' => 'MA', 'name' => 'Morocco'],
            ['is_enabled' => 0, 'code' => 'MZ', 'name' => 'Mozambique'],
            ['is_enabled' => 0, 'code' => 'MM', 'name' => 'Myanmar'],
            ['is_enabled' => 0, 'code' => 'NA', 'name' => 'Namibia'],
            ['is_enabled' => 0, 'code' => 'NR', 'name' => 'Nauru'],
            ['is_enabled' => 0, 'code' => 'NP', 'name' => 'Nepal'],
            ['is_enabled' => 1, 'code' => 'NL', 'name' => 'Netherlands'],
            ['is_enabled' => 0, 'code' => 'NC', 'name' => 'New Caledonia'],
            ['is_enabled' => 1, 'code' => 'NZ', 'name' => 'New Zealand'],
            ['is_enabled' => 0, 'code' => 'NI', 'name' => 'Nicaragua'],
            ['is_enabled' => 0, 'code' => 'NE', 'name' => 'Niger'],
            ['is_enabled' => 0, 'code' => 'NG', 'name' => 'Nigeria'],
            ['is_enabled' => 0, 'code' => 'NU', 'name' => 'Niue'],
            ['is_enabled' => 0, 'code' => 'NF', 'name' => 'Norfolk Island'],
            ['is_enabled' => 0, 'code' => 'MP', 'name' => 'Northern Mariana Islands'],
            ['is_enabled' => 0, 'code' => 'NO', 'name' => 'Norway'],
            ['is_enabled' => 0, 'code' => 'OM', 'name' => 'Oman'],
            ['is_enabled' => 0, 'code' => 'PK', 'name' => 'Pakistan'],
            ['is_enabled' => 0, 'code' => 'PW', 'name' => 'Palau'],
            ['is_enabled' => 0, 'code' => 'PS', 'name' => 'Palestinian Territory, Occupied'],
            ['is_enabled' => 0, 'code' => 'PA', 'name' => 'Panama'],
            ['is_enabled' => 0, 'code' => 'PG', 'name' => 'Papua New Guinea'],
            ['is_enabled' => 0, 'code' => 'PY', 'name' => 'Paraguay'],
            ['is_enabled' => 0, 'code' => 'PE', 'name' => 'Peru'],
            ['is_enabled' => 0, 'code' => 'PH', 'name' => 'Philippines'],
            ['is_enabled' => 0, 'code' => 'PN', 'name' => 'Pitcairn'],
            ['is_enabled' => 0, 'code' => 'PL', 'name' => 'Poland'],
            ['is_enabled' => 0, 'code' => 'PT', 'name' => 'Portugal'],
            ['is_enabled' => 0, 'code' => 'PR', 'name' => 'Puerto Rico'],
            ['is_enabled' => 0, 'code' => 'QA', 'name' => 'Qatar'],
            ['is_enabled' => 0, 'code' => 'RE', 'name' => 'Reunion'],
            ['is_enabled' => 0, 'code' => 'RO', 'name' => 'Romania'],
            ['is_enabled' => 0, 'code' => 'RU', 'name' => 'Russian Federation'],
            ['is_enabled' => 0, 'code' => 'RW', 'name' => 'Rwanda'],
            ['is_enabled' => 0, 'code' => 'BL', 'name' => 'Saint Barthélemy'],
            ['is_enabled' => 0, 'code' => 'SH', 'name' => 'Saint Helena'],
            ['is_enabled' => 0, 'code' => 'KN', 'name' => 'Saint Kitts and Nevis'],
            ['is_enabled' => 0, 'code' => 'LC', 'name' => 'Saint Lucia'],
            ['is_enabled' => 0, 'code' => 'MF', 'name' => 'Saint Martin (French part)'],
            ['is_enabled' => 0, 'code' => 'PM', 'name' => 'Saint Pierre and Miquelon'],
            ['is_enabled' => 0, 'code' => 'VC', 'name' => 'Saint Vincent and the Grenadines'],
            ['is_enabled' => 0, 'code' => 'WS', 'name' => 'Samoa'],
            ['is_enabled' => 0, 'code' => 'SM', 'name' => 'San Marino'],
            ['is_enabled' => 0, 'code' => 'ST', 'name' => 'Sao Tome and Principe'],
            ['is_enabled' => 0, 'code' => 'SA', 'name' => 'Saudi Arabia'],
            ['is_enabled' => 0, 'code' => 'SN', 'name' => 'Senegal'],
            ['is_enabled' => 0, 'code' => 'RS', 'name' => 'Serbia'],
            ['is_enabled' => 0, 'code' => 'SC', 'name' => 'Seychelles'],
            ['is_enabled' => 0, 'code' => 'SL', 'name' => 'Sierra Leone'],
            ['is_enabled' => 0, 'code' => 'SG', 'name' => 'Singapore'],
            ['is_enabled' => 0, 'code' => 'SX', 'name' => 'Sint Maarten (Dutch part)'],
            ['is_enabled' => 0, 'code' => 'SK', 'name' => 'Slovakia'],
            ['is_enabled' => 0, 'code' => 'SI', 'name' => 'Slovenia'],
            ['is_enabled' => 0, 'code' => 'SB', 'name' => 'Solomon Islands'],
            ['is_enabled' => 0, 'code' => 'SO', 'name' => 'Somalia'],
            ['is_enabled' => 0, 'code' => 'ZA', 'name' => 'South Africa'],
            ['is_enabled' => 0, 'code' => 'GS', 'name' => 'South Georgia and the South Sandwich Islands'],
            ['is_enabled' => 0, 'code' => 'ES', 'name' => 'Spain'],
            ['is_enabled' => 0, 'code' => 'LK', 'name' => 'Sri Lanka'],
            ['is_enabled' => 0, 'code' => 'SD', 'name' => 'Sudan'],
            ['is_enabled' => 0, 'code' => 'SR', 'name' => 'Suriname'],
            ['is_enabled' => 0, 'code' => 'SJ', 'name' => 'Svalbard and Jan Mayen'],
            ['is_enabled' => 0, 'code' => 'SZ', 'name' => 'Swaziland'],
            ['is_enabled' => 0, 'code' => 'SE', 'name' => 'Sweden'],
            ['is_enabled' => 0, 'code' => 'CH', 'name' => 'Switzerland'],
            ['is_enabled' => 0, 'code' => 'SY', 'name' => 'Syrian Arab Republic'],
            ['is_enabled' => 0, 'code' => 'TW', 'name' => 'Taiwan, Province of China'],
            ['is_enabled' => 0, 'code' => 'TJ', 'name' => 'Tajikistan'],
            ['is_enabled' => 0, 'code' => 'TZ', 'name' => 'Tanzania, United Republic of'],
            ['is_enabled' => 0, 'code' => 'TH', 'name' => 'Thailand'],
            ['is_enabled' => 0, 'code' => 'TL', 'name' => 'Timor-Leste'],
            ['is_enabled' => 0, 'code' => 'TG', 'name' => 'Togo'],
            ['is_enabled' => 0, 'code' => 'TK', 'name' => 'Tokelau'],
            ['is_enabled' => 0, 'code' => 'TO', 'name' => 'Tonga'],
            ['is_enabled' => 0, 'code' => 'TT', 'name' => 'Trinidad and Tobago'],
            ['is_enabled' => 0, 'code' => 'TN', 'name' => 'Tunisia'],
            ['is_enabled' => 0, 'code' => 'TR', 'name' => 'Turkey'],
            ['is_enabled' => 0, 'code' => 'TM', 'name' => 'Turkmenistan'],
            ['is_enabled' => 0, 'code' => 'TC', 'name' => 'Turks and Caicos Islands'],
            ['is_enabled' => 0, 'code' => 'TV', 'name' => 'Tuvalu'],
            ['is_enabled' => 0, 'code' => 'UG', 'name' => 'Uganda'],
            ['is_enabled' => 0, 'code' => 'UA', 'name' => 'Ukraine'],
            ['is_enabled' => 0, 'code' => 'AE', 'name' => 'United Arab Emirates'],
            ['is_enabled' => 0, 'code' => 'UM', 'name' => 'United States Minor Outlying Islands'],
            ['is_enabled' => 0, 'code' => 'UY', 'name' => 'Uruguay'],
            ['is_enabled' => 0, 'code' => 'UZ', 'name' => 'Uzbekistan'],
            ['is_enabled' => 0, 'code' => 'VU', 'name' => 'Vanuatu'],
            ['is_enabled' => 0, 'code' => 'VE', 'name' => 'Venezuela, Bolivarian Republic of'],
            ['is_enabled' => 0, 'code' => 'VN', 'name' => 'Viet Nam'],
            ['is_enabled' => 0, 'code' => 'VG', 'name' => 'Virgin Islands, British'],
            ['is_enabled' => 0, 'code' => 'VI', 'name' => 'Virgin Islands, U.S.'],
            ['is_enabled' => 0, 'code' => 'WF', 'name' => 'Wallis and Futuna'],
            ['is_enabled' => 0, 'code' => 'EH', 'name' => 'Western Sahara'],
            ['is_enabled' => 0, 'code' => 'YE', 'name' => 'Yemen'],
            ['is_enabled' => 0, 'code' => 'ZM', 'name' => 'Zambia'],
            ['is_enabled' => 0, 'code' => 'ZW', 'name' => 'Zimbabwe']
        ]);

        $us = Country::whereCode('US')->first();
        $us->states()->createMany([
            ['code' => 'AL', 'name' => 'Alabama'],
            ['code' => 'AK', 'name' => 'Alaska'],
            ['code' => 'AS', 'name' => 'American Samoa'],
            ['code' => 'AZ', 'name' => 'Arizona'],
            ['code' => 'AR', 'name' => 'Arkansas'],
            ['code' => 'CA', 'name' => 'California'],
            ['code' => 'CO', 'name' => 'Colorado'],
            ['code' => 'CT', 'name' => 'Connecticut'],
            ['code' => 'DE', 'name' => 'Delaware'],
            ['code' => 'DC', 'name' => 'Dist. of Columbia'],
            ['code' => 'FL', 'name' => 'Florida'],
            ['code' => 'GA', 'name' => 'Georgia'],
            ['code' => 'GU', 'name' => 'Guam'],
            ['code' => 'HI', 'name' => 'Hawaii'],
            ['code' => 'ID', 'name' => 'Idaho'],
            ['code' => 'IL', 'name' => 'Illinois'],
            ['code' => 'IN', 'name' => 'Indiana'],
            ['code' => 'IA', 'name' => 'Iowa'],
            ['code' => 'KS', 'name' => 'Kansas'],
            ['code' => 'KY', 'name' => 'Kentucky'],
            ['code' => 'LA', 'name' => 'Louisiana'],
            ['code' => 'ME', 'name' => 'Maine'],
            ['code' => 'MD', 'name' => 'Maryland'],
            ['code' => 'MH', 'name' => 'Marshall Islands'],
            ['code' => 'MA', 'name' => 'Massachusetts'],
            ['code' => 'MI', 'name' => 'Michigan'],
            ['code' => 'FM', 'name' => 'Micronesia'],
            ['code' => 'MN', 'name' => 'Minnesota'],
            ['code' => 'MS', 'name' => 'Mississippi'],
            ['code' => 'MO', 'name' => 'Missouri'],
            ['code' => 'MT', 'name' => 'Montana'],
            ['code' => 'NE', 'name' => 'Nebraska'],
            ['code' => 'NV', 'name' => 'Nevada'],
            ['code' => 'NH', 'name' => 'New Hampshire'],
            ['code' => 'NJ', 'name' => 'New Jersey'],
            ['code' => 'NM', 'name' => 'New Mexico'],
            ['code' => 'NY', 'name' => 'New York'],
            ['code' => 'NC', 'name' => 'North Carolina'],
            ['code' => 'ND', 'name' => 'North Dakota'],
            ['code' => 'MP', 'name' => 'Northern Marianas'],
            ['code' => 'OH', 'name' => 'Ohio'],
            ['code' => 'OK', 'name' => 'Oklahoma'],
            ['code' => 'OR', 'name' => 'Oregon'],
            ['code' => 'PW', 'name' => 'Palau'],
            ['code' => 'PA', 'name' => 'Pennsylvania'],
            ['code' => 'PR', 'name' => 'Puerto Rico'],
            ['code' => 'RI', 'name' => 'Rhode Island'],
            ['code' => 'SC', 'name' => 'South Carolina'],
            ['code' => 'SD', 'name' => 'South Dakota'],
            ['code' => 'TN', 'name' => 'Tennessee'],
            ['code' => 'TX', 'name' => 'Texas'],
            ['code' => 'UT', 'name' => 'Utah'],
            ['code' => 'VT', 'name' => 'Vermont'],
            ['code' => 'VA', 'name' => 'Virginia'],
            ['code' => 'VI', 'name' => 'Virgin Islands'],
            ['code' => 'WA', 'name' => 'Washington'],
            ['code' => 'WV', 'name' => 'West Virginia'],
            ['code' => 'WI', 'name' => 'Wisconsin'],
            ['code' => 'WY', 'name' => 'Wyoming']
        ]);

        $ca = Country::whereCode('CA')->first();
        $ca->states()->createMany([
            ['code' => 'AB', 'name' => 'Alberta'],
            ['code' => 'BC', 'name' => 'British Columbia'],
            ['code' => 'MB', 'name' => 'Manitoba'],
            ['code' => 'NB', 'name' => 'New Brunswick'],
            ['code' => 'NL', 'name' => 'Newfoundland and Labrador'],
            ['code' => 'NT', 'name' => 'Northwest Territories'],
            ['code' => 'NS', 'name' => 'Nova Scotia'],
            ['code' => 'NU', 'name' => 'Nunavut'],
            ['code' => 'ON', 'name' => 'Ontario'],
            ['code' => 'PE', 'name' => 'Prince Edward Island'],
            ['code' => 'QC', 'name' => 'Quebec'],
            ['code' => 'SK', 'name' => 'Saskatchewan'],
            ['code' => 'YT', 'name' => 'Yukon']
        ]);

        $au = Country::whereCode('AU')->first();
        $au->states()->createMany([
            ['code' => 'NSW', 'name' => 'New South Wales'],
            ['code' => 'QLD', 'name' => 'Queensland'],
            ['code' => 'SA', 'name' => 'South Australia'],
            ['code' => 'TAS', 'name' => 'Tasmania'],
            ['code' => 'VIC', 'name' => 'Victoria'],
            ['code' => 'WA', 'name' => 'Western Australia'],
            ['code' => 'NT', 'name' => 'Northern Territory'],
            ['code' => 'ACT', 'name' => 'Australian Capital Territory']
        ]);

        $de = Country::whereCode('DE')->first();
        $de->states()->createMany([
            ['code' => 'BW', 'name' => 'Baden-Württemberg'],
            ['code' => 'BY', 'name' => 'Bavaria'],
            ['code' => 'BE', 'name' => 'Berlin'],
            ['code' => 'BB', 'name' => 'Brandenburg'],
            ['code' => 'HB', 'name' => 'Bremen'],
            ['code' => 'HH', 'name' => 'Hamburg'],
            ['code' => 'HE', 'name' => 'Hesse'],
            ['code' => 'MV', 'name' => 'Mecklenburg-Vorpommern'],
            ['code' => 'NI', 'name' => 'Lower Saxony'],
            ['code' => 'NW', 'name' => 'North Rhine-Westphalia'],
            ['code' => 'RP', 'name' => 'Rhineland-Palatinate'],
            ['code' => 'SL', 'name' => 'Saarland'],
            ['code' => 'SN', 'name' => 'Saxony'],
            ['code' => 'ST', 'name' => 'Saxony-Anhalt'],
            ['code' => 'SH', 'name' => 'Schleswig-Holstein'],
            ['code' => 'TH', 'name' => 'Thuringia']
        ]);

        $ie = Country::whereCode('IE')->first();
        $ie->states()->createMany([
            ['code' => 'D', 'name' => 'Dublin'],
            ['code' => 'WW', 'name' => 'Wicklow'],
            ['code' => 'WX', 'name' => 'Wexford'],
            ['code' => 'CW', 'name' => 'Carlow'],
            ['code' => 'KE', 'name' => 'Kildare'],
            ['code' => 'MH', 'name' => 'Meath'],
            ['code' => 'LH', 'name' => 'Louth'],
            ['code' => 'MN', 'name' => 'Monaghan'],
            ['code' => 'CN', 'name' => 'Cavan'],
            ['code' => 'LD', 'name' => 'Longford'],
            ['code' => 'WH', 'name' => 'Westmeath'],
            ['code' => 'OY', 'name' => 'Offaly'],
            ['code' => 'LS', 'name' => 'Laois'],
            ['code' => 'KK', 'name' => 'Kilkenny'],
            ['code' => 'WD', 'name' => 'Waterford'],
            ['code' => 'C', 'name' => 'Cork'],
            ['code' => 'KY', 'name' => 'Kerry'],
            ['code' => 'LK', 'name' => 'Limerick'],
            ['code' => 'TN', 'name' => 'North Tipperary'],
            ['code' => 'TS', 'name' => 'South Tipperary'],
            ['code' => 'CE', 'name' => 'Clare'],
            ['code' => 'G', 'name' => 'Galway'],
            ['code' => 'MO', 'name' => 'Mayo'],
            ['code' => 'RN', 'name' => 'Roscommon'],
            ['code' => 'SO', 'name' => 'Sligo'],
            ['code' => 'LM', 'name' => 'Leitrim'],
            ['code' => 'DL', 'name' => 'Donegal']
        ]);

        $nl = Country::whereCode('NL')->first();
        $nl->states()->createMany([
            ['code' => 'DR', 'name' => 'Drenthe'],
            ['code' => 'FL', 'name' => 'Flevoland'],
            ['code' => 'FR', 'name' => 'Friesland'],
            ['code' => 'GE', 'name' => 'Gelderland'],
            ['code' => 'GR', 'name' => 'Groningen'],
            ['code' => 'LI', 'name' => 'Limburg'],
            ['code' => 'NB', 'name' => 'Noord-Brabant'],
            ['code' => 'NH', 'name' => 'Noord-Holland'],
            ['code' => 'OV', 'name' => 'Overijssel'],
            ['code' => 'UT', 'name' => 'Utrecht'],
            ['code' => 'ZE', 'name' => 'Zeeland'],
            ['code' => 'ZH', 'name' => 'Zuid-Holland']
        ]);

        $gb = Country::whereCode('GB')->first();
        $gb->states()->createMany([
            ['code' => 'ABE', 'name' => 'Aberdeenshire'],
            ['code' => 'ALY', 'name' => 'Anglesey'],
            ['code' => 'ANG', 'name' => 'Angus'],
            ['code' => 'ARG', 'name' => 'Argyll'],
            ['code' => 'AYR', 'name' => 'Ayrshire'],
            ['code' => 'BAN', 'name' => 'Banffshire'],
            ['code' => 'BED', 'name' => 'Bedfordshire'],
            ['code' => 'BER', 'name' => 'Berkshire'],
            ['code' => 'BWS', 'name' => 'Berwickshire'],
            ['code' => 'BRE', 'name' => 'Brecknockshire'],
            ['code' => 'BUC', 'name' => 'Buckinghamshire'],
            ['code' => 'BUT', 'name' => 'Bute'],
            ['code' => 'CAE', 'name' => 'Caernarfonshire'],
            ['code' => 'CAI', 'name' => 'Caithness'],
            ['code' => 'CAM', 'name' => 'Cambridgeshire'],
            ['code' => 'CAR', 'name' => 'Cardiganshire'],
            ['code' => 'CMS', 'name' => 'Carmarthenshire'],
            ['code' => 'CHE', 'name' => 'Cheshire'],
            ['code' => 'CLA', 'name' => 'Clackmannanshire'],
            ['code' => 'CLE', 'name' => 'Cleveland'],
            ['code' => 'COR', 'name' => 'Cornwall'],
            ['code' => 'CRO', 'name' => 'Cromartyshire'],
            ['code' => 'CBR', 'name' => 'Cumberland'],
            ['code' => 'CUM', 'name' => 'Cumbria'],
            ['code' => 'DEN', 'name' => 'Denbighshire'],
            ['code' => 'DER', 'name' => 'Derbyshire'],
            ['code' => 'DEV', 'name' => 'Devon'],
            ['code' => 'DOR', 'name' => 'Dorset'],
            ['code' => 'DBS', 'name' => 'Dumbartonshire'],
            ['code' => 'DUM', 'name' => 'Dumfriesshire'],
            ['code' => 'DUR', 'name' => 'Durham'],
            ['code' => 'ELO', 'name' => 'East Lothian'],
            ['code' => 'ESS', 'name' => 'Essex'],
            ['code' => 'FLI', 'name' => 'Flintshire'],
            ['code' => 'FIF', 'name' => 'Fife'],
            ['code' => 'GLA', 'name' => 'Glamorgan'],
            ['code' => 'GLO', 'name' => 'Gloucestershire'],
            ['code' => 'HAM', 'name' => 'Hampshire'],
            ['code' => 'HER', 'name' => 'Herefordshire'],
            ['code' => 'HTF', 'name' => 'Hertfordshire'],
            ['code' => 'HUN', 'name' => 'Huntingdonshire'],
            ['code' => 'INV', 'name' => 'Inverness'],
            ['code' => 'KEN', 'name' => 'Kent'],
            ['code' => 'KCD', 'name' => 'Kincardineshire'],
            ['code' => 'KIN', 'name' => 'Kinross-shire'],
            ['code' => 'KIR', 'name' => 'Kirkcudbrightshire'],
            ['code' => 'LKS', 'name' => 'Lanarkshire'],
            ['code' => 'LAN', 'name' => 'Lancashire'],
            ['code' => 'LEI', 'name' => 'Leicestershire'],
            ['code' => 'LIN', 'name' => 'Lincolnshire'],
            ['code' => 'LON', 'name' => 'London'],
            ['code' => 'MAN', 'name' => 'Manchester'],
            ['code' => 'MER', 'name' => 'Merionethshire'],
            ['code' => 'MER', 'name' => 'Merseyside'],
            ['code' => 'MDX', 'name' => 'Middlesex'],
            ['code' => 'MID', 'name' => 'Midlands'],
            ['code' => 'MLT', 'name' => 'Midlothian'],
            ['code' => 'MON', 'name' => 'Monmouthshire'],
            ['code' => 'MGY', 'name' => 'Montgomeryshire'],
            ['code' => 'MOR', 'name' => 'Moray'],
            ['code' => 'NAI', 'name' => 'Nairnshire'],
            ['code' => 'NOR', 'name' => 'Norfolk'],
            ['code' => 'NMP', 'name' => 'Northamptonshire'],
            ['code' => 'NUM', 'name' => 'Northumberland'],
            ['code' => 'NOT', 'name' => 'Nottinghamshire'],
            ['code' => 'ORK', 'name' => 'Orkney'],
            ['code' => 'OXF', 'name' => 'Oxfordshire'],
            ['code' => 'PEE', 'name' => 'Peebleshire'],
            ['code' => 'PEM', 'name' => 'Pembrokeshire'],
            ['code' => 'PER', 'name' => 'Perthshire'],
            ['code' => 'RAD', 'name' => 'Radnorshire'],
            ['code' => 'REN', 'name' => 'Renfrewshire'],
            ['code' => 'ROS', 'name' => 'Ross & Cromarty'],
            ['code' => 'ROX', 'name' => 'Roxburghshire'],
            ['code' => 'RUT', 'name' => 'Rutland'],
            ['code' => 'SEL', 'name' => 'Selkirkshire'],
            ['code' => 'SHE', 'name' => 'Shetland'],
            ['code' => 'SHR', 'name' => 'Shropshire'],
            ['code' => 'SOM', 'name' => 'Somerset'],
            ['code' => 'STA', 'name' => 'Staffordshire'],
            ['code' => 'STI', 'name' => 'Stirlingshire'],
            ['code' => 'SUF', 'name' => 'Suffolk'],
            ['code' => 'SUR', 'name' => 'Surrey'],
            ['code' => 'SUS', 'name' => 'Sussex'],
            ['code' => 'SUT', 'name' => 'Sutherland'],
            ['code' => 'TYN', 'name' => 'Tyne & Wear'],
            ['code' => 'WAR', 'name' => 'Warwickshire'],
            ['code' => 'WLO', 'name' => 'West Lothian'],
            ['code' => 'WES', 'name' => 'Westmorland'],
            ['code' => 'WIG', 'name' => 'Wigtownshire'],
            ['code' => 'WIL', 'name' => 'Wiltshire'],
            ['code' => 'WOR', 'name' => 'Worcestershire'],
            ['code' => 'YOR', 'name' => 'Yorkshire']
        ]);
        
        $ro = Country::whereCode('RO')->first();
        $ro->states()->createMany([
            ['name' => 'Alba', 'code' => 'AB'],
            ['name' => 'Arad', 'code' => 'AR'],
            ['name' => 'Arges', 'code' => 'AG'],
            ['name' => 'Bacău', 'code' => 'BC'],
            ['name' => 'Bihor', 'code' => 'BH'],
            ['name' => 'Bistrita - Nasaud Bistrita', 'code' => 'BN'],
            ['name' => 'Botosani', 'code' => 'BT'],
            ['name' => 'Brasov', 'code' => 'BV'],
            ['name' => 'Braila', 'code' => 'BR'],
            ['name' => 'Bucuresti', 'code' => 'B'],
            ['name' => 'Buzau', 'code' => 'BZ'],
            ['name' => 'Caras - Severin', 'code' => 'CS'],
            ['name' => 'Calarasi', 'code' => 'CL'],
            ['name' => 'Cluj', 'code' => 'CJ'],
            ['name' => 'Constanta', 'code' => 'CT'],
            ['name' => 'Covasna Sfantu Gheorghe', 'code' => 'CV'],
            ['name' => 'Dambovita', 'code' => 'DB'],
            ['name' => 'Dolj', 'code' => 'DJ'],
            ['name' => 'Galati', 'code' => 'GL'],
            ['name' => 'Giurgiu', 'code' => 'GR'],
            ['name' => 'Gorj', 'code' => 'GJ'],
            ['name' => 'Harghita', 'code' => 'HR'],
            ['name' => 'Hunedoara', 'code' => 'HD'],
            ['name' => 'Ialomita', 'code' => 'IL'],
            ['name' => 'Iasi', 'code' => 'IS'],
            ['name' => 'Ilfov', 'code' => 'IF'],
            ['name' => 'Maramures', 'code' => 'MM'],
            ['name' => 'Mehedinti', 'code' => 'MH'],
            ['name' => 'Mures', 'code' => 'MS'],
            ['name' => 'Neamt', 'code' => 'NT'],
            ['name' => 'Olt', 'code' => 'OT'],
            ['name' => 'Prahova Ploiesti', 'code' => 'PH'],
            ['name' => 'Satu Mare', 'code' => 'SM'],
            ['name' => 'Salaj', 'code' => 'SJ'],
            ['name' => 'Sibiu', 'code' => 'SB'],
            ['name' => 'Suceava', 'code' => 'SV'],
            ['name' => 'Teleorman', 'code' => 'TR'],
            ['name' => 'Timis', 'code' => 'TM'],
            ['name' => 'Tulcea', 'code' => 'TL'],
            ['name' => 'Vaslui', 'code' => 'VS'],
            ['name' => 'Valcea', 'code' => 'VL'],
            ['name' => 'Vrancea', 'code' => 'VN']
        ]);

        $hu = Country::whereCode('HU')->first();
        $hu->states()->createMany([
            ['code' => 'BUD', 'name' => 'Budapest'],
            ['code' => 'BAR', 'name' => 'Baranya'],
            ['code' => 'BKM', 'name' => 'Bács-Kiskun'],
            ['code' => 'BEK', 'name' => 'Békés'],
            ['code' => 'BAZ', 'name' => 'Borsod-Abaúj-Zemplén'],
            ['code' => 'CSO', 'name' => 'Csongrád'],
            ['code' => 'FEJ', 'name' => 'Fejér'],
            ['code' => 'GMS', 'name' => 'Győr-Moson-Sopron'],
            ['code' => 'HBM', 'name' => 'Hajdú-Bihar'],
            ['code' => 'HEV', 'name' => 'Heves'],
            ['code' => 'JNS', 'name' => 'Jász-Nagykun-Szolnok'],
            ['code' => 'KEM', 'name' => 'Komárom-Esztergom'],
            ['code' => 'NOG', 'name' => 'Nógrád'],
            ['code' => 'PES', 'name' => 'Pest'],
            ['code' => 'SOM', 'name' => 'Somogy'],
            ['code' => 'SSB', 'name' => 'Szabolcs-Szatmár-Bereg'],
            ['code' => 'TOL', 'name' => 'Tolna'],
            ['code' => 'VAS', 'name' => 'Vas'],
            ['code' => 'VES', 'name' => 'Veszprém'],
            ['code' => 'ZAL', 'name' => 'Zala']
        ]);

        $in = Country::whereCode('IN')->first();
        $in->states()->createMany([
            ['code' => 'AP', 'name' => 'Andhra Pradesh'],
            ['code' => 'AR', 'name' => 'Arunachal Pradesh'],
            ['code' => 'AS', 'name' => 'Assam'],
            ['code' => 'BR', 'name' => 'Bihar'],
            ['code' => 'CT', 'name' => 'Chhattisgarh'],
            ['code' => 'GA', 'name' => 'Goa'],
            ['code' => 'GJ', 'name' => 'Gujarat'],
            ['code' => 'HR', 'name' => 'Haryana'],
            ['code' => 'HP', 'name' => 'Himachal Pradesh'],
            ['code' => 'JK', 'name' => 'Jammu and Kashmir'],
            ['code' => 'JH', 'name' => 'Jharkhand'],
            ['code' => 'KA', 'name' => 'Karnataka'],
            ['code' => 'KL', 'name' => 'Kerala'],
            ['code' => 'MP', 'name' => 'Madhya Pradesh'],
            ['code' => 'MH', 'name' => 'Maharashtra'],
            ['code' => 'MN', 'name' => 'Manipur'],
            ['code' => 'ML', 'name' => 'Meghalaya'],
            ['code' => 'MZ', 'name' => 'Mizoram'],
            ['code' => 'NL', 'name' => 'Nagaland'],
            ['code' => 'OR', 'name' => 'Odisha'],
            ['code' => 'PB', 'name' => 'Punjab'],
            ['code' => 'RJ', 'name' => 'Rajasthan'],
            ['code' => 'SK', 'name' => 'Sikkim'],
            ['code' => 'TN', 'name' => 'Tamil Nadu'],
            ['code' => 'TG', 'name' => 'Telangana'],
            ['code' => 'TR', 'name' => 'Tripura'],
            ['code' => 'UT', 'name' => 'Uttarakhand'],
            ['code' => 'UP', 'name' => 'Uttar Pradesh'],
            ['code' => 'WB', 'name' => 'West Bengal'],
            ['code' => 'AN', 'name' => 'Andaman and Nicobar Islands'],
            ['code' => 'CH', 'name' => 'Chandigarh'],
            ['code' => 'DN', 'name' => 'Dadra and Nagar Haveli'],
            ['code' => 'DD', 'name' => 'Daman and Diu'],
            ['code' => 'DL', 'name' => 'Delhi'],
            ['code' => 'LD', 'name' => 'Lakshadweep'],
            ['code' => 'PY', 'name' => 'Puducherry']
        ]);

        $fr = Country::whereCode('FR')->first();
        $fr->states()->createMany([
            ['code' => 'ARA',  'name' => 'Auvergne-Rhône-Alpes'],
            ['code' => 'BFC',  'name' => 'Bourgogne-Franche-Comté'],
            ['code' => 'BZH',  'name' => 'Bretagne'],
            ['code' => 'CVL',  'name' => 'Centre–Val-de-Loire'],
            ['code' => 'COR',  'name' => 'Corse'],
            ['code' => 'GP',   'name' => 'Guadeloupe'],
            ['code' => 'GF',   'name' => 'Guyane'],
            ['code' => 'GE',   'name' => 'Grand-Est'],
            ['code' => 'HF',   'name' => 'Hauts-de-France'],
            ['code' => 'IDF',  'name' => 'Île-de-France'],
            ['code' => 'MQ',   'name' => 'Martinique'],
            ['code' => 'YT',   'name' => 'Mayotte'],
            ['code' => 'NOR',  'name' => 'Normandie'],
            ['code' => 'PL',   'name' => 'Pays-de-la-Loire'],
            ['code' => 'NA',   'name' => 'Nouvelle-Aquitaine'],
            ['code' => 'OCC',  'name' => 'Occitanie'],
            ['code' => 'PACA', 'name' => 'Provence-Alpes-Côte-d\'Azur'],
            ['code' => 'RE',   'name' => 'Réunion'],
        ]);

        $nz = Country::whereCode('NZ')->first();
        $nz->states()->createMany([
            ['code' => 'NTL', 'name' => "Northland"],
            ['code' => 'AUK', 'name' => "Auckland"],
            ['code' => 'WKO', 'name' => "Waikato"],
            ['code' => 'BOP', 'name' => "Bay of Plenty"],
            ['code' => 'GIS', 'name' => "Gisborne"],
            ['code' => 'HKB', 'name' => "Hawke's Bay"],
            ['code' => 'TKI', 'name' => "Taranaki"],
            ['code' => 'MWT', 'name' => "Manawatu-Wanganui"],
            ['code' => 'WGN', 'name' => "Wellington"],
            ['code' => 'TAS', 'name' => "Tasman"],
            ['code' => 'NSN', 'name' => "Nelson"],
            ['code' => 'MBH', 'name' => "Marlborough"],
            ['code' => 'WTC', 'name' => "West Coast"],
            ['code' => 'CAN', 'name' => "Canterbury"],
            ['code' => 'OTA', 'name' => "Otago Otago"],
            ['code' => 'STL', 'name' => "Southland"],
        ]);
    }
}
