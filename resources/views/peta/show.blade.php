@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
  <style>
    
  </style>
   <title>SIG DARATAN | Peta</title>

</head>
<body>

@section('content')
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
   integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
   crossorigin=""/>
  
  
  <section class="content-header">
        <h1 class="pull-left">Peta Lokasi Kejahatan</h1>
  </section>
    <br>  
    
  <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
   integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
   crossorigin=""></script>
   

<!DOCTYPE html>
<html lang="en">
                
    <html lang="{{ app()->getLocale() }}">
        <head>
            <link rel="stylesheet" href="{{asset('leaflet/leaflet.css')}}" />
            <link rel="stylesheet" href="{{asset('src/leaflet-search.css')}}" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.css" integrity="sha512-qm+jY0iQ4Xf5RL79UB75REDLYD0jtvxxVZp2RVIW8sm8RNiHdeN43oksqUPrBIshJtQcVPrAL08ML2Db8fFZiA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://labs.easyblog.it/maps/leaflet-compass/src/leaflet-compass.css">


            <style>
            #map {
                width: 1024px;
                height: 720px;
                max-width: 100vw;
                max-height: 75vh;
                padding: 0;
                margin-top: 0;
            }
            .legenda-tanam-kota {
                width: 15px;
                height: 13px;
                display: inline-block;
              }
            .semak_belukar{
               background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAFUlEQVQYV2NkQAOMRAn8Z2BggKsEAA3qAQXsNBkiAAAAAElFTkSuQmCC) 
               repeat, #FF7F50 ;
            }
            .sawah{
               background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAJUlEQVQYV2NkwAT/GdHE/jMwMDAiC4IFQIpggjABuEq4CqhR/wEbSQcEChQUOwAAAABJRU5ErkJggg==
               ) repeat, #008080;
            }
            .rawa{
               background:url(
            data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAN0lEQVQoU2NkIAIwEqHmPyFF/xkYGBgJKQJbhEsR2ASYU7ApQlGAzyQU/yCbhGECunU4FYAUAgBp4wYJ31jKswAAAABJRU5ErkJggg==
               ) repeat, #778899;
            }       

        </style>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        </head>
        <body>

        <div class="container-fluid">
          <div class="row">
          
            <div class="col-12">
                <div id="map"></div>
                <script src="{{asset('jquery-3.1.1.min.js')}}"></script>
                <script src="{{asset('leaflet/leaflet.js')}}"></script>
                <script src="{{asset('src/leaflet-search.js')}}"></script>
                <script src="{{asset('jquery-3.1.1.min.js')}}"></script>
                <script src="{{asset('leaflet/leaflet.js')}}"></script>
                <script src="{{asset('src/leaflet-search.js')}}"></script>
              </div>
            </div>
    <div class="row" style="margin-top: 30px">
        <div class="col-12">Keterangan : </div>
          <div class="col-12">
           <ul class="list-group" id="get_data" style="max-height: 720px; overflow-y: auto; overflow-x: hidden"></ul>

        </div>
            </div>
          </div>

          <script src="https://labs.easyblog.it/maps/leaflet-compass/dist/leaflet-compass.min.js"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.js" integrity="sha512-WL3nAJlWFKoDShduxQRyY3wkBnQsINXdIfWIW48ZaPgYz1wYNnxIwFMMgigzSgjNBC2WWZ8Y8/sSyUU6abuF0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

          <script src="{{asset('js/leaflet-polygon.fillPattern.js')}}"></script>
  <script>

  @foreach(\App\Models\File::all() as $page)

// pemanggil peta   
  <?php
    
    $url=file_get_contents(public_path('storage/'.$page->path));
    echo($page->nama."=".$url);
  
  ?>
  
  <?php 
    
    $data = json_encode($url ?? ''); 
  
  ?>
  @endforeach


tdk_penerangan_jrg_pemukiman.features.forEach(function(feature){
  
  feature.properties.Name="tpjp";

});

// cek bentuk data
     console.log([ada_lampu_tdk_nyala,ada_penerangan_ada_pemukiman,ada_penerangan_jrg_pemukiman,tdk_nyala_jrg_pemukiman,tdk_penerangan_jrg_pemukiman,tdkada_penerangan_ada_pemukiman,tdkada_penerangan_tdkada_pemukiman1, batas_wil_smd_seberang1]);

// pemanggil fungsi get data
    getData(data2019.features);

// PEWARNAAN TITIK PADA PETA
     var geojsonMarkerOptions = {
       radius: 6,
       fillColor: "green",
       color: "green",
       weight: 1,
       opacity: 1,
       fillOpacity: 0.8
     };
     var geojsonMarkerOptions1 = {
       radius: 6,
       fillColor: "red",
       color: "red",
       weight: 1,
       opacity: 1,
       fillOpacity: 0.8
     };
     var geojsonMarkerOptions2 = {
       radius: 6,
       fillColor: "blue",
       color: "blue",
       weight: 1,
       opacity: 1,
       fillOpacity: 0.8
     };
     var geojsonMarkerOptions3 = {
       radius: 6,
       fillColor: "yellow",
       color: "yellow",
       weight: 1,
       opacity: 1,
       fillOpacity: 0.8
     };

//Pewarnaan Line
     var ada_lampu_tdk_nyala1 = {
      "color" :"#CD5C5C", //IndianRed
      "weight":"5",
      "opacity":0.65
     };

     var ada_penerangan_ada_pemukiman1 = {
      "color" :"#FF1493", //DeepPink  
      "weight":"5",
      "opacity":0.65
     };

     var ada_penerangan_jrg_pemukiman1 = {
      "color" :"#8B4513",//SaddleBrown  
      "weight":"5",
      "opacity":0.65
     };
     
     var tdk_nyala_jrg_pemukiman1 = {
      "color" :"#000080", //navy
      "weight":"5",
      "opacity":0.65
     };
     
     var tdk_penerangan_jrg_pemukiman1 = {
      "color" :"#2F4F4F", //DarkSlateGray 
      "weight":"5",
      "opacity":0.65
     };
     
     var tdkada_penerangan_ada_pemukiman1 = {
      "color" :"#000000", //hitam
      "weight":"5",
      "opacity":0.65
     };
     
     var tdkada_penerangan_tdkada_pemukiman = {
      "color" :"#800080", //Purple  
      "weight":"5",
      "opacity":0.65
     };
     var batas_wil_smd_seberang1 ={
       "color" :"#808000",
      "weight":"5",
      "opacity":0.65
     }
     var tutupan_lahan_fix1 ={
       "color" :"#9E1F13", //coklat bata
      "weight":"5",
      "opacity":0.65
     }


  function batas_kecamatan (feature) {
    var warna={
      "fillColor" :"#808000",
      "color" :"#808000",
      "weight":"5",
      "fillOpacity":0

      };
      
      if(feature.properties.NAMOBJ=="SAMARINDA SEBERANG"){
         warna.color = "#D928C9" //ungu
         return warna;
       }
        else{
         warna.color ="#998E0A" //hijau butek
        return warna;
     }
   }

   function tutupan_lahan (feature) {
    var warna1={
      "fillColor" :"#8A2BE2", //Blue Violet 
      "color" :" #ffffff",
      "weight":"1",
      "fillOpacity":0.65,
      "fill" : "solid"

      };
      
      if(feature.properties.T_Lahan_12=="Permukiman"){
         warna1.fillColor = "#D2691E" //Chocolate  
         return warna1;
       }
        else if(feature.properties.T_Lahan_12=="Semak Belukar"){
         warna1.fillColor ="#FF7F50" //Coral 
         warna1.fill= "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAFUlEQVQYV2NkQAOMRAn8Z2BggKsEAA3qAQXsNBkiAAAAAElFTkSuQmCC)";
        return warna1;
       }
       else if(feature.properties.T_Lahan_12=="Sawah"){
           warna1.fillColor = "#008080" //Teal
           warna1.fill="url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAJUlEQVQYV2NkwAT/GdHE/jMwMDAiC4IFQIpggjABuEq4CqhR/wEbSQcEChQUOwAAAABJRU5ErkJggg==)"; 
          return warna1;
       }
       else if(feature.properties.T_Lahan_12=="Rawa"){
           warna1.fillColor ="#778899" //Light Slate Gray
           warna1.fill="url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAN0lEQVQoU2NkIAIwEqHmPyFF/xkYGBgJKQJbhEsR2ASYU7ApQlGAzyQU/yCbhGECunU4FYAUAgBp4wYJ31jKswAAAABJRU5ErkJggg==)"; 
          return warna1;
       }
       else if(feature.properties.T_Lahan_12=="Hutan Rakyat"){
           warna1.fillColor ="#7FFF00" //Chartreuse 
          return warna1;
       }
       else if(feature.properties.T_Lahan_12=="Perkebunan"){
           warna1.fillColor ="#006400" //Dark Green
          return warna1;
       }
       else {
           warna1.fillColor="#9ACD32" //Yellow Green 
          return warna1;
       }
       
     }



// POP UP PETA
     function onEachFeature(feature, layer) {     
      
      layer.bindPopup('<br> Peristiwa : <b>'+feature.properties.Peristiwa.toString()).openPopup();    
     }

//munculkan peta
     var map = L.map('map').setView([-0.5521802589467355, 117.11963572862538],12);

     map.addControl( new L.Control.Compass({position: 'bottomleft', autoActive: true}) );
     
     var titelayer=L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
               attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> Anisa Sundarti'
             }).addTo(map);

     var titelayer1=L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
               attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> Anisa Sundarti'
             });

    var mapLink = '<a href="http://www.esri.com/">Esri Anisa Sundarti</a>';
    var wholink = 'i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community';

     var satelite=L.tileLayer(
        'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: '&copy; '+mapLink+', '+wholink,
        maxZoom: 18,
        });

// LEGEND PETA              
function pointToLayer (feature, latlng) {
          if(feature.properties.Jenis_Keja==1) {
            return L.circleMarker(latlng, geojsonMarkerOptions);
          }
          else if(feature.properties.Jenis_Keja==2) {
            return L.circleMarker(latlng, geojsonMarkerOptions1);
          }
          else if (feature.properties.Jenis_Keja==3){
            return L.circleMarker(latlng, geojsonMarkerOptions2);
          }
          else {
            return L.circleMarker(latlng, geojsonMarkerOptions3);
          }    
}

//Layer Data Peta
  var dataLayer2019=L.geoJSON(data2019, {      
      onEachFeature:onEachFeature,
      pointToLayer: pointToLayer
  });

  var dataLayer2020=L.geoJSON(data2020, {
      onEachFeature:onEachFeature,
      pointToLayer: pointToLayer
  });
    
  var dataLayerLampu1=L.geoJSON([ada_lampu_tdk_nyala,ada_penerangan_ada_pemukiman,ada_penerangan_jrg_pemukiman,tdk_nyala_jrg_pemukiman,tdk_penerangan_jrg_pemukiman,tdkada_penerangan_ada_pemukiman,tdkada_penerangan_tdkada_pemukiman1], { 
    style : function (feature){

        if (feature.properties.Name =="TDKN?ALA" || feature.properties.Name == "TDKNYAL"){
            console.log(feature.properties.Name);
            return ada_lampu_tdk_nyala1;

        }else if(feature.properties.Name=="ADAPNR"){
          console.log(feature.properties.Name);
            return ada_penerangan_ada_pemukiman1;
        }
        else if(feature.properties.Name=="ADAPNRTDKPMKN"){
          console.log(feature.properties.Name);
            return ada_penerangan_jrg_pemukiman1;
        }
        else if(feature.properties.Name=="TDKNYALJRJR") {
          console.log(feature.properties.Name);
            return tdk_nyala_jrg_pemukiman1;
        }
        else if(feature.properties.Name=="tpjp") {
          console.log(feature.properties.Name);
            return tdk_penerangan_jrg_pemukiman1;
        } //abu2
        else if(feature.properties.Name=="TDKPNRPMUKN") {
          console.log(feature.properties.Name);
            return tdkada_penerangan_ada_pemukiman1;
        }
        else if(feature.properties.Name=="TDKPNRSMKI"){
          console.log(feature.properties.Name);
            return tdkada_penerangan_tdkada_pemukiman;
        }
        else{
          return {
            color: "#ffffff",
            opacity: 0
          };
        }

        }
        
      });
      
      console.log(tutupanlahanfix);
     
  var dataLayerBatas1=L.geoJSON(batas_kecamatan_fix, {
      style : batas_kecamatan
  });
  var legendMarker = L.layerGroup();

  var dataLayerTutupan=L.geoJSON(tutupanlahanfix, {
      style : tutupan_lahan,
      onEachFeature: function(feature,layer){
        if(feature.properties.T_Lahan_12=="Taman Kota"){
              var center = layer.getBounds().getCenter();
              var marker = L.marker(center,{
                icon : L.icon({
                  iconUrl : "{{asset('TAMANKOTA.png')}}",
                  iconSize: [50, 50]
                })
              });
              var polygonAndItsCenter = L.layerGroup([layer, marker]).addTo(legendMarker);
              // return polygonAndItsCenter;
           }
      }
  });
     
 
//definisi warna titik 
      function getKaltimColor(area){
        if (area =='Pencurian Biasa(cubis)'){
            return 'green';
        }else if(area=='Pencurian Bermotor(curanmor)'){
            return 'red';
        }
        else if(area=='Pencurian Pemberatan(curat)'){
            return 'blue';
        }
        else {
            return 'yellow';
        }   
        }

//definisi warna jalan
        function getKaltimColor1(area){
        if (area ==0){
            return "#CD5C5C";
        }else if(area==1){
            return "#FF1493";
        }
        else if(area==2){
            return "#8B4513";
        }
        else if(area==3) {
            return "#000080";
        }
        else if(area==4) {
            return "#2F4F4F";
        }
        else if(area==5) {
            return "#000000";
        }
        else{
            return "#800080";
        }

        }

        function getKaltimColor2(area){
        if (area =="Kec.Samarinda Seberang"){
            return "#D928C9";
        }
        else if(area=="Kec.Loa Janan Ilir"){
            return "#998E0A";
        }
      }

      function getKaltimColorTutupan(area){
        if(area=="Permukiman"){
          return "#D2691E"; //Chocolate
        }
        else if(area=="Semak Belukar"){
          return "#FF7F50"; //Coral
        }
        else if(area=="Sawah"){
          return "#008080"; //Teal
        }
        else if(area=="Rawa"){
          return "#778899"; //Light Slate Gray
        }
        else if(area=="Hutan Rakyat"){
          return "#7FFF00"; //Chartreuse  
        }
        else if(area=="Perkebunan"){
          return "#006400"; //Dark Green
        }
        else{
          return "#9ACD32"; //Yellow Green
        }

      }

      
        
//untuk PENDEFINISI legenda
      var titikkasus = L.control({position:'topright'});
        titikkasus.onAdd=function(map){
        var div=L.DomUtil.create('div','box box-primary');
          
          var labels=["Pencurian Biasa(cubis)","Pencurian Bermotor(curanmor)","Pencurian Pemberatan(curat)","Pencurian dengan Kekerasan(curas)"];

          var garisjalan=["Ada Lampu Tidak Nyala","Ada Penerangan Ada Pemukiman","Tidak Nyala Jrg Pemukiman","Tidak Ada Penerangan Jrg Pemukiman","Tidak Ada Penerangan Ada Pemukiman","Tidak Ada Penerangan Tidak Ada Pemukiman"];

          var kecamatan1=["Kec.Samarinda Seberang","Kec.Loa Janan Ilir"];          
          
          var tutupan1 =["Permukiman","Semak Belukar","Sawah","Rawa","Hutan Rakyat","Perkebunan","Taman Kota"];

          div.innerHTML='<div><b>Keterangan :</b></div>';
          
          for(var i=0;i<labels.length;i++){
            div.innerHTML += '<i style="background:'
            +getKaltimColor(labels[i]) + '; border-radius:1000px; width:10px; height:10px; display:inline-block;  ">&nbsp;&nbsp;</i>&nbsp;&nbsp;'
            + labels[i]+'<br>';
          }

          for(var i=0;i<garisjalan.length;i++){
            div.innerHTML += '<i style="background:'
            +getKaltimColor1(i) + '; width:15px; height:2px; display:inline-block; vertical-align:baseline; margin-top:3px; margin-bottom:3px; top:50%;  "></i>&nbsp;&nbsp;'
            + garisjalan[i]+'<br>';
          }

          for(var i=0;i<kecamatan1.length;i++){
            div.innerHTML += '<i style="background:'
            +getKaltimColor2(kecamatan1[i]) + '; width:15px; height:10px; display:inline-block; vertical-align:baseline; ">&nbsp;&nbsp;</i>&nbsp;&nbsp;'
            + kecamatan1[i]+'<br>';
          }
          
          for(var i=0;i<tutupan1.length-1;i++){
              if (i==1){
                div.innerHTML += '<i class="semak_belukar" style=" width:15px; height:10px; display:inline-block; vertical-align:baseline; ">&nbsp;&nbsp;</i>&nbsp;&nbsp;'
              + tutupan1[i]+'<br>';
              }
              else if(i==2){
                div.innerHTML += '<i class="sawah" style=" width:15px; height:10px; display:inline-block; vertical-align:baseline; ">&nbsp;&nbsp;</i>&nbsp;&nbsp;'
              + tutupan1[i]+'<br>';
              }
              else if(i==3){
                div.innerHTML += '<i class="rawa" style=" width:15px; height:10px; display:inline-block; vertical-align:baseline; ">&nbsp;&nbsp;</i>&nbsp;&nbsp;'
              + tutupan1[i]+'<br>';
              }
              else{
                div.innerHTML += '<i style="background:'
            +getKaltimColorTutupan(tutupan1[i]) + '; width:15px; height:10px; display:inline-block; vertical-align:baseline; ">&nbsp;&nbsp;</i>&nbsp;&nbsp;'
            + tutupan1[i]+'<br>';
              }
            
          }
            div.innerHTML += '<img class="legenda-tanam-kota" src="{{ asset("TAMANKOTA.png") }}">'
            + tutupan1[i]+'<br>';

                   
          return div;
          }
          titikkasus.addTo(map);


        var divHome1 = L.control({position:'topleft'});
        divHome1.onAdd=function(map){ 

          var divHome=L.DomUtil.create('div');
            divHome.innerHTML+= '<button onclick="refresh()" class="btn btn-primary"> <i class="fa fa-home" aria-hidden="true"></i> </button>';

            
            return divHome;
          }
          divHome1.addTo(map);

          function refresh(){
            map.setView([-0.5521802589467355, 117.11963572862538],12);
          }


        

//skala peta
     L.control.scale({options: {metric: true, imperial: false,
        updateWhenIdle: false}}).addTo(map);

//layer peta
     var petaLayer={
        'Open Street Map': titelayer,
        'Google Satelite': satelite,
     };
    
     var baseMaps={
        'Data 2019': dataLayer2019,
        'Data 2020': dataLayer2020,
        'Penerangan' : dataLayerLampu1,
        'Tutupan Lahan' : dataLayerTutupan,
        'Legend marker' : legendMarker,
        'Batas Wil. Samarinda Seberang & Loa Janan Ilir' : dataLayerBatas1
      };
     
     L.control.layers(petaLayer,baseMaps,{
      position:'topleft'
     }).addTo(map);

//mini map

      var miniMap = new L.Control.MiniMap(titelayer1,{

        centerFixed: [-0.5521802589467355, 117.11963572862538],
        zoomLevelFixed: 9


      }).addTo(map);

//judul layer data
      var node1 = document.createElement("Label");
        var textnode1 = document.createTextNode("Parameter");
        node1.appendChild(textnode1);
        var parameter = document.getElementsByClassName("leaflet-control-layers-overlays")[0];
                        parameter.insertBefore(node1,parameter.childNodes[2]);

      var node = document.createElement("Label");
        var textnode = document.createTextNode("Peta");
        node.appendChild(textnode);
        document.getElementsByClassName("leaflet-control-layers-overlays")[0].prepend(node);

      function getData(features){  
          for (i=0;i<features.length;i++) {
              var properties=features[i].properties;
              console.log(features[i]);
              var ul = document.getElementById('get_data');
              var li = document.createElement('li');
              li.setAttribute('class', 'list-group-item');
              li.setAttribute('data-id', features[i].id);
              var kelurahan = document.createElement('h5');
              kelurahan.appendChild(document.createTextNode(properties.Kelurahan));
              var peristiwa = document.createElement('span');
              peristiwa.appendChild(document.createTextNode(properties.Peristiwa));
              peristiwa.setAttribute('class', 'text-primary');
              li.innerHTML += kelurahan.outerHTML + peristiwa.outerHTML;
              ul.appendChild(li);
             
              }
            }

     </script>
    </body>
</html>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
</body>
</html>
@endsection