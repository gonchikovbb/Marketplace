<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9fc5e8;">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="/">Главная страница</a>
            </li>
            <li>
                <a class="btn btn-success" href="{{ route('products') }}">Все продукты</a>
            </li>
            <li>
                <a class="btn btn-success" href="{{ route('orders') }}">Заказы</a>
            </li>
        </ul>
    </div>
</nav>
