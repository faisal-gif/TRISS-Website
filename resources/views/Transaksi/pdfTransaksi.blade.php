<html>
<head>
	<title>Laporan Transaksi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Penjualan</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>ID Transaksi</th>
                <th>ID Barang</th>
                <th>Jumlah Barang</th>
                <th>Tanggal Transaksi</th>
                <th>Total Harga</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($transaksi as $t)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$t->id}}</td>
            	<td>{{$t->id_barang}}</td>
            	<td>{{$t->jumlah_barang}}</td>
            	<td>{{$t->created_at}}</td>
            	<td>{{$t->total_harga}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>