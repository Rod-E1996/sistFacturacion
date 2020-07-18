<?php include ("header.php"); ?>
<div class="container-fluid">
    <h1 class="text-center display-4">Paola Herrera Morán</h1>
    <hr>
    <div class="row mt-4">
        <div class="col-sm-12 col-md-3 mb-2">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active text-truncate text-center" id="list-informacion" data-toggle="list" href="#informacion" role="tab" aria-controls="home">Inf. Relevante / Historia clínica</a>
                <a class="list-group-item list-group-item-action text-truncate text-center" id="list-consultas" data-toggle="list" href="#consultas" role="tab" aria-controls="profile">Consultas</a>
                <a class="list-group-item list-group-item-action text-truncate text-center" id="list-vacunacion" data-toggle="list" href="#vacunacion" role="tab" aria-controls="settings">Vacunación</a>
                <a class="list-group-item list-group-item-action text-truncate text-center" id="list-informe" data-toggle="list" href="#informe" role="tab" aria-controls="settings">Informe médico</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-9">
            <div class="tab-content" id="nav-tabContent">
                <!-- Inf. Relevante / Historia clínica -->
                <div class="tab-pane fade show active table-responsive" style="max-height: 555px;" id="informacion" role="tabpanel" aria-labelledby="list-informacion">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center align-middle">
                                <th>Día</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="text-center align-middle"></td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="">Inf. Relevante / Historia clínica</button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Inf. Relevante / Historia clínica -->
                <!-- Consultas -->
                <div class="tab-pane fade" id="consultas" role="tabpanel" aria-labelledby="list-consultas">
                    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#consulta">Nueva consulta</button>
                    <!-- Modal para una nueva consulta -->
                    <div class="modal fade" id="consulta" tabindex="-1" role="dialog" aria-labelledby="modalConsulta" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalConsulta">Nueva consulta</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <div class="modal-body mx-3">
                                        <div class="form-group">
                                            <label for="">Medicamentos</label>
                                            <input type="text" name="medicamento1" class="form-control mb-1" id="medicamento1">
                                            <input type="text" name="medicamento2" class="form-control mb-1" id="medicamento2">
                                            <input type="text" name="medicamento3" class="form-control mb-1" id="medicamento3">
                                            <input type="text" name="medicamento4" class="form-control mb-1" id="medicamento4">
                                            <input type="text" name="medicamento5" class="form-control" id="medicamento5">
                                        </div>
                                        <div class="form-group">
                                            <label for="diagnostico">Diagnóstico</label>
                                            <textarea name="diagnostico" id="diagnostico" class="form-control" rows="4" maxlength="4096" style="resize: none;" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="indicaciones">Indicaciones</label>
                                            <textarea name="indicaciones" id="indicaciones" class="form-control" rows="4" maxlength="4096" style="resize: none;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    </div>
                            </div>
                        </div>
                    </div>                        
                    <!-- Fin modal para una nueva consulta -->
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center align-middle">
                                <th class="align-middle">Fecha de consulta</th>
                                <th class="align-middle">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="text-center align-middle">10/01/2020</td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="">Detalles</button>
                                        <button class="btn btn-outline-success">Imprimir resumen</button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Consultas -->
                <!-- Vacunación -->
                <div class="tab-pane fade" id="vacunacion" role="tabpanel" aria-labelledby="list-vacunacion">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center align-middle">
                                <th>Día</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="text-center align-middle"></td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="">Vacunación</button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Vacunación -->
                <!-- Informe médico -->
                <div class="tab-pane fade" id="informe" role="tabpanel" aria-labelledby="list-informe">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center align-middle">
                                <th>Día</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="text-center align-middle"></td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="">Informe médico</button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Informe médico -->
            </div>
        </div>
    </div>
</div>