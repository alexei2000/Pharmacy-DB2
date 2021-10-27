@extends('layouts.appLayout')

@section('content')
<form action="{{route('employees.update', $employee)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-8">
          <div class="page-header float-left">
            <div class="page-title">
              <ol class="breadcrumb text-left">
                <li>Edición de empleado</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-sm-4 d-flex justify-content-end align-items-center">
          <div>
            <button type="submit" class="btn btn-primary btn-sm"><span><i
                  class="mr-2 fas fa-plus"></i></span>Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col">
          <div class=" card">
            <div class="card-header">
              <strong>Datos personales</strong>
            </div>
            <div class="card-body card-block">
              {{-- <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <input name="image" type="file" accept="image/*" required>
                  </div>
                </div>
              </div> --}}
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Nombres</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                      <input class="form-control" name="name" value="{{$employee->name}}" required>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Apellidos</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                      <input class="form-control" name="last_name" value="{{$employee->last_name}}" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="form-control-label">Fecha de nacimiento</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                      <input type="date" class="form-control" name="date_of_birth" value="{{$employee->date_of_birth}}"
                        required onchange="verifyInternshipAge(this.value)">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Cédula</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-male"></i></div>
                      <input class="form-control" name="id" value="{{$employee->id}}" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Género</label>
                    <div class="row">
                      <div class="col d-flex align-items-center" style="height:38px;">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="male" name="gender" id="radio1"
                            @if($employee->gender == "male")
                          checked
                          @endif
                          >
                          <label class="form-check-label" for="radio1">
                            Masculino
                          </label>
                        </div>
                      </div>
                      <div class="col d-flex align-items-center" style="width:38px;">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="female" name="gender" id="radio2"
                            @if($employee->gender == "female")
                          checked
                          @endif>
                          <label class="form-check-label" for="radio2">
                            Femenino
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Numero de teléfono</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                      <input class="form-control" name="phone_number" value="{{$employee->phone_number}}" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Email</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-envelope"></i></div>
                      <input class="form-control" type="email" name="email" value="{{$employee->email}}" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .animated -->
  </div><!-- .content -->
</form>
<div class="clearfix"></div>


@endsection