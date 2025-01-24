<?php
// Start the session
session_start();

// Include the database connection
include('db.php');

// Check if user is logged in
if (!isset($_SESSION['hospital_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

// Fetch the hospital ID from the session
$hospital_id = $_SESSION['hospital_id'];

// Fetch the existing data for this hospital from the database
$sql = "SELECT * FROM hospital_services WHERE hospital_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $hospital_id);
$stmt->execute();
$result = $stmt->get_result();

$data = $result->fetch_assoc() ?: [
    'icu' => 0,
    'ventilators' => 0,
    'oxygen' => 'No',
    'beds' => 0,
    'blood_bank' => 'No',
    'emergency_beds' => 0
];
$stmt->close();
?>

<form action="update_services.php" method="post">
    <h3>AVAILABLE HOSPITAL SERVICES</h3>
    <label>ICU</label>
    <input type="number" name="icu" value="<?php echo $data['icu']; ?>" min="0">

    <label>Ventilators</label>
    <input type="number" name="ventilators" value="<?php echo $data['ventilators']; ?>" min="0">

    <label>Oxygen</label>
    <select name="oxygen">
        <option value="Yes" <?php if ($data['oxygen'] == 'Yes') echo 'selected'; ?>>Yes</option>
        <option value="No" <?php if ($data['oxygen'] == 'No') echo 'selected'; ?>>No</option>
    </select>

    <label>Beds</label>
    <input type="number" name="beds" value="<?php echo $data['beds']; ?>" min="0">

    <label>Blood Bank</label>
    <select name="blood_bank">
        <option value="Yes" <?php if ($data['blood_bank'] == 'Yes') echo 'selected'; ?>>Yes</option>
        <option value="No" <?php if ($data['blood_bank'] == 'No') echo 'selected'; ?>>No</option>
    </select>

    <label>Emergency Beds</label>
    <input type="number" name="emergency_beds" value="<?php echo $data['emergency_beds']; ?>" min="0">

    <button type="submit">Update</button>
</form>
