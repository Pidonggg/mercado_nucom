@extends('layouts.app')


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employees Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 m-auto">
          <div class="card card-primary">
            <div class="card-header ">
              <h3 class="card-title">Add New Employee</h3>
            </div>




            <form class=" row g-0 needs-validation p-3" action="{{route('employee-mngt.store')}}" method="POST" novalidate>
              @csrf
                <div class="col-md-12 form-group">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" name="firstname" id="validationCustom" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
               
                      <div class="col-md-12 form-group">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" id="validationCustom02" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>

                        <div class="col-md-12 form-group">
                        <label for="validationCustom02" class="form-label">Middle name</label>
                        <input type="text" class="form-control" name="middlename" id="validationCustom02" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>

                      </div>
                      <div class="col-md-12 form-group">
                        <label for="validationCustomUsername" class="form-label">Address</label>
                          <input type="text" class="form-control" name="address" id="validationCustomEmail"  required>
                          <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                     
                      <div class="col-12 form-group">
                        <button class="btn btn-primary" type="submit">darylpogi</button>
                      </div>
              </form>


          </div>
          </div>
        </div>
      </div>
     


     </section>


        <script>
          (() => {
             'use strict'


                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  const forms = document.querySelectorAll('.needs-validation')


                  // Loop over them and prevent submission
                  Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                      if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                      }
                      form.classList.add('was-validated')
                    }, false)
                  })
                })()
        </script>
   
   <table class="table mt-5 bg-gray">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Middlename</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ( $employeetable as $key => $uniqueemployee)
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $uniqueemployee->firstname }}</td>
                            <td scope="col">{{ $uniqueemployee->lastname }}</td>
                            <td scope="col">{{ $uniqueemployee->middlename }}</td>
                            <td scope="col">{{ $uniqueemployee->address }}</td>
                            <td scope="col">
                            <a href="{{  route('uniqueemployee.edit', $uniqueemployee->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            <form action="{{ route('uniqueemployee.destroy', $uniqueemployee->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                          </tr>
                        @endforeach
               </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
