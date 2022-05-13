@extends('layout')

@section('content')

<div class="container text-center col-md-12">

    <h1> Detailansicht Medikamente </h1>

    <table style="width:100%">
        <h3>
            <tr>
                <td>
                    <b>Drugs:</b>
                </td>
                <td><?php echo $row[''] ?></td>
            </tr>
        </h3>
        <h4>
            <tr>
                <td>
                    <b>Symptoms:</b>
                </td>
                <td><?php echo $row[''] ?></td>
            </tr>
            <tr>
                <td>
                    <b>Effects</b>
                </td>
                <td><?php echo $row[''] ?></td>
            </tr>
            <tr>
                <td>
                    <b>Pharma</b>
                </td>
                <td><?php echo $row[''] ?></td>
            </tr>
        </h4>
    </table>
    

</div>

@endsection