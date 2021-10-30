<div>
    <style>
        body {
            background: #1D202B;
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        .contenedor1 {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 40px 0;

            display: flex;
            gap: 20px;


        }

        .titulo {
            font-size: 24px;
            padding: 20px 0;
        }

        .contenedor-conciertos {
            width: 70%;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card1 {
            border-radius: 10px;
            min-height: 200px;
            font-weight: bold;
            padding: 20px;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center center;

            width: calc(33.33% - 20px);

        }

        .card1 .textos {
            height: 100%;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }

        .banner {
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            background-size: cover;
            background-position: center center;

            width: 30%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }

        .banner ul {
            list-style: none;
        }

        .banner ul li {
            margin: 15px;
            font-weight: bold;
        }

        .banner .boton {
            background: #FFD600;
            display: block;
            width: 100%;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            padding: 10px;
            border: none;
            border-radius: 100px;
            font-family: 'Roboto', sans-serif;
            cursor: pointer;
        }

        .titulo {
            font-size: 24px;
            padding: 20px 0;
            text-align: center;
        }


        @media screen and (max-width: 900px) {}

        @media screen and (max-width: 700px) {}

        @media screen and (max-width: 600px) {}

    </style>
    <div class="titulo">
        <h1>FlexBox</h1>
    </div>
    <div class="contenedor1">
        <div class="contenedor-conciertos">
            <div class="card1" style="background-image: url('https://i.postimg.cc/P5fV1xwV/1.jpg')">
                <div class="textos">
                    <h3>Rock In Rio</h3>
                    <p>27 de Octubre 2021</p>
                </div>
            </div>
            <div class="card1" style="background-image: url('https://i.postimg.cc/DZGx7490/2.jpg')">
                <div class="textos">
                    <h3>FalconMasters’ Concert</h3>
                    <p>12 de Noviembre 2021</p>
                </div>
            </div>
            <div class="card1" style="background-image: url('https://i.postimg.cc/yxzvxYKP/3.jpg')">
                <div class="textos">
                    <h3>Coachella</h3>
                    <p>13 de Diciembre 2021</p>
                </div>
            </div>

            <div class="card1" style="background-image: url('https://i.postimg.cc/GmM7KCPL/4.jpg')">
                <div class="textos">
                    <h3>US Festival</h3>
                    <p>20 de Diciembre 2021</p>
                </div>
            </div>
            <div class="card1" style="background-image: url('https://i.postimg.cc/9frxNn1G/5.jpg')">
                <div class="textos">
                    <h3>Altamont Speedway</h3>
                    <p>27 de Diciembre 2021</p>
                </div>
            </div>
            <div class="card1" style="background-image: url('https://i.postimg.cc/Pq96GQF0/6.jpg')">
                <div class="textos">
                    <h3>Rock In Rio Again</h3>
                    <p>1 de Enero 2021</p>
                </div>
            </div>
        </div>

        <div class="banner" style="background-image: url('https://i.postimg.cc/BQBw8DX1/banner.jpg')">
            <h3>Rock Legends 2021</h3>
            <ul>
                <li>Guns N' Roses</li>
                <li>AC/DC</li>
                <li>Motley Crue</li>
                <li>The Cult</li>
                <li>Poison</li>
                <li>Def Leppard</li>
            </ul>
            <button class="boton">Comprar Boletos</button>
        </div>
    </div>
</div>
