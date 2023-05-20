<!-- resources/views/attendance/create.blade.php -->
{{-- @extends('bar')

@section('main')
    <div class="container">
        <h2>Add Attendance</h2>
        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection --}}
<!-- resources/views/attendance/create.blade.php -->
{{-- @extends('bar')

@section('main')
    <div class="container">
        <h2>Create Attendance</h2>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection --}}
<!-- resources/views/attendance/create.blade.php -->
@extends('bar')

@section('main')

    <div class="container">
        <h2>Create Attendance</h2>
        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>


    <script>
      // Define the reference point coordinates
      const referenceLatitude = -7.965195 /* Provide the latitude of the reference point */;
      const referenceLongitude =  112.617081/* Provide the longitude of the reference point */;
    
      // Define the valid length limit in kilometers
      const validLengthLimit = 2; // 2 kilometers
    
      // Get the location when the page loads
      window.onload = function () {
        getLocation();
      };
    
      // Function to get the user's location
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
    
        // Check if the distance between the user's location and the reference point is within the valid length limit
        const isWithinValidLength = checkIfWithinValidLength(userLatitude, userLongitude);
    
        if (isWithinValidLength) {
          // User's location is within the valid length limit
          const locationInput = document.getElementById('location');
          locationInput.value = `${userLatitude}, ${userLongitude}`;
        } else {
          // User's location is outside the valid length limit
          console.log("User is outside the valid length limit.");
          // Optionally, display an error message to the user
        }
      }
    
      // Error callback function
      function errorCallback(error) {
        console.log("Error occurred while retrieving location: " + error.message);
      }
    
      // Function to check if the distance between the user's location and the reference point is within the valid length limit
      function checkIfWithinValidLength(latitude, longitude) {
        const distance = calculateDistance(latitude, longitude, referenceLatitude, referenceLongitude);
        return distance <= validLengthLimit;
      }
    
      // Function to calculate the distance between two coordinates using the Haversine formula
      function calculateDistance(lat1, lon1, lat2, lon2) {
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
    

       {{-- <script>
        // Get the location when the page loads
        window.onload = function() {
            getLocation();
        };

        // Function to get the user's location
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        // Function to display the user's position
        function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            const locationInput = document.getElementById('location');
            locationInput.value = `${latitude}, ${longitude}`;
        }
    </script> --}}


    @endsection