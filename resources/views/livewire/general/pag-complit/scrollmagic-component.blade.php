@push('title_base')

@endpush
@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #323232;
        }

        .bg {
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url(https://i.postimg.cc/HLYLLC4B/paisaje-Agua.jpg);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .bg h2 {
            position: relative;
            color: rgb(133, 131, 131);
            font-size: 5em;
        }

        section {
            padding: 100px;
        }

        section h2 {
            color: #fff;
            font-size: 2em;
            margin-bottom: 10px;
        }

        .SkewedOne {
            position: absolute;
            bottom: -100%;
            left: 50%;
            width: 100%;
            height: 100%;
            background: #323232;
            transform: skewY(-14deg);
            transform-origin: top left;
        }

        .SkewedTwo {
            position: absolute;
            bottom: -100%;
            right: 50%;
            width: 100%;
            height: 100%;
            background: #323232;
            transform: skewY(14deg);
            transform-origin: top right;
        }

        section p {
            color: #fff;
            font-size: 1.2em;
        }

    </style>

@endpush
<div>
    <div class="bg">
        <h2>Scroll to See Magic</h2>
        <span class="SkewedOne"></span>
        <span class="SkewedTwo"></span>
    </div>
    <section>
        <h2>Also Watch part 1 and 2... Link in Video description</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Dicta possimus non expedita ducimus, libero ipsa adipisci
            officia! Illo nihil consequatur nulla voluptates officiis
            consequuntur corrupti molestias! Nam fugiat iusto nostrum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Dicta possimus non expedita ducimus, libero ipsa adipisci
            officia! Illo nihil consequatur nulla voluptates officiis
            consequuntur corrupti molestias! Nam fugiat iusto nostrum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Dicta possimus non expedita ducimus, libero ipsa adipisci
            officia! Illo nihil consequatur nulla voluptates officiis
            consequuntur corrupti molestias! Nam fugiat iusto nostrum.
            <br><br>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Dicta possimus non expedita ducimus, libero ipsa adipisci
            officia! Illo nihil consequatur nulla voluptates officiis
            consequuntur corrupti molestias! Nam fugiat iusto nostrum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Dicta possimus non expedita ducimus, libero ipsa adipisci
            officia! Illo nihil consequatur nulla voluptates officiis
            consequuntur corrupti molestias! Nam fugiat iusto nostrum.
        </p>
    </section>
</div>
@push('scripts')
    <script>
        const SkewedOne = document.querySelector('.SkewedOne')
        const SkewedTwo = document.querySelector('.SkewedTwo')


        window.addEventListener('scroll', () => {
            const value1 = -14 + window.scrollY / 45;
            const value2 = 14 + window.scrollY / -45;
            SkewedOne.style.transform = "skewY(" + value1 + "deg)"
            SkewedTwo.style.transform = "skewY(" + value2 + "deg)"
        })
    </script>
@endpush
