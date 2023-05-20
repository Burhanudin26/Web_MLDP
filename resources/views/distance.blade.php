<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distance Calculator</title>
</head>
<body>
  <h1>Distance Calculator</h1>
  <label for="latitude">Latitude:</label>
  <input type="text" id="latitude">
  <label for="longitude">Longitude:</label>
  <input type="text" id="longitude">
  <button onclick="calculateDistance()">Calculate Distance</button>
  <p id="result"></p>

  <script>
    // Get the user's current location when the page loads
window.onload = function() {
  getLocation();
};

// Function to get the user's current location
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, errorCallback);
  } else {
    console.log("Geolocation is not supported by this browser.");
  }
}

// Success callback function
function showPosition(position) {
  const userLatitude = position.coords.latitude;
  const userLongitude = position.coords.longitude;

  // Display the user's current location in the input fields
  const latitudeInput = document.getElementById("latitude");
  const longitudeInput = document.getElementById("longitude");
  latitudeInput.value = userLatitude;
  longitudeInput.value = userLongitude;
}

// Error callback function
function errorCallback(error) {
  console.log("Error occurred while retrieving location: " + error.message);
}

// Function to calculate the distance between two coordinates
function calculateDistance() {
  // Get the latitude and longitude values from the input fields
  const latitudeInput = document.getElementById("latitude");
  const longitudeInput = document.getElementById("longitude");
  const userLatitude = parseFloat(latitudeInput.value);
  const userLongitude = parseFloat(longitudeInput.value);

  // Define the reference point coordinates
  const referenceLatitude = -7.965195; // Provide the latitude of the reference point
  const referenceLongitude = 112.617081; // Provide the longitude of the reference point

  // Define the valid length limit in kilometers
  const validLengthLimit = 2; // 2 kilometers

  // Calculate the distance between the user's location and the reference point
  const distance = calculateDistanceBetweenCoordinates(userLatitude, userLongitude, referenceLatitude, referenceLongitude);

  // Check if the distance is within the valid length limit
  const isWithinValidLength = distance <= validLengthLimit;

  // Display the result
  const resultElement = document.getElementById("result");
  if (isWithinValidLength) {
    resultElement.textContent = "You're safe. Distance: " + distance.toFixed(2) + " km.";
  } else {
    resultElement.textContent = "You're in danger! Distance: " + distance.toFixed(2) + " km.";
  }
}

// Function to calculate the distance between two coordinates using the Haversine formula
function calculateDistanceBetweenCoordinates(lat1, lon1, lat2, lon2) {
  const R = 6371; // Radius of the Earth in kilometers
  const dLat = degToRad(lat2 - lat1);
  const dLon = degToRad(lon2 - lon1);
  const a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(degToRad(lat1)) * Math.cos(degToRad(lat2)) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  const distance = R * c;
  return distance;
}

// Function to convert degrees to radians
function degToRad(degrees) {
  return degrees * (Math.PI / 180);
}

  </script>
</body>
</html>
