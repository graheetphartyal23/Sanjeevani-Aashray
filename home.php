<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Service Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .service {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .service label {
            flex: 2;
            text-align: left;
            font-size: 18px;
            color: #333;
        }

        .counter {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .counter input[type="number"] {
            width: 60px;
            text-align: center;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin: 0 5px;
        }

        .counter button {
            background-color: #ff6f00;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .counter button:hover {
            background-color: #e65c00;
        }

        .dropdown {
            flex: 1;
        }

        .dropdown select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .update-btn {
            display: block;
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 10px 0;
            font-size: 18px;
            text-align: center;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        .update-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>AVAILABLE HOSPITAL SERVICES</h1>
        
        <!-- ICU Service -->
        <div class="service">
            <label for="icu">ICU</label>
            <div class="counter">
                <button onclick="decrease('icu')">-</button>
                <input type="number" id="icu" value="0" min="0">
                <button onclick="increase('icu')">+</button>
            </div>
        </div>

        <!-- Ventilators Service -->
        <div class="service">
            <label for="ventilators">Ventilators</label>
            <div class="counter">
                <button onclick="decrease('ventilators')">-</button>
                <input type="number" id="ventilators" value="0" min="0">
                <button onclick="increase('ventilators')">+</button>
            </div>
        </div>

        <!-- Oxygen Service -->
        <div class="service">
            <label for="oxygen">Oxygen</label>
            <div class="dropdown">
                <select id="oxygen">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>

        <!-- Beds Service -->
        <div class="service">
            <label for="beds">Beds</label>
            <div class="counter">
                <button onclick="decrease('beds')">-</button>
                <input type="number" id="beds" value="0" min="0">
                <button onclick="increase('beds')">+</button>
            </div>
        </div>

        <!-- Blood Bank Service -->
        <div class="service">
            <label for="bloodBank">Blood Bank</label>
            <div class="dropdown">
                <select id="bloodBank">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>

        <!-- Emergency Beds Service -->
        <div class="service">
            <label for="emergencyBeds">Emergency Beds</label>
            <div class="counter">
                <button onclick="decrease('emergencyBeds')">-</button>
                <input type="number" id="emergencyBeds" value="0" min="0">
                <button onclick="increase('emergencyBeds')">+</button>
            </div>
        </div>

        <!-- Update Button -->
        <button class="update-btn">Update</button>
    </div>

    <script>
        // Function to decrease value
        function decrease(id) {
            const input = document.getElementById(id);
            let currentValue = parseInt(input.value);
            if (currentValue > 0) {
                input.value = currentValue - 1;
            }
        }

        // Function to increase value
        function increase(id) {
            const input = document.getElementById(id);
            input.value = parseInt(input.value) + 1;
        }
    </script>

</body>
</html>
