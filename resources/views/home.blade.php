@extends('layouts.app')
<title>SIG DARATAN | Home Page</title>


 	<style type="text/css">
               
        .canvas{
          width: 200px;
          height: 100px;
          display: block;
          margin-top: 2rem;

        }
        .content {
          text-align: center;
          color: #000000;
          font-weight: bold ;
          font-size: 15px;
        }
        
        .grafik{
          display: flex;
          justify-content: space-around;
          align-items: center;
        }
        
        .gambar{
          text-align: center;
        }
    </style>

@section('content')
                  
<div class="gambar" style="margin-bottom:25px;">
   <img src="{{asset('Lambang_Polri.png')}}"style="width: 150px;height: 150px;"> <br>
 </div>

  <div class="grafik" style="padding-bottom: 2rem;">
    <div class="box box-primary">
      <div class="box-header">DATA PENCURIAN 2019</div>
      <div class="box-body">
        <div class="chart">  <canvas id="myChart1" width="40" height="15"></canvas></div>
      </div>
    </div>
    <div class="box box-primary">
      <div class="box-header">DATA PENCURIAN 2020</div>
      <div class="box-body">
        <div class="chart">  <canvas id="myChart3" width="40" height="15"></canvas></div>
      </div>
    </div>
    
  </div>


<div class="content" >
SELAMAT DATANG DI SISTEM INFORMASI GEOGRAFIS DAERAH RAWAN KEJAHATAN 
    <br>DI KECAMATAN SAMARINDA SEBERANG DAN KECAMATAN LOA JANAN ILIR KOTA SAMARINDA 
</div>

<!-- GRAFIK KEJAHATAN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  function chart(element, type, data) {
    return new Chart(element, {
      type: type,
      data: data,
      options: {
          scales: {
              y: {
                  beginAtZero: true, 
                  ticks: {
                  stepSize: 4
                }

              }
          }
      }
    });
  }

  function getChartData(labels, datasets) {
    return {
      labels: labels,
      datasets: datasets,
      
    }
  }

var ctx1 = document.getElementById('myChart1').getContext('2d');
var ctx3 = document.getElementById('myChart3').getContext('2d');

var chart2019 = chart(ctx1, 'bar',
  getChartData(
    @json(array_values($jenis_kejahatan)),
    [{
        // label: 'Data 2019',
        data: @json($data2019),
        backgroundColor: [
            'green',
            'red',
            'blue',
            'yellow'
        ],
        borderColor: [
            'green',
            'red',
            'blue',
            'yellow'
        ],
        borderWidth: 4 
      }]
    )
  );


var chart2020 = chart(ctx3, 'bar',
  getChartData(
    @json(array_values($jenis_kejahatan)),
    [{
        // label: 'Data 2020',
        data: @json($data2020),
        backgroundColor: [
            'green',
            'red',
            'blue',
            'yellow'
        ],
        borderColor: [
            'green',
            'red',
            'blue',
            'yellow'
        ],
        borderWidth: 4 
      }]
    )
  );


        </script>
@endsection
