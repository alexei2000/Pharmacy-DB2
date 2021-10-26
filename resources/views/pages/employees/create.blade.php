@extends('layouts.appLayout')

@section('content')
<form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
      <div class="row m-0">
        <div class="col-sm-8">
          <div class="page-header float-left">
            <div class="page-title">
              <ol class="breadcrumb text-left">
                <li>Creación de empleado</li>
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
        <div class="col-lg-12 col-xl-6">
          <div class=" card">
            <div class="card-header">
              <strong>Datos personales</strong>
            </div>
            <div class="card-body card-block">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <input name="image" type="file" accept="image/*" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Nombres</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                      <input class="form-control" name="name" required>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Apellidos</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                      <input class="form-control" name="last_name" required>
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
                      <input type="date" class="form-control" name="date_of_birth" required
                        onchange="verifyInternshipAge(this.value)">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Cédula</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-male"></i></div>
                      <input class="form-control" name="id" required>
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
                          <input class="form-check-input" type="radio" value="male" name="gender" id="radio1">
                          <label class="form-check-label" for="radio1">
                            Masculino
                          </label>
                        </div>
                      </div>
                      <div class="col d-flex align-items-center" style="width:38px;">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="female" name="gender" id="radio2" checked>
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
                      <input class="form-control" name="phone_number" required>
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
                      <input class="form-control" type="email" name="email" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <strong class="card-title">Datos del trabajo</strong>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label class=" form-control-label">En que farmacia trabaja</label>
                <div class="input-group">
                  <select data-placeholder="Farmacias" class="standardSelect" tabindex="1" name="pharmacy_id">
                    @foreach ($pharmacies as $pharmacy)
                    <option value="{{$pharmacy->id}}">{{$pharmacy->state}} ({{$pharmacy->city}})</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class=" form-control-label">En que puesto trabaja</label>
                <div class="input-group">
                  <select data-placeholder="Puestos" class="standardSelect" tabindex="1" name="job_id">
                    @foreach ($jobs as $job)
                    <option value="{{$job->id}}">{{$job->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-xl-6">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <strong class="card-title">Es farmacéutico</strong>
              <input type="checkbox" name="isPharmacist" value="true" onchange="togglePharmacist(this.checked)" />
            </div>
            <div class="card-body" id="pharmacist-body" style="display: none;">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Número de colegiatura</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-graduation-cap"></i></div>
                      <input class="form-control" name="pharmacist.tuition_number">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Número sanitario</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-file-medical"></i></div>
                      <input class="form-control" name="pharmacist.health_number">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Número de registro</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-address-book"></i></div>
                      <input class="form-control" name="pharmacist.registry_number">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Universidad</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-university"></i></div>
                      <input class="form-control" name="pharmacist.university">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Fecha de graduación</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-calendar"></i></div>
                      <input type="date" class="form-control" name="pharmacist.date_of_graduation">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <strong class="card-title">Es pasante</strong>
              <input name="isIntern" type="checkbox" value="true" onchange="toggleIntern(this.checked)" />
            </div>
            <div class="card-body" id="intern-body" style="display: none;">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Especialidad</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                      <input class="form-control" name="intern.speciality">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Universidad</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fas fa-university"></i></div>
                      <input class="form-control" name="intern.university">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="form-control-label">Fecha de inicio</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                      <input type="date" class="form-control" name="intern.init_date">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class=" form-control-label">Fecha de finalización</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                      <input type="date" class="form-control" name="intern.finish_date">
                    </div>
                  </div>
                </div>
              </div>
              <div id="legal-representative-inputs" style="display: none;">
                <div class="row">
                  <div class="col my-3">
                    <strong>
                      Datos del representante
                    </strong>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label class=" form-control-label">Nombres</label>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                        <input class="form-control" name="representative.name">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label class=" form-control-label">Apellidos</label>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                        <input class="form-control" name="representative.last_name">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label class=" form-control-label">Cédula</label>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                        <input class="form-control" name="representative.id">
                      </div>
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

<script>
  function calculateAge(date_of_birth) {
    var today = new Date();
    var birthday = new Date(date_of_birth);
    var age = today.getFullYear() - birthday.getFullYear();
    var m = today.getMonth() - birthday.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthday.getDate())) {
        age--;
    }
    return age;
}
  function toggleIntern(checked) {
    const internBody =  document.getElementById("intern-body");
    internBody.style.display= checked ? "block" : "none"
  }
  function togglePharmacist(checked) {
    const pharmacistBody =  document.getElementById("pharmacist-body");
    const isInternCheckbox =  document.getElementsByName("isIntern")[0];
    isInternCheckbox.disabled = checked
    if(checked){
      toggleIntern(false)
      isInternCheckbox.checked = false
    }
    pharmacistBody.style.display= checked ? "block" : "none"
  }
  function verifyInternshipAge(value) {
    const legalRepresentativeInputs =  document.getElementById("legal-representative-inputs");
    legalRepresentativeInputs.style.display = calculateAge(value) < 18 ? "block" : "none";

  }
  
</script>

@endsection