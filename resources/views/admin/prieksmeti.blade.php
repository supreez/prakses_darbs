@extends('admin/layout')
@section('title', 'PIKC RVT - Priekšmeti')
@section('script')
    <script>
        $(document).ready(function() {
            $("#show").click(function () {
                $('#add').modal('show');
            })
        });
    </script>
@stop
@section('asideLeft')
    <button type="button" class="btn btn-warning btn_width" id="show">Pievienot priekšmetu</button>

@stop
@section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-striped student">
                <thead>
                <tr><th colspan="3" class="table_title">PIKC RVT prieksmeti</th></tr>
                <tr>
                    <th>Nr.p.k.</th>
                    <th>Priekšmeta nosaukums</th>
                    <th>Darbības</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1.</td>
                    <td>Tīmekļa tehnoloģijas</td>
                    <td>
                        <button type="button" class="btn btn-primary">Skatīt</button>
                        <button type="button" class="btn btn-warning">Labot</button>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Tīmekļa tehnoloģijas</td>
                    <td>
                        <button type="button" class="btn btn-primary">Skatīt</button>
                        <button type="button" class="btn btn-warning">Labot</button>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Datortīkli</td>
                    <td>
                        <button type="button" class="btn btn-primary">Skatīt</button>
                        <button type="button" class="btn btn-warning">Labot</button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
@stop

@section('asideRight')
@stop

@section('modal')
    <div class="modal fade" id="add" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">PIKC RVT darbinieki</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Priekšmeta nosaukums:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Tīmekļa tehnoloģijas">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Saglabāt</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Atcelt</button>
                </div>
            </div>
        </div>
    </div>
@stop
