@push('title_base')
    Speech Comverter
@endpush
<div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Zen+Antique&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #5256AD;
        }

        .wrapper {
            width: 370px;
            border-radius: 7px;
            padding: 25px 30px;
            background: #fff;
        }

        .wrapper header {
            font-size: 28px;
            font-weight: 500;
            text-align: center;
        }

        .wrapper form {
            margin: 35px 0 20px;
        }

        form .row {
            display: flex;
            margin-bottom: 5px;
            flex-direction: column;
        }

        .wrapper form label {
            font-size: 18px;
            margin-bottom: 5px;
        }

        form :where(textarea, select, button) {
            outline: none;
            width: 100%;
            border: none;
            border-radius: 5px;
        }

        form .row textarea {
            resize: none;
            height: 110px;
            font-size: 15px;
            padding: 8px 10px;
            border: 1px solid #999;
        }

        form .row .outer {
            height: 47px;
            display: flex;
            padding: 0 10px;
            align-items: center;
            border-radius: 5px;
            border: 1px solid #999;
        }

        form .row select {
            font-size: 14px;
        }

        form button {
            height: 52px;
            margin-top: 10px;
            color: #fff;
            font-size: 17px;
            cursor: pointer;
            background: #5256AD;
        }

    </style>

    <div class="wrapper">
        <header>Text To Speech</header>
        <form action="#">
            <div class="row">
                <label>Enter Text</label>
                <textarea></textarea>
            </div>
            <div class="row">
                <label>Select Voice</label>
                <div class="outer">
                    <select value="">
                        <option value="">Google (hi-IN)</option>
                        <option value="">Google Deutsh (de-DE)</option>
                        <option value="">Google US English (en-US)</option>
                        <option value="">Google Male (en-GB)</option>
                        <option value="">Google Englesh Female (en-GB)</option>
                    </select>
                </div>
            </div>
            <button>Convert To Speech</button>
        </form>
    </div>

    <script>
        const textarea = document.querySelector('textarea'),
            voiceList = document.querySelector('select'),
            speechBtn = document.querySelector('button');

        let synth = speechSynthesis;

        function voices() {
            for (let voice of synth.getVoices()) {
                console.log(voice);
                let option = ` <option value="${voice.name}">${voice.name}(${voice.length})</option>`
                voiceList.insertAdjacentHTML("beforeend", option);
            }
        }

        synth.addEventListener('voiceschanged', voices);

        function textToSpeech(text) {
            let utternance = new SpeechSynthesisUtterance(text);
            speechSynthesis.speak(utternance);
        }

        speechBtn.addEventListener('click', e => {
            e.preventDefault();
            if (textarea.value !== "") {
                textToSpeech(textarea.value);
            }
        });
    </script>
</div>
