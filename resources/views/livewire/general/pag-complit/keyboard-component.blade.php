@push('title_base')
    Keyboard
@endpush
@push('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #232323;
            font-family: consolas, arial, helvetica;
        }

        span {
            position: relative;
            display: inline-block;
            width: 80px;
            height: 80px;
            padding: 8px 15px;
            margin: 8px 4px;
            border-radius: 10px;
            background: linear-gradient(180deg, #282828, #202020);
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.15),
                inset 0 -8px 8px rgba(0, 0, 0, 0.25),
                10px 20px 25px rgba(0, 0, 0, 0.4);
            overflow: hidden;
        }

        span:last-child {
            width: 100%;
        }

        span:before {
            content: '';
            position: absolute;
            top: 3px;
            left: 4px;
            bottom: 14px;
            right: 12px;
            background: linear-gradient(90deg, #232323, #4a4a4a);
            border-radius: 10px;
            box-shadow: -10px -10px 10px rgba(255, 255, 255, 0.25),
                10px 5px 10px rgba(0, 0, 0, 0.15);
            border-left: 1px solid #0004;
            border-bottom: 1px solid #0004;
            border-top: 1px solid #0009;
        }

        span i {
            position: relative;
            color: #fff;
            font-style: normal;
            font-size: 1.5em;
            text-transform: uppercase;
        }

    </style>
@endpush
<div>
    <span>
        <i>c</i>
    </span>
    <span>
        <i>s</i>
    </span>
    <span>
        <i>s</i>
    </span><br>
    <span>
        <i>o</i>
    </span>
    <span>
        <i>n</i>
    </span>
    <span>
        <i>l</i>
    </span>
    <span>
        <i>y</i>
    </span><br>
    <span>
        <i></i>
</div>

@push('script')

@endpush
