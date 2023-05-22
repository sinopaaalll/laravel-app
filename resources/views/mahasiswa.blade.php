<h3 align="center">Daftar Mahasiswa</h3>
<table align="center" cellpadding="10" cellspacing="0" border="1">
	<thead>
		<tr bgcolor="greenyellow">
			@php
			$ar_judul = ['No','Nama Mahasiswa','Asal'];
			@endphp             
			@foreach($ar_judul as $jdl)
			<th>{{ $jdl }}</th>	
			@endforeach
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center">1</td>
			<td>{{ $mhs1 }}</td>
			<td>{{ $asal1 }}</td>
		</tr>
		<tr>
			<td align="center">2</td>
			<td>{{ $mhs2 }}</td>
			<td>{{ $asal2 }}</td>
		</tr>
	</tbody>

</table>