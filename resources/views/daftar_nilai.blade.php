@php
//array 1 dimensi (scalar)
$b1 = ['nama'=>'Pepaya', 'harga'=>15000, 'kg'=>5];
$b2 = ['nama'=>'Mangga', 'harga'=>25000, 'kg'=>7];
$b3 = ['nama'=>'Pisang', 'harga'=>20000, 'kg'=>8];
$b4 = ['nama'=>'Jambu', 'harga'=>10000, 'kg'=>6];
//array associative
$buah2an = [$b1, $b2, $b3, $b4];
@endphp
<h3 align="center">Daftar Penjualan Buah</h3>
		<table align="center" cellpadding="10" cellspacing="0" border="1">
			<thead>
				<tr bgcolor="greenyellow">
				@php
				$ar_judul = ['No','Buah','Harga/Kg','Jumlah Beli',
				             'Harga Kotor','Diskon','Harga Bayar'];
				@endphp             
				@foreach($ar_judul as $jdl)
					<th>{{ $jdl }}</th>	
				@endforeach
				</tr>
			</thead>
			<tbody>
				@php
				$no = 1;
				$ar_habar = []; 
				@endphp
				@foreach($buah2an as $buah)
					@php
					$warna = ($loop->iteration % 2 == 1) ? 'Beige' : 'Khaki';
					$hator = $buah['harga'] * $buah['kg'];
				    $diskon = ($buah['nama'] == 'Mangga' && $buah['kg'] >= 5 ? 0.2 : 0.1) * $hator;
					$habar = $hator - $diskon;
					@endphp
					<tr bgcolor="{{ $warna }}">
						<td align="center">{{ $loop->iteration }}</td>
						<td>{{ $buah['nama'] }}</td>
						<td align="right">Rp. 
							{{ number_format($buah['harga'],0,',','.') }}
					    </td>
						<td>{{ $buah['kg'] }}</td>
						<td align="right">Rp. 
							{{ number_format($hator,0,',','.') }}
					    </td>	
						<td align="right">Rp. 
							{{ number_format($diskon,0,',','.') }}
					    </td>
						<td align="right">Rp. 
							{{ number_format($habar,0,',','.') }}
					    </td>
					</tr>
				@endforeach
			</tbody>
			
		</table>