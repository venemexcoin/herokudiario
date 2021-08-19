<div>
    <style>
        .content-start {
            display: flex;
            flex-direction: column;
        }

        .star-widget {

            display: flex;
            flex-direction: row-reverse;
        }

        input[type="checkbox"]+label::before {

            display: none;
        }

        input:not(:checked)~label:hover,
        input:not(:checked)~label:hover~label {
            color: #fd4;
        }

        input:checked~label {
            color: #fd4;
        }

        input#rate-5:checked~label {
            color: #fd4;
            text-shadow: 0 0 20px #952;
        }

        .text-danger {
            margin-bottom: 0;
            color: red;
        }


        @media (max-width: 480px) {
            .marcador {
                display: flex;
            }
        }

    </style>
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>No Sidebar</h2>
                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            <!-- Content -->
            <section id="content">
                <section>
                    <h3>Form</h3>

                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Success</strong>{{ Session::get('message') }}
                        </div>
                    @endif
                    <form id="formulario" wire:submit.prevent="addPag">
                        <div class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="name" id="name" value="" placeholder="Name"
                                    wire:model="name" />
                                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="widget1" id="widget1" value="" placeholder="widget1"
                                    wire:model="widget1" />
                                @error('widget1') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="rutapag" id="rutapag" value="" placeholder="Route Pag."
                                    wire:model="rutapag" />
                                @error('rutapag') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="widget2" id="widget2" value="" placeholder="widget2"
                                    wire:model="widget2" />
                                @error('widget2') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="rutaimg" id="rutaimg" value="" placeholder="image Route"
                                    wire:model="rutaimg" />
                                @error('rutaimg') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="widget3" id="widget3" value="" placeholder="widget3"
                                    wire:model="widget3" />
                                @error('widget3') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="content-start">
                                <h3>Calificacion</h3>
                                <div class="col-6 col-12-medium star-widget">
                                    <input type="checkbox" id="rate-5" name="start5" wire:model="star5" type="checkbox">
                                    <label for="rate-5" class="uno"><i class="fa fa-star"
                                            aria-hidden="true"></i></label>
                                    <input type="checkbox" id="rate-4" name="start4" wire:model="star4" type="checkbox">
                                    <label for="rate-4" class="uno"><i class="fa fa-star"
                                            aria-hidden="true"></i></label>
                                    <input type="checkbox" id="rate-3" name="start3" wire:model="star3" type="checkbox">
                                    <label for="rate-3" class="uno"><i class="fa fa-star"
                                            aria-hidden="true"></i></label>
                                    <input type="checkbox" id="rate-2" name="start2" wire:model="star2" type="checkbox">
                                    <label for="rate-2" class="uno"><i class="fa fa-star"
                                            aria-hidden="true"></i></label>
                                    <input type="checkbox" id="rate-1" name="start1" wire:model="star1" type="checkbox">
                                    <label for="rate-1" class="uno"><i class="fa fa-star"
                                            aria-hidden="true"></i></label>
                                </div>

                            </div>

                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" class="primary" /></li>
                                    <li><input type="reset" value="Reset" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
            </section>

        </div>
    </div>
</div>
@push('scripts')
    <script>
        const formulario = document.getElementById('formulario');
        const inputs = document.querySelectorAll('#formulario input[type="checkbox"]');


        const validarStar = (e) => {
            switch (e.target.name) {
                case "start1":
                    const start = 1;
                    break;
                case "start2":
                    
                    break;
                case "start3":
                    
                    break;
                case "start4":
                   
                    break;
                case "start5":
                    
                    break;

            }
        }

        inputs.forEach((input) => {
            input.addEventListener('click', validarStar);
            input.addEventListener('blur', validarStar);
        });
    </script>
@endpush
