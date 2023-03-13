<?php
$os_labels = ['win'  => 'Windows',
              'mac' => 'Mac',
              'lin' => 'Linux'
];
// Define global variables
$processor_labels = ["0.0"  => 'Intel i5',
                    "300.0" => 'Intel i7',
                    "400.0" => 'AMD Ryzen'
];

$memory_labels = ["0.0" => '8gb',
"100.0" => '16gb',
"200.0" => '32gb' ,
"400.0" => '64gb',
"800.0" => '128gb'
];

$hd_labels = ["0.0" => '1 TB',
                "44.99" => '2TB',
                "109.99" => '4TB',
                "229.99" => '8TB',
                "279.99" => '10TB' 
];


$accessory_labels = ["69" => 'Backup Battery Pack',
"49.99"  => 'Wireless Mouse',
"79.0" => 'Webcam',
"69.0" => 'Headset',
"42.99" => 'Presentation Clicker' 
];


include('pageHeader.html');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("processformdata.php");
} else {
    include("registrationForm.php");
}
include('pageFooter.html');
?>
