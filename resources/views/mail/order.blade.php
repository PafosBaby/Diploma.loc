<h2>Спасибо за заказ!</h2>
<h3>Сумма вашего заказа: {{$order->total . '₽'}}</h3>

<h4>Заказ</h4>
<ul>
    @foreach ($order->items as $item)
        <li>{{$item->product->name}} | {{$item->qty}} | {{$item->subtotal}}</li>
    @endforeach
</ul>

