@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Add State</div>
            <div class="card-body">
                <form action="{{route('AddState')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="State" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <br>
        <br><br><br>
    
        <div class="card-box">
            <div class="card-header">State List</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

