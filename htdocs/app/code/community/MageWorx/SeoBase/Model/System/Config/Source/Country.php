<?php
/**
 * MageWorx
 * MageWorx SeoBase Extension
 * 
 * @category   MageWorx
 * @package    MageWorx_SeoBase
 * @copyright  Copyright (c) 2015 MageWorx (http://www.mageworx.com/)
 */


class MageWorx_SeoBase_Model_System_Config_Source_Country
{
    /**
     * ISO 639-1
     * @var array
     */
    protected $_options = array(
            array('value' => 'AF', 'label' => 'Afghanistan (AF)'),
            array('value' => 'AL', 'label' => 'Albania (AL)'),
            array('value' => 'DZ', 'label' => 'Algeria (DZ)'),
            array('value' => 'AD', 'label' => 'Andorra (AD)'),
            array('value' => 'AO', 'label' => 'Angola (AO)'),
            array('value' => 'AG', 'label' => 'Antigua and Barbuda (AG)'),
            array('value' => 'AR', 'label' => 'Argentina (AR)'),
            array('value' => 'AM', 'label' => 'Armenia (AM)'),
            array('value' => 'AU', 'label' => 'Australia (AU)'),
            array('value' => 'AT', 'label' => 'Austria (AT)'),
            array('value' => 'AZ', 'label' => 'Azerbaijan (AZ)'),
            array('value' => 'BS', 'label' => 'Bahamas, The (BS)'),
            array('value' => 'BH', 'label' => 'Bahrain (BH)'),
            array('value' => 'BD', 'label' => 'Bangladesh (BD)'),
            array('value' => 'BB', 'label' => 'Barbados (BB)'),
            array('value' => 'BY', 'label' => 'Belarus (BY)'),
            array('value' => 'BE', 'label' => 'Belgium (BE)'),
            array('value' => 'BZ', 'label' => 'Belize (BZ)'),
            array('value' => 'BJ', 'label' => 'Benin (BJ)'),
            array('value' => 'BT', 'label' => 'Bhutan (BT)'),
            array('value' => 'BO', 'label' => 'Bolivia (BO)'),
            array('value' => 'BA', 'label' => 'Bosnia and Herzegovina (BA)'),
            array('value' => 'BW', 'label' => 'Botswana (BW)'),
            array('value' => 'BR', 'label' => 'Brazil (BR)'),
            array('value' => 'BN', 'label' => 'Brunei (BN)'),
            array('value' => 'BG', 'label' => 'Bulgaria (BG)'),
            array('value' => 'BF', 'label' => 'Burkina Faso (BF)'),
            array('value' => 'BI', 'label' => 'Burundi (BI)'),
            array('value' => 'KH', 'label' => 'Cambodia (KH)'),
            array('value' => 'CM', 'label' => 'Cameroon (CM)'),
            array('value' => 'CA', 'label' => 'Canada (CA)'),
            array('value' => 'CV', 'label' => 'Cape Verde (CV)'),
            array('value' => 'CF', 'label' => 'Central African Republic (CF)'),
            array('value' => 'TD', 'label' => 'Chad (TD)'),
            array('value' => 'CL', 'label' => 'Chile (CL)'),
            array('value' => 'CN', 'label' => 'China, People\'s Republic of (CN)'),
            array('value' => 'CO', 'label' => 'Colombia (CO)'),
            array('value' => 'KM', 'label' => 'Comoros (KM)'),
            array('value' => 'CD', 'label' => 'Congo, (Congo Â– Kinshasa) (CD)'),
            array('value' => 'CG', 'label' => 'Congo, (Congo Â– Brazzaville) (CG)'),
            array('value' => 'CR', 'label' => 'Costa Rica (CR)'),
            array('value' => 'CI', 'label' => 'Cote d\'Ivoire (Ivory Coast) (CI)'),
            array('value' => 'HR', 'label' => 'Croatia (HR)'),
            array('value' => 'CU', 'label' => 'Cuba (CU)'),
            array('value' => 'CY', 'label' => 'Cyprus (CY)'),
            array('value' => 'CZ', 'label' => 'Czech Republic (CZ)'),
            array('value' => 'DK', 'label' => 'Denmark (DK)'),
            array('value' => 'DJ', 'label' => 'Djibouti (DJ)'),
            array('value' => 'DM', 'label' => 'Dominica (DM)'),
            array('value' => 'DO', 'label' => 'Dominican Republic (DO)'),
            array('value' => 'EC', 'label' => 'Ecuador (EC)'),
            array('value' => 'EG', 'label' => 'Egypt (EG)'),
            array('value' => 'SV', 'label' => 'El Salvador (SV)'),
            array('value' => 'GQ', 'label' => 'Equatorial Guinea (GQ)'),
            array('value' => 'ER', 'label' => 'Eritrea (ER)'),
            array('value' => 'EE', 'label' => 'Estonia (EE)'),
            array('value' => 'ET', 'label' => 'Ethiopia (ET)'),
            array('value' => 'FJ', 'label' => 'Fiji (FJ)'),
            array('value' => 'FI', 'label' => 'Finland (FI)'),
            array('value' => 'FR', 'label' => 'France (FR)'),
            array('value' => 'GA', 'label' => 'Gabon (GA)'),
            array('value' => 'GM', 'label' => 'Gambia, The (GM)'),
            array('value' => 'GE', 'label' => 'Georgia (GE)'),
            array('value' => 'DE', 'label' => 'Germany (DE)'),
            array('value' => 'GH', 'label' => 'Ghana (GH)'),
            array('value' => 'GR', 'label' => 'Greece (GR)'),
            array('value' => 'GD', 'label' => 'Grenada (GD)'),
            array('value' => 'GT', 'label' => 'Guatemala (GT)'),
            array('value' => 'GN', 'label' => 'Guinea (GN)'),
            array('value' => 'GW', 'label' => 'Guinea-Bissau (GW)'),
            array('value' => 'GY', 'label' => 'Guyana (GY)'),
            array('value' => 'HT', 'label' => 'Haiti (HT)'),
            array('value' => 'HN', 'label' => 'Honduras (HN)'),
            array('value' => 'HU', 'label' => 'Hungary (HU)'),
            array('value' => 'IS', 'label' => 'Iceland (IS)'),
            array('value' => 'IN', 'label' => 'India (IN)'),
            array('value' => 'ID', 'label' => 'Indonesia (ID)'),
            array('value' => 'IR', 'label' => 'Iran (IR)'),
            array('value' => 'IQ', 'label' => 'Iraq (IQ)'),
            array('value' => 'IE', 'label' => 'Ireland (IE)'),
            array('value' => 'IL', 'label' => 'Israel (IL)'),
            array('value' => 'IT', 'label' => 'Italy (IT)'),
            array('value' => 'JM', 'label' => 'Jamaica (JM)'),
            array('value' => 'JP', 'label' => 'Japan (JP)'),
            array('value' => 'JO', 'label' => 'Jordan (JO)'),
            array('value' => 'KZ', 'label' => 'Kazakhstan (KZ)'),
            array('value' => 'KE', 'label' => 'Kenya (KE)'),
            array('value' => 'KI', 'label' => 'Kiribati (KI)'),
            array('value' => 'KP', 'label' => 'Korea, North (KP)'),
            array('value' => 'KR', 'label' => 'Korea, South (KR)'),
            array('value' => 'KW', 'label' => 'Kuwait (KW)'),
            array('value' => 'KG', 'label' => 'Kyrgyzstan (KG)'),
            array('value' => 'LA', 'label' => 'Laos (LA)'),
            array('value' => 'LV', 'label' => 'Latvia (LV)'),
            array('value' => 'LB', 'label' => 'Lebanon (LB)'),
            array('value' => 'LS', 'label' => 'Lesotho (LS)'),
            array('value' => 'LR', 'label' => 'Liberia (LR)'),
            array('value' => 'LY', 'label' => 'Libya (LY)'),
            array('value' => 'LI', 'label' => 'Liechtenstein (LI)'),
            array('value' => 'LT', 'label' => 'Lithuania (LT)'),
            array('value' => 'LU', 'label' => 'Luxembourg (LU)'),
            array('value' => 'MK', 'label' => 'Macedonia (MK)'),
            array('value' => 'MG', 'label' => 'Madagascar (MG)'),
            array('value' => 'MW', 'label' => 'Malawi (MW)'),
            array('value' => 'MY', 'label' => 'Malaysia (MY)'),
            array('value' => 'MV', 'label' => 'Maldives (MV)'),
            array('value' => 'ML', 'label' => 'Mali (ML)'),
            array('value' => 'MT', 'label' => 'Malta (MT)'),
            array('value' => 'MH', 'label' => 'Marshall Islands (MH)'),
            array('value' => 'MR', 'label' => 'Mauritania (MR)'),
            array('value' => 'MU', 'label' => 'Mauritius (MU)'),
            array('value' => 'MX', 'label' => 'Mexico (MX)'),
            array('value' => 'FM', 'label' => 'Micronesia (FM)'),
            array('value' => 'MD', 'label' => 'Moldova (MD)'),
            array('value' => 'MC', 'label' => 'Monaco (MC)'),
            array('value' => 'MN', 'label' => 'Mongolia (MN)'),
            array('value' => 'ME', 'label' => 'Montenegro (ME)'),
            array('value' => 'MA', 'label' => 'Morocco (MA)'),
            array('value' => 'MZ', 'label' => 'Mozambique (MZ)'),
            array('value' => 'MM', 'label' => 'Myanmar (Burma) (MM)'),
            array('value' => 'NA', 'label' => 'Namibia (NA)'),
            array('value' => 'NR', 'label' => 'Nauru (NR)'),
            array('value' => 'NP', 'label' => 'Nepal (NP)'),
            array('value' => 'NL', 'label' => 'Netherlands (NL)'),
            array('value' => 'NZ', 'label' => 'New Zealand (NZ)'),
            array('value' => 'NI', 'label' => 'Nicaragua (NI)'),
            array('value' => 'NE', 'label' => 'Niger (NE)'),
            array('value' => 'NG', 'label' => 'Nigeria (NG)'),
            array('value' => 'NO', 'label' => 'Norway (NO)'),
            array('value' => 'OM', 'label' => 'Oman (OM)'),
            array('value' => 'PK', 'label' => 'Pakistan (PK)'),
            array('value' => 'PW', 'label' => 'Palau (PW)'),
            array('value' => 'PA', 'label' => 'Panama (PA)'),
            array('value' => 'PG', 'label' => 'Papua New Guinea (PG)'),
            array('value' => 'PY', 'label' => 'Paraguay (PY)'),
            array('value' => 'PE', 'label' => 'Peru (PE)'),
            array('value' => 'PH', 'label' => 'Philippines (PH)'),
            array('value' => 'PL', 'label' => 'Poland (PL)'),
            array('value' => 'PT', 'label' => 'Portugal (PT)'),
            array('value' => 'QA', 'label' => 'Qatar (QA)'),
            array('value' => 'RO', 'label' => 'Romania (RO)'),
            array('value' => 'RU', 'label' => 'Russia (RU)'),
            array('value' => 'RW', 'label' => 'Rwanda (RW)'),
            array('value' => 'KN', 'label' => 'Saint Kitts and Nevis (KN)'),
            array('value' => 'LC', 'label' => 'Saint Lucia (LC)'),
            array('value' => 'VC', 'label' => 'Saint Vincent and the Grenadines (VC)'),
            array('value' => 'WS', 'label' => 'Samoa (WS)'),
            array('value' => 'SM', 'label' => 'San Marino (SM)'),
            array('value' => 'ST', 'label' => 'Sao Tome and Principe (ST)'),
            array('value' => 'SA', 'label' => 'Saudi Arabia (SA)'),
            array('value' => 'SN', 'label' => 'Senegal (SN)'),
            array('value' => 'RS', 'label' => 'Serbia (RS)'),
            array('value' => 'SC', 'label' => 'Seychelles (SC)'),
            array('value' => 'SL', 'label' => 'Sierra Leone (SL)'),
            array('value' => 'SG', 'label' => 'Singapore (SG)'),
            array('value' => 'SK', 'label' => 'Slovakia (SK)'),
            array('value' => 'SI', 'label' => 'Slovenia (SI)'),
            array('value' => 'SB', 'label' => 'Solomon Islands (SB)'),
            array('value' => 'SO', 'label' => 'Somalia (SO)'),
            array('value' => 'ZA', 'label' => 'South Africa (ZA)'),
            array('value' => 'ES', 'label' => 'Spain (ES)'),
            array('value' => 'LK', 'label' => 'Sri Lanka (LK)'),
            array('value' => 'SD', 'label' => 'Sudan (SD)'),
            array('value' => 'SR', 'label' => 'Suriname (SR)'),
            array('value' => 'SZ', 'label' => 'Swaziland (SZ)'),
            array('value' => 'SE', 'label' => 'Sweden (SE)'),
            array('value' => 'CH', 'label' => 'Switzerland (CH)'),
            array('value' => 'SY', 'label' => 'Syria (SY)'),
            array('value' => 'TJ', 'label' => 'Tajikistan (TJ)'),
            array('value' => 'TZ', 'label' => 'Tanzania (TZ)'),
            array('value' => 'TH', 'label' => 'Thailand (TH)'),
            array('value' => 'TL', 'label' => 'Timor-Leste (East Timor) (TL)'),
            array('value' => 'TG', 'label' => 'Togo (TG)'),
            array('value' => 'TO', 'label' => 'Tonga (TO)'),
            array('value' => 'TT', 'label' => 'Trinidad and Tobago (TT)'),
            array('value' => 'TN', 'label' => 'Tunisia (TN)'),
            array('value' => 'TR', 'label' => 'Turkey (TR)'),
            array('value' => 'TM', 'label' => 'Turkmenistan (TM)'),
            array('value' => 'TV', 'label' => 'Tuvalu (TV)'),
            array('value' => 'UG', 'label' => 'Uganda (UG)'),
            array('value' => 'UA', 'label' => 'Ukraine (UA)'),
            array('value' => 'AE', 'label' => 'United Arab Emirates (AE)'),
            array('value' => 'GB', 'label' => 'United Kingdom (GB)'),
            array('value' => 'US', 'label' => 'United States (US)'),
            array('value' => 'UY', 'label' => 'Uruguay (UY)'),
            array('value' => 'UZ', 'label' => 'Uzbekistan (UZ)'),
            array('value' => 'VU', 'label' => 'Vanuatu (VU)'),
            array('value' => 'VA', 'label' => 'Vatican City (VA)'),
            array('value' => 'VE', 'label' => 'Venezuela (VE)'),
            array('value' => 'VN', 'label' => 'Vietnam (VN)'),
            array('value' => 'YE', 'label' => 'Yemen (YE)'),
            array('value' => 'ZM', 'label' => 'Zambia (ZM)'),
            array('value' => 'ZW', 'label' => 'Zimbabwe (ZW)'),
            array('value' => 'GE', 'label' => 'Abkhazia (GE)'),
            array('value' => 'TW', 'label' => 'China, Republic of (Taiwan) (TW)'),
            array('value' => 'AZ', 'label' => 'Nagorno-Karabakh (AZ)'),
            array('value' => 'CY', 'label' => 'Northern Cyprus (CY)'),
            array('value' => 'MD', 'label' => 'Pridnestrovie (Transnistria) (MD)'),
            array('value' => 'SO', 'label' => 'Somaliland (SO)'),
            array('value' => 'GE', 'label' => 'South Ossetia (GE)'),
            array('value' => 'AU', 'label' => 'Ashmore and Cartier Islands (AU)'),
            array('value' => 'CX', 'label' => 'Christmas Island (CX)'),
            array('value' => 'CC', 'label' => 'Cocos (Keeling) Islands (CC)'),
            array('value' => 'AU', 'label' => 'Coral Sea Islands (AU)'),
            array('value' => 'HM', 'label' => 'Heard Island and McDonald Islands (HM)'),
            array('value' => 'NF', 'label' => 'Norfolk Island (NF)'),
            array('value' => 'NC', 'label' => 'New Caledonia (NC)'),
            array('value' => 'PF', 'label' => 'French Polynesia (PF)'),
            array('value' => 'YT', 'label' => 'Mayotte (YT)'),
            array('value' => 'GP', 'label' => 'Saint Barthelemy (GP)'),
            array('value' => 'GP', 'label' => 'Saint Martin (GP)'),
            array('value' => 'PM', 'label' => 'Saint Pierre and Miquelon (PM)'),
            array('value' => 'WF', 'label' => 'Wallis and Futuna (WF)'),
            array('value' => 'TF', 'label' => 'French Southern and Antarctic Lands (TF)'),
            array('value' => 'PF', 'label' => 'Clipperton Island (PF)'),
            array('value' => 'BV', 'label' => 'Bouvet Island (BV)'),
            array('value' => 'CK', 'label' => 'Cook Islands (CK)'),
            array('value' => 'NU', 'label' => 'Niue (NU)'),
            array('value' => 'TK', 'label' => 'Tokelau (TK)'),
            array('value' => 'GG', 'label' => 'Guernsey (GG)'),
            array('value' => 'IM', 'label' => 'Isle of Man (IM)'),
            array('value' => 'JE', 'label' => 'Jersey (JE)'),
            array('value' => 'AI', 'label' => 'Anguilla (AI)'),
            array('value' => 'BM', 'label' => 'Bermuda (BM)'),
            array('value' => 'IO', 'label' => 'British Indian Ocean Territory (IO)'),
            array('value' => 'VG', 'label' => 'British Virgin Islands (VG)'),
            array('value' => 'KY', 'label' => 'Cayman Islands (KY)'),
            array('value' => 'FK', 'label' => 'Falkland Islands (Islas Malvinas) (FK)'),
            array('value' => 'GI', 'label' => 'Gibraltar (GI)'),
            array('value' => 'MS', 'label' => 'Montserrat (MS)'),
            array('value' => 'PN', 'label' => 'Pitcairn Islands (PN)'),
            array('value' => 'SH', 'label' => 'Saint Helena (SH)'),
            array('value' => 'GS', 'label' => 'South Georgia & South Sandwich Islands (GS)'),
            array('value' => 'TC', 'label' => 'Turks and Caicos Islands (TC)'),
            array('value' => 'MP', 'label' => 'Northern Mariana Islands (MP)'),
            array('value' => 'PR', 'label' => 'Puerto Rico (PR)'),
            array('value' => 'AS', 'label' => 'American Samoa (AS)'),
            array('value' => 'UM', 'label' => 'Baker Island (UM)'),
            array('value' => 'GU', 'label' => 'Guam (GU)'),
            array('value' => 'UM', 'label' => 'Howland Island (UM)'),
            array('value' => 'UM', 'label' => 'Jarvis Island (UM)'),
            array('value' => 'UM', 'label' => 'Johnston Atoll (UM)'),
            array('value' => 'UM', 'label' => 'Kingman Reef (UM)'),
            array('value' => 'UM', 'label' => 'Midway Islands (UM)'),
            array('value' => 'UM', 'label' => 'Navassa Island (UM)'),
            array('value' => 'UM', 'label' => 'Palmyra Atoll (UM)'),
            array('value' => 'VI', 'label' => 'U.S. Virgin Islands (VI)'),
            array('value' => 'UM', 'label' => 'Wake Island (UM)'),
            array('value' => 'HK', 'label' => 'Hong Kong (HK)'),
            array('value' => 'MO', 'label' => 'Macau (MO)'),
            array('value' => 'FO', 'label' => 'Faroe Islands (FO)'),
            array('value' => 'GL', 'label' => 'Greenland (GL)'),
            array('value' => 'GF', 'label' => 'French Guiana (GF)'),
            array('value' => 'GP', 'label' => 'Guadeloupe (GP)'),
            array('value' => 'MQ', 'label' => 'Martinique (MQ)'),
            array('value' => 'RE', 'label' => 'Reunion (RE)'),
            array('value' => 'AX', 'label' => 'Aland (AX)'),
            array('value' => 'AW', 'label' => 'Aruba (AW)'),
            array('value' => 'AN', 'label' => 'Netherlands Antilles (AN)'),
            array('value' => 'SJ', 'label' => 'Svalbard (SJ)'),
            array('value' => 'AC', 'label' => 'Ascension (AC)'),
            array('value' => 'TA', 'label' => 'Tristan da Cunha (TA)'),
            array('value' => 'AQ', 'label' => 'Australian Antarctic Territory (AQ)'),
            array('value' => 'AQ', 'label' => 'Ross Dependency (AQ)'),
            array('value' => 'AQ', 'label' => 'Peter I Island (AQ)'),
            array('value' => 'AQ', 'label' => 'Queen Maud Land (AQ)'),
            array('value' => 'AQ', 'label' => 'British Antarctic Territory (AQ)')
    );


    public function toOptionArray()
    {
        return $this->_options;
    }
}