
@extends('admin/layout_no_navbar')
@section('title',"PIKC RVT uzņemšana")
@section('script')
    <script>
        $("document").ready(function(){

            $(".loader").hide();
            // preventDefaultAction("#studentForm");
            $(".errorMsg").hide();
            $(".succMsg").hide();
            getCode();
            $("#send").on('click', function(){

                //ja poga tiek nospiesta vēlreiz likvidēt esošos li tagus un parādīt jaunos.
                $(".waringMsg li").remove();

                //paziņojumi
                var emptyFieldMsg = "Lauks ir tukšs lūdzu aizpildiet šo lauku!";
                var letterFieldMsg = "Lūdzu ievadiet tikai burtus!";
                var timeFieldMsg = "Lūdzu ievadiet korektu laiku formātā 00:00";
                var dateFieldMsg = "Lūdzu ievadiet korketu datumu formātā 0000-00-00 (yyyy-mm-dd)";
                var checkBoxMsg = "Lūdzu aizpildiet izvēlaties kādu no variantiem!";
                var onlyQutesMsg = "Lūdzu visu ievadīto informāciju norādīt bez pēdiņām vai apstrofiem!"

                //   isEmpty(emptyFieldMsg, "input[type=text]", "#s_lang1, #s_lang2, #s_lang3, #s_lang4, #s_mother1, #s_mother2, #s_mother3, #s_mother4, #s_mother5, #s_father1, #s_father2, #s_father3, #s_father4, #s_father5, #g1, #g2, #g3, #g4, #s_code, #file_name1, #file_name2, #p1, #p2, #p3, #p4");

                //onlyQutes(onlyQutesMsg, "input[type=text]", "#s_lang1, #s_lang2, #s_lang3, #s_lang4, #s_mother1, #s_mother2, #s_mother3, #s_mother4, #s_father1, #s_father2, #s_father3, #s_father4, #s_info1, #s_info2, #s_info3, #s_info4, #s_code");

                // onlyText(letterFieldMsg, "input[type=text]", "");

                //getAvgMarks();
                //  getAvgExamMarks();


                $(".errorMsg").fadeIn('slow');

                if($(".waringMsg li").is(":visible") == true){
                    $(".succMsg").hide();
                }
                else{
                    $(".errorMsg").hide();
                    $(".succMsg").show();
                    $("#load").modal('show')
                    $(".loader").show();
                    //FileUpload

                    var nname = $("#s_name").val();
                    var surname = $("#s_surname").val();
                    var pcode = $("#s_personalcode").val();
                    var fd = new FormData();
                    var files = $('#file')[0].files[0];
                    var fd2 = new FormData();
                    var files2 = $('#file2')[0].files[0];



                    if(files  === undefined){

                    }
                    else{
                        $("#file1").val("./upload/"+files.name+"");
                        fd.append('file', files);
                        fd.append('sname', $("#s_name").val());
                        fd.append('ssurname', $("#s_surname").val());
                        fd.append('s_personalcode', $("#s_personalcode").val());
                        var extension = $('#file').val().replace(/^.*\./, '');
                        $("#file_name1").val(""+surname+"_"+nname+"_"+pcode+"_atestats_aplieciba."+extension);

                        $.ajax({
                            url: 'upload.php',
                            type: 'post',
                            data: fd,
                            contentType: false,
                            processData: false,
                            success: function(response){
                                if(response != 2){
                                    //console.log(files);
                                    alert(response);
                                }
                                else{

                                }
                            },
                        });
                    }


                    if(files2  === undefined){

                    }
                    else{
                        $("#file21").val("./upload/"+files2.name+"");
                        fd2.append('file', files2);
                        fd2.append('sname', $("#s_name").val());
                        fd2.append('ssurname', $("#s_surname").val());
                        fd2.append('s_personalcode', $("#s_personalcode").val());
                        var extension2 = $('#file2').val().replace(/^.*\./, '');
                        $("#file_name2").val(""+surname+"_"+nname+"_"+pcode+"_sekmju_izraksts."+extension2);

                        $.ajax({
                            url: 'upload2.php',
                            type: 'post',
                            data: fd2,
                            contentType: false,
                            processData: false,
                            success: function(response){
                                if(response != 2){
                                    //console.log(files);
                                    alert(response);
                                }
                                else{

                                }
                            },
                        });
                    }
                    //

                    $.ajax({
                        type: "POST",
                        url: 'handler_studentSave.php',
                        data: $("#studentForm").serializeArray(),
                        success:function(response){
                            console.log(response);
                        }
                    });
                    $("#load").modal('hide')
                    //	$(".loader").fadeIn();
                    //resetFields();
                    $("#studentForm").fadeOut();

                }
            });
        });
    </script>
@stop
@section('content')
        <div class="form-horizontal" id="pieslegsanas">
            <legend class="login_legend">Iesniegums<br/><p style="font-size: 12px; font-weight: bold;">* - ar zvaigznīti ir atzīmēti obligātie lauki</p></legend>
            <!--	<p><b>* Visus uzņēmuma nosaukumus nepieciešams norādīt bez pēdiņām!</b></p>-->
            <div class="row">
                <div class="alert alert-success succMsg">
                    <strong>Jūs esat reģistrēts!</strong> Lūdzu dodieties pie komisijas vadītājiem.
                    Lai atgriezstos uz sākumu klikšķis šeit: <a href ="https://www.uznemsana.rvt.lv">https://www.uznemsana.rvt.lv</a>
                </div>
                <div class="alert alert-danger errorMsg">
                    <strong>Uzmanību! Pievērsiet lūdzu uzmanību sekojošiem laukiem!</strong>
                    <ul class="waringMsg"></ul>
                </div>
            </div>
            <form id="studentForm" enctype="multipart/form-data">
                <fieldset>
                    <legend class="login_legend">Jūsu dati:</legend>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_name">Vārds:*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_name" class="form-control" id="s_name" placeholder="Jūsu vārds"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_surname">Uzvārds:*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_surname" class="form-control" id="s_surname" placeholder="Jūsu uzvārds"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_personalcode">Personas kods:*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_personalcode" class="form-control" id="s_personalcode" placeholder="000000-00000"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_address">Deklarētā adrese (iela, mājas Nr. dzīvokļa Nr., ciems, pagasts, pilsēta, reģions, pasta kods):*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_address" class="form-control" id="s_address" placeholder="Jūsu deklarētā (iela, mājas Nr. dzīvokļa Nr., ciems, pagasts, pilsēta, reģions, pasta kods)"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_mobile">Telefona nr.:*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_mobile" class="form-control" id="s_mobile" placeholder=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_email">Epasts:*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_email" class="form-control" id="s_email" placeholder="Jūsu epasts"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_education">Izglītība:*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_education" class="form-control" id="s_education" placeholder="Jūsu izglītība, piemēram, pamata"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="e_code">Iegūtās izglītības programmas kods (sekmju izrakstā, 8 ciparu skaitlis):*</label>
                        <div class="col-sm-9">
                            <input type="text" name="e_code" class="form-control" id="e_code" placeholder=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_school">Mācību iestādes nosaukums (kuru pabeidzāt):*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_school" class="form-control" id="s_school" placeholder="Skolas nosaukums"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_year">Pabeigšanas gads:*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_year" class="form-control" id="s_year" placeholder="Piemēram, 2016"/>
                        </div>
                    </div>
                    <legend class="login_legend">Jūsu sekmes:</legend>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="slang">1. svešvalodu:*</label>
                        <div class="col-sm-9">
                            <div class="radio col-sm-12 text-left">
                                <label for="slang"><input type="radio" name="slang" value="angļu" id="slang"/>angļu</label><br/>
                                <label for="slang"><input type="radio" name="slang" value="franču" id="slang"/>franču</label><br/>
                                <label for="slang"><input type="radio" name="slang" value="vācu" id="slang"/>vācu</label><br/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_endmarks4">1. svešvalodas noslēguma vērtējums (10 ballu skalā):*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_endmarks4" class="form-control" id="s_endmarks4" placeholder="1. svešvalodas vērtējums"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_endmarks1">Matemātikas noslēguma vērtējums (10 ballu skalā):*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_endmarks1" class="form-control" id="s_endmarks1" placeholder="Matemātikas vērtējums"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_endmarks2">Latviešu valodas noslēguma vērtējums (10 ballu skalā):*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_endmarks2" class="form-control" id="s_endmarks2" placeholder="Latviešu valodas vērtējums"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_endmarks6">Fizikas noslēguma vērtējums (10 ballu skalā):*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_endmarks6" class="form-control" id="s_endmarks6" placeholder="Fizikas vērtējums"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_endmarks7">Ķīmijas noslēguma vērtējums (10 ballu skalā):*</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_endmarks7" class="form-control" id="s_endmarks7" placeholder="Ķīmijas vērtējums"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_endmarks3">Informātikas noslēguma vērtējums (10 ballu skalā):<br/>Šo vērtējumu ir nepieciešams ievadīt tikai pamatskolas absolventiem</label>
                        <div class="col-sm-9">
                            <input type="text" name="s_endmarks3" class="form-control" id="s_endmarks3" placeholder="" value="0"/>
                        </div>
                    </div>
                    <input type="hidden" name="avgMark" id="avgMark"/>

                    <legend class="login_legend">Radinieka dati:<br/></legend>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_mother">Mātes vārds un uzvārds, tālrunis, epasts:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6 parent"><input type="text" name="s_mother1" class="form-control" id="s_mother1" placeholder="Mātes vārds"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="s_mother2" class="form-control" id="s_mother2" placeholder="Mātes uzvārds"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="s_mother3" class="form-control" id="s_mother3" placeholder="Mātes tālrunis"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="s_mother4" class="form-control" id="s_mother4" placeholder="Mātes epasts"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_father">Tēva vārds un uzvārds, tālrunis, epasts</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6 parent"><input type="text" name="s_father1" class="form-control" id="s_father1" placeholder="Tēva vārds"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="s_father2" class="form-control" id="s_father2" placeholder="Tēva uzvārds"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="s_father3" class="form-control" id="s_father3" placeholder="Tēva tālrunis"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="s_father4" class="form-control" id="s_father4" placeholder="Tēva epasts"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_father">Aizbildņa vārds un uzvārds, tālrunis, epasts</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6 parent"><input type="text" name="g1" class="form-control" id="g1" placeholder="Aizbildņa vārds"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="g2" class="form-control" id="g2" placeholder="Aizbildņa uzvārds"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="g3" class="form-control" id="g3" placeholder="Aizbildņa tālrunis"/></div>
                                <div class="col-sm-6 parent"><input type="text" name="g4" class="form-control" id="g4" placeholder="Aizbildņa epasts"/></div>
                            </div>
                        </div>
                    </div>
                    <legend class="login_legend">Specialitāte:</legend>
                    <div class="form-group">
                        <label class="col-sm-3 control-label login_form" for="s_speciality">Lūdzu pieņemt mani specialitātē:</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="s_speciality" id="s_speciality">
                                @foreach($part as $element)
                                    <option value="{{$element->id}}"> {{$element->note}} - {{$element->part_title}} - {{$element->classification}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="s_code" id="s_code" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label login_form" for="eventName">Saskaņā ar uzņemšanas noteikumiem iesniegšu šādus dokumentus:</label>
                        <div class="col-sm-6">
                            <ul class="documents">
                                <li>izglītības dokuments (kopija);</li>
                                <li>izziņa par veselības stāvokli (veidlapa Nr. 027/u);</li>
                                <li>4 fotogrāfijas (3x4 cm)</li>
                                <li>citi:_______</li>
                            </ul>
                        </div>
                    </div>
                    <legend class="login_legend">Papildinformācija:</legend>
                    <div class="row form-group">
                        <label class="col-sm-3 control-label login_form" for="s_hotel">Vai ir nepieciešama dienesta viesnīca:</label>
                        <div class="control-label col-sm-9">
                            <div class="radio col-sm-12 text-left">
                                <label for="s_hotel"><input type="radio" name="s_hotel" value="Jā" id="s_hotel"/>Jā</label>
                                <label for="s_hotel"><input type="radio" name="s_hotel" value="Nē" id="s_hotel"/>Nē</label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3 control-label login_form" for="p1">Esmu bārenis jā/nē:</label>
                        <div class="control-label col-sm-9">
                            <div class="radio col-sm-12 text-left">
                                <label for="p1"><input type="radio" name="p1" value="Jā" id="p1"/>Jā</label>
                                <label for="p1"><input type="radio" name="p1" value="Nē" id="p1"/>Nē</label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3 control-label login_form" for="p2">Esmu persona ar speciālām vajadzībām:</label>
                        <div class="control-label col-sm-9">
                            <div class="radio col-sm-12 text-left">
                                <label for="p2"><input type="radio" name="p2" value="Jā" id="p2"/>Jā</label>
                                <label for="p2"><input type="radio" name="p2" value="Nē" id="p2"/>Nē</label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3 control-label login_form" for="p3">Esmu no daudzbērnu ģimenes jā/nē:</label>
                        <div class="control-label col-sm-9">
                            <div class="radio col-sm-12 text-left">
                                <label for="p3"><input type="radio" name="p3" value="Jā" id="p3"/>Jā</label>
                                <label for="p3"><input type="radio" name="p3" value="Nē" id="p3"/>Nē</label>
                            </div>
                        </div>
                    </div>
                    <legend class="login_legend">Pielikumi:</legend>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="file">Pielikums "Apliecības vai atestācijas foto<br/> (jpg, jpeg, png un gif failu formātā)"*</label>
                                <input type="file" class="form-control-file" id="file" name="file">
                                <input type="hidden" class="form-control-file1" id="file_name1" name="file_name1" value=""/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="file2">Pielikums "Sekmju izraksta foto <br/>(jpg, jpeg, png un gif failu formātā)"*</label>
                                <input type="file" class="form-control-file" id="file2" name="file2">
                                <input type="hidden" class="form-control-file1" id="file_name2" name="file_name2" value=""/>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="s_date" id="s_date" value="<?php echo date("d-m-y");  ?>"/>
                </fieldset>
                <div class="button">
                    <button type="button" class="btn btn-success" id="send">Sūtīt</button>
                </div>
            </form>
        </div>
@stop
