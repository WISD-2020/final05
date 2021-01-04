<tr>
    <td><a class="btn btn-sm btn-primary" href="{{ route('admin.doctors.create') }}">新增</a></td>
</tr>

@foreach ($doctors as $doctor)


    <tr>

        <td class="table-text"><div>{{ $doctor->name }}</div></td>

        <td>{{ $doctor->sex }}</td>
        <td>{{ $doctor->birthday }}</td>
        <td>{{ $doctor->status }}</td>
        <td>{{ $doctor->account }}</td>
        <td>{{ $doctor->telephone }}</td>


        <td><a class="btn btn-sm btn-primary" href="{{ route('admin.doctors.edit', $doctor->id) }}">編輯</a></td>

    </tr>
@endforeach
