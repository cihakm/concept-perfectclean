<?php
$vacuumingFloorPeriod = !$_POST["vacuuming-floor-period"] ? 0 : $_POST["vacuuming-floor-period"];
$vacuumingFloorMinutes = !$_POST["vacuuming-floor-minutes"] ? 0 : $_POST["vacuuming-floor-minutes"];
$vacuumingCarpetPeriod = !$_POST["vacuuming-carpet-period"] ? 0 : $_POST["vacuuming-carpet-period"];
$vacuumingCarpetMinutes = !$_POST["vacuuming-carpet-minutes"] ? 0 : $_POST["vacuuming-carpet-minutes"];
$vacuumingMessPeriod = !$_POST["vacuuming-mess-period"] ? 0 : $_POST["vacuuming-mess-period"];
$vacuumingMessMinutes = !$_POST["vacuuming-mess-minutes"] ? 0 : $_POST["vacuuming-mess-minutes"];
$pet = $_POST["pet"];
$wipingPeriod = !$_POST["wiping-period"] ? 0 : $_POST["wiping-period"];
$wipingMinutes = !$_POST["wiping-minutes"] ? 0 : $_POST["wiping-minutes"];
$sweepPeriod = !$_POST["sweep-period"] ? 0 : $_POST["sweep-period"];
$sweepMinutes = !$_POST["sweep-minutes"] ? 0 : $_POST["sweep-minutes"];
$washingGapPeriod = !$_POST["washing-gap-period"] ? 0 : $_POST["washing-gap-period"];
$washingGapMinutes = !$_POST["washing-gap-minutes"] ? 0 : $_POST["washing-gap-minutes"];
$washingWindowPeriod = !$_POST["washing-window-period"] ? 0 : $_POST["washing-window-period"];
$washingWindowMinutes = !$_POST["washing-window-minutes"] ? 0 : $_POST["washing-window-minutes"];


$vacuumingFloor = $vacuumingFloorPeriod * $vacuumingFloorMinutes * 12;
$vacuumingCarpet = $vacuumingCarpetPeriod * $vacuumingCarpetMinutes * 12;
$vacuumingMess = $vacuumingMessPeriod * $vacuumingMessMinutes * 12;
$wiping = $wipingPeriod * $wipingMinutes * 12;
$sweep = $sweepPeriod * $sweepMinutes * 12;
$washingGap = $washingGapPeriod * $washingGapMinutes * 12;
$washingWindow = $washingWindowPeriod * $washingWindowMinutes;

$valuesArray = array($vacuumingFloor, $vacuumingCarpet, $vacuumingMess, $wiping, $sweep, $washingGap, $washingWindow);
$finalValues = array();

foreach ($valuesArray as $value) {
    if($value){
        array_push($finalValues,$value);

    }
}


if (empty($finalValues)) {
    echo json_encode(array("result" => false));
    exit;
} else {

    $cid = mysqli_connect("localhost", "root", "root", "concept") or die (mysqli_error());
    mysqli_query($cid, "INSERT INTO `calculation` (`vacuumingFloorPeriod`,`vacuumingFloorMinutes`,`vacuumingCarpetPeriod`,`vacuumingCarpetMinutes`,`vacuumingMessPeriod`,`vacuumingMessMinutes`,`pet`,`wipingPeriod`,`wipingMinutes`,`sweepPeriod`,`sweepMinutes`,`washingGapPeriod`,`washingGapMinutes`,`washingWindowPeriod`,`washingWindowMinutes`,`createDate`) VALUES ($vacuumingFloorPeriod,$vacuumingFloorMinutes,$vacuumingCarpetPeriod,$vacuumingCarpetMinutes,$vacuumingMessPeriod,$vacuumingMessMinutes,$pet,$wipingPeriod,$wipingMinutes,$sweepPeriod,$sweepMinutes,$washingGapPeriod,$washingGapMinutes,$washingWindowPeriod,$washingWindowMinutes, CURRENT_TIMESTAMP)") or die (mysqli_error($cid));
    $result = mysqli_affected_rows($cid);

    mysqli_close($cid);
    echo json_encode(array("result" => true, array("vacuumingFloor" => $vacuumingFloor, "vacuumingCarpet" => $vacuumingCarpet,
        "vacuumingMess" => $vacuumingMess, "wiping" => $wiping, "sweep" => $sweep, "washingGap" => $washingGap, "washingWindow" => $washingWindow, "pet" => $pet,
        "minutesCount" => $vacuumingFloor + $vacuumingCarpet + $vacuumingMess + ($wiping + $sweep + $washingGap + $washingWindow))
    ));

    exit;
}