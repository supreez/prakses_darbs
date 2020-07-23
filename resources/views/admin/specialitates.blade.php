@extends('admin/layout')
@section('title','PIKC RVT - Specialitātes')
@section('script')
    <script>
        $(document).ready(function() {

        });
    </script>
@stop
@section('asideLeft')
    <form method="POST" action="/specialitates/">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <label for="">Klasifikācija:</label>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="classification">
                </div>
                <div class="col-md-12">
                    <label for="">Profesija:</label>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="part_title">
                </div><div class="col-md-12">
                    <label for="">Profesijas kods:</label>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="part_code">
                </div><div class="col-md-12">
                    <label for="">Piezīmes:</label>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="note">
                </div>
            </div>
            <div class="form_button">
                <button type="submit" class="btn btn-primary" >Izveidot jaunu specialitāti</button>
            </div>
        </div>
    </form>
@stop
@section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-striped student">
                <thead>
                <tr><th colspan="6" class="table_title">PIKC RVT specialitātes</th></tr>
                <tr>
                    <th>Nr.p.k.</th>
                    <th>Klasifikācija</th>
                    <th>Profesijas nosaukums</th>
                    <th>Profesijas kods</th>
                    <th>Piezīme</th>
                    <th>Darbības</th>
                </tr>
                </thead>
                <tbody>
                @foreach($part as $specialitate => $element)
                    <tr>
                        <td>{{$specialitate + 1}}.</td>
                        <td class="komisijasNosaukums"> {{$element['classification'] }}</td>
                        <td class="komisijasNosaukums"> {{$element['part_title'] }}</td>
                        <td class="komisijasNosaukums"> {{$element['part_code'] }}</td>
                        <td class="komisijasNosaukums"> {{$element['note'] }}</td>
                        <td>
                            <ul class="table_btn">
                                <li>
                                    <input type="hidden" class="form-control" id="" aria-describedby="" placeholder="" name="id" value="">
                                    <a href="{{url('specialitates/labot_specialitates/'.$element['id'].'')}}">
                                        <button type="submit" class="btn btn-primary edit" name="edit">Labot</button>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="/specialitates">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" class="form-control" id="" aria-describedby="" placeholder="" name="id" value="{{ $element['id'] }}">
                                        <button type="submit" class="btn btn-warning delete" value = "">Dzēst</button>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
