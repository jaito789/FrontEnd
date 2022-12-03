<div>
    <h1>EMPRESAS</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de empresas</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addempresa">
                        <div class="row">
                            <div class="col">
                                <LAbel>CIF</LAbel>
                                <input wire:model="datos.CIF" type="text" placeholder="CIF" class="form-control" style="width: 450px">
                                <LAbel>Nombre de la Empresa</LAbel>
                                <input wire:model="datos.NombreEmpresa" type="text" placeholder="NOMBRE DE LA EMPRESA" class="form-control" style="width: 450px">
                                <LAbel>LOCALIDAD</LAbel>
                                <input wire:model="datos.Localidad" type="text" placeholder="LOCALIDAD" class="form-control" style="width: 450px">
                                <br>
                            </div>
                            <div class="col">
                                <LAbel>DIRECCION</LAbel>
                                <input wire:model="datos.Direccion" type="text" placeholder="DIRECCION" class="form-control" style="width: 450px">
                                <LAbel>DIRECCION</LAbel>
                                <input wire:model="datos.DireccionWeb" type="text" placeholder="DIRECCIONWEB" class="form-control" style="width: 450px">
                                <LAbel>EMAIL</LAbel>
                                <input wire:model="datos.Email" type="text" placeholder="EMAIL" class="form-control" style="width: 450px">
                                <LAbel>TELEFONO</LAbel>
                                <input wire:model="datos.Telefono" type="text" placeholder="TELEFONO" class="form-control" style="width: 450px">

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
            <h3 class="card-title">EMPRESAS</h3>
            </div>

            <div class="card-body">
            <table class="table table-bordered">
            <thead>
            <tr>
            <th style="width: 10px">ID</th>
            <th>NOMBRE DE LA EMPRESA</th>
            <th>CIF</th>
            <th>LOCALIDAD</th>
            <th>DIRECCION</th>
            <th>EMAIL</th>
            <th>DIRECCION WEB</th>
            <th>TELEFONO</th>
            </tr>
            </thead>
            <tbody>

                 @foreach ($empresas as $empresas)

                <tr>
                    <td>{{$empresas['id']}}</td>
                    <td>{{$empresas['NombreEmpresa']}}</td>
                    <td>{{$empresas['CIF']}}</td>
                    <td>{{$empresas['Localidad']}}</td>
                    <td>{{$empresas['Direccion']}}</td>
                    <td>{{$empresas['Email']}}</td>
                    <td>{{$empresas['DireccionWeb']}}</td>
                    <td>{{$empresas['Telefono']}}</td>
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
