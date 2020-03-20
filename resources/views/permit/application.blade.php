@extends('layouts.app')

@section('content')

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>


    <div class="container">
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>
    
    <div class="container">
        <div class="card">
            <div class="card-header">Vehicle Permit Application</div>
            <div class="card-body">
                <form action="{{route('SaveApplication')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="FirstName">First Name</label>
                                <input type="text" name="FirstName" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="LastName">Last Name</label>
                                <input type="text" name="LastName" value="" class="form-control">
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Picture">Upload Picture</label>
                                <input type="file" name="Picture" value="" class="form-control full-width">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="DOB">Date of Birth</label>
                                <div class="input-group">
                                    <input type="text" name="DOB" value="" placeholder="DOB" class="form-control datepicker">
                                    <span class="calendar"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Sex">Sex</label>
                                <select name="Sex" class="form-control full-width" data-init-plugin="select2" id="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Date">Application Date</label>
                                <div class="input-group">
                                    <input type="text" name="Date" value="" placeholder="Application date" class="form-control datepicker">
                                    <span class="calendar"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="State">State of Origin</label>
                                <select name="State" class="form-control full-width" data-init-plugin="select2" id="">
                                    <option value="">- Select State -</option>
                                    <option value="Abuja FCT">Abuja FCT</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nassarawa">Nassarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Occupation">Occupation</label>
                                <input type="text" name="Occupation" value="" class="form-control">
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Address">Residential Address</label>
                                <input type="text" name="Address" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Email">Emaill Address</label>
                                <input type="email" name="Email" value="" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="TestScore">Driver's Test Score</label>
                                    <input type="number" name="TestScore" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ApplicationType">Application Type</label>
                                <select name="ApplicationType" class="form-control full-width" data-init-plugin="select2" id="">
                                    <option value="Articulated Vehicle">Articulated Vehicle</option>
                                    <option value="Commercial Vehicle">Commercial Vehicle</option>
                                    <option value="Private Vehicle">Private Vehicle</option>
                                    <option value="Motorcycle">Motorcycle</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="PermitType">Permit Type</label>
                              <select name="PermitType" class="form-control full-width" data-init-plugin="select2" id="">
                                <option value="First Time">First Time</option>
                                <option value="Renewal">Renewal</option>
                              </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Location">Location</label>
                                <select name="Location" class="form-control full-width" data-init-plugin="select2" id="">
                                    <option value="">- Select State -</option>
                                    <option value="Abuja FCT">Abuja FCT</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nassarawa">Nassarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto">
                            <button class="btn bt-sm btn-info" type="submit">Save application</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br><br><br>

    <div class="container">
        <div class="card">
            <div class="card-header">Application Profile & Status</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="permitTable" class="table DataTable table-bordered nowrap">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Sex</th>
                            <th>Application Date</th>
                            <th>Occupation</th>
                            <th>Test Score</th>
                            <th>Application Type</th>
                            <th>Permit Type</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @forelse ($permits as $item)
                                <tr>
                                    <td>{{$item->FirstName}}</td>
                                    <td>{{$item->Email}}</td>
                                    <td>{{$item->Location}}</td>
                                    <td>{{$item->Sex}}</td>
                                    <td>{{$item->Date}}</td>
                                    <td>{{$item->Occupation}}</td>
                                    <td>{{$item->TestScore}}</td>
                                    <td>{{$item->ApplicationType}}</td>
                                    <td>{{$item->PermitType}}</td>
                                    <td>
                                        <span class="badge badge-danger">Pending</span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10"><p style="text-align:center; font-weight: bold;">No Information available</p></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <script>
    //     $(function(){
    //       var options = {
    //           todayHighlight: true,
    //           format: 'yyyy-mm-dd',
    //           autoclose: true,
    //           startDate: '1920-01-01',
    //       };
    //       $('.datepicker').datepicker(options);
    //   });
        $(document).ready(function() {
            $('.datepicker').datetimepicker({
                format: 'dd/mm/yyyy'
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#permitTable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            } );
        } )
    </script>
@endpush