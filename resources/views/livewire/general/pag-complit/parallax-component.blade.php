@push('title_base')
    Parallax
@endpush

@push('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100%;
            font-family: 'lato';
        }

        .parallax-completo {
            width: 100%;
            height: 100vh;
            background-image: url(https://i.postimg.cc/h43YwVt2/equipo.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .texto-hero {
            background: #111;
            padding: 18px;
            width: 320px;
            text-align: center;
            color: #fff;
        }

        h2 {
            font-size: 32px;
            font-weight: 300;
        }

        .center {
            max-width: 1100px;
            width: 90%;
            overflow: hidden;
            margin: auto;
            text-align: center;
        }

        .espacio {
            padding: 30px 0 60px 0;
        }

        .espacio h2 {
            text-align: center;
            padding: 30px;
        }

        .espacio p {
            text-align: justify;
        }

        .parallax-chico {
            height: 450px;
            background-image: url(https://i.postimg.cc/5tqqVWqx/equipo2.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .parallax-chico h2 {
            display: flex;
            height: inherit;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-weight: 400;
        }

        .texto {
            background: #ccc;
            height: 190px;
        }

        .texto h2 {
            text-align: center;
            color: #000;
            display: flex;
            height: inherit;
            justify-content: center;
            align-items: center;
        }

        @media screen and (max-width:900px) {
            .parallax-completo {
                background-image: url(https://i.postimg.cc/h43YwVt2/equipo.jpg);
                background-size: 100% 100%;
                background-repeat: no-repeat;

            }

            .parallax-chico {
                background-image: url(https://i.postimg.cc/5tqqVWqx/equipo2.jpg);
                background-size: 100% 100%;
                background-repeat: no-repeat;
            }

            .texto-hero {

                opacity: 0.6;
            }
        }

        @media screen and (max-width:480px) {
            h2 {
                font-size: 18px;
                font-weight: 300;
            }

            .parallax-completo {
                background-image: url(https://i.postimg.cc/h43YwVt2/equipo.jpg);
                background-size: 400px 400px;
                background-repeat: no-repeat;
            }

            .parallax-chico {
                background-image: url(https://i.postimg.cc/5tqqVWqx/equipo2.jpg);
                background-size: 400px 400px;
                background-repeat: no-repeat;
            }
        }

    </style>
@endpush
<div>
    <header class="parallax-completo">
        <div class="texto-hero">
            <h2>Desplaza hacía abajo</h2>
        </div>
    </header>
    <section class="center espacio">
        <h2>Parallax Demo</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur natus quisquam aperiam adipisci
            laudantium accusantium similique sint earum, iusto itaque quasi ad assumenda deleniti ratione vitae aliquid
            hic repellendus impedit obcaecati laborum quis tempore nesciunt aspernatur fugit! Magnam eos debitis ab
            similique atque obcaecati voluptas porro officiis cumque odio officia aperiam quibusdam sed, quas vero
            earum? Esse placeat soluta explicabo consequuntur illo recusandae amet voluptatibus pariatur exercitationem
            et velit voluptates qui, maiores corporis natus ipsam porro accusantium, delectus sapiente cumque aperiam
            nesciunt deserunt sunt! Soluta vel voluptates et reprehenderit voluptate! Nihil earum placeat libero, non
            illo laudantium enim cum amet. Itaque, est. Sequi temporibus atque odit perspiciatis numquam, a distinctio
            architecto, consequatur neque, quae dolor rerum. Magni, quam. Soluta rem ex aspernatur eveniet, voluptates
            possimus perferendis ad inventore rerum mollitia praesentium quod nostrum similique ullam beatae eos sunt
            nesciunt ab, accusamus a explicabo corporis iure quae? In quibusdam commodi temporibus.</p>
    </section>
    <section class="parallax-chico">
        <h2>Menos altura</h2>
    </section>
    <section class="texto">
        <h2>Disfruta del elemento Parallax</h2>
    </section>
    <section class="center espacio">
        <h2>Parallax Demo</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur natus quisquam aperiam adipisci
            laudantium accusantium similique sint earum, iusto itaque quasi ad assumenda deleniti ratione vitae aliquid
            hic repellendus impedit obcaecati laborum quis tempore nesciunt aspernatur fugit! Magnam eos debitis ab
            similique atque obcaecati voluptas porro officiis cumque odio officia aperiam quibusdam sed, quas vero
            earum? Esse placeat soluta explicabo consequuntur illo recusandae amet voluptatibus pariatur exercitationem
            et velit voluptates qui, maiores corporis natus ipsam porro accusantium, delectus sapiente cumque aperiam
            nesciunt deserunt sunt! Soluta vel voluptates et reprehenderit voluptate! Nihil earum placeat libero, non
            illo laudantium enim cum amet. Itaque, est. Sequi temporibus atque odit perspiciatis numquam, a distinctio
            architecto, consequatur neque, quae dolor rerum. Magni, quam. Soluta rem ex aspernatur eveniet, voluptates
            possimus perferendis ad inventore rerum mollitia praesentium quod nostrum similique ullam beatae eos sunt
            nesciunt ab, accusamus a explicabo corporis iure quae? In quibusdam commodi temporibus.</p>
    </section>
    <section class="parallax-chico">
        <h2>Menos altura</h2>
    </section>
    <section class="texto">
        <h2>Disfruta del elemento Parallax</h2>
    </section>
    <section class="parallax-completo">
        <div class="texto-hero">
            <h2>Desplaza hacía abajo</h2>
        </div>
    </section>
</div>
