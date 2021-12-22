<html>
<head>
	<title>Laporan Pemasukan</title>
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
		<h5>Laporan Pemasukan</h4>
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
			@foreach($pemasukan as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->id}}</td>
            	<td>{{$p->id_barang}}</td>
            	<td>{{$p->jumlah_barang}}</td>
            	<td>{{$p->created_at}}</td>
            	<td>{{$p->total_harga}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>