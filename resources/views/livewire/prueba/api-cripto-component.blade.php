@push('title_base')
    API criptoMonedas
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/tablas.css') }}" />
    <style>
        span:nth-child(2) {
            margin-left: 35px;
        }

        .bg-green {
            color: rgb(4, 219, 4);
        }

        .bg-red {
            color: red;
        }

        table td img {
            position: absolute;

        }

    </style>

@endpush
<div>
    <section id="content" class="container">
        <div id="main" class="wrapper style1">
            <div class="container">
                <header class="major">
                    <h2>Coin Market</h2>
                    <p>Prueba de Consumo de API (coingecko)</p>
                </header>
            </div>
    </section>


    <section id="content" class="container">

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Coin</th>
                        <th>Price</th>
                        <th>symbol</th>
                        <th>Price Change</th>
                        <th>24h Volume</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coins as $coin)
                        <tr>
                            <td data-title="Position">{{ $coin['market_cap_rank'] }}</td>
                            <td><img src="{{ $coin['image'] }}" alt="" width="25px;">
                                <span>{{ $coin['name'] }}</span>
                            <td data-title="symbol">{{ $coin['symbol'] }}</td>
                            </td>
                            <td data-title="Price">{{ $coin['current_price'] }}</td>
                            @php
                                $datos = $coin['price_change_percentage_24h'];
                                $isActive = $datos > 0;
                            @endphp
                            <td data-title="Pocentage" class={{ $isActive ? 'bg-green' : 'bg-red' }}>
                                {{ $coin['price_change_percentage_24h'] }}</td>
                            <td data-title="Volumen">{{ $coin['total_volume'] }}</td>
                        </tr>
                </tbody>
                @endforeach
            </table>

        </div>

    </section>

</div>
</div>
@push('scripts')

@endpush
