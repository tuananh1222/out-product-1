@extends('admin.app')
@section('index')
<section class="content-header">
    <h1><?= $tab ?></h1>
</section>
@section('css')
	<style>
		p .title-thongke{
			text-align: center;
			font-size: 20px;
			font-weight: bold;
		}
	</style>
@endsection
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Biểu đồ</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="dashboard-general" style="height: 500px" id="bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="wrapper">
		<!-- //market-->
			
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Visitors</h4>
					<h3>13,500</h3>
					<p>Other hand, we denounce</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Users</h4>					
					@foreach ($user as $c )
						<h3>{{number_format($c->user)}}</h3>
					@endforeach
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Sales</h4>
						@foreach ($sales as $c )
							<h3>{{number_format($c->sales)}}</h3>
						@endforeach
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Orders</h4>
						@foreach ($order as $c )
							<h3>{{number_format($c->ordernum)}}</h3>
						@endforeach
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
        <div class="row">
            <p style="text-align: center;
			font-size: 20px;
			font-weight: bold;"> Thống kê đơn hàng doanh số</p>
            <form autocomplete="off">
                @csrf
                <div class="col-md-2">
                    <p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>
                    <input type="button" id="btn-dashboard-filter"class="btn btn-primary btn-sm" value="Lọc kết quả">
                </div>
                <div class="col-md-2">
                    <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
                </div>
				<div class="col-md-2">
					<p>
						Lọc theo:
						<select class="dashboard-filter form-control">
							<option>--Chọn--</option>
							<option value="7ngay"> 7 ngày qua</option>
							<option value="thangtruoc">Tháng trước</option>
							<option value="thangnay"> Tháng này</option>
							<option value="365ngayqua">365 ngày qua</option>
						</select>
					</p>
				</div>
            </form>
        </div>
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									<h3>Visitor Statistics</h3>
										<div class="toolbar">										
											
										</div>
								</header>
								<div class="agileits-box-body clearfix">
									<div id="hero-area"></div>
								</div>
							</div>
						</div>
	                <!--//agileinfo-grap-->
				</div>
			</div>
		</div>
		
		<div class="agileits-w3layouts-stats">
					<div class="col-md-4 stats-info widget">
						<div class="stats-info-agileits">
							<div class="stats-title">
								<h4 class="title">Browser Stats</h4>
							</div>
							<div class="stats-body">
								<ul class="list-unstyled">
									<li>GoogleChrome <span class="pull-right">85%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar green" style="width:85%;"></div> 
										</div>
									</li>
									<li>Firefox <span class="pull-right">35%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar yellow" style="width:35%;"></div>
										</div>
									</li>
									<li>Internet Explorer <span class="pull-right">78%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar red" style="width:78%;"></div>
										</div>
									</li>
									<li>Safari <span class="pull-right">50%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar blue" style="width:50%;"></div>
										</div>
									</li>
									<li>Opera <span class="pull-right">80%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar light-blue" style="width:80%;"></div>
										</div>
									</li>
									<li class="last">Others <span class="pull-right">60%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar orange" style="width:60%;"></div>
										</div>
									</li> 
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 stats-info stats-last widget-shadow">
						<div class="stats-last-agile">
							<table class="table stats-table ">
								<thead>
									<tr>
										<th>S.NO</th>
										<th>PRODUCT</th>
										<th>STATUS</th>
										<th>PROGRESS</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Lorem ipsum</td>
										<td><span class="label label-success">In progress</span></td>
										<td><h5>85% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Aliquam</td>
										<td><span class="label label-warning">New</span></td>
										<td><h5>35% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Lorem ipsum</td>
										<td><span class="label label-danger">Overdue</span></td>
										<td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Aliquam</td>
										<td><span class="label label-info">Out of stock</span></td>
										<td><h5>100% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Lorem ipsum</td>
										<td><span class="label label-success">In progress</span></td>
										<td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Aliquam</td>
										<td><span class="label label-warning">New</span></td>
										<td><h5>38% <i class="fa fa-level-up"></i></h5></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			
</section>
</section>
@endsection

@section('script')
<script src="{{ asset('bower_components/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('bower_components/Flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('bower_components/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('bower_components/Flot/jquery.flot.categories.js') }}"></script>
<script>
    $(function () {
        var url = window.location.origin;	
        $.ajax({
            url: url + '/api/chart',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                var data = [];
                var months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

                var month = res.list.map(function (item) {
                    return item.month;
                });

                var product = res.list.map(function (item) {
                    return item.product;
                });

                var count = 0;
                for (let i = 0; i < months.length; i++) {  
                    var string = i + 1;
                    // string += '';

                    if (month.includes(string)) {
                        data.push([string, product[count]]);
                        count++;
                    } else {
                        data.push([string, 0]);
                    }
                }

                var bar_data = {
                    data,
                    color: '#3dae3f'
                }

                $.plot('#bar-chart', [bar_data], {
                    label: "bar",
                    grid: {
                        borderWidth: 1,
                        borderColor: '#f3f3f3',
                        tickColor: '#3dae3f'
                    },
                    series: {
                        bars: {
                            line: 'text',
                            show: false,
                            barWidth: 0.2,
                            align: 'center'
                        },
                    },
                    xaxis: {
                        mode: "months",
                        tickLength: 0,
                        ticks: [
                            [0, 'Tháng'],
                            [1, 'Tháng 1'],
                            [2, 'Tháng 2'],
                            [3, 'Tháng 3'],
                            [4, 'Tháng 4'],
                            [5, 'Tháng 5'],
                            [6, 'Tháng 6'],
                            [7, 'Tháng 7'],
                            [8, 'Tháng 8'],
                            [9, 'Tháng 9'],
                            [10, 'Tháng 10'],
                            [11, 'Tháng 11'],
                            [12, 'Tháng 12'],
                        ],
                    },
                    yaxis: {
                        mode: "products",
                        tickLength: 10,
                    },
                })
            },
            error: function (XHR, status, error) {

            },
            complete: function (res) {

            }
        });
    })
</script>
<script>
	$(document).ready(function(){
		var chart = new Morris.Line({
			
			element: 'hero-area',
			lineColors: ['#819C79', '#fc8710','#ff6541'],		
			fillOpacity: 0.6,
			hideHover: 'auto',
			parseTime: false,
			resize: true,
			pointFillColors:['#ffffff'],
			pointStrokeColors: ['black'],
			xkey: 'preriod',
			
			ykeys: ['quantity', 'sales'],
			
			behaveLikeLine: true,
			labels: ['Số lượng', 'Doanh thu']
		});

		$('#btn-dashboard-filter').click(function(){
			//alert('ok da nhan');
			var _token = $('input[name="_token"]').val();
			var fromdate = $('#datepicker').val();
			var todate = $('#datepicker2').val();
			var url = window.location.origin;
			$.ajax({
				url: url + '/admin/filterchart',
				method:"POST",
				dataType: "JSON",
				data:{fromDate:fromdate, toDate:todate, _token:_token},
				success: function(data){
					chart.setData(data);
				}
			})
		});
		$('.dashboard-filter').change(function(){
			var dashboard_value = $(this).val();
			var _token = $('input[name="_token"]').val();
			var url = window.location.origin;
			$.ajax({
				url: url + '/admin/filterdashboard',
				method:"POST",
				dataType: "JSON",
				data:{dashboard_value: dashboard_value, _token:_token},
				success: function(data){
					chart.setData(data);
				}
			})
		});
	});
</script>

@endsection