@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

<div class="container">
    <div class="card">
        <div class="card-header">First level Permit Approval</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap">
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
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($permit as $item)
                                @if ($item->Stage2 == 1)
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
                                            @if ($item->Stage2 == 1)
                                                <a href="{{route('AprrovalSupervisor', ['id' => $item->id])}}" class="btn btn-sm btn-success" type="submit">Approve</a>
                                                    <br> <br>
                                                <a href="{{route('RejectSupervisor', ['id' => $item->id])}}" class="btn btn-sm btn-danger" type="submit" >Reject</a>
                                            @else 
                                                <span><span class="badge badge-info">Treated</span></span>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection