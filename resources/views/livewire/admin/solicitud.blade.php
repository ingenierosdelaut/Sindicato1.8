<div wire:init="cargando">

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
    </head>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu"></div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <img src="{{ asset('static/images/sututslrc.png') }}" width="150" height="150" alt="">
                    <h3>SUTUTSLRC</h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                        <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
                    </div>
                </li>
                <li class="active">
                    <a href="{{ route('admin.view') }}"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="{{ route('admin.usuarios') }}"><span class="fa fa-users mr-3 notif"></span>Usuarios</a>
                </li>
                <li>
                    <a href="{{ route('admin.anuncios') }}"><span class="fa fa-newspaper mr-3"></span> Anuncios</a>
                </li>
                <li>
                    <a href="{{ route('admin.solicitudes') }}"><span class="fa fa-tags mr-3"></span> Solicitudes</a>
                </li>
                <li>
                    <div style="margin-top: 170px;">
                        @livewire('iniciar-sesion.logout')
                    </div>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container cont-solicitud">
                <div class="row mb-1">
                    <div class="col">
                        <a href="" type="button" class="float-right btn-sm btn btn-dark"><i class="fa fa-file-pdf"></i>
                            Generar reporte</a>
                    </div>
                </div>

                @if (count((array) $requests))
                    <div class="row">
                        <div class="col text-center">
                            <table class="table table-striped">
                                <thead class="table-dark">

                                    <tr>
                                        <td scope="col">#</td>
                                        <td scope="col">NOMBRE</td>
                                        <td scope="col">ESTADO</td>
                                        <td scope="col">FECHA EN QUE SE SOLICITO</td>
                                        <td scope="col">ACCIONES</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($requests as $request)
                                        <tr>
                                            <td scope="row">{{ ++$i }}</td>
                                            <td>{{ $request->nombre }} {{ $request->apellido }}</td>
                                            @if ($request->estado == null)
                                                <td><span class="badge badge-pill badge-warning">Pendiente</span></td>
                                            @elseif ($request->estado == 1)
                                                <td><span class="badge badge-pill badge-success">Aceptada</span></td>
                                            @else
                                                <td><span class="badge badge-pill badge-warning">Denegada</span></td>
                                            @endif
                                            <td>{{ $request->created_at }}</td>
                                            <td><a wire:click="aceptar" href="" type="button"
                                                    class="btn btn-sm btn-success">Aceptar</a>
                                                <a wire:click="denegar" href="" type="button"
                                                    class="btn btn-sm btn-danger">Denegar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">ESTADO</th>
                                        <th scope="col">FECHA EN QUE SE SOLICITO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No hay resultados</td>
                                        <td>No hay resultados</td>
                                        <td>No hay resultados</td>
                                        <td>No hay resultados</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>

</div>
