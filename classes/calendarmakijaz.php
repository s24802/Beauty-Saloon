<!DOCTYPE html>
<html lang = "en">
<head>
    <link href="../styles/calendar.css" type="text/css" rel="stylesheet"/>
    <title>Terminy makijaż</title>
</head>
<body>
<?php
include 'Makijazkal.php';
include 'Makijaz.php';
include 'MakijazCell.php';


$booking = new Makijaz(
    'm29582_test',
    'mysql.ct8.pl',
    'm29582_ktpjatk',
    'Siema123'
);

$bookableCell = new MakijazCell($booking);

$calendar = new Makijazkal();

$calendar->attachObserver('showCell', $bookableCell);

$bookableCell->routeActions();

echo $calendar->show();
?>
</body>
</html>
