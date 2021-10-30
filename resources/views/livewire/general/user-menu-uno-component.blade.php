@push('title_base')
    paginas completas
@endpush

<div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #dcdcdc;
        }

        body.landing #header {
            color: #fff;
            background: #333;
        }

        .conten_title {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 50%;
            margin-top: 50px;
        }

        .conten_title h1 {
            color: #333;
            font-size: 24px;
            font-weight: 800;
            text-transform: uppercase;
            text-shadow: 2px 3px 3px rgb(65, 62, 250);
            margin-top: 50px;
        }

        .sub_title h3 {
            display: block;
            color: #333;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .container1 {
            position: relative;
            width: 900px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
            padding: 20px;
            margin-bottom: 60px;
        }

        .container1 .card {
            width: 100%;
            background: #fff;
        }

        .container1 .card .imgBx {
            position: relative;
            width: 100%;
            height: 310px;
            overflow: hidden;
        }

        .container1 .card .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: 0.5s ease-in-out;
            transform-origin: right;
        }

        .container1 .card:hover .imgBx img {
            transform: scale(1.5)
        }

        .action {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .action li {
            position: relative;
            list-style: none;
            width: 40px;
            height: 40px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 4px;
            cursor: pointer;
            transition: transform 0.5s;
            transform: translateX(60px);
        }

        .action li:nth-child(2) {
            transition-delay: 0.15s;
        }

        .action li:nth-child(3) {
            transition-delay: 0.3s;
        }

        .container1 .card:hover .action li {
            transform: translateX(0px);
        }

        .action li:hover {
            background: #ff2020;
            color: #fff;
        }

        .action li span {
            position: absolute;
            right: 50px;
            top: 50%;
            transform: translateY(-50%) translateX(-20px);
            white-space: nowrap;
            padding: 4px 6px;
            background: #fff;
            color: #333;
            font-weight: 500;
            font-size: 12px;
            border-radius: 4px;
            pointer-events: none;
            opacity: 0;
            transition: 0.5s
        }

        .action li:hover span {
            transform: translateY(-50%) translateX(0px);
            opacity: 1;
        }

        .action li span::before {
            content: '';
            position: absolute;
            top: 50%;
            right: -4px;
            width: 8px;
            height: 8px;
            background: #fff;
            transform: translateY(-50%) rotate(45deg);
        }

        .container1 .card .content {
            padding: 10px;
        }

        .container1 .card .content .productName a {
            text-decoration: none;
        }

        .container1 .card .content .productName h3 {
            font-size: 18px;
            font-weight: 500;
            color: #333;
            margin: 5px 0
        }

        .container1 .card .content .price_reting {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container1 .card .content .price_reting h2 {
            font-size: 20px;
            color: #ff2020;
            font-weight: 500;
        }

        .container1 .card .content .price_reting .fas {
            color: #ffd513;
            cursor: pointer;
        }

        .container1 .card .content .price_reting .fas.grey {
            color: #ccc;
            margin-left: 5px;
            cursor: pointer;
        }

        .SinDato {
            color: #ff2020;
            text-align: center;
            font-size: 21px;
            font-weight: bold;
        }

        .paginate {
            padding-bottom: 30px;

        }

        .paginate .relative {
            color: #333;
            font-weight: bold;
            margin-left: 10px;
            border-bottom: none;
        }

    </style>
    <div class="conten_title">
        <h1>Paginas completas</h1>
    </div>
    <div class="sub_title">
        <h3>Algunas de estas pruebas no son responsive o adaptables para Móvil</h3>
    </div>

    <div class="container1">
        @foreach ($completas as $completa)
            <div class="card">
                <div class="imgBx">
                    <a href="{{ $completa->rutapag }}">
                        <img src="{{ $completa->rutaimg }}" alt="Image de slit video">
                    </a>
                    <ul class="action">
                        <li><i class="fa fa-code" aria-hidden="true"></i>
                            <span>{{ $completa->widget1 }}</span>
                        </li>
                        <li><i class="fa fa-code" aria-hidden="true"></i>
                            <span>{{ $completa->widget2 }}</span>
                        </li>
                        <li><i class="fa fa-code" aria-hidden="true"></i>
                            <span>{{ $completa->widget3 }}</span>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <div class="productName">
                        <a href="{{ $completa->rutapag }}">
                            <h3>{{ $completa->name }}</h3>
                        </a>
                    </div>
                    <div class="price_reting">
                        <h2></h2>
                        <div class="rating">
                            @if ($completa->star1 == 1)
                                <span class="start1"><i class="fas fa-star"></i></span>
                            @else
                                <i class="fas grey fa-star"></i>
                            @endif
                            @if ($completa->star2 == 1)
                                <i class="fas fa-star"></i>
                            @else
                                <i class="fas grey fa-star"></i>
                            @endif
                            @if ($completa->star3 == 1)
                                <i class="fas fa-star"></i>
                            @else
                                <i class="fas grey fa-star"></i>

                            @endif
                            @if ($completa->star4 == 1)
                                <i class="fas fa-star"></i>

                            @else
                                <i class="fas grey fa-star"></i>
                            @endif
                            @if ($completa->star5 == 1)
                                <i class="fas fa-star"></i>
                            @else
                                <i class="fas grey fa-star"></i>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="paginate">
        {{ $completas->links() }}
    </div>

</div>
