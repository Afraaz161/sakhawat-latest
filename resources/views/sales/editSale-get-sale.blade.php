<?php 
    $total = 0;
    $index = 0;
?>
@if ($saleItems)
    @foreach($saleItems as $id => $saleitem)
    <?php 
        $total += $saleitem->price * $saleitem->quantity; 
        $index++;
    ?>
        <tr>
            <td>
                <a href="#" title="Delete" class="icon remove-from-sale" data-id="{{ $saleitem->id }}"><i class="fa fa-trash-o"></i></a>
            </td>
            <td>{{ $saleitem->name }}</td>
            <td><input type="number" name="cart-quantity" value="{{ $saleitem->quantity }}" data-id="{{ $saleitem->id }}" id="cart-quantity" class="cart-quantity"></td>
            <td><input type="number" name="cart-price" value="{{ $saleitem->price }}" data-id="{{ $saleitem->id }}" id="cart-price" class="cart-price"></td>
            <td>{{ $saleitem->total }}</td>
        </tr>
    @endforeach
    <input type="hidden" id="total" name="total" data-id="{{ $total }}">
@else
    <tr>
        <td colspan="6" class="text-info text-center">No Item Added.</td>
    </tr>
@endif