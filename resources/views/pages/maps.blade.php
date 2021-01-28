@extends('layouts.app', ['page' => __('Maps'), 'pageSlug' => 'maps'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    Localização da FTX
                </div>
                    <div class="card-body">
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('js')
        <!-- Place this tag in your head or just before your close body tag. -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
            <script>
                $(document).ready(function () {
                    // Javascript method's body can be found in assets/js/demos.js
                    demo.initGoogleMaps();
                });
            </script>
    @endpush
