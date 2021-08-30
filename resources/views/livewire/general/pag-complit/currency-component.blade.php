@push('title_base')
    Currency
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
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #675afe;
        }

        .wrapper {
            width: 370px;
            padding: 30px;
            border-radius: 7px;
            background: #fff;
        }

        .wrapper header {
            font-size: 28px;
            font-weight: 500;
            text-align: center;
        }

        .wrapper font {
            margin: 40px 0 20px 0;
        }

        form :where(input, select, button) {
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
        }

        form p {
            font-size: 18px;
            margin-bottom: 5px;
        }

        form input {
            height: 50px;
            font-size: 17px;
            padding: 0 15px;
            border: 1px solid #999;
        }

        form input:focus {
            padding: 0 14px;
            border: 2px solid #675afe;
        }

        form .drop-list {
            display: flex;
            margin-top: 20px;
            align-items: center;
            justify-content: space-between;
        }

        .drop-list .select-box {
            display: flex;
            height: 45px;
            width: 115px;
            border-radius: 5px;
            align-items: center;
            justify-content: center;
            border: 1px solid #999;
        }

        .select-box select {
            width: auto;
            font-size: 16px;
            margin: 0 -5px 0 5px;
        }

        .select-box img {
            max-width: 25px;
        }

        .drop-list .icom {
            cursor: pointer;
            font-size: 22px;
            margin-top: 30px;
        }

        form .exchange-rate {
            font-size: 17px;
            margin: 20px 0 30px;
        }

        form button {
            height: 52px;
            color: #fff;
            font-size: 17px;
            cursor: pointer;
            background: #675afe;
        }

        .select-box select::-webkit-scrollbar {
            width: 8px;
        }

        .select-box select::-webkit-scrollbar-track {
            background: #fff;
        }

        .select-box select::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 8px;
            border-right: 2px solid #fff;
        }

    </style>
@endpush
<div>
    <div class="wrapper">
        <header>Currency Converter</header>
        <form action="#">
            <div class="amount">
                <p>Enter Amount</p>
                <input type="text" value="1">
            </div>
            <div class="drop-list">
                <div class="from">
                    <p>From</p>
                    <div class="select-box">
                        <img src="https://www.countryflags.io/us/flat/64.png" alt="flags">
                        <select></select>
                    </div>
                </div>
                <div class="icon"><i class="fas fa-exchange-alt"></i></div>

                <div class="to">
                    <p>to</p>
                    <div class="select-box">
                        <img src="https://www.countryflags.io/mx/flat/64.png" alt="flags">
                        <select></select>
                    </div>
                </div>
            </div>
            <div class="exchange-rate">Getting exchange rate...</div>
            <button>Get Exchange Rate</button>
        </form>
    </div>
</div>
@push('scripts')
    <script src="{{ secure_asset('assets/js/country-list.js') }}"></script>
    <script>
        const dropList = document.querySelectorAll(".drop-list select"),
            fromCurrency = document.querySelector(".from select"),
            toCurrency = document.querySelector(".to select"),
            getButton = document.querySelector("form button");

        for (let i = 0; i < dropList.length; i++) {
            for (currency_code in country_code) {
                let selected;
                if (i == 0) {
                    selected = currency_code == "USD" ? "selected" : "";
                } else if (i == 1) {
                    selected = currency_code == "MXN" ? "selected" : "";
                }
                let optionTag = `<option value="${currency_code}"${selected}>${currency_code}</option>`;
                dropList[i].insertAdjacentHTML("beforeend", optionTag);
            }
            dropList[i].addEventListener("change", e => {
                loadFlag(e.target);
            });
        }

        function loadFlag(element) {
            for (code in country_code) {
                if (code == element.value) {
                    let imgTag = element.parentElement.querySelector("img");
                    imgTag.src = `https://www.countryflags.io/${country_code[code]}/flat/64.png`
                }
            }
        }

        window.addEventListener('load', () => {

            getExchangeRate();
        });
        getButton.addEventListener('click', e => {
            e.preventDefault();
            getExchangeRate();
        });

        const exchangeIcon = document.querySelector(".drop-list .icon");
        exchangeIcon.addEventListener('click', () => {
            let tempCode = fromCurrency.value;
            fromCurrency.value = toCurrency.value;
            toCurrency.value = tempCode;
            loadFlag(fromCurrency);
            loadFlag(toCurrency);
            getExchangeRate();
        });

        function getExchangeRate() {
            const amount = document.querySelector(".amount input"),
                exchangerRateTxt = document.querySelector(".exchange-rate");
            let amountVal = amount.value;
            if (amountVal == "" || amountVal == "0") {
                amount.value = '1';
                amountVal = 1;
            }
            exchangerRateTxt.innerText = "Get Exchange Rate";

            let url = `https://v6.exchangerate-api.com/v6/8ce3330ea016166e6349e07e/latest/${fromCurrency.value}`;
            fetch(url).then(response => response.json()).then(result => {
                let exchangeRate = result.conversion_rates[toCurrency.value];
                let totalExchangeRate = (amountVal * exchangeRate).toFixed(2);

                exchangerRateTxt.innerText =
                    `${amountVal} ${fromCurrency.value} = ${totalExchangeRate} ${toCurrency.value}`;
            }).catch(() => {
                exchangerRateTxt.innerText = "Something went wrong";
            });
        }
    </script>
@endpush
