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
      <div class="row">   
        <div class="col-md-10">
          <div id="chart_admin">
            <div class="item1 body__chart__admin">
              <b class="item1">90</b><br>
              <div class="item__title">Tổng số sản phẩm hiện có</div>
            </div>   
            <div class="item2 body__chart__admin">
              <b class="item2">60</b><br>
              <div class="item__title">Tổng số đơn hàng</div>
            </div>     
            <div class="item3 body__chart__admin">
              <b class="item3">18</b><br>
              <div class="item__title">Tổng số đơn hàng đang chờ</div>
            </div>           
            <div class="item4 body__chart__admin">
              <b class="item4">20</b><br>
              <div class="item__title">Tổng số đơn hàng đang ship</div>
            </div>  
            <div class="item5 body__chart__admin">
              <b class="item5">40</b><br>
              <div class="item__title">Tổng số đơn hàng hoàn thành</div>    
            </div>        
            <div class="item6 body__chart__admin">
              <b class="item6">10</b><br>
              <div class="item__title">Tổng số đơn hàng hủy</div>
            </div>
          </div>    
          <hr style="width:60%; margin-left:30%;margin-top:5%"/> 
          <div class="body__barChart">
            <canvas id="barChart"></canvas>     
            <div class="text__barChart" > Biểu đồ quản lý sản phẩm, đơn hàng và tình trạng đơn hàng</div> 
          </div>  
        </div>
        
      </div>                             
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
  <script type="text/javascript">
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
      type: 'bar',
      data: {
        labels: ["Tổng sản phẩm", "Tổng đơn hàng", "Đang chờ", "Đang vận chuyển", "Hoàn thành", "Hủy"],
        datasets: [{
          label: 'Số lượng',
          data: [90, 60, 18, 20, 40, 10],
          backgroundColor: [
            '#ddf8f8',
            '#efeffd',
            '#dae8e9',
            '#fdfbe7',
            '#ddfddd',
            '#fae4e8'
          ],
          borderColor: [
            '#6495ED',
            '#986DB2',
            '#0B346E',
            '#e9c703',
            '#23bf23',
            '#DC143C'
          ],
          borderWidth: 1
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
  </script>

@stop

@section('js')
<script>
$(document).ready(function() {
    $("#master-dashboard").addClass("active");
});
</script>
@stop

