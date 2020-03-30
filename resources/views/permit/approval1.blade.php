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
                        @forelse ($permit as $item)
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
                                            <span class="badge badge-info">Awaiting approval</span>
                                        @else
                                            <a href="{{url('approval-admin')}}/{{$item->id}}" class="btn btn-sm btn-success" type="submit" >Approve</a>
                                        @endif
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