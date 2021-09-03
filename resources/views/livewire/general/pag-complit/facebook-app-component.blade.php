@push('title_base')
    Facebook App
@endpush
@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .main {
            position: relative;
            background: linear-gradient(120deg, #fff, #fff 62%, #3b5998 62%, #3b5998 110%);
            min-height: 100vh;
            padding: 0 100px;
            display: flex;
            align-items: center;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 30px 100px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        header .logo img {
            max-width: 50px;
            margin-right: 20px;
        }

        header ul {
            display: flex;
        }

        header ul li {
            list-style: none;
            margin: 0 10px;
        }

        header ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        header ul li a:hover,
        header ul li a.artive {
            color: #2d88ff;
        }

        .app {
            position: absolute;
            right: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            color: #3b5998;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .app:hover {
            background: #2d88ff;
            color: #fff;
        }

        .app ion-ico {
            margin-right: 10px;
            font-size: 1.4em;
        }

        .contentBx {
            width: 100%;
            max-width: 900px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .contentBx .text {
            max-width: 800px;
        }

        .contentBx .text h2 {
            font-size: 6em;
            color: #3b5998;
        }

        .contentBx .text p {
            font-size: 1.1em;
            color: #333;
            line-height: 1.8em;
        }

        .contentBx .text h4 {
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: 700;
            color: #333;
        }

        .btn {
            background: #3b5998;
            color: #fff;
            display: inline-flex;
            text-decoration: none;
            padding: 10px 15px;
            font-size: 1.1em;
            margin: 5px 20px 5px 0;
            border-radius: 5px;
        }

        .btn:hover {
            background: #2d88ff;
        }

        .btn ion-icon {
            margin-right: 10px;
            font-size: 1.4em;
        }

        .imgBx img {
            margin-left: 50px;
            margin-right: 100px;
            max-width: 250px;
            display: none;
        }

        .imgBx img.active {
            display: block;
        }

        .dots {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 80px;
            display: flex;
            flex-direction: column;
        }

        .dots .dot {
            position: relative;
            width: 10px;
            height: 30px;
            background: rgba(255, 255, 255, 0.25);
            display: inline-flex;
            margin: 5px;
            cursor: pointer;
        }

        .dots .dot.active {
            background: #fff;
        }

        .sci {
            position: absolute;
            bottom: 30px;
            display: flex;
        }

        .sci li {
            list-style: none;
            margin-right: 20px;
        }

        .sci li a {
            font-size: 1.8em;
            color: #3b5998;

        }

        .sci li a:hover {
            color: #2d88ff;
        }

        /* Now, make it responsive */
        @media(max-width:991px) {
            header {
                padding: 30px;
            }

            .main {
                padding: 30px;
                background: #fff;
            }

            .app {
                display: none;
            }

            .contentBx {
                flex-direction: column-reverse;
                margin: 100px 0;
            }

            .imgBx img {
                margin: 0;
            }

            .dots {
                position: relative;
                top: initial;
                transform: none;
                right: initial;
                display: flex;
                flex-direction: row;
                margin-top: 20px;
            }

            .dots .dot {
                width: 25px;
                height: 10px;
                background: #3b5998;
                opacity: 0.2;
            }

            .dots .dot.active {
                opacity: 1;
            }

            .contentBx .text {
                text-align: center;
            }

            .contentBx .text h2 {
                font-size: 3em;
            }

            .sci {
                position: absolute bottom: 30px;
                display: flex;
                left: 50%;
                transform: translateX(-50%)
            }
        }

    </style>
@endpush

<div>
    <section class="main">
        <header>
            <a href="#" class="logo"><img src="https://i.postimg.cc/G3QL2Fx7/logo.png" alt="Facebool logo"></a>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Support</a></li>
            </ul>
            <a href="#" class="app">
                <ion-icon name="arrow-down-outline"></ion-icon>Downloaded
            </a>
        </header>

        <div class="contentBx">
            <div class="text">
                <h2>Facebook</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus unde, corrupti aliquid dolorem
                    eligendi minima, repudiandae maxime dolor, repellendus aspernatur nisi? Adipisci sunt nobis, fugiat
                    obcaecati repellendus reprehenderit ullam dignissimos sapiente culpa eligendi voluptatem ad.</p>
                <h4>Donwload the app</h4>
                <a href="#" class="btn">
                    <ion-icon name="logo-apple"></ion-icon>Apple Store
                </a>
                <a href="#" class="btn">
                    <ion-icon name="logo-google-playstore"></ion-icon>Play Store
                </a>
            </div>

            <div class="dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <div class="imgBx">
                <img src="https://i.postimg.cc/yNcBzcNT/fb1.png" class="slides active" alt="">
                <img src="https://i.postimg.cc/Y97720GB/fb2.png" class="slides" alt="">
                <img src="https://i.postimg.cc/qRGTNryh/fb3.png" class="slides" alt="">
                <img src="https://i.postimg.cc/QCxr5zJ6/fb4.png" class="slides" alt="">
                <img src="https://i.postimg.cc/6p7tYDJg/fb5.png" class="slides" alt="">
            </div>
        </div>
        <ul class="sci">
            <li><a href="">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li><a href="">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li><a href="">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
    </section>
</div>
@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const slides = document.querySelectorAll('.slides');
        const dots = document.querySelectorAll('.dot');




        function SetActive(i) {
            for (slide of slides)
                slide.classList.remove('active');
            slides[i].classList.add('active');

            // add active class in indicator
            for (dot of dots)
                dot.classList.remove('active');
            dots[i].classList.add('active');

        }

        for (let j = 0; j < dots.length; j++) {
            dots[j].addEventListener('click', function() {
                SetActive(j);
            })
        }
    </script>
@endpush
