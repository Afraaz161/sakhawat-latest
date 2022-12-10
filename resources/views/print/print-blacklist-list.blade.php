<div class="" style="text-align: center;">
    <h3>Black List Items</h3>
</div>
<table border="1" style="border-collapse:collapse;text-align:center;">
    <thead>
        <tr>
            <th data-field="sr">SR#</th>
            <th>Image</th>
            <th data-field="item name">Item Name</th>
            <th data-field="sell price">Price</th>
            <th data-field="name urdu">Name Urdu</th>
            <th data-field="category">Category</th>
            <th data-field="manufacture">Manufacture</th>
            <th data-field="buy price">Re-Order Value</th>
            <th data-field="company rate">Stock</th>
            {{-- <th data-field="status">Status</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $key=>$item)
        @php
            $index = $key+1;
        @endphp
            <tr>
                <td>{{ $index }}</td>
                <td style="text-align: center;"><img src="{{ asset('items/').'/'.$item->image }}" alt="" style="border-radius:50%; width:50px;"></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->u_name }}</td>
                <td>{{ $item->category['name'] }}</td>
                <td>{{ $item->manufacture['name'] }}</td>
                <td>{{ $item->reorder_value }}</td>
                <td>
                    @if ($item->stock < $item->reorder_value)
                    <span style="background: red;color:#fff;">{{ $item->stock }}</span> 
                    @else
                    <span style="background: green;color:#fff;">{{ $item->stock }}</span> 
                    @endif 
                </td>
                {{-- <td>
                    @if ($item->status == 'black list')
                        <span style="background: black;color:#fff;">{{ $item->status }}</span>
                    @else
                        <span style="background: grey;">{{ $item->status }}</span>
                    @endif
                </td> --}}
            </tr>
        @endforeach
    </tbody>
</table>