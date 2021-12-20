@extends('admin.master')

@section('title', 'Dashboard')

@section('content_header')
  <h1 class="content__header__dashboard">Dashboard</h1>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js	"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@stop

@section('breadcrumb')
  <li class="breadcrumb-item active"></li>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin/dashboard.css">
@stop

@section('content')
  <p class="text-primary" style="font-size:20px;font-style:italic">Welcome to this beautiful admin panel!</p>
  <div {{--  id="page-wrapper"  --}} class="chart_admin_first">
    <div class="container-fluid">    

      <!--Bang thong ke trong ngay -->      
      <div class="Thefirst__dashboard">Hi! Today, We have...</div>
      <div id="chart_admin">
        <div class="item1 body__chart__admin">
          <b class="item1">90</b><br>
          <div class="item__title">Total Products</div>
        </div>   
        <div class="item2 body__chart__admin">
          <b class="item2">60</b><br>
          <div class="item__title">Total Orders</div>
        </div>     
        <div class="item3 body__chart__admin">
          <b class="item3">18</b><br>
          <div class="item__title">Pending Orders</div>
        </div>           
        <div class="item4 body__chart__admin">
          <b class="item4">20</b><br>
          <div class="item__title">Shipping</div>
        </div>  
        <div class="item5 body__chart__admin">
          <b class="item5">40</b><br>
          <div class="item__title">Completed Orders</div>    
        </div>        
        <div class="item6 body__chart__admin">
          <b class="item6">10</b><br>
          <div class="item__title">Canceled Orders</div>
        </div>
      </div>    
      <hr style="width:60%; margin-left:25%;margin-top:5%"/> 

      <!--Input chon thoi gian-->
      <div class="flex-grow-1 d-flex align-items-center mr-4 ">
        <div class="input__label__dashboard">
            Time: 
        </div>
        <div class="input-group" style="width: auto !important;">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="far fa-calendar-alt"></i>
            </span>
          </div>
          <input type="text" class="form-control float-right" id="reservation">
        </div>
            <!-- /.input group -->
        </div>

        <!--Bieu do bao cao doanh thu -->
          <div class="row">                       
            <div class="body__barChart col-sm-6">
              <canvas id="chart-line" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>    
              <div class="text__Chart">The chart shows products, orders and status orders management in a month</div> 
            </div>
            <div class="body__barChart col-sm-6">
              <canvas id="barChart"></canvas>     
              <div class="text__Chart"> The chart shows Sale Revenue in a month</div> 
            </div>  
          </div> 

          <!--Bang dieu khien nhanh -->
          <hr style="width:60%; margin-left:20%;margin-top:3%"/> 
          <div class="control__table">CONTROL TABLE</div>
          <div class="btn__control">
            <a class="btn " href="">
              <i class="nav-icon fas fa-shopping-cart" id="btn__control__table"></i><br>
              Go to Product Page
            </a>
            <a class="btn " href="">
              <i class="nav-icon fas fa-stream" id="btn__control__table"></i><br>
              Go to Category Page
            </a>
            <a class="btn" href="">
              <i class="nav-icon far fa-image" id="btn__control__table"></i><br>
              Go to Gallery Page
            </a>
            <a class="btn" href="">
              <i class="nav-icon fas fa-file-alt" id="btn__control__table"></i><br>
              Go to Order Page
            </a>
          </div>                                 
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>  
  <script type="text/javascript">
  /* bieu do thong ke ben trai */
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
      type: 'bar',
      data: {
        labels: ["Week 1", "Week 2" , "Week 3", "Week 4"],
        datasets: [{
          label: 'Sale',
          data: [300, 250, 150 , 800],
          backgroundColor: [
            '#ddf8f8',
            '#ddf8f8',
            '#ddf8f8',
            '#ddf8f8',                   
          ],
          borderColor: [
            '#6495ED',
            '#6495ED',
            '#6495ED',
            '#6495ED',                    
          ],
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    /* bieu do thong ke ben phai */
    $(document).ready(function() {
        var ctx = $("#chart-line");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Week 1", "Week 2" , "Week 3", "Week 4"],
                datasets: [{
                    data: [86, 114, 106, 106],
                    label: "Total products",
                    borderColor: "#6495ED",
                    fill: false
                }, {
                    data: [282, 350, 411, 502],
                    label: "Total Orders",
                    borderColor: "#986DB2",
                    fill: false
                }, {
                    data: [168, 170, 178, 190],
                    label: "Pending",
                    borderColor: "#0B346E",
                    fill: false
                },{
                    data: [106, 136, 207, 301],
                    label: "Shipping",
                    borderColor: "#e9c703",
                    fill: false
                }, {
                    data: [350, 411, 335, 209],
                    label: "Completed",
                    borderColor: "#23bf23",
                    fill: false
                }, {
                    data: [178, 190, 203, 276],
                    label: "Canceled",
                    borderColor: "#DC143C",
                    fill: false
                }]
            }            
        });
    });
  </script>
<script type="text/javascript">
   
  </script>
@stop

@section('js')
<script>
$(document).ready(function() {
    $("#master-dashboard").addClass("active");
});
</script>
@stop

