@extends('layouts.appLayout')

@section('content')
<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
    <div class="row m-0">
      <div class="col-sm-8">
        <div class="page-header float-left">
          <div class="page-title">
            <ol class="breadcrumb text-left">
              <li><a href="#">Creación de empleado</a></li>
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
      <div class="col-xs-6 col-sm-6">
        <div class="card">
          <div class="card-header">
            <strong>Datos personales</strong>
          </div>
          <div class="card-body card-block">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <input type="file" id="formFile">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label class=" form-control-label">Nombres</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                    <input class="form-control">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class=" form-control-label">Apellidos</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fas fa-address-card"></i></div>
                    <input class="form-control">
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
                    <input class="form-control">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class=" form-control-label">Cedula</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                    <input class="form-control">
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
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Masculino
                        </label>
                      </div>
                    </div>
                    <div class="col d-flex align-items-center" style="width:38px;">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                          checked>
                        <label class="form-check-label" for="flexRadioDefault2">
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
                    <input class="form-control">
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
                    <input class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Farmacia en la que trabaja</strong>
          </div>
          <div class="card-body">
            <select data-placeholder="Farmacias" class="standardSelect" tabindex="1">
              @foreach ($pharmacies as $pharmacy)
              <option value="{{$pharmacy->id}}">{{$pharmacy->state}} ({{$pharmacy->city}})</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <strong class="card-title">Farmacéutico</strong>
          </div>
          <div class="card-body">

            <select data-placeholder="Choose a country..." multiple class="standardSelect">
              <option value="" label="default"></option>
              <option value="United States">United States</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Aland Islands">Aland Islands</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="American Samoa">American Samoa</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguilla">Anguilla</option>
              <option value="Antarctica">Antarctica</option>
            </select>

          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <strong class="card-title">Pasante</strong>
          </div>
          <div class="card-body">
            <select data-placeholder="Your Favorite Football Team" multiple class="standardSelect" tabindex="5">
              <option value="" label="default"></option>
              <optgroup label="NFC EAST">
                <option>Dallas Cowboys</option>
                <option>New York Giants</option>
                <option>Philadelphia Eagles</option>
                <option>Washington Redskins</option>
              </optgroup>
              <optgroup label="NFC NORTH">
                <option>Chicago Bears</option>
                <option>Detroit Lions</option>
                <option>Green Bay Packers</option>
                <option>Minnesota Vikings</option>
              </optgroup>
              <optgroup label="NFC SOUTH">
                <option>Atlanta Falcons</option>
                <option>Carolina Panthers</option>
                <option>New Orleans Saints</option>
                <option>Tampa Bay Buccaneers</option>
              </optgroup>
              <optgroup label="NFC WEST">
                <option>Arizona Cardinals</option>
                <option>St. Louis Rams</option>
                <option>San Francisco 49ers</option>
                <option>Seattle Seahawks</option>
              </optgroup>
              <optgroup label="AFC EAST">
                <option>Buffalo Bills</option>
                <option>Miami Dolphins</option>
                <option>New England Patriots</option>
                <option>New York Jets</option>
              </optgroup>
              <optgroup label="AFC NORTH">
                <option>Baltimore Ravens</option>
                <option>Cincinnati Bengals</option>
                <option>Cleveland Browns</option>
                <option>Pittsburgh Steelers</option>
              </optgroup>
              <optgroup label="AFC SOUTH">
                <option>Houston Texans</option>
                <option>Indianapolis Colts</option>
                <option>Jacksonville Jaguars</option>
                <option>Tennessee Titans</option>
              </optgroup>
              <optgroup label="AFC WEST">
                <option>Denver Broncos</option>
                <option>Kansas City Chiefs</option>
                <option>Oakland Raiders</option>
                <option>San Diego Chargers</option>
              </optgroup>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .animated -->
</div><!-- .content -->
<div class="clearfix"></div>

@endsection