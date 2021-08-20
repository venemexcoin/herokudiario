@push('title_base')
    Card Hover
@endpush
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box font-family: 'Ubuntu', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(#03a9f4, #03a9f4 45%, #fff 45%, #fff 100%);

        }

        .card {
            position: relative;
            width: 300px;
            height: 400px;
            background: #fff;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.5);
            background: blur(15px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        .imgBx {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            transform: translateY(30px) scale(0.5);
            transform-origin: top;
        }

        .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .content {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            padding-bottom: 30px;
        }

        .content .details {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            margin: 48px;
        }

        .content .details h2 {
            color: #444;
            font-size: 1.4em;
            font-weight: 500;
        }

        .content .details h2 span {
            font-size: 0.7em;
            color: #03a9f4;
            font-weight: 400;
        }

        .sci {
            position: relative;
            display: flex;
            margin-top: 5px;
        }

        .sci li {
            list-style: none;
            margin: 4px;
        }

        .sci li a {
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: #f00;
            background: transparent;
            font-size: 1.25em;
            text-decoration: none;
            box-shadow: 0 7px 15px rgba(0, 0, 0, 0.1);
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            transition: 0.5s;
        }

        .sci li a:hover {
            background: #03a9f4;
            color: #fff;

        }

    </style>
@endpush

<div>

    <div class="card">
        <div class="imgBx">
            <img src="https://i.postimg.cc/rFhg7HpS/img1yo.jpg" alt="imagen de targeta">
        </div>
        <div class="content">
            <div class="details">
                <h2>Eduardo Liendo<br><span>Junior Developer</span> </h2>
                <ul class="sci">
                    <li><a href="https://www.facebook.com/alfonso.berroteran.3"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://twitter.com/chamocelldevel1"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/eduardo-liendo-152243120/"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

@push('scripts')

@endpush
