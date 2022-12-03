<div>
    <h1>TAREAS</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de tareas</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <LAbel>TAREA</LAbel>
                        <input wire:model="nombre" type="text" placeholder="NOMBRE DE LA TAREA" class="form-control" style="width: 450px">
                        <LAbel>DESCRIPCION</LAbel>
                        <input wire:model="nombre" type="text" placeholder="DESCRIPCION" class="form-control" style="width: 450px">

                        <br>
                        <button wire:click="" class="btn btn-success">Registrar</button>
                    </div>
                    <div class="col">
                        <LAbel>FECHA DE INICIO</LAbel>
                        <input wire:model="nombre" type="text" placeholder="FECHA DE INICIO" class="form-control" style="width: 450px">
                        <LAbel>FECHA DE FIN</LAbel>
                        <input wire:model="nombre" type="text" placeholder="FECHA FINAL" class="form-control" style="width: 450px">
                    </div>
                  </div>



            </div>
    </div>
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">EMPRESAS</h3>
            </div>

            <div class="card-body">
            <table class="table table-bordered">
            <thead>
            <tr>
            <th style="width: 10px">ID</th>
            <th>TAREA</th>
            <th>DESCRIPCION</th>
            <th>FECHA DE INICIO</th>
            <th>FECHA FINAL</th>
            </tr>
            </thead>
            <tbody>

                 @foreach ($tareas as $tareas)

                <tr>
                    <td>{{$tareas['id']}}</td>
                    <td>{{$tareas['NombreTarea']}}</td>
                    <td>{{$tareas['Descripcion']}}</td>
                    <td>{{$tareas['FechaInicio']}}</td>
                    <td>{{$tareas['FechaFind']}}</td>
                    </tr>
                @endforeach


            </tbody>
            </table>
            </div>

            <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
            </div>
            </div>
    </div>
