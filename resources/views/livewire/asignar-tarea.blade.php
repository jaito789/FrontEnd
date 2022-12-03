<div>
    <h1>tareasemp</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de tareasemp</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="addEmpTarea">
            <div class="row">
                <div class="col">
                    <Label>tareasemp</Label>
                    <select class="form-control" name="" id="">
                        <option value="">----empleados----</option>
                        @foreach ($tareasemp as $tareaS)
                            <option value="{{ $tareaS['id'] }}">{{ $tareaS['NombreEmpleado'] }}</option>
                        @endforeach
                    </select>


                    <br>
                    <button wire:click="submit" class="btn btn-success">Registrar</button>
                </div>
                <div class="col">
                    <Label>TAREAS POR ASIGNAR</Label>
                    <select class="form-control" name="" id="">
                        <option value="">----empleados----</option>
                        @foreach ($tareas as $tarea)
                            <option value="{{ $tarea['id'] }}">{{ $tarea['NombreTarea'] }}</option>
                        @endforeach
                    </select>

                </div>

            </div>


            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">tareasemp</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>ID Empresa</th>
                        <th>Nombre Empleado</th>
                        <th>TAREA ASIGNADA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tareasemp as $tareaS)
                        <tr>
                            <td>{{ $tareaS['id'] }}</td>
                            <td>{{ $tareaS['idEmpleado'] }}</td>
                            <td>{{ $tareaS['NombreTarea'] }}</td>
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
