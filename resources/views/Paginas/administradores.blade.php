@extends('plantilla') @section('content')

<div class="content-wrapper" style="min-height: 247px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administradores</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Inicio</a>
                        </li>

                        <li class="breadcrumb-item active">Administradores</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <button
                                class="btn btn-primary btn-sm"
                                data-toggle="modal"
                                data-target="#crearAdministrador"
                            >
                                Crar Nuevo adminitrador
                            </button>
                        </div>

                        <div class="card-body">
                            <table
                                class="table table-bordered table-striped"
                                width="100%"
                            >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th width="100px">Foto</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($administradores as $key=> $value)


                                    <tr>
                     
                                      <td>{{($key+1)}}</td> 
                                      <td>{{($value["name"])}}</td> 
                                      <td>{{($value["email"])}}</td> 
                                      
                
                                          @php

                                          if($value["foto"] == ""){
                    
                                            echo '<td><img src="'.url('/').'/img/administradores/user.jpg" class="img-fluid "></td>';
                    
                                          }else{
                    
                    
                                            echo '<td><img src="'.url('/').'/'.$value["foto"].'" class="img-fluid "></td>';
                    
                                          }
                    
                                          if($value["rol"] == ""){
                    
                                            echo '<td>administrador</td>';
                    
                                          }else{
                    
                                            echo '<td>'.$value["rol"].'</td>';
                                          }
                                           
                                          @endphp
                                       
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-warning btn-sm"
                                                >
                                                    <i
                                                        class="fas fa-pencil-alt text-white"
                                                    ></i>
                                                </button>
                                                <button
                                                    class="btn btn-danger btn-sm"
                                                >
                                                    <i
                                                        class="fas fa-trash-alt"
                                                    ></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer 2
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- Modal Para Crear Adminitrador-->
<div class="modal" id="crearAdministrador">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="modal-header bg-info">
                    <h4 class="modal-titel">Crear Administrador</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>

                <div class="modal-body">
                  <!--Nombre-->
                  <div class="input-group mb-3">
                    <div class="input-group-append input-group-text">
                      <i class="fas fa-user"></i>
                    </div>
                    <input
                    id="name"
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="off"
                    placeholder="Nombre"
                />

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                  </div>
                  <!--Fin Nombre-->
                  <!--Email-->
                  <div class="input-group mb-3">
                    <div class="input-group-append input-group-text">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="off"
                                placeholder="Email"
                            />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                  </div>
                  <!--Fin Email-->
                
                  <!--Password-->
                  <div class="input-group mb-3">
                    <div class="input-group-append input-group-text">
                      <i class="fas fa-key"></i>
                    </div>
                    <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required
                                autocomplete="off"
                                placeholder="Password"
                            />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                  </div>
                  <!--Fin Password-->
                  <!-- Confirmar Password-->
                  <div class="input-group mb-3">
                    <div class="input-group-append input-group-text">
                      <i class="fas fa-key"></i>
                    </div>
                    <input
                                id="password-confirm"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                required
                                autocomplete="off"
                                placeholder="Confirmar Password"
                            />

                  </div>
                  <!--Fin Confirmar Password-->

                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <div>
                        <button
                            type="button"
                            class="btn btn-danger"
                            data-dismiss="modal"
                        >
                            Cerrar
                        </button>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
