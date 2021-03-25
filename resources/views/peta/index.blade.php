@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
   integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
   crossorigin=""/>
   <style type="text/css">
       #mapid {width: 110%; height: 800px; }
   </style>
    <section class="content-header">
        <h1 class="pull-left">Peta Lokasi Kejahatan</h1>
    </section>
    <br>  
    <div class="content">
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div id="mapid"></div>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
     <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
   integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
   crossorigin=""></script>
   <!--   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script> -->
      <script type="text/javascript">
        

        var mymap = L.map('mapid').setView([-0.534746,117.1253896],8);

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
               attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(mymap);

                var circle = L.circle([-0.534746,117.1253896], {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5,
                    radius: 500
                }).addTo(mymap);    
                 <?php foreach ($lokasi as $item ): ?>
                    var circle = L.circle([<?php echo $item->latitude?>,<?php echo $item->longtitude?>], {
                        color: 'red',
                        fillColor: '#f03',
                        fillOpacity: 0.5,
                        radius: 500
                    }).addTo(mymap);
                <?php endforeach ?>
                var popup = L.popup();

              function onMapClick(e) {
                popup
                  .setLatLng(e.latlng)
                  .setContent("You clicked the map at " + e.latlng.toString())
                  .openOn(mymap);
              }

              mymap.on('click', onMapClick);


              </script>

@endsection

