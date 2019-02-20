@extends('layouts.app')

@section('content')
    <div class="container-container" id="app">

        <div class="container">

            <article class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header bg-success" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> I DATOS GENERALES </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Codigo de matricula:<br></label>
                                                    <input type="text" v-model="ficha.codigo_matricula" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Facultad:</label>
                                                    <input type="text" class="form-control" v-model="ficha.facultad">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Escuela:</label>
                                                        <input type="text" class="form-control" v-model="ficha.escuela">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-6" style="">
                                                        <div class="form-group">
                                                            <label>Semestre</label>
                                                            <select class="form-control" v-model="ficha.semestre">
                                                                <option value="01">01</option>
                                                                <option value="02">02</option>
                                                                <option value="03">03</option>
                                                                <option value="04">04</option>
                                                                <option value="05">05</option>
                                                                <option value="06">06</option>
                                                                <option value="07">07</option>
                                                                <option value="08">08</option>
                                                                <option value="09">09</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="">
                                                        <div class="form-group">
                                                            <label>2da carrera:</label>
                                                            <select class="form-control" v-model="ficha.segunda_carrera">
                                                                <option value="NO">NO</option>
                                                                <option value="SI">SI</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Apellidos y nombres:<br></label>
                                                    <input type="text" class="form-control" v-model="ficha.nombre_completo">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fecha de nacimiento:<br></label>
                                                    <input type="date" class="form-control" v-model="ficha.fecha_nacimiento">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label>Edad:</label>
                                                            <input type="number" class="form-control" v-model="ficha.edad">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label>Sexo:</label>
                                                            <select class="form-control" v-model="ficha.sexo">
                                                                <option value="F">F</option>
                                                                <option value="M">M</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>DNI:<br></label>
                                                    <input type="text" class="form-control" v-model="ficha.dni">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Teléfono / celular:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Email:<br></label> <input type="email" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="">
                                                <div class="form-group"> <label>Domicilio actual: Av / Calle / Jirón / Pasaje:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-6" style="">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group"> <label>Nro.:<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group"> <label>Lote:<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group"> <label>Mz:<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"> <label>Cmte.<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"> <label>Zona:<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Barrio / Anexo / Urbanización:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Distrito:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Provincia:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label>Referencia:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label>N° de vehículos con los que se trasporta:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">2 a mas</option>
                                                        <option value="">ninguno</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group"> <label>Lugar de nacimiento<br></label><input type="text" class="form-control" style=""> </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Departamento:<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Provincia:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Distrito:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Estado civil:</label>
                                                    <select id="select" class="form-control" draggable="true">
                                                        <option value="">soltero</option>
                                                        <option value="">casado</option>
                                                        <option value="">divorciado</option>
                                                        <option value="">viudo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Número de hijos:<br></label> <input type="number" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group"><label>Seguro de salud:</label>
                                                    <select id="select" class="form-control" draggable="true">
                                                        <option value="">SIS - Gratuito</option>
                                                        <option value="">SIS - Independiente</option>
                                                        <option value="">ESSALUD</option>
                                                        <option value="">PNP</option>
                                                        <option value="">Particular</option>
                                                        <option value="">Ninguno</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label>En caso de emergencia comunicarse con (parentesco / celular)<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Servicio a solicitar:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Almuerzo</option>
                                                        <option value="">Desayuno y almuerzo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-success" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> II ASPECTO ACADÉMICO </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Colegio de procedencia:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Nacional</option>
                                                        <option value="">Particular</option>
                                                        <option value="">Parroquial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> <label>Nombre de la I.E:<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Año de ingreso a la UNCP:<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"><label>Interrumpio sus estudios:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">no</option>
                                                        <option value="">si</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Tiempo:<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Motivo:<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group"><label>Modalidad de ingreso:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Admisión</option>
                                                        <option value="">CEPRE</option>
                                                        <option value="">Desportista destacado</option>
                                                        <option value="">1ros puestos</option>
                                                        <option value="">Hijo de comunero</option>
                                                        <option value="">Persona con discapacidad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Promedio ponderado sem. Anterior:<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group"><label>Condición academica:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Excepcional</option>
                                                        <option value="">Invicto</option>
                                                        <option value="">Regular</option>
                                                        <option value="">Repitente</option>
                                                        <option value="">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>N° de Créditos semestre actual (Promedio):<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>N° de Créditos semestre anterior:<br></label> <input type="text" class="form-control" style=""> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>N° de Cursos a cargo:<br></label> <input type="number" class="form-control" style=""> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Pagante permanente:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">no</option>
                                                        <option value="">si</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> <label>Años de permanencia en la UNCP:<br></label> <input type="number" class="form-control" style=""> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-success" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> III ASPECTO FAMILIAR </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label>Domicilio de los Padres: Av / Calle / Jirón / Pasaje:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group"> <label>Nro.:<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group"> <label>Lote:<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group"> <label>Mz:<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"> <label>Cmte.<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group"> <label>Zona:<br></label> <input type="text" class="form-control"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Barrio / Anexo / Urbanización:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Distrito:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group"> <label>Provincia:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group"> <label>Departamento:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group"> <label>Telefono / Celular:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Situacion de padres:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Casados</option>
                                                        <option value="">Convivientes</option>
                                                        <option value="">Separados</option>
                                                        <option value="">Divorciados</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label>Orfandad:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Parcial</option>
                                                        <option value="">Total</option>
                                                        <option value="">N.A.</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class=""><b>ESTRUCTURA FAMILIAR:</b></h6>
                                                <ul class="">
                                                    <li>Estado civil :&nbsp; Casado (C)&nbsp; Conviviente (CV)&nbsp; Soltero (S)&nbsp; Viudez (V)&nbsp; Separado (SE)</li>
                                                    <li>Grado de Instruccion :&nbsp; Pirmaria (P)&nbsp; Secundaria (S)&nbsp; Superior Técnico (ST)&nbsp; Superior Universitario (SU)</li>
                                                    <li>Condicion Laboral : Estable (E)&nbsp; Contratado (C) Independiente (I)&nbsp; Pensionista (P)&nbsp; Eventual (EV) Desempleado (DE)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table">
                                                    <thead style="">
                                                    <tr style="">
                                                        <th>Apellidos y nombres</th>
                                                        <th>Edad</th>
                                                        <th>Sexo</th>
                                                        <th>Parentesco</th>
                                                        <th>Est. Civil</th>
                                                        <th>G. Instruc.</th>
                                                        <th>Ocupación</th>
                                                        <th>Condicion Laboral</th>
                                                        <th>Ingreso S/.</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody style="">
                                                    <tr style="">
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">F</option>
                                                                    <option value="">M</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(C) Casado</option>
                                                                    <option value="">(CV) Conviviente</option>
                                                                    <option value="">(S) Soltero</option>
                                                                    <option value="">(V) Viudez</option>
                                                                    <option value="">(SE) Separado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(P) Primaria</option>
                                                                    <option value="">(S) Secundaria</option>
                                                                    <option value="">(ST) Superior Tecnico</option>
                                                                    <option value="">(U) Superior Universitario</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(E) EStable</option>
                                                                    <option value="">(C) Contratado</option>
                                                                    <option value="">(I) Independiente</option>
                                                                    <option value="">(P) Pensionista</option>
                                                                    <option value="">(E) Eventual</option>
                                                                    <option value="">(DE) Desempleado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">F</option>
                                                                    <option value="">M</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(C) Casado</option>
                                                                    <option value="">(CV) Conviviente</option>
                                                                    <option value="">(S) Soltero</option>
                                                                    <option value="">(V) Viudez</option>
                                                                    <option value="">(SE) Separado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(P) Primaria</option>
                                                                    <option value="">(S) Secundaria</option>
                                                                    <option value="">(ST) Superior Tecnico</option>
                                                                    <option value="">(U) Superior Universitario</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(E) EStable</option>
                                                                    <option value="">(C) Contratado</option>
                                                                    <option value="">(I) Independiente</option>
                                                                    <option value="">(P) Pensionista</option>
                                                                    <option value="">(E) Eventual</option>
                                                                    <option value="">(DE) Desempleado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">F</option>
                                                                    <option value="">M</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(C) Casado</option>
                                                                    <option value="">(CV) Conviviente</option>
                                                                    <option value="">(S) Soltero</option>
                                                                    <option value="">(V) Viudez</option>
                                                                    <option value="">(SE) Separado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(P) Primaria</option>
                                                                    <option value="">(S) Secundaria</option>
                                                                    <option value="">(ST) Superior Tecnico</option>
                                                                    <option value="">(U) Superior Universitario</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(E) EStable</option>
                                                                    <option value="">(C) Contratado</option>
                                                                    <option value="">(I) Independiente</option>
                                                                    <option value="">(P) Pensionista</option>
                                                                    <option value="">(E) Eventual</option>
                                                                    <option value="">(DE) Desempleado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">F</option>
                                                                    <option value="">M</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(C) Casado</option>
                                                                    <option value="">(CV) Conviviente</option>
                                                                    <option value="">(S) Soltero</option>
                                                                    <option value="">(V) Viudez</option>
                                                                    <option value="">(SE) Separado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(P) Primaria</option>
                                                                    <option value="">(S) Secundaria</option>
                                                                    <option value="">(ST) Superior Tecnico</option>
                                                                    <option value="">(U) Superior Universitario</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(E) EStable</option>
                                                                    <option value="">(C) Contratado</option>
                                                                    <option value="">(I) Independiente</option>
                                                                    <option value="">(P) Pensionista</option>
                                                                    <option value="">(E) Eventual</option>
                                                                    <option value="">(DE) Desempleado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">F</option>
                                                                    <option value="">M</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(C) Casado</option>
                                                                    <option value="">(CV) Conviviente</option>
                                                                    <option value="">(S) Soltero</option>
                                                                    <option value="">(V) Viudez</option>
                                                                    <option value="">(SE) Separado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(P) Primaria</option>
                                                                    <option value="">(S) Secundaria</option>
                                                                    <option value="">(ST) Superior Tecnico</option>
                                                                    <option value="">(U) Superior Universitario</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(E) EStable</option>
                                                                    <option value="">(C) Contratado</option>
                                                                    <option value="">(I) Independiente</option>
                                                                    <option value="">(P) Pensionista</option>
                                                                    <option value="">(E) Eventual</option>
                                                                    <option value="">(DE) Desempleado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">F</option>
                                                                    <option value="">M</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(C) Casado</option>
                                                                    <option value="">(CV) Conviviente</option>
                                                                    <option value="">(S) Soltero</option>
                                                                    <option value="">(V) Viudez</option>
                                                                    <option value="">(SE) Separado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(P) Primaria</option>
                                                                    <option value="">(S) Secundaria</option>
                                                                    <option value="">(ST) Superior Tecnico</option>
                                                                    <option value="">(U) Superior Universitario</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">(E) EStable</option>
                                                                    <option value="">(C) Contratado</option>
                                                                    <option value="">(I) Independiente</option>
                                                                    <option value="">(P) Pensionista</option>
                                                                    <option value="">(E) Eventual</option>
                                                                    <option value="">(DE) Desempleado</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><input type="number" class="form-control"> </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"> <label>N° de integrantes de la familia:<br></label> <input type="number" class="form-control"> </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"> <label>N° de integrantes dependientes econonomicamente:<br></label> <input type="number" class="form-control"> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Reside actualmente con:</label>
                                                            <select id="select" class="form-control">
                                                                <option value="">Ambos padres</option>
                                                                <option value="">Padre</option>
                                                                <option value="">Madre</option>
                                                                <option value="">Hermanos</option>
                                                                <option value="">Solo</option>
                                                                <option value="">Cónyuge</option>
                                                                <option value="">Otros</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Las relaciones familiares son:</label>
                                                            <select id="select" class="form-control">
                                                                <option value="">Buenas</option>
                                                                <option value="">Regulares</option>
                                                                <option value="">Deficientes</option>
                                                                <option value="">Malas</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Deficiencia familiar:</label>
                                                            <select id="select" class="form-control">
                                                                <option value="">Abandono peterno</option>
                                                                <option value="">Abandono materno</option>
                                                                <option value="">Escaza comunicacion</option>
                                                                <option value="">Autoritarismo</option>
                                                                <option value="">N.A.</option>
                                                                <option value="">Otros</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-success" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> IV ASPECTO ECONOMICO </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Ingreso mensual familiar:<br></label> <input type="number" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"><label>Depende economicamente de:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Ambos padres</option>
                                                        <option value="">Solo papá</option>
                                                        <option value="">Solo mamá</option>
                                                        <option value="">Hermanos</option>
                                                        <option value="">Parientes</option>
                                                        <option value="">De sí mismo</option>
                                                        <option value="">Otros especifique</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"> <label>Otros especifique:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"><label>Apoyo que recibe es:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Integral</option>
                                                        <option value="">Parcial</option>
                                                        <option value="">Ninguno</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Desempeña alguna actividad económica:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">si</option>
                                                        <option value="">no</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Ocupación:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Ingreso mensual:<br></label> <input type="number" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Su labor es:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Permanente</option>
                                                        <option value="">Sólo fines de semana</option>
                                                        <option value="">Esporadica</option>
                                                        <option value="">Estable</option>
                                                        <option value="">Contratado</option>
                                                        <option value="">Independiente</option>
                                                        <option value="">Eventual</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Lo perjudica en sus estudios:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">no</option>
                                                        <option value="">si</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Como:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-success" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"> V ASPECTO VIVIENDA (Donde actualmente radica el alumno) </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Tenencia de Vivienda:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Propia</option>
                                                        <option value="">Alquilada</option>
                                                        <option value="">Hipoteca</option>
                                                        <option value="">Anticresis</option>
                                                        <option value="">Alojado/guardiania</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Tenencia de Vivienda:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Casa</option>
                                                        <option value="">Departamento</option>
                                                        <option value="">Habitación</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>N° de habitaciones sin contar (servicios)<br></label> <input type="number" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Material de construción:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Noble</option>
                                                        <option value="">Mixto</option>
                                                        <option value="">Rustico/adobe/tapia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Estado de construcción:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Acabada</option>
                                                        <option value="">En construcción</option>
                                                        <option value="">Prefabricado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12"></div>
                                        </div><label>Servicios de la vivienda:</label>
                                        <div class="row">
                                            <div class="col-md-12" style="">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Luz</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Agua</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                    <label class="form-check-label" for="inlineCheckbox3">Desague</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                    <label class="form-check-label" for="inlineCheckbox4">Teléfono</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                                    <label class="form-check-label" for="inlineCheckbox5">Internet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                                    <label class="form-check-label" for="inlineCheckbox6">TV por cable</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-success" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> VI DATOS SOBRE LA ALIMENTACIÓN (Puede marcar mas de una opción) </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Se alimenta en:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Su casa</option>
                                                        <option value="">Pensión</option>
                                                        <option value="">Comedor universitario</option>
                                                        <option value="">Otro especifique</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Otro especifique:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Su regimen es:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">Desayuno</option>
                                                        <option value="">Media mañana</option>
                                                        <option value="">Almuerzo</option>
                                                        <option value="">Lonche</option>
                                                        <option value="">Cena</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Costo de alimentación semanal S/.:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"><label>Tuvo acceso al comedor años anteriores:</label>
                                                    <select id="select" class="form-control">
                                                        <option value="">no</option>
                                                        <option value="">si</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group"> <label>Año(s):<br></label> <input type="number" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-success" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven"> VII DATOS SOBRE SALUD </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-ms-16">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Enfermedad</th>
                                                        <th>Recibe Tratamiento</th>
                                                        <th>Presenta discapacidad</th>
                                                        <th>Tipo de discapacidad</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>Padre:</th>
                                                        <td>
                                                            <div class="form-group"> <input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select></div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">ninguno</option>
                                                                    <option value="">motriz</option>
                                                                    <option value="">visual</option>
                                                                    <option value="">mental</option>
                                                                    <option value="">auditivo</option>
                                                                    <option value="">de lenguaje</option>
                                                                </select></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Madre:</th>
                                                        <td>
                                                            <div class="form-group"> <input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select></div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">ninguno</option>
                                                                    <option value="">motriz</option>
                                                                    <option value="">visual</option>
                                                                    <option value="">mental</option>
                                                                    <option value="">auditivo</option>
                                                                    <option value="">de lenguaje</option>
                                                                    <option value="">otros</option>
                                                                </select></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Hermanos:</th>
                                                        <td>
                                                            <div class="form-group"> <input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select></div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">ninguno</option>
                                                                    <option value="">motriz</option>
                                                                    <option value="">visual</option>
                                                                    <option value="">mental</option>
                                                                    <option value="">auditivo</option>
                                                                    <option value="">de lenguaje</option>
                                                                    <option value="">otros</option>
                                                                </select></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Estudiante:</th>
                                                        <td>
                                                            <div class="form-group"> <input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select></div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">ninguno</option>
                                                                    <option value="">motriz</option>
                                                                    <option value="">visual</option>
                                                                    <option value="">mental</option>
                                                                    <option value="">auditivo</option>
                                                                    <option value="">de lenguaje</option>
                                                                    <option value="">otros</option>
                                                                </select></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>otros</th>
                                                        <td>
                                                            <div class="form-group"> <input type="text" class="form-control"> </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">no</option>
                                                                    <option value="">si</option>
                                                                </select></div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group"><select id="select" class="form-control">
                                                                    <option value="">ninguno</option>
                                                                    <option value="">motriz</option>
                                                                    <option value="">visual</option>
                                                                    <option value="">mental</option>
                                                                    <option value="">auditivo</option>
                                                                    <option value="">de lenguaje</option>
                                                                    <option value="">otros</option>
                                                                </select></div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-success" id="headingEight">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"> VIII ASPECTOS PSICOSOCIAL </button>
                                    </h2>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12"><label>¿Que problemas sociales has identificado en tu Universidad?</label></div>
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Alcoholismo</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Drogadicción</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                    <label class="form-check-label" for="inlineCheckbox3">Desnutrición</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                    <label class="form-check-label" for="inlineCheckbox4">Prostitución</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                                    <label class="form-check-label" for="inlineCheckbox5">Embarazos no deseados</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                                    <label class="form-check-label" for="inlineCheckbox6">Violencia de pareja</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                                                    <label class="form-check-label" for="inlineCheckbox7">Mal trato a la persona</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                                                    <label class="form-check-label" for="inlineCheckbox8">Delincuencia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="">
                                                <div class="form-group"> <label>Otros:<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> <label>¿Cual es tu sugerencia?<br></label> <input type="text" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-xs-12">
            <div class="text-center">
                <button class="btn btn-primary" @click.prevent="PostFicha()"><i class="fa fa-save"></i> GUARDAR</button>
            </div>
        </div>
    </div>
    {{--<script src="{{ asset('js/home.js') }}" defer></script>--}}
@endsection
