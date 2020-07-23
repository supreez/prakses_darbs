
@extends('admin/layout')
@section('tile','"PIKC RVT - uzņemšanas sistēma')
@section('script')
    <script>
        // $("id^=delete").each(function() { });

        $("document").ready(function() {
            $('#editGroupModule').modal('hide');
            $('#deleteStudent').modal('hide');
            editStudent();
            deleteStudent();

            //  preventDefaultAction("#studentForm");
            $("#refresh").click(function(){
                location.reload();
            });
        });
    </script>
@stop
@section('content')
    <main class="col-sm-12">
        <button class="btn btn-primary" id="refresh">Atjaunot informāciju</button>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nr.</th>
                    <th>Vārds</th>
                    <th>Uzvārds</th>
                    <th>P.K.</th>
                    <th>Šifrs</th>
                    <th class="table_titles">1. sveš-<br/>valoda</th>
                    <th class="table_titles">1. sveš-<br/>valodas<br/> vērtējums</th>
                    <th class="table_titles">Matem-<br/>ātika</th>
                    <th class="table_titles">Latviešu<br/> valoda</th>
                    <th class="table_titles">Fizika</th>
                    <th class="table_titles">Ķīmija</th>
                    <th class="table_titles">Informātika</th>
                    <th class="table_titles">Vid.<br/>vērtējums</th>
                    <th class="table_titles">Apliecības<br/> vai atestācijas<br/>  foto</th>
                    <th class="table_titles">Sekmju <br/>izraksta <br/>foto</th>
                    <th>Funkcijas</th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 1 ?>
                @foreach($student as $students => $element)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$element->s_name}}</td>
                        <td>{{$element->s_surname}}</td>
                        <td>{{$element->s_personalcode}}</td>
                        <td style='text-align:center'>{{$element->s_code}}</td>
                        <td>{{$element->slang}}</td>
                        <td style='text-align:center'>{{$element->s_endmarks4}}</td>
                        <td style='text-align:center'>{{$element->s_endmarks1}}</td>
                        <td style='text-align:center'>{{$element->s_endmarks2}}</td>
                        <td style='text-align:center'>{{$element->s_endmarks6}}</td>
                        <td style='text-align:center'>{{$element->s_endmarks7}}</td>
                        <td style='text-align:center'>{{$element->s_endmarks3}}</td>
                        <td style='text-align:center'>{{$element->avgMark}}</td>
                        <td style='text-align:center'>
                            <a href="./upload/ {{$element->file_name1}} " data-lightbox=" {{$element->s_personalcode}}" class="example-image-link">
                                <img src="./upload/ {{$element->file_name1}}" class="upload"/>
                            </a>
                        </td>
                        <td style='text-align:center'>
                            <a href="./upload/{{$element->file_name2}}" data-lightbox="{{$element->s_personalcode}}" class="example-image-link">
                                <img src="./upload/{{$element->file_name2}}" class="upload"/>
                            </a>
                        </td>
                        <td>
                            <a href = "./view_PrintStudent?printID= {{$element->id}}" target="_blank" style="text-decoration: none">
                                <button type="button" class="btn btn-primary" id="print {{$element->id}}" value="{{$element->id}}">Printēt iesng.</button>
                            </a>
                            <a href = "./view_PrintStudentDocument?printID= {{$element->id}}" target="_blank" style="text-decoration: none">
                                <button type="button" class="btn btn-primary" id="print {{$element->id}}" value="{{$element->id}}">Printēt apliec.</button>
                            </a>
                            <button type="button" class="btn btn-danger" id="edit{{$element->id}}" value="{{$element->id}}">Labot / Apskatīt</button>
                            <button type="button" class="btn btn-warning"  id="delete{{$element->id}}" value="{{$element->id}}" >Dzēst</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </main>
@stop
