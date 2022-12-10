<?php 
    $total = 0;
    $index = 0;
?>
@if ($purchases)
    @foreach($purchases as $id => $purchase)
    <?php 
        $total += $purchase['price'] * $purchase['quantity']; 
        $index++;
    ?>
        <tr>
            <td><a href="#" title="Delete" class="icon remove-from-purchase" data-id="{{ $purchase->id }}"><i class="fa fa-trash-o"></i></a></td>
            <td>{{ $purchase['name'] }}</td>
            <td>{{ $purchase['price'] }}</td>
            <td>{{ $purchase['quantity'] }}</td>
            <td>{{ $purchase['total'] }}</td>
        </tr>
    @endforeach
    <input type="hidden" id="total" name="total" data-id="{{ $total }}">
@else
    <tr>
        <td colspan="6" class="text-info text-center">No Item Added.</td>
    </tr>
@endif
