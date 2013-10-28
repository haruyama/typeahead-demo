<?php

// If you want to prevent CSRF, you should check X-Requested-With header.
// But PHP build-in server doesn't offer the way to get HTTP headers.

$query = isset ($_GET ['q']) ? $_GET['q'] : '';

$STATES = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Dakota', 'North Carolina', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];

$states = [];
if (empty($query)) {
    $states = $STATES;
} else {
    $states = array_values(array_filter($STATES, function ($v) use (&$query) {
        return preg_match("/\A$query/ui", $v) === 1;
    }));
}

header('Content-Type: application/json;  charset=UTF-8');
print json_encode($states);

