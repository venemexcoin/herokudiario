@push('title_base')
    Digital clock
@endpush
@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.4s ease;
        }

        body {
            font-family: 'Orbitron', sans-serif;
        }

        section {
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f8ff;
            padding: 0 20px;
        }

        section.dark {
            filter: invert(100%);
        }

        section .container4 {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 220px;
            max-width: 560px;
            width: 100%;
            background: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            position: relative;
        }

        section .container4 .icons i {
            position: absolute;
            right: 17px;
            top: 17px;
            height: 30px;
            width: 30px;
            background: #24292d;
            color: #fff;
            text-align: center;
            line-height: 30px;
            border-radius: 50%;
            font-size: 14px;
            cursor: pointer;
        }



        .container4 .icons i.fa-sun {
            opacity: 0;
            pointer-events: none;
        }

        section.dark .container4 .icons i.fa-sun {
            opacity: 1;
            pointer-events: auto;
            font-size: 16px;
        }

        section .container4 .time {
            display: flex;
            align-items: center;
        }

        .container4 .time .time-colon {
            display: flex;
            align-items: center;
            position: relative;
        }

        .time .time-colon .am_pm {
            position: absolute;
            top: 0;
            right: -50px;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .time .time-colon .time-text {
            height: 100px;
            width: 100px;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            background: #f0f8ff;
            border-radius: 6px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        section.dark .time .time-colon .time-text {
            background: #24292d;
        }

        .time .time-colon .time-text,
        .time .time-colon .colon {
            font-size: 35px;
            font-weight: 600;
        }

        section.dark .time .time-text .num,
        section.dark .time .colon {
            .num color: #000;
        }

        .time .time-colon .colon {
            font-size: 40px;
            margin: 0 10px;
        }

        .time .time-colon .time-text .text {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
        }

    </style>
@endpush
<div>
    <section>
        <div class="container4">
            <div class="icons">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
            </div>
            <div class="time">
                <div class="time-colon">
                    <div class="time-text">
                        <span class="num hour_num">08</span>
                        <span class="text">Hours</span>
                    </div>
                    <span class="colon">:</span>
                </div>

                <div class="time-colon">
                    <div class="time-text">
                        <span class="num min_num">45</span>
                        <span class="text">Minutes</span>
                    </div>
                    <span class="colon">:</span>
                </div>

                <div class="time-colon">
                    <div class="time-text">
                        <span class="num sec_num">06</span>
                        <span class="text">Seconds</span>
                    </div>
                    <span class="am_pm">AM</span>
                </div>

            </div>
        </div>
    </section>

</div>
@push('scripts')
    <script>
        let section = document.querySelector("section"),
            icons = document.querySelector(".icons");

        icons.onclick = () => {
            section.classList.toggle("dark");
        }

        // creating a fuction and calling it in every Seconds

        setInterval(() => {
            let date = new Date();
            hour = date.getHours(),
                min = date.getMinutes(),
                seconds = date.getSeconds();
            //console.log(hour);

            let d;
            d = hour < 12 ? "AM" : "PM";
            hour = hour > 12 ? hour - 12 : hour;
            hour = hour == 0 ? hour = 12 : hour;

            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            document.querySelector('.hour_num').innerText = hour;
            document.querySelector('.min_num').innerText = min;
            document.querySelector('.sec_num').innerText = seconds;
            document.querySelector('.am_pm').innerText = d;
        }, 1000); // 1000 milliseconds = 1sec
    </script>
@endpush
