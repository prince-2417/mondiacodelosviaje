<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$API_KEY = '5b31b118cad565fcb92cd14c0630d3b159dd04760fb10e6f644adb1670ef4f1b';
$action = $_GET['action'] ?? '';

function serpFetch($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true) ?? [];
}

if ($action === 'airports') {
    $q = trim($_GET['q'] ?? '');
    if (!$q) { echo '[]'; exit; }

    $all = [
        ['id'=>'YJF','name'=>'Fort Liard Airport','city'=>'Fort Liard'],
        ['id'=>'WJF','name'=>'William J Fox Airport','city'=>'Lancaster'],
        ['id'=>'JFK','name'=>'John F. Kennedy International','city'=>'New York'],
        ['id'=>'LGA','name'=>'LaGuardia Airport','city'=>'New York'],
        ['id'=>'EWR','name'=>'Newark Liberty International','city'=>'New York'],
        ['id'=>'LAX','name'=>'Los Angeles International','city'=>'Los Angeles'],
        ['id'=>'ORD','name'=>"O'Hare International",'city'=>'Chicago'],
        ['id'=>'MDW','name'=>'Midway International','city'=>'Chicago'],
        ['id'=>'ATL','name'=>'Hartsfield-Jackson Atlanta International','city'=>'Atlanta'],
        ['id'=>'DFW','name'=>'Dallas/Fort Worth International','city'=>'Dallas'],
        ['id'=>'DEN','name'=>'Denver International','city'=>'Denver'],
        ['id'=>'SFO','name'=>'San Francisco International','city'=>'San Francisco'],
        ['id'=>'SEA','name'=>'Seattle-Tacoma International','city'=>'Seattle'],
        ['id'=>'MIA','name'=>'Miami International','city'=>'Miami'],
        ['id'=>'BOS','name'=>'Logan International','city'=>'Boston'],
        ['id'=>'LAS','name'=>'Harry Reid International','city'=>'Las Vegas'],
        ['id'=>'PHX','name'=>'Phoenix Sky Harbor International','city'=>'Phoenix'],
        ['id'=>'IAH','name'=>'George Bush Intercontinental','city'=>'Houston'],
        ['id'=>'HOU','name'=>'William P. Hobby Airport','city'=>'Houston'],
        ['id'=>'MSP','name'=>'Minneapolis-Saint Paul International','city'=>'Minneapolis'],
        ['id'=>'DTW','name'=>'Detroit Metropolitan Wayne County','city'=>'Detroit'],
        ['id'=>'PHL','name'=>'Philadelphia International','city'=>'Philadelphia'],
        ['id'=>'CLT','name'=>'Charlotte Douglas International','city'=>'Charlotte'],
        ['id'=>'MCO','name'=>'Orlando International','city'=>'Orlando'],
        ['id'=>'BWI','name'=>'Baltimore/Washington International','city'=>'Baltimore'],
        ['id'=>'DCA','name'=>'Ronald Reagan Washington National','city'=>'Washington'],
        ['id'=>'IAD','name'=>'Washington Dulles International','city'=>'Washington'],
        ['id'=>'SAN','name'=>'San Diego International','city'=>'San Diego'],
        ['id'=>'TPA','name'=>'Tampa International','city'=>'Tampa'],
        ['id'=>'PDX','name'=>'Portland International','city'=>'Portland'],
        ['id'=>'STL','name'=>'St. Louis Lambert International','city'=>'St. Louis'],
        ['id'=>'BNA','name'=>'Nashville International','city'=>'Nashville'],
        ['id'=>'AUS','name'=>'Austin-Bergstrom International','city'=>'Austin'],
        ['id'=>'MCI','name'=>'Kansas City International','city'=>'Kansas City'],
        ['id'=>'RDU','name'=>'Raleigh-Durham International','city'=>'Raleigh'],
        ['id'=>'SLC','name'=>'Salt Lake City International','city'=>'Salt Lake City'],
        ['id'=>'SMF','name'=>'Sacramento International','city'=>'Sacramento'],
        ['id'=>'SJC','name'=>'Norman Y. Mineta San Jose International','city'=>'San Jose'],
        ['id'=>'OAK','name'=>'Oakland International','city'=>'Oakland'],
        ['id'=>'MEM','name'=>'Memphis International','city'=>'Memphis'],
        ['id'=>'PIT','name'=>'Pittsburgh International','city'=>'Pittsburgh'],
        ['id'=>'CLE','name'=>'Cleveland Hopkins International','city'=>'Cleveland'],
        ['id'=>'IND','name'=>'Indianapolis International','city'=>'Indianapolis'],
        ['id'=>'HNL','name'=>'Daniel K. Inouye International','city'=>'Honolulu'],
        ['id'=>'ANC','name'=>'Ted Stevens Anchorage International','city'=>'Anchorage'],
        ['id'=>'LHR','name'=>'Heathrow Airport','city'=>'London'],
        ['id'=>'LGW','name'=>'Gatwick Airport','city'=>'London'],
        ['id'=>'CDG','name'=>'Charles de Gaulle Airport','city'=>'Paris'],
        ['id'=>'ORY','name'=>'Orly Airport','city'=>'Paris'],
        ['id'=>'AMS','name'=>'Amsterdam Airport Schiphol','city'=>'Amsterdam'],
        ['id'=>'FRA','name'=>'Frankfurt Airport','city'=>'Frankfurt'],
        ['id'=>'MAD','name'=>'Adolfo Suarez Madrid-Barajas','city'=>'Madrid'],
        ['id'=>'BCN','name'=>'Barcelona-El Prat Airport','city'=>'Barcelona'],
        ['id'=>'FCO','name'=>'Leonardo da Vinci International','city'=>'Rome'],
        ['id'=>'MXP','name'=>'Milan Malpensa Airport','city'=>'Milan'],
        ['id'=>'ZRH','name'=>'Zurich Airport','city'=>'Zurich'],
        ['id'=>'VIE','name'=>'Vienna International Airport','city'=>'Vienna'],
        ['id'=>'BRU','name'=>'Brussels Airport','city'=>'Brussels'],
        ['id'=>'CPH','name'=>'Copenhagen Airport','city'=>'Copenhagen'],
        ['id'=>'ARN','name'=>'Stockholm Arlanda Airport','city'=>'Stockholm'],
        ['id'=>'OSL','name'=>'Oslo Gardermoen Airport','city'=>'Oslo'],
        ['id'=>'HEL','name'=>'Helsinki-Vantaa Airport','city'=>'Helsinki'],
        ['id'=>'DXB','name'=>'Dubai International Airport','city'=>'Dubai'],
        ['id'=>'AUH','name'=>'Abu Dhabi International Airport','city'=>'Abu Dhabi'],
        ['id'=>'DOH','name'=>'Hamad International Airport','city'=>'Doha'],
        ['id'=>'SIN','name'=>'Singapore Changi Airport','city'=>'Singapore'],
        ['id'=>'HKG','name'=>'Hong Kong International Airport','city'=>'Hong Kong'],
        ['id'=>'NRT','name'=>'Narita International Airport','city'=>'Tokyo'],
        ['id'=>'HND','name'=>'Haneda Airport','city'=>'Tokyo'],
        ['id'=>'ICN','name'=>'Incheon International Airport','city'=>'Seoul'],
        ['id'=>'PEK','name'=>'Beijing Capital International','city'=>'Beijing'],
        ['id'=>'PVG','name'=>'Shanghai Pudong International','city'=>'Shanghai'],
        ['id'=>'BOM','name'=>'Chhatrapati Shivaji Maharaj International','city'=>'Mumbai'],
        ['id'=>'DEL','name'=>'Indira Gandhi International Airport','city'=>'Delhi'],
        ['id'=>'SYD','name'=>'Sydney Kingsford Smith Airport','city'=>'Sydney'],
        ['id'=>'MEL','name'=>'Melbourne Airport','city'=>'Melbourne'],
        ['id'=>'YYZ','name'=>'Toronto Pearson International','city'=>'Toronto'],
        ['id'=>'YVR','name'=>'Vancouver International Airport','city'=>'Vancouver'],
        ['id'=>'YUL','name'=>'Montreal-Trudeau International','city'=>'Montreal'],
        ['id'=>'MEX','name'=>'Mexico City International Airport','city'=>'Mexico City'],
        ['id'=>'GRU','name'=>'Sao Paulo-Guarulhos International','city'=>'Sao Paulo'],
        ['id'=>'EZE','name'=>'Ministro Pistarini International','city'=>'Buenos Aires'],
        ['id'=>'BOG','name'=>'El Dorado International Airport','city'=>'Bogota'],
        ['id'=>'LIM','name'=>'Jorge Chavez International Airport','city'=>'Lima'],
        ['id'=>'SCL','name'=>'Arturo Merino Benitez International','city'=>'Santiago'],
        ['id'=>'JNB','name'=>'O.R. Tambo International Airport','city'=>'Johannesburg'],
        ['id'=>'CAI','name'=>'Cairo International Airport','city'=>'Cairo'],
        ['id'=>'NBO','name'=>'Jomo Kenyatta International','city'=>'Nairobi'],
        ['id'=>'IST','name'=>'Istanbul Airport','city'=>'Istanbul'],
        ['id'=>'ATH','name'=>'Athens International Airport','city'=>'Athens'],
        ['id'=>'LIS','name'=>'Humberto Delgado Airport','city'=>'Lisbon'],
        ['id'=>'MUC','name'=>'Munich Airport','city'=>'Munich'],
        ['id'=>'BKK','name'=>'Suvarnabhumi Airport','city'=>'Bangkok'],
        ['id'=>'KUL','name'=>'Kuala Lumpur International Airport','city'=>'Kuala Lumpur'],
        ['id'=>'CGK','name'=>'Soekarno-Hatta International Airport','city'=>'Jakarta'],
        ['id'=>'MNL','name'=>'Ninoy Aquino International Airport','city'=>'Manila'],
    ];

    $results = array_filter($all, function($a) use ($q) {
        return stripos($a['id'], $q) !== false
            || stripos($a['name'], $q) !== false
            || stripos($a['city'], $q) !== false;
    });

    echo json_encode(array_values($results));
    exit;
}

if ($action === 'search') {
    $origin = trim($_GET['origin'] ?? '');
    $dest   = trim($_GET['dest'] ?? '');
    $depart = trim($_GET['depart'] ?? '');
    $ret    = trim($_GET['return'] ?? '');
    $type   = intval($_GET['type'] ?? 1);

    if (!$origin || !$dest || !$depart) { echo json_encode(['error' => 'Missing params']); exit; }

    $url = 'https://serpapi.com/search.json?engine=google_flights'
         . '&departure_id=' . urlencode($origin)
         . '&arrival_id='   . urlencode($dest)
         . '&outbound_date=' . urlencode($depart)
         . '&type=' . $type
         . '&currency=USD&hl=es'
         . '&api_key=' . $API_KEY;

    if ($type === 1 && $ret) {
        $url .= '&return_date=' . urlencode($ret);
    }

    $data = serpFetch($url);
    echo json_encode($data);
    exit;
}

echo json_encode(['error' => 'Invalid action']);
