<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Place extends Model
{
    use Sushi;

    protected $casts = [
        'population' => 'integer',
        'rank' => 'integer',
    ];

    protected $rows = [
        [
          'population' => '8336817',
          'rank' => '1',
          'place' => 'New York, New York',
          'lat' => '40.750422',
          'lng' => '-73.996328',
        ],
        [
          'population' => '3979576',
          'rank' => '2',
          'place' => 'Los Angeles, California',
          'lat' => '33.973951',
          'lng' => '-118.248405',
        ],
        [
          'population' => '2693976',
          'rank' => '3',
          'place' => 'Chicago, Illinois',
          'lat' => '41.88531',
          'lng' => '-87.62213',
        ],
        [
          'population' => '2320268',
          'rank' => '4',
          'place' => 'Houston, Texas',
          'lat' => '29.813142',
          'lng' => '-95.309789',
        ],
        [
          'population' => '1680992',
          'rank' => '5',
          'place' => 'Phoenix, Arizona',
          'lat' => '33.448376',
          'lng' => '-112.074036',
        ],
        [
          'population' => '1584064',
          'rank' => '6',
          'place' => 'Philadelphia, Pennsylvania',
          'lat' => '40.001811',
          'lng' => '-75.11787',
        ],
        [
          'population' => '1547253',
          'rank' => '7',
          'place' => 'San Antonio, Texas',
          'lat' => '29.468413',
          'lng' => '-98.528889',
        ],
        [
          'population' => '1423851',
          'rank' => '8',
          'place' => 'San Diego, California',
          'lat' => '32.724103',
          'lng' => '-117.170912',
        ],
        [
          'population' => '1343573',
          'rank' => '9',
          'place' => 'Dallas, Texas',
          'lat' => '32.781179',
          'lng' => '-96.790329',
        ],
        [
          'population' => '1021795',
          'rank' => '10',
          'place' => 'San Jose, California',
          'lat' => '37.338207',
          'lng' => '-121.886330',
        ],
        [
          'population' => '978908',
          'rank' => '11',
          'place' => 'Austin, Texas',
          'lat' => '30.326374',
          'lng' => '-97.771258',
        ],
        [
          'population' => '911507',
          'rank' => '12',
          'place' => 'Jacksonville, Florida',
          'lat' => '30.337538',
          'lng' => '-81.768622',
        ],
        [
          'population' => '909585',
          'rank' => '13',
          'place' => 'Fort Worth, Texas',
          'lat' => '32.771419',
          'lng' => '-97.291484',
        ],
        [
          'population' => '898553',
          'rank' => '14',
          'place' => 'Columbus, Ohio',
          'lat' => '39.961178',
          'lng' => '-82.998795',
        ],
        [
          'population' => '885708',
          'rank' => '15',
          'place' => 'Charlotte, North Carolina',
          'lat' => '35.26002',
          'lng' => '-80.804151',
        ],
        [
          'population' => '881549',
          'rank' => '16',
          'place' => 'San Francisco, California',
          'lat' => '37.776646',
          'lng' => '-122.417481',
        ],
        [
          'population' => '876384',
          'rank' => '17',
          'place' => 'Indianapolis, Indiana',
          'lat' => '39.775092',
          'lng' => '-86.13216',
        ],
        [
          'population' => '753675',
          'rank' => '18',
          'place' => 'Seattle, Washington',
          'lat' => '47.606209',
          'lng' => '-122.332069',
        ],
        [
          'population' => '727211',
          'rank' => '19',
          'place' => 'Denver, Colorado',
          'lat' => '39.760189',
          'lng' => '-104.996553',
        ],
        [
          'population' => '705749',
          'rank' => '20',
          'place' => 'Washington, DC',
          'lat' => '38.911936',
          'lng' => '-77.016719',
        ],
        [
          'population' => '692600',
          'rank' => '21',
          'place' => 'Boston, Massachusetts',
          'lat' => '42.370567',
          'lng' => '-71.026964',
        ],
        [
          'population' => '681728',
          'rank' => '22',
          'place' => 'El Paso, Texas',
          'lat' => '31.763608',
          'lng' => '-106.484592',
        ],
        [
          'population' => '670031',
          'rank' => '24',
          'place' => 'Detroit, Michigan',
          'lat' => '42.347021',
          'lng' => '-83.060184',
        ],
        [
          'population' => '655057',
          'rank' => '25',
          'place' => 'Oklahoma City, Oklahoma',
          'lat' => '35.491608',
          'lng' => '-97.562817',
        ],
        [
          'population' => '654741',
          'rank' => '26',
          'place' => 'Portland, Oregon',
          'lat' => '45.507856',
          'lng' => '-122.690794',
        ],
        [
          'population' => '651319',
          'rank' => '27',
          'place' => 'Las Vegas, Nevada',
          'lat' => '36.17372',
          'lng' => '-115.10647',
        ],
        [
          'population' => '651073',
          'rank' => '28',
          'place' => 'Memphis, Tennessee',
          'lat' => '35.169255',
          'lng' => '-89.990415',
        ],
        [
          'population' => '593490',
          'rank' => '30',
          'place' => 'Baltimore, Maryland',
          'lat' => '39.296536',
          'lng' => '-76.623489',
        ],
        [
          'population' => '590157',
          'rank' => '31',
          'place' => 'Milwaukee, Wisconsin',
          'lat' => '43.011264',
          'lng' => '-87.958409',
        ],
        [
          'population' => '560513',
          'rank' => '32',
          'place' => 'Albuquerque, New Mexico',
          'lat' => '35.084385',
          'lng' => '-106.650421',
        ],
        [
          'population' => '548073',
          'rank' => '33',
          'place' => 'Tucson, Arizona',
          'lat' => '32.217975',
          'lng' => '-110.970869',
        ],
        [
          'population' => '531576',
          'rank' => '34',
          'place' => 'Fresno, California',
          'lat' => '36.8411',
          'lng' => '-119.801015',
        ],
        [
          'population' => '518012',
          'rank' => '35',
          'place' => 'Mesa, Arizona',
          'lat' => '33.440695',
          'lng' => '-111.856967',
        ],
        [
          'population' => '513624',
          'rank' => '36',
          'place' => 'Sacramento, California',
          'lat' => '38.581573',
          'lng' => '-121.494400',
        ],
        [
          'population' => '506811',
          'rank' => '37',
          'place' => 'Atlanta, Georgia',
          'lat' => '33.748997',
          'lng' => '-84.387985',
        ],
        [
          'population' => '495327',
          'rank' => '38',
          'place' => 'Kansas City, Missouri',
          'lat' => '39.102404',
          'lng' => '-94.598583',
        ],
        [
          'population' => '478221',
          'rank' => '39',
          'place' => 'Colorado Springs, Colorado',
          'lat' => '38.828893',
          'lng' => '-104.809929',
        ],
        [
          'population' => '478192',
          'rank' => '40',
          'place' => 'Omaha, Nebraska',
          'lat' => '41.256538',
          'lng' => '-95.934502',
        ],
        [
          'population' => '474069',
          'rank' => '41',
          'place' => 'Raleigh, North Carolina',
          'lat' => '35.773632',
          'lng' => '-78.634457',
        ],
        [
          'population' => '467963',
          'rank' => '42',
          'place' => 'Miami, Florida',
          'lat' => '25.761681',
          'lng' => '-80.191788',
        ],
        [
          'population' => '462628',
          'rank' => '43',
          'place' => 'Long Beach, California',
          'lat' => '33.804309',
          'lng' => '-118.200957',
        ],
        [
          'population' => '449974',
          'rank' => '44',
          'place' => 'Virginia Beach, Virginia',
          'lat' => '36.844004',
          'lng' => '-76.12036',
        ],
        [
          'population' => '433031',
          'rank' => '45',
          'place' => 'Oakland, California',
          'lat' => '37.786027',
          'lng' => '-122.223779',
        ],
        [
          'population' => '429606',
          'rank' => '46',
          'place' => 'Minneapolis, Minnesota',
          'lat' => '44.984577',
          'lng' => '-93.269097',
        ],
        [
          'population' => '401190',
          'rank' => '47',
          'place' => 'Tulsa, Oklahoma',
          'lat' => '36.153980',
          'lng' => '-95.992775',
        ],
        [
          'population' => '399700',
          'rank' => '48',
          'place' => 'Tampa, Florida',
          'lat' => '27.996097',
          'lng' => '-82.582035',
        ],
        [
          'population' => '398854',
          'rank' => '49',
          'place' => 'Arlington, Texas',
          'lat' => '32.635563',
          'lng' => '-97.148829',
        ],
        [
          'population' => '390144',
          'rank' => '50',
          'place' => 'New Orleans, Louisiana',
          'lat' => '29.958304',
          'lng' => '-90.077',
        ],
        [
          'population' => '389938',
          'rank' => '51',
          'place' => 'Wichita, Kansas',
          'lat' => '37.651974',
          'lng' => '-97.258997',
        ],
        [
          'population' => '384145',
          'rank' => '52',
          'place' => 'Bakersfield, California',
          'lat' => '35.384337',
          'lng' => '-119.020562',
        ],
        [
          'population' => '381009',
          'rank' => '53',
          'place' => 'Cleveland, Ohio',
          'lat' => '41.489381',
          'lng' => '-81.667486',
        ],
        [
          'population' => '379289',
          'rank' => '54',
          'place' => 'Aurora, Colorado',
          'lat' => '39.739249',
          'lng' => '-104.862881',
        ],
        [
          'population' => '350365',
          'rank' => '55',
          'place' => 'Anaheim, California',
          'lat' => '33.844983',
          'lng' => '-117.952151',
        ],
        [
          'population' => '345064',
          'rank' => '56',
          'place' => 'Honolulu, Hawaii',
          'lat' => '21.306944',
          'lng' => '-157.858337',
        ],
        [
          'population' => '332318',
          'rank' => '57',
          'place' => 'Santa Ana, California',
          'lat' => '33.74822',
          'lng' => '-117.858473',
        ],
        [
          'population' => '331360',
          'rank' => '58',
          'place' => 'Riverside, California',
          'lat' => '33.99504',
          'lng' => '-117.373184',
        ],
        [
          'population' => '326586',
          'rank' => '59',
          'place' => 'Corpus Christi, Texas',
          'lat' => '27.797802',
          'lng' => '-97.399067',
        ],
        [
          'population' => '320189',
          'rank' => '61',
          'place' => 'Henderson, Nevada',
          'lat' => '35.927901',
          'lng' => '-114.972061',
        ],
        [
          'population' => '312697',
          'rank' => '62',
          'place' => 'Stockton, California',
          'lat' => '37.957539',
          'lng' => '-121.292450',
        ],
        [
          'population' => '308096',
          'rank' => '63',
          'place' => 'St. Paul, Minnesota',
          'lat' => '44.951483',
          'lng' => '-93.090649',
        ],
        [
          'population' => '303940',
          'rank' => '64',
          'place' => 'Cincinnati, Ohio',
          'lat' => '39.166759',
          'lng' => '-84.53822',
        ],
        [
          'population' => '300576',
          'rank' => '65',
          'place' => 'St. Louis, Missouri',
          'lat' => '38.631501',
          'lng' => '-90.19231',
        ],
        [
          'population' => '300286',
          'rank' => '66',
          'place' => 'Pittsburgh, Pennsylvania',
          'lat' => '40.47441',
          'lng' => '-79.950968',
        ],
        [
          'population' => '296710',
          'rank' => '67',
          'place' => 'Greensboro, North Carolina',
          'lat' => '36.069144',
          'lng' => '-79.765156',
        ],
        [
          'population' => '289102',
          'rank' => '68',
          'place' => 'Lincoln, Nebraska',
          'lat' => '40.813600',
          'lng' => '-96.702610',
        ],
        [
          'population' => '288000',
          'rank' => '69',
          'place' => 'Anchorage, Alaska',
          'lat' => '61.220018',
          'lng' => '-149.855702',
        ],
        [
          'population' => '287677',
          'rank' => '70',
          'place' => 'Plano, Texas',
          'lat' => '33.056756',
          'lng' => '-96.730831',
        ],
        [
          'population' => '287442',
          'rank' => '71',
          'place' => 'Orlando, Florida',
          'lat' => '28.545179',
          'lng' => '-81.373291',
        ],
        [
          'population' => '287401',
          'rank' => '72',
          'place' => 'Irvine, California',
          'lat' => '33.757245',
          'lng' => '-117.750414',
        ],
        [
          'population' => '282011',
          'rank' => '73',
          'place' => 'Newark, New Jersey',
          'lat' => '40.736101',
          'lng' => '-74.22509',
        ],
        [
          'population' => '278993',
          'rank' => '74',
          'place' => 'Durham, North Carolina',
          'lat' => '35.99924',
          'lng' => '-78.897944',
        ],
        [
          'population' => '274492',
          'rank' => '75',
          'place' => 'Chula Vista, California',
          'lat' => '32.640072',
          'lng' => '-117.084038',
        ],
        [
          'population' => '272779',
          'rank' => '76',
          'place' => 'Toledo, Ohio',
          'lat' => '41.720684',
          'lng' => '-83.569359',
        ],
        [
          'population' => '270402',
          'rank' => '77',
          'place' => 'Fort Wayne, Indiana',
          'lat' => '41.093763',
          'lng' => '-85.070713',
        ],
        [
          'population' => '265351',
          'rank' => '78',
          'place' => 'St. Petersburg, Florida',
          'lat' => '27.775654',
          'lng' => '-82.64092',
        ],
        [
          'population' => '262491',
          'rank' => '79',
          'place' => 'Laredo, Texas',
          'lat' => '27.515879',
          'lng' => '-99.494078',
        ],
        [
          'population' => '262075',
          'rank' => '80',
          'place' => 'Jersey City, New Jersey',
          'lat' => '40.73276',
          'lng' => '-74.075485',
        ],
        [
          'population' => '261165',
          'rank' => '81',
          'place' => 'Chandler, Arizona',
          'lat' => '33.324113',
          'lng' => '-111.878217',
        ],
        [
          'population' => '259680',
          'rank' => '82',
          'place' => 'Madison, Wisconsin',
          'lat' => '43.06956',
          'lng' => '-89.423861',
        ],
        [
          'population' => '258862',
          'rank' => '83',
          'place' => 'Lubbock, Texas',
          'lat' => '33.588771',
          'lng' => '-101.850445',
        ],
        [
          'population' => '258069',
          'rank' => '84',
          'place' => 'Scottsdale, Arizona',
          'lat' => '33.534451',
          'lng' => '-111.887354',
        ],
        [
          'population' => '255601',
          'rank' => '85',
          'place' => 'Reno, Nevada',
          'lat' => '39.525749',
          'lng' => '-119.813051',
        ],
        [
          'population' => '255284',
          'rank' => '86',
          'place' => 'Buffalo, New York',
          'lat' => '42.89606',
          'lng' => '-78.886424',
        ],
        [
          'population' => '254114',
          'rank' => '87',
          'place' => 'Gilbert town, Arizona',
          'lat' => '33.335401',
          'lng' => '-111.815281',
        ],
        [
          'population' => '252381',
          'rank' => '88',
          'place' => 'Glendale, Arizona',
          'lat' => '33.531753',
          'lng' => '-112.177935',
        ],
        [
          'population' => '251974',
          'rank' => '89',
          'place' => 'North Las Vegas, Nevada',
          'lat' => '36.211456',
          'lng' => '-115.124148',
        ],
        [
          'population' => '247945',
          'rank' => '90',
          'place' => 'Winston-Salem, North Carolina',
          'lat' => '36.027482',
          'lng' => '-80.20728',
        ],
        [
          'population' => '244835',
          'rank' => '91',
          'place' => 'Chesapeake, Virginia',
          'lat' => '36.749991',
          'lng' => '-76.218759',
        ],
        [
          'population' => '242742',
          'rank' => '92',
          'place' => 'Norfolk, Virginia',
          'lat' => '36.895911',
          'lng' => '-76.208521',
        ],
        [
          'population' => '241110',
          'rank' => '93',
          'place' => 'Fremont, California',
          'lat' => '37.565285',
          'lng' => '-121.982721',
        ],
        [
          'population' => '239928',
          'rank' => '94',
          'place' => 'Garland, Texas',
          'lat' => '32.931523',
          'lng' => '-96.615821',
        ],
        [
          'population' => '239798',
          'rank' => '95',
          'place' => 'Irving, Texas',
          'lat' => '32.767268',
          'lng' => '-96.777626',
        ],
        [
          'population' => '233339',
          'rank' => '96',
          'place' => 'Hialeah, Florida',
          'lat' => '25.558428',
          'lng' => '-80.458168',
        ],
        [
          'population' => '230436',
          'rank' => '97',
          'place' => 'Richmond, Virginia',
          'lat' => '37.524246',
          'lng' => '-77.493157',
        ],
        [
          'population' => '228959',
          'rank' => '98',
          'place' => 'Boise City, Idaho',
          'lat' => '43.603267',
          'lng' => '-116.23198',
        ],
        [
          'population' => '222081',
          'rank' => '99',
          'place' => 'Spokane, Washington',
          'lat' => '47.66264',
          'lng' => '-117.435997',
        ],
        [
          'population' => '220236',
          'rank' => '100',
          'place' => 'Baton Rouge, Louisiana',
          'lat' => '30.44924',
          'lng' => '-91.185607',
        ],
        [
          'population' => '217827',
          'rank' => '101',
          'place' => 'Tacoma, Washington',
          'lat' => '47.253671',
          'lng' => '-122.444335',
        ],
        [
          'population' => '215784',
          'rank' => '102',
          'place' => 'San Bernardino, California',
          'lat' => '34.104794',
          'lng' => '-117.29215',
        ],
        [
          'population' => '215196',
          'rank' => '103',
          'place' => 'Modesto, California',
          'lat' => '37.669463',
          'lng' => '-121.016796',
        ],
        [
          'population' => '214547',
          'rank' => '104',
          'place' => 'Fontana, California',
          'lat' => '34.103288',
          'lng' => '-117.4363',
        ],
        [
          'population' => '214237',
          'rank' => '105',
          'place' => 'Des Moines, Iowa',
          'lat' => '41.672687',
          'lng' => '-93.572173',
        ],
        [
          'population' => '213055',
          'rank' => '106',
          'place' => 'Moreno Valley, California',
          'lat' => '33.88274',
          'lng' => '-117.224878',
        ],
        [
          'population' => '212979',
          'rank' => '107',
          'place' => 'Santa Clarita, California',
          'lat' => '34.440891',
          'lng' => '-118.501748',
        ],
        [
          'population' => '211657',
          'rank' => '108',
          'place' => 'Fayetteville, North Carolina',
          'lat' => '35.0748',
          'lng' => '-78.884257',
        ],
        [
          'population' => '209403',
          'rank' => '109',
          'place' => 'Birmingham, Alabama',
          'lat' => '33.456412',
          'lng' => '-86.801904',
        ],
        [
          'population' => '208881',
          'rank' => '110',
          'place' => 'Oxnard, California',
          'lat' => '34.205247',
          'lng' => '-119.174092',
        ],
        [
          'population' => '205695',
          'rank' => '111',
          'place' => 'Rochester, New York',
          'lat' => '43.286024',
          'lng' => '-77.684264',
        ],
        [
          'population' => '201846',
          'rank' => '112',
          'place' => 'Port St. Lucie, Florida',
          'lat' => '27.312492',
          'lng' => '-80.313322',
        ],
        [
          'population' => '201013',
          'rank' => '113',
          'place' => 'Grand Rapids, Michigan',
          'lat' => '42.984226',
          'lng' => '-85.629101',
        ],
        [
          'population' => '200574',
          'rank' => '114',
          'place' => 'Huntsville, Alabama',
          'lat' => '34.718428',
          'lng' => '-86.556439',
        ],
        [
          'population' => '200567',
          'rank' => '115',
          'place' => 'Salt Lake City, Utah',
          'lat' => '40.756095',
          'lng' => '-111.900719',
        ],
        [
          'population' => '200490',
          'rank' => '116',
          'place' => 'Frisco, Texas',
          'lat' => '33.146336',
          'lng' => '-96.856347',
        ],
    ];

    public function rankOrdinal()
    {
        $ends = ['th','st','nd','rd','th','th','th','th','th','th'];

        if ((($this->rank % 100) >= 11) && (($this->rank % 100) <= 13)) {
            return 'th';
        } else {
            return $ends[$this->rank % 10];
        }
    }
}
