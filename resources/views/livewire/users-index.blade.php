<div>
<h1>EMPLEADOS</h1>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registro de empleados</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="guardar">
            <div class="row">
                    <div class="col">
                        <LAbel>Nombre</LAbel>
                        <input type="text" placeholder="Nombre" class="form-control" style="width: 450px">
                        <LAbel>DNI</LAbel>
                        <input type="text" placeholder="DNI" class="form-control" style="width: 450px">
                        <LAbel>EMAIL</LAbel>
                        <input type="text" placeholder="EMAIL" class="form-control" style="width: 450px">
                        <br>
                    </div>
                    <div class="col">
                        <LAbel>TELEFONO</LAbel>
                        <input type="number" placeholder="TELEFONO" class="form-control" style="width: 450px">
                        <LAbel>LOCALIDAD</LAbel>
                        <input type="text" placeholder="LOCALIDAD" class="form-control" style="width: 450px">
                        <LAbel>DIRECCION</LAbel>
                        <input type="text" placeholder="DIRECCION" class="form-control" style="width: 450px">

                    </div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>

                </div>
            </form>


        </div>
</div>
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Empleados</h3>
        </div>

        <div class="card-body">
        <table class="table table-bordered">
        <thead>
        <tr>
        <th style="width: 10px">ID</th>
        <th>ID Empresa</th>
        <th>Nombre</th>
        <th>DNI</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        <th>LOCALIDAD</th>
        <th>DIRECCION</th>
        <th>ACCION</th>
        </tr>
        </thead>
        <tbody>

             @foreach ($empleados as $empleados)

            <tr>
                <td>{{$empleados['id']}}</td>
                <td>{{$empleados['idEmpresa']}}</td>
                <td>{{$empleados['NombreEmpleado']}}</td>
                <td>{{$empleados['DNI']}}</td>
                <td>{{$empleados['Email']}}</td>
                <td>{{$empleados['Telefono']}}</td>
                <td>{{$empleados['Localidad']}}</td>
                <td>{{$empleados['Direccion']}}</td>
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
