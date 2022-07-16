@extends('dashboard.layouts.main')

@section('title')
    Peta
@endsection

@push('style')
    <style>
        .btn-delete {
            cursor: pointer;
        }

        .btn-upload {
            cursor: pointer;
        }

        #map {
            height: 400px;
        }
    </style>
@endpush

@section('breadcrumb')
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Peta</a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Data Peta</div>
                        <div class="card-tools">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var center = [-1.420682, 119.9266548];

        var map = L.map("map").setView(center, 9);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
            maxZoom: 18,
        }).addTo(map);

        var arrayMarker = [
            [-1.206824, 119.8112089],
            [-1.706824, 119.8582089],
            [-1.106824, 119.8412089],
            [-1.306824, 119.8312089],
            [-1.406824, 119.8912089]
        ];

        arrayMarker.map(marker => {
            L.marker(marker).addTo(map);
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#peta').addClass('active');
        })
    </script>
@endpush
