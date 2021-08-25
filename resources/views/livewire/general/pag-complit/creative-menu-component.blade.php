@push('title_base')
    creative Menu
@endpush
@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        section {
            font-family: 'Poppins', sans-serif;
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #222;
            overflow: hidden;
        }

        ul {
            position: relative;
            display: flex;
            flex-direction: column;
        }

        ul li {
            list-style: none;
        }

        ul li a {
            position: relative;
            display: block;
            text-decoration: none;
            text-align: center;
            text-transform: uppercase;
            color: #fff;
            font-size: 4em;
            font-weight: 700;
            transition: 0.5s;
        }

        ul li a:hover {
            color: rgba(255, 255, 255, 0.1);
            transition-delay: 0s;
        }

        ul li a::before {
            content: attr(data-text);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.35em;
            color: #3bffe8;
            text-shadow: 0 0 10px #3bffe8,
                0 0 30px #3bffe8,
                0 0 80px #3bffe8;
            font-weight: 500;
            letter-spacing: 40px;
            white-space: nowrap;
            text-align: center;
            opacity: 0;
            transition: 0.5s;
        }

        ul li a:hover::before {
            opacity: 1;
            letter-spacing: 6px;
            transition-delay: 0.5s;
        }

    </style>
@endpush
<div>
    <section>
        <ul>
            <li><a href="/" data-text="Home">Home</a></li>
            <li><a href="#" data-text="About">About</a></li>
            <li><a href="#" data-text="Services">Services</a></li>
            <li><a href="#" data-text="Team">Team</a></li>
            <li><a href="#" data-text="Contact">Contact</a></li>
        </ul>
    </section>
</div>
@push('scripts')

@endpush
