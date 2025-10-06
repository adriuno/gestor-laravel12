@extends('plantilla.app')
@section('contenido')
        <!--begin::App Content-->    
    
    <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Usuarios</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">

                    <div>
                        <form action="" method="GET">
                            <div class="input-group">
                                <input name="texto" type="text" class="form-control" placeholder="Buscar usuario" value=""
                                />
                                <button type="submit" class="btn btn-secondary">
                                  <i class="fas fa-search"></i>
                                  Buscar
                                </button>
                                <a href="" class="btn btn-primary"> Nuevo</a>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 100px">Opciones</th>
                          <th style="width: 20px">id</th>
                          <th>Nombre</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td></td>
                          <td> Num. id</td>
                          <td> Nombre
                          </td>
                          <td>aquí el email</td>
                        </tr>
                        
                      </tbody>
                        </table>

                    </div>
 
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
   
              </div>

            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>

        <!--end::App Content-->
@endsection