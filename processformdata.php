<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

    h1, table {
      margin: 0 auto;
    }

    h1 {
        background-color: #D3D3D3;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #333;
  }

    h3 {
      text-align: center;
    }

    table {
      width: 30%;
      border-collapse: collapse;
      margin: 0 auto;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #333;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #e6e6e6;
    }

  </style>
</head>
</html>
<?php
// Define variables for input and assign values
$name = readPostValue('fullname');
$email = readPostValue('email');
$accessories = readPostValue('accessories');
$harddisk = readPostValue('harddisk');
$memory = readPostValue('memory');
$processor = readPostValue('processor');
$operatingsystem = readPostValue('os');
$comments = readPostValue('comments');

// Define an array to store error messages
$errors = [];


/* If the name is empty, then display an error message */
if (!$name || trim($name) === '') {
    $errors[] = "<p>Name cannot be empty! </p>";
}

if (!$email || trim($email) === '') {
    $errors[] = "<p>Email cannot be empty! </p>";
}


if ($operatingsystem) {
        $osLabel = $os_labels[$operatingsystem];  // Read the corresponding label
} else {
    $errors[] = "<p>Please select your operating system</p>";
}

if (isset($hd_labels[$harddisk])) {
    $harddiskLabel = $hd_labels[$harddisk];
} else {
    $errors[] = "<p>Invalid hard disk selection!</p>";
}

if (isset($processor_labels[$processor])) {
    $processorLabel = $processor_labels[$processor];
} else {
    $errors[] = "<p>Invalid processor selection!</p>";
}
if (isset($memory_labels[$memory])) {
    $memoryLabel = $memory_labels[$memory];
} else {
    $errors[] = "<p>Invalid memory selection!</p>";
}


$allAccessories = [];
$num_checked = ($accessories) ? count($accessories) : 0;
if ($num_checked > 0) {
    foreach($accessories as $hour) {
        $allAccessories[] = $accessory_labels[$hour];
    }
}
$allAccessoriesPrice = [];
$num_checked = ($accessories) ? count($accessories) : 0;
if ($num_checked > 0) {
    foreach($accessories as $hour) {
        $allAccessoriesPrice[] = $hour;
    }
}


// Check if available hours is empty
$num_hours = count($allAccessories);
if ($num_hours === 0) {
     $allAccessories = "";
}

if (count($errors) > 0) {
    displayErrors($errors);
} else {
    displayResult($name, $email, $osLabel, $processorLabel, $memoryLabel, $harddiskLabel, $allAccessories, $comments, $processor, $memory, $harddisk, $allAccessoriesPrice);
}


function displayErrors($errors) {
    if (count($errors) === 0 ) {
        return;
    }
    foreach($errors as $e) {
        echo $e;
    }
    // Include a link to go back to the HTML form
    echo "<p><a href='index.php'>Back to the HTML Form</a></p>";
}

function displayResult($nameLabel, $emailLabel, $operatingsystemLabel, $processorLabel, $memoryLabel, $harddiskLabel, $allAccessories, $commentsLabel, $processor, $memory, $harddisk, $allAccessoriesPrice) {
    echo "<h1>Online Order</h1>";
    echo "<h3>Your Information</h3>";
    echo "<table><tr>";
    echo "<td>Name: </td><td>{$nameLabel}</td>";
    echo "</tr>";
    echo "<tr><td>Email:</td><td>{$emailLabel}</td></tr>";
    echo "<tr><td>Comments: </td><td>{$commentsLabel}</td></tr>";
    echo "</table>";
    $totalCost = 800;
    $totalCost += $processor + $harddisk + $memory;
    echo "<h3>Your Selected System</h3>";
    echo "<table><tr>";
    echo "<tr><td>Operating System:</td><td>{$operatingsystemLabel}</td></tr>";
    echo "<tr><td>Processor:</td><td>{$processorLabel}</td></tr>";
    echo "<tr><td>Memory:</td><td>{$memoryLabel}</td></tr>";
    echo "<tr><td>Storage:</td><td>{$harddiskLabel}</td></tr>";
    echo "<tr><td>Accessories:</td><td>";

    if (is_array($allAccessories) && count($allAccessories) > 0) {
        foreach($allAccessories as $accessory_label){
            echo $accessory_label."<br>";
        }
        
    } else {
        echo "None";
    }
    if (is_array($allAccessoriesPrice) && count($allAccessoriesPrice) > 0) {
        foreach($allAccessoriesPrice as $p){
            $totalCost += floatval($p);
        }
    }

    
    echo "</td></tr>";
    echo "</table>";

    echo "<h3>Invoice</h3>";
    echo "<table><tr>";
    
    echo "<tr><td>Total Cost: </td><td>{$totalCost}</td></tr>";
    $taxes = $totalCost * .05;
    $taxes = number_format($taxes, 2);
    echo "<tr><td>5% Taxes: </td><td>{$taxes}</td></tr>";
    $totalAmount = $taxes + $totalCost;
    $totalAmount = number_format($totalAmount, 2);
    echo "<tr><td>Total Amount: </td><td>{$totalAmount}</td></tr>";
    echo "</td></tr>";
    echo "</table>";
}


function readPostValue($key) {
    /*  Use the $_POST variable to access data sent using the POST method
        If the $_POST[$key] exists, then return its value. Otherwise, return false.
    */
    if (isset($_POST[$key]) ){
        return $_POST[$key];
    }
    return false;
}
?>
