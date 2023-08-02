@foreach ($data_sensor as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->ph_tanah }}</td>
    <td>{{ $item->nilai_lembab }}</td>
    <td>{{ $item->nilai_stanah }}</td>
    <td>{{ $item->temperature }}</td>
    <td>{{ $item->created_at }}</td>
<tr>
    @endforeach