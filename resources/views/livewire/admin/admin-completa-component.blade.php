@push('title_base')
    Lista de paginas
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/tablas.css') }}">
@endpush

<div>
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Lista de Pagínas</h2>
                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            <!-- Content -->
            <section id="content">
                <x-botonNeon>
                    /admin/completa/add
                </x-botonNeon>
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
                            @foreach ($complits as $complit)
                                <tr>
                                    <td data-title="id">{{ $complit->id }}</td>
                                    <td data-title="Imagen"><img src="{{ $complit->rutaimg }}" width="50" alt=""></td>
                                    <td data-title="Nombre">{{ $complit->name }}</td>
                                    <td data-title="Ruta">{{ $complit->rutapag }}</td>
                                    <td data-title="widget1">{{ $complit->widget1 }}</td>
                                    <td data-title="widget2">{{ $complit->widget2 }}</td>
                                    <td data-title="widget2">{{ $complit->widget3 }}</td>
                                    <td>
                                        <a class="btn"
                                            href="{{ route('admin.editcompleta', ['complit_id' => $complit->id]) }}"><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="#"
                                            onclick="confirm('Are you sure, Yor want to delete this Complit Page?') || event.stopImmediatePropagation()"
                                            style="margin-left: 10px;"
                                            wire:click.prevent="deleteComplit({{ $complit->id }})""><i class=" fa
                                            fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        <tbody>
                    </table>
                    {{ $complits->links() }}
                </div>
            </section>

        </div>
    </div>
</div>
