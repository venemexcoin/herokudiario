@push('title_base')
    character limit
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
            font-family: 'Poppins', sans-serif;
            min-height: 100Vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #007bff;
            padding: 0 15px;
        }

        .input-box {
            position: relative;
            height: 160px;
            max-width: 560px;
            width: 100%;
            background: #fff;
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 5px 10px;
        }

        .input-box textarea {
            height: 100%;
            width: 100%;
            outline: none;
            border: 2px solid rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            resize: none;
            padding: 25px 15px;
            font-size: 15px;
            font-weight: 500;
            caret-color: #007bff;
        }

        .input-box textarea:focus,
        .input-box textarea:valid {
            border-color: #007bff;
        }

        .input-box textarea::placeholder {
            font-size: 15px;
            font-weight: 500;
        }

        .input-box.error textarea {
            border-color: red;
        }

        .input-box .title {
            position: absolute;
            top: 8px;
            left: 45px;
            color: #007bff;
        }

        .input-box.error .title {
            color: red;
        }

        .input-box .characters {
            position: absolute;
            bottom: 5px;
            right: 31px;
            display: flex;
            align-items: center;
            color: #007bff;
            display: none;
        }

        .input-box.active .characters {
            display: block;
        }

        .input-box.error .characters {
            color: red;
        }

    </style>
@endpush
<div>
    <div class="input-box">
        <textarea placeholder="Add your title" required></textarea>
        <span class="title">Title</span>
        <div class="characters">
            <span class="signal_num">0</span>
            <span class="limit_num">/100</span>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        let inputBox = document.querySelector('.input-box'),
            textarea = inputBox.querySelector('textarea'),
            signalNum = inputBox.querySelector('.signal_num');


        textarea.addEventListener('keyup', () => {
            let valLength = textarea.value.length; //stored textarea value length in valLength
            signalNum.innerText = valLength; //converter signalNum innerText by valLength
            (valLength > 0) ? inputBox.classList.add('active'): inputBox.classList.remove(
                'active'
            ); //if valLength is greater than 0 than add active classList if not than remove active classList
            (valLength > 100) ? inputBox.classList.add('error'): inputBox.classList.remove(
                'error'
            ); //if valLength is greater than 100 than add error classList if not than remove error classList   

            console.log(valLength);
        });
    </script>
@endpush
