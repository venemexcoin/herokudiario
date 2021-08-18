<div>
    <style>
        .content {
            position: relative;;
            justify-content: center;
            align-items: center;
            padding: 0 1.2em;

        }
        .fa{
            margin-left: 15px;  
        }
        .fa-pencil {
            color: rgb(15, 247, 15);
        }
        .fa-trash {
            color: rgb(255, 12, 12);
        }
        a {
            border-bottom: none;
        }
        @media (max-width: 30em) 
        {
            table {
                width: 100%;
                font-size: .9em;
            }
            table tr {
                display: flex;
                flex-direction: column;
                border: 1px solid grey;
                padding: 1em;
                margin-bottom: 1em; 
            }
            table thead {
                display: none;
            }
            table td[data-title] {
                display: flex;
            }
            table td[data-title]::before {
                content: attr(data-title);
                width: 80px;
                color: silver;
                font-weight: bold; 
            }
            table td,
            table th  
            {
                border: none !important;
            }
            
            .panel-default 
            {
                max-width: 98%;
                margin-left: 3px;
            }
        }
    </style>
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Lista de Pagínas</h2>
                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            <!-- Content -->
                <section id="content">
                    @livewire('boton-neon-component')
                    <div class="content">
                    <table>
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Route Img</th>
                            <th>Nomre</th>
                            <th>Route Pag.</th>
                            <th>Widget1</th>
                            <th>Widget2</th>
                            <th>Widget3</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-title="id">1</td>
                            <td data-title="Imagen"><img src="{{asset('assets/images/img/1.jpg')}}" width="50" alt="" ></td>
                            <td data-title="Nombre">Slit Video</td>
                            <td data-title="Ruta">admin.completa</td>
                            <td data-title="widget1">Lorem ipsum dolor sit</td>
                            <td data-title="widget2">Lorem ipsum dolor sit</td>
                            <td data-title="widget2">Lorem ipsum dolor sit</td>
                            <td>
                               <a class="btn"href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title="id">2</td>
                            <td data-title="Imagen"><img src="{{asset('assets/images/img/1.jpg')}}" width="50" alt="" ></td>
                            <td data-title="Nombre">Slit Video</td>
                            <td data-title="Ruta">admin.completa</td>
                            <td data-title="widget1">Lorem ipsum dolor sit</td>
                            <td data-title="widget2">Lorem ipsum dolor sit</td>
                            <td data-title="widget3">Lorem ipsum dolor sit</td>
                            <td>
                                <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td data-title="id">3</td>
                            <td data-title="Imagen"><img src="{{asset('assets/images/img/1.jpg')}}" width="50" alt="" ></td>
                            <td data-title="Nombre">Slit Video</td>
                            <td data-title="Ruta">admin.completa</td>
                            <td data-title="widget1">Lorem ipsum dolor sit</td>
                            <td data-title="widget2">Lorem ipsum dolor sit</td>
                            <td data-title="widget3">Lorem ipsum dolor sit</td>
                            <td data-title="Star">
                                <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <tbody>
                    </table>
                </div>
                </section>

        </div>
    </div>
</div>
