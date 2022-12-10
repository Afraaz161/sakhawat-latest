<table class="table table-hover">
    <thead>
      <tr>
        <th>Invoice#</th>
        <th>Customer</th>
        <th>Qty</th>
        <th>Action</th>
      </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Invoice#</th>
            <th>Customer</th>
            <th>Qty</th>
            <th>Action</th>
        </tr>
      </tfoot>
    <tbody>
        @foreach ($holds as $hold)
            <tr>
                <td>{{ $hold->invoice_no }}</td>
                @if ($hold->walking_customer == 'abc')
                    <td>{{ $hold->walking_customer }}</td>
                @else
                    <td>{{ $hold->customer['name'] }}</td>
                @endif
                <td>{{ $hold->total }}</td>
                <td><a href="" data-id="{{ $hold->id }}" class="hold-retrieve-btn"><i class="fa fa-arrow-circle-down" style="font-size: 40px;"></i></a></td>
            </tr>
        @endforeach
    </tbody>
</table>