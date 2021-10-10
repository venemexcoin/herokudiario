@push('title_base')
    Facebook App
@endpush
@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: url('https://i.postimg.cc/fL40m810/glassmorphism.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            position: relative;
            width: 500px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 25px 25px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
            border-top: 1px solid rgba(255, 255, 255, 0.5));
            transition: 1s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card:hover {
            transform: scale(1.2);
            background: rgba(255, 255, 255, 0.2);
        }

        .card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: #7729ee;
        }

        .card .content {
            position: relative;
            display: flex;
            align-items: center;
            margin-top: -80px;
            gap: 20px;
        }

        .card .content .imgBx {
            position: relative;
            width: 120px;
            height: 120px;
            overflow: hidden;
            border-radius: 50%;
            box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .card .content .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card .content .details {
            display: flex;
            flex-direction: column;
            gap: 10px;
            color: #111;
        }

        .card .content .details h3 {
            font-weight: 600;
        }

        .card .content .details ion-icon {
            font-size: 1.4em;
        }

        .card .content .details div {
            display: flex;
            align-items: center;
            gap: 10px;
        }

    </style>
@endpush
<div>
    <div class="card">
        <div class="content">
            <div class="imgBx">
                <img src="https://i.postimg.cc/rFhg7HpS/img1yo.jpg" alt="Imagen de perfil">
            </div>
            <div class="details">
                <div>
                    <h3>Eduardo A. Liendo B.</h3>
                </div>
                <div>
                    <ion-icon name="call-outline"></ion-icon>
                    <span>+52 55 14 67 44 80</span>
                </div>
                <div>
                    <ion-icon name="mail-outline"></ion-icon>

                    <span>eduarlien@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endpush
