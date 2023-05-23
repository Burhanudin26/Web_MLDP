@extends('bar')
@section('style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	 <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

<style>
    #map{
        width: 100%;
        height: 400px;
    }
</style>
@endsection
@section('main')
<div class="section" style="background-color: rgb(191, 225, 255); min-height: 800px;">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                        <h1>Attendance Details</h1>
                    </div>
                    <div class="card-body" style="color: #000000;">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>{{ $attendance->name }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $attendance->status }}</td>
                            </tr>
                            <tr>
                                <th>Latitude</th>
                                <td>{{ $attendance->latitude }}</td>
                            </tr>
                            <tr>
                                <th>Longitude</th>
                                <td>{{ $attendance->longitude }}</td>
                            </tr>
                            <tr>
                                <th>Distance</th>
                                <td>{{ $attendance->distance }} km</td>
                            </tr>
                        </table>

                        <div id="map"></div>
                        <br><br>
                        <a href="{{ route('attendance.edit', $attendance) }}" class="btn btn-secondary">Edit</a>
                        <a href="{{ route('attendance.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var map = L.map('map').setView([{{ $attendance->latitude }}, {{ $attendance->longitude }}], 25);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([{{ $attendance->latitude }}, {{ $attendance->longitude }}]).addTo(map)
        .bindPopup('Lokasi presensi')
        .openPopup();

    </script>
@endsection