<?php

// Simulating get data from database
$rowArr = [];

// Put all keys/values in $_GET
//print_r($_GET);
print_r($_POST);

if (isset($_GET)) {
    if ($_GET['action'] === 'MemList') {
        $rowArr = MemList();
    } elseif ($_GET['action'] === 'MemGet') {
        $MemID = $_GET['MemID'];

        $rowArr = MemGet($MemID);
    }
}

$out = json_encode($rowArr);

echo $out;

function MemList() {
    $rowArr = [];

    $rowArr[] = [
        'MemberID' => 5,
        'Name' => 'Bot 5',
        'Email' => 'Bot1@example.com',
    ];

    $rowArr[] = [
        'MemberID' => 6,
        'Name' => 'Bot 6',
        'Email' => 'Bot1@example.com',
    ];

    return $rowArr;
}

function MemGet($MemID) {
    // Query from database

    $rowArr[] = [
        'MemberID' => $MemID,
        'Name' => 'Bot ' . $MemID,
        'Email' => 'Bot1@example.com',
    ];

    return $rowArr;
}
