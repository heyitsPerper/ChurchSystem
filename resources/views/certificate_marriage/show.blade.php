@extends('layouts.master')
@section('title','Marriage Informations')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
                Marriage Information
            <a href="{{url('marriage_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
        </div>
        <div class="card-body">
            <div class="row no-gutters">
                <div class="col-md-6 no-gutters">
                    <div class="left-body">
                        <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                            <td class="table-dark text-center" colspan="2">HUSBAND</td>
                            </tr>
                        </thead>
                            <tr>
                                <th>Name of Husband:</th>
                                <td>
                                {{$data->hhusbandname}}
                                </td>
                            </tr>
                            <tr>
                                <th>Date of Birth:</th>
                                <td>
                                {{$data->hbirthdate}}
                                </td>
                            </tr>
                            <tr>
                                <th>Age:</th>
                                <td>
                                {{$data->hage}}
                                </td>
                            </tr>
                            <tr>
                                <th>Place of Birth:</th>
                                <td>
                                {{$data->hbirthplace}}
                                </td>
                            </tr>
                            <tr>
                                <th>Citizenship:</th>
                                <td>
                                {{$data->hcitizenship}}
                                </td>
                            </tr>
                            <tr>
                                <th>Residence:</th>
                                <td>
                                {{$data->hhusbandresidence}}
                                </td>
                            </tr>
                            <tr>
                                <th>Religion:</th>
                                <td>
                                {{$data->hreligion}}
                                </td>
                            </tr>
                            <tr>
                                <th>Civil Status:</th>
                                <td>
                                {{$data->hcivilstatus}}
                                </td>
                            </tr>
                            <tr>
                                <th>Name of Father:</th>
                                <td>
                                {{$data->hfathername}}
                                </td>
                            </tr>
                            <tr>
                                <th>Father's Citizenship:</th>
                                <td>
                                {{$data->hfathercitizenship}}
                                </td>
                            </tr>
                            <tr>
                                <th>Name of Mother:</th>
                                <td>
                                {{$data->hmothername}}
                                </td>
                            </tr>
                            <tr>
                                <th>Mother's Citizenship:</th>
                                <td>
                                {{$data->hmothercitizenship}}
                                </td>
                            </tr>
                            <tr>
                                <th>Witness:</th>
                                <td>
                                {{$data->hwitness}}
                                </td>
                            </tr>
                            <tr>
                                <th>Relationship:</th>
                                <td>
                                {{$data->hwitnessrelationship}}
                                </td>
                            </tr>
                            <tr>
                                <th>Residence:</th>
                                <td>
                                {{$data->hwitnessrelationship}}
                                </td>
                            </tr>
                            <tr>
                                <th>Marriage Contract Date:</th>
                                <td>
                                {{$data->marriagecontractdate}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 no-gutters">
                    <div class="right-body">
                        <table class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                <td class="table-dark text-center" colspan="2">WIFE</td>
                                </tr>
                            </thead>
                                <tr>
                                    <th>Name of Wife:</th>
                                    <td>
                                    {{$data->wwifename}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Date of Birth:</th>
                                    <td>
                                    {{$data->wbirthdate}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Age:</th>
                                    <td>
                                    {{$data->wage}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Place of Birth:</th>
                                    <td>
                                    {{$data->wbirthplace}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Citizenship:</th>
                                    <td>
                                    {{$data->wcitizenship}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Residence:</th>
                                    <td>
                                    {{$data->wwiferesidence}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Religion:</th>
                                    <td>
                                    {{$data->wreligion}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Civil Status:</th>
                                    <td>
                                    {{$data->wcivilstatus}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name of Father:</th>
                                    <td>
                                    {{$data->wfathername}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Father's Citizenship:</th>
                                    <td>
                                    {{$data->wfathercitizenship}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name of Mother:</th>
                                    <td>
                                    {{$data->wmothername}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mother's Citizenship:</th>
                                    <td>
                                    {{$data->wmothercitizenship}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Witness:</th>
                                    <td>
                                    {{$data->wwitness}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Relationship:</th>
                                    <td>
                                    {{$data->wwitnessrelationship}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Residence:</th>
                                    <td>
                                    {{$data->wwitnessrelationship}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name of Server:</th>
                                    <td>
                                    {{$data->minister}}
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection