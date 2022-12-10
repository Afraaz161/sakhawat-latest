<?php 
    $total = 0;
    $index = 0;
?>
@if ($sales)
    @foreach($sales as $id => $sale)
    <?php 
        $total += $sale->price * $sale->quantity; 
        $index++;
    ?>
        <tr>
            <td>
                <a href="#" title="Delete" class="icon remove-from-sale" data-id="{{ $sale->id }}"><i class="fa fa-trash-o"></i></a>
            </td>
            <td>{{ $sale->name }}</td>
            <td><input type="number" name="cart-quantity" value="{{ $sale->quantity }}" data-id="{{ $sale->id }}" id="cart-quantity" class="cart-quantity"></td>
            <td><input type="number" name="cart-price" value="{{ $sale->price }}" data-id="{{ $sale->id }}" id="cart-price" class="cart-price"></td>
            <td>{{ $sale->total }}</td>
        </tr>
    @endforeach
    <input type="hidden" id="total" name="total" data-id="{{ $total }}">
@else
    <tr>
        <td colspan="6" class="text-info text-center">No Item Added.</td>
    </tr>
@endif