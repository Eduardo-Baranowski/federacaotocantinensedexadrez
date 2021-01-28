@extends('layouts.app', ['page' => __('Maps'), 'pageSlug' => 'maps'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    Google Maps
                </div>
                <?php header("Refresh:10;"); ?>


                <div class="container" style="color:white">
                    <?php foreach($trend as $trend) {?>

                    <?php $compra = 0; $venda = 0;?>
                    <h2 class="text-center"><?= $trend->time; ?></h2>

                    <?php $trend->ma5 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                    <?php $trend->ma10 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                    <?php $trend->ma20 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                    <?php $trend->ma50 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                    <?php $trend->ma100 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                    <?php $trend->ma200 == 'Venda' ? $venda = $venda + 16.6 : $compra = $compra + 16.6?>
                    <div class="container">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar"
                                 style="width:<?= $compra ?>%; background-color:green">
                                Compra
                            </div>
                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                 style="width:<?= $venda ?>%; background-color:red">
                                Venda
                            </div>
                        </div>
                    </div>
                    <?php }?>
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
