@include('layouts.header')

<header>
    <h1>MMI</h1>
</header>
<div>
    <aside>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/customers">Customer</a></li>
            <li><a href="/suppliers">Supplier</a></li>
            <li><a href="/purchase_orders">Purchase Order</a></li>
            <li><a href="/invoice">Invoice</a></li>
            <li><a href="/delivery_note">Delivery Note</a></li>
            <li><a href="/receipt">Tanda Terima</a></li>
        </ul>
    </aside>
    <main>
        @yield('content')
    </main>
</div>

@include('layouts.footer')
