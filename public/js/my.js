
function isEmpty(emptyFieldMsg, findField, exceptField){

    //each cikls ir atsevišķi lai varētu atdalīt konkrētos laukus.
    $(''+findField+':not('+exceptField+')').each(function(){
        var fieldNameText = $("label[for='"+this.id+"']");

        if($(this).val() == ""){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+emptyFieldMsg+"</li>");
        }
        else{

        }
    });

}


function isEmpty2(emptyFieldMsg, findField){

    //each cikls ir atsevišķi lai varētu atdalīt konkrētos laukus.
    $(''+findField+'').each(function(){
        var fieldNameText = $("label[for='"+this.id+"']");

        if($(this).val() == ""){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+emptyFieldMsg+"</li>");
        }
        else{

        }
    });

}

function onlyQutes(onlyQutesMsg, findField, exceptField) {
    //each cikls ir atsevišķi lai varētu atdalīt konkrētos laukus.
    $(''+findField+':not('+exceptField+')').each(function(){
        //only letters and space
        var fieldNameText = $("label[for='"+this.id+"']");

        errorResult = $(this).val().match(/^['"„”\s]*$/);
        if(errorResult == null){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+onlyQutesMsg+"</li>");
        }
        else{

        }
    });
}


function onlyText(letterFieldMsg, findField, exceptField) {
    //each cikls ir atsevišķi lai varētu atdalīt konkrētos laukus.
    $(''+findField+':not('+exceptField+')').each(function(){
        //only letters and space
        var fieldNameText = $("label[for='"+this.id+"']");

        errorResult = $(this).val().match(/^[a-zēūīāšķļņA-ZĒŪĪĀŠĶĻŅ\s]*$/);
        if(errorResult == null){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+letterFieldMsg+"</li>");
        }
        else{

        }
    });
}

function getCode() {
    $("#s_speciality").change(function() {
        var s_speciality = $("#s_speciality").val();
        if(s_speciality == 1){ s_partCode = "S-"; }
        if(s_speciality == 2){ s_partCode = "KT-"; }
        if(s_speciality == 3){ s_partCode = "KD-"; }
        if(s_speciality == 4){ s_partCode = "PRT-"; }
        if(s_speciality == 5){ s_partCode = "PIT-"; }
        if(s_speciality == 6){ s_partCode = "VPRT-"; }
        if(s_speciality == 7){ s_partCode = "VPIT-"; }
        if(s_speciality == 8){ s_partCode = "VDD-"; }
        if(s_speciality == 9){ s_partCode = "N-"; }
        if(s_speciality == 10){ s_partCode = "DD-"; }
        if(s_speciality == 11){ s_partCode = "B-"; }
        if(s_speciality == 12){ s_partCode = "VB-"; }
        if(s_speciality == 13){ s_partCode = "VL-"; }
        if(s_speciality == 14){ s_partCode = "BG-"; }
        if(s_speciality == 15){ s_partCode = "MG-"; }
        if(s_speciality == 16){ s_partCode = "DT-"; }
        if(s_speciality == 17){ s_partCode = "DP-"; }
        if(s_speciality == 18){ s_partCode = "M-"; }
        if(s_speciality == 19){ s_partCode = "A-"; }
        if(s_speciality == 20){ s_partCode = "VA-"; }
        if(s_speciality == 21){ s_partCode = "VAV-"; }
        if(s_speciality == 22){ s_partCode = "ATK-"; }
        if(s_speciality == 23){ s_partCode = "AV-"; }
        if(s_speciality == 24){ s_partCode = "GL-"; }
        if(s_speciality == 25){ s_partCode = "G-"; }
        if(s_speciality == 26){ s_partCode = "ET-"; }
        if(s_speciality == 27){ s_partCode = "VET-"; }
        if(s_speciality == 28){ s_partCode = "TA-"; }
        if(s_speciality == 29){ s_partCode = "TP-"; }
        if(s_speciality == 30){ s_partCode = "L-"; }
        if(s_speciality == 31){ s_partCode = "GK-"; }
        if(s_speciality == 32){ s_partCode = "EA-"; }
        if(s_speciality == 33){ s_partCode = ""; }

        // console.log(s_speciality);
        $.ajax({
            type: "POST",
            url: 'handler_CountSpeciality.php',
            data: {s_speciality: s_speciality, s_partCode:s_partCode},
            success: function (resonpse) {
                console.log(resonpse);
                $("#s_code").val(resonpse);
            }
        });
    });

}



function getCodeStudentForm() {
    var s_speciality = $("#s_speciality").val();
    if(s_speciality == 1){ s_partCode = "S-"; }
    if(s_speciality == 2){ s_partCode = "KT-"; }
    if(s_speciality == 3){ s_partCode = "KD-"; }
    if(s_speciality == 4){ s_partCode = "PRT-"; }
    if(s_speciality == 5){ s_partCode = "PIT-"; }
    if(s_speciality == 6){ s_partCode = "VPRT-"; }
    if(s_speciality == 7){ s_partCode = "VPIT-"; }
    if(s_speciality == 8){ s_partCode = "VDD-"; }
    if(s_speciality == 9){ s_partCode = "N-"; }
    if(s_speciality == 10){ s_partCode = "DD-"; }
    if(s_speciality == 11){ s_partCode = "B-"; }
    if(s_speciality == 12){ s_partCode = "VB-"; }
    if(s_speciality == 13){ s_partCode = "VL-"; }
    if(s_speciality == 14){ s_partCode = "BG-"; }
    if(s_speciality == 15){ s_partCode = "MG-"; }
    if(s_speciality == 16){ s_partCode = "DT-"; }
    if(s_speciality == 17){ s_partCode = "DP-"; }
    if(s_speciality == 18){ s_partCode = "M-"; }
    if(s_speciality == 19){ s_partCode = "A-"; }
    if(s_speciality == 20){ s_partCode = "VA-"; }
    if(s_speciality == 21){ s_partCode = "VAV-"; }
    if(s_speciality == 22){ s_partCode = "ATK-"; }
    if(s_speciality == 23){ s_partCode = "AV-"; }
    if(s_speciality == 24){ s_partCode = "GL-"; }
    if(s_speciality == 25){ s_partCode = "G-"; }
    if(s_speciality == 26){ s_partCode = "ET-"; }
    if(s_speciality == 27){ s_partCode = "VET-"; }
    if(s_speciality == 28){ s_partCode = "TA-"; }
    if(s_speciality == 29){ s_partCode = "TP-"; }
    if(s_speciality == 30){ s_partCode = "L-"; }
    if(s_speciality == 31){ s_partCode = "GK-"; }
    if(s_speciality == 32){ s_partCode = "EA-"; }
    if(s_speciality == 33){ s_partCode = ""; }
    //$("#s_code").val(s_partCode);
    console.log(s_speciality);
    $.ajax({
        type: "POST",
        url: 'handler_CountSpeciality.php',
        data: {s_speciality: s_speciality, s_partCode:s_partCode},
        success: function (resonpse) {
            console.log(resonpse);
            $("#s_code").val(resonpse);
        }
    });
}




function isTime(timeFieldMsg, findField, exceptField){
    $(''+findField+':not('+exceptField+')').each(function(){
        //only letters and space
        var fieldNameText = $("label[for='"+this.id+"']");

        errorResult = $(this).val().match(/^[0-9][0-9]:[0-9][0-9]*$/);
        if(errorResult == null){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+timeFieldMsg+"</li>");
        }
        else{

        }
    });
}

function isDate(dateFieldMsg, findField, exceptField){
    $(''+findField+':not('+exceptField+')').each(function(){
        //only letters and space
        var fieldNameText = $("label[for='"+this.id+"']");

        errorResult = $(this).val().match(/^([0-9]{4})-([0-9]{2})-([0-9]{2})*$/);
        if(errorResult == null){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+dateFieldMsg+"</li>");
        }
        else{

        }
    });
}


function isChecked(checkBoxMsg, findField, fieldNameText){
    var radioButtom = $(''+findField+'').is(":checked");

    if(radioButtom == false){
        $(".waringMsg").append("<li><b>"+fieldNameText+" </b>"+checkBoxMsg+"</li>");
    }
    else{

    }
}


function resetFields(){
    $("input:radio").attr("checked", false);
    $("input:text").val("");
}


function preventDefaultAction(tag){
    $(""+tag+"").submit(function(event) {
        //tiek nodrošināts lai netiek veidots jauna saite.
        event.preventDefault();
    });
}


//Delete Student
function deleteStudent() {
    $("button[id^=delete]").each(function(){
        $(this).click(function () {
            var deleteValueID = $(this).val();
            console.log(deleteValueID);
            $('#deleteStudentModule').modal('show');
            $("#deleteStudent").click(function () {
                $.ajax({
                    type: "POST",
                    url: 'handler_studentDelete.php',
                    data: {deleteValueID:deleteValueID},
                    success: function () {
                        location.reload();
                    }
                });
            });
            $("#canelStudent").click(function () { location.reload(); });
        });
    });
}


function deleteGroup() {
    $("button[id^=delete]").each(function(){
        $(this).click(function () {
            var deleteValueID = $(this).val();
            //  console.log(deleteValueID);
            $('#deleteGroupModule').modal('show');
            $("#deleteGroup").click(function () {
                $.ajax({
                    type: "POST",
                    url: 'handler_GroupDelete.php',
                    data: {deleteValueID:deleteValueID},
                    success: function (response) {
                        location.reload();
                        //    console.log(response);

                    }
                });
            });
            $("#canelStudent").click(function () { location.reload(); });
        });
    });
}




function checkCheckedValues(checkFiledName, fieldName){
    if(key == checkFiledName){
        if(fieldName[key] != ""){
            $('input[name='+key+']').prop('checked', true);

        }
        else {
            $('input[name'+key+']').prop('checked', false);

        }
    }
}

function checkCheckedRadioValues(checkFiledName, fieldName){
    if(key == checkFiledName){
        if(fieldName[key] == "Jā"){
            $('#'+key+'1').prop('checked', true);
            $('#'+key+'2').prop('checked', false);
        }
        else {
            $('#'+key+'2').prop('checked', true);
            $('#'+key+'1').prop('checked', false);
        }
    }
}

function checkCheckedRadioValuesLang(checkFiledName, fieldName){
    if(key == checkFiledName){
        if(fieldName[key] == "angļu"){
            $('#'+key+'1').prop('checked', true);
            $('#'+key+'2').prop('checked', false);
            $('#'+key+'3').prop('checked', false);
        }
        else if(fieldName[key] == "franču") {
            $('#'+key+'1').prop('checked', false);
            $('#'+key+'2').prop('checked', true);
            $('#'+key+'3').prop('checked', false);
        }
        else{
            $('#'+key+'1').prop('checked', false);
            $('#'+key+'2').prop('checked', false);
            $('#'+key+'3').prop('checked', true);
        }
    }
}


function getAvgMarks(){
    var s_endmarks1 = parseInt($("#s_endmarks1").val());
    var s_endmarks2 = parseInt($("#s_endmarks2").val());
    var s_endmarks3 = parseInt($("#s_endmarks3").val()); //informatika
    var s_endmarks4 = parseInt($("#s_endmarks4").val());
    var s_endmarks6 = parseInt($("#s_endmarks6").val());
    var s_endmarks7 = parseInt($("#s_endmarks7").val());
    if((s_endmarks3 == 0) || (s_endmarks3 == "")){
        var endMarkAvg = ((s_endmarks1 + s_endmarks2 + s_endmarks4 + s_endmarks6 + s_endmarks7)/5).toFixed(2);
    }
    else{
        var endMarkAvg = ((s_endmarks1 + s_endmarks2 + s_endmarks3 + s_endmarks4 + s_endmarks6 + s_endmarks7)/6).toFixed(2);
    }

    var avgMark = $("#avgMark").val(endMarkAvg);
}

//function getAvgExamMarks(){
//    var s_exam1 = parseInt($("#s_exam1").val());
//    var s_exam2 = parseInt($("#s_exam2").val());
//    var s_exam3 = parseInt($("#s_exam3").val());
//    var s_exam4 = parseInt($("#s_exam4").val());
//    var endMarkAvg2 = ((s_exam1 + s_exam2 + s_exam2 + s_exam4)/4).toFixed(2);
//    var s_exam = $("#s_exam").val(endMarkAvg2);
//}




//Edit student
function editStudent() {
    $("button[id^=edit]").each(function() {
        $(this).click(function () {

            //  preventDefaultAction("#editStudentForm");
            var editValueID = $(this).val();
            $.ajax({
                type: "POST",
                url: 'handler_studentEdit.php',
                data: {editValueID:editValueID},
                success: function (resonpse) {
                    var jsonData = $.parseJSON(resonpse);
                    var inputFields = $("#editStudentForm").serializeArray();
                    var fieldName = jsonData[0];
                    var recordID = jsonData[0].id;
                    $("#recordID").val(recordID);

                    for(key in fieldName) {
                        $('#'+key+'').val(fieldName[key]);
                        //ceck vaules
                        checkCheckedValues("s_lang1", fieldName);
                        checkCheckedValues("s_lang2", fieldName);
                        checkCheckedValues("s_lang3", fieldName);
                        checkCheckedValues("s_lang4", fieldName);
                        checkCheckedValues("s_info1", fieldName);
                        checkCheckedValues("s_info2", fieldName);
                        checkCheckedValues("s_info3", fieldName);
                        checkCheckedValues("s_info4", fieldName);
                        checkCheckedValues("s_info4", fieldName);
                        checkCheckedRadioValues("s_hotel", fieldName);
                        checkCheckedRadioValuesLang("slang", fieldName);
                        checkCheckedRadioValues("p1", fieldName);
                        checkCheckedRadioValues("p2", fieldName);
                        checkCheckedRadioValues("p3", fieldName);


                        console.log('#'+key+'' + ':' + fieldName[key]);
                    }

                    $('#editGroupModule').modal('show');
                    getCode();
                    // $("#s_info1").removeAttr("id");
                    $("#saveEditData").click(function(){
                        //$("#avgMark").val("");
                        getAvgMarks();
                        $.ajax({
                            type: "POST",
                            url: 'handler_studentUpdate.php',
                            data: $("#editStudentForm").serializeArray(),
                            success:function(response){
                                console.log(response);
                                location.reload();
                            }
                        });
                    });
                    $("#cancelEditData").click(function(){
                        location.reload();
                    });
                }
            });
        });
    });
}
