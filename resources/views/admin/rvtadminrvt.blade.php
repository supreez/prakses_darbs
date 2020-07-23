@extends('admin/layout_no_navbar')
@section('tile','"PIKC RVT - uzņemšanas sistēma')
@section('content')
    <form class="form-horizontal" action="rvtadminrvt.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="">Lietotājvārds:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="" name="user">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Parole:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="" name="pwd">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="login">Pieslēgties</button>
            </div>
        </div>
    </form>
    <?php
    if(isset($_POST['login'])){
        if(($_POST['user'] == "") && ($_POST['pwd'] == "")){
            header("Location: view_admin.php");
            session_start();
            $_SESSION["admin"] = "rvtadmin";
        }
        else{
            echo "Lietotājs vai parole nav korekti ievadīti.";
        }
    }


    ?>
@stop
