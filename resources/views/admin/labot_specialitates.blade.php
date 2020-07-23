@extends('admin/layout')
@section('title', 'PIKC RVT - Specialitātes')
@section('script')
    <script>
        $(document).ready(function() {

        });
    </script>
@stop
@section('asideLeft')


@stop
@section('content')
    <div class="container-fluid">
        <form  method="post" action="/specialitates">
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
                    <button type="submit" class="btn btn-primary" >Saglabāt</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('asideRight')
@stop

@section('modal')

@stop
