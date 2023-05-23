@extends('bar')

@section('main')

<div class="frame" style="background-color: rgb(191, 225, 255); min-height: 800px;">
  <div class="container-fluid p-3">
    <div class="row">
      <div class="col mb-4">
        <div class="card border-0 shadow-sm">
          <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff; mt-3">
            <h2>Create Attendance</h2>
          </div>
          <div class="card-body" style="color: #000000;">
            <form action="{{ route('attendance.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <br>
              <div class="form-group">
                <label for="status">Status:</label>
                <div class="radio-group">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="present" value="Present" required>
                    <label class="form-check-label" for="present">
                      Present
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="absent" value="Absent" required>
                    <label class="form-check-label" for="absent">
                      Absent
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="excuse" value="Excuse" required>
                    <label class="form-check-label" for="excuse">
                      Excuse
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="sick" value="Sick" required>
                    <label class="form-check-label" for="sick">
                      Sick
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" id="latitude" name="latitude" required>
                <input type="hidden" class="form-control" id="longitude" name="longitude" required>
                <input type="hidden" id="distance" name="distance">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </div>
            </form>
          </div>
          <!-- Modal -->
          <div id="errorModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <p id="errorMessage"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script>
      document.addEventListener("DOMContentLoaded", function() {
    // Check if the Geolocation API is supported
    if (navigator.geolocation) {
        // Request the user's geolocation
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    } else {
        showErrorModal("Geolocation is not supported by this browser.");
    }
});

function successCallback(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;

    // Populate latitude and longitude fields in the form
    document.getElementById("latitude").value = latitude;
    document.getElementById("longitude").value = longitude;

    // Calculate the distance between the location and a reference point
    var referenceLatitude = -7.963032735173668; // Replace with your reference latitude
    var referenceLongitude = 112.61813456779365; // Replace with your reference longitude

    var distance = calculateDistance(latitude, longitude, referenceLatitude, referenceLongitude);

    // Assign the calculated distance to the hidden input field
    document.getElementById("distance").value = distance;

    // Submit the form
    document.getElementById("attendanceForm").submit();
}

      function errorCallback(error) {
          var errorMessage = "Error retrieving location: " + error.message;
          showErrorModal(errorMessage);
      }

      function showErrorModal(errorMessage) {
          var modal = document.getElementById("errorModal");
          var modalContent = document.querySelector("#errorModal .modal-content");
          var closeBtn = document.querySelector("#errorModal .close");
          var errorMessageElement = document.getElementById("errorMessage");

          // Display the error message in the modal
          errorMessageElement.textContent = errorMessage;

          // Show the modal
          modal.style.display = "block";

          // Close the modal when the close button is clicked
          closeBtn.addEventListener("click", function() {
              modal.style.display = "none";
          });

          // Close the modal when the user clicks anywhere outside the modal content
          window.addEventListener("click", function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          });
      }
      function calculateDistance(lat1, lon1, lat2, lon2) {
      const earthRadius = 6371; // Radius of the Earth in kilometers
      const dLat = toRadians(lat2 - lat1);
      const dLon = toRadians(lon2 - lon1);

      const a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(toRadians(lat1)) *
          Math.cos(toRadians(lat2)) *
          Math.sin(dLon / 2) *
          Math.sin(dLon / 2);
      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      const distance = earthRadius * c;

      return distance;
    }

    function toRadians(degrees) {
      return degrees * (Math.PI / 180);
    }

  </script>
{{-- <script>
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

  // Update the status field based on the distance
  const statusInput = document.querySelector('input[name="status"]:checked');
  if (statusInput && !isWithinValidLength) {
    statusInput.value = "Invalid";
  }

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

  </script> --}}
@endsection