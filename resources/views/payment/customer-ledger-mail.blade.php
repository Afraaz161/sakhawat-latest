<style>
    td{
        padding: 5px;
    }
</style>
<table border="1" style="width:100%;border-collapse:collapse;">
    <thead>
        <tr>
            <th colspan="7" style="text-align: center;padding:5px;font-size:20px;">Customer Ledger Report</th>
        </tr>
        <tr>
            <th data-field="invoice">Invoice#</th>
            <th data-field="vendor">Date</th>
            <th data-field="total">Total</th>
            <th data-field="paid">Cash</th>
            <th data-field="payable">Credit</th>
            <th data-field="balance">Balance</th>
            <th data-field="Description">Description</th>
        </tr>
    </thead>
    <tbody>

        @php
            $payments = \App\Models\AccountSale::where('customer_id', $id)->get();
        @endphp
        @foreach ($payments as $key=>$payment)
        @php
            $index = $key + 1;
        @endphp
            <tr>
                {{-- <td style="text-align:center;">{{ $index }}</td> --}}
                <td>{{ $payment->invoice }}</td>
                <td style="text-align:center;">{{ $payment->created_at }}</td>
                <td style="text-align:center;">{{ $payment->total }}</td>
                <td style="text-align:center;">{{ $payment->received }}</td>
                <td class="text-success" style="text-align:center;"><b>{{ $payment->receivable }}</b></td>
                <td style="text-align:center;">{{ $payment->balance }}</td>
                <td>{{ $payment->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>