@if(sizeof($data) > 0)
@foreach($data as $key=>$item)
    <tr id="tr_{{ $item->id }}">
        <td><input name="name" type="text" class="form-control" value="{{ $item->name }}"></td>
        <td width="100"><input name="count" type="number" class="form-control" value="{{ $item->count }}"></td>
        <td><input name="price" type="text" class="form-control" value="{{ $item->price }}"></td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->price * $item->count }}</td>
        <td width="200">
            <button type="button" class="btn btn-success" onclick="update({{ $item->id }})">Update</button>
            <button type="button" class="btn btn-danger" onclick="destory({{ $item->id }})">Delete</button>
        </td>
    </tr>
@endforeach
@else
    <h3>No data</h3>
@endif
