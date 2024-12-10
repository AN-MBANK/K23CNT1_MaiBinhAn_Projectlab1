<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMB-Dsachmh</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1> danh sach mh</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma mh</th>
                    <th>ten mh</th>
                    <th>so tin chi</th>
                    <th>ma khoa</th>
                </tr>
            </thead>
            <tbody>
                @php
                $stt=0;
                @endphp
                @foreach ($mbamh as $istem )
                @php
                    $stt++;
                @endphp
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$istem->MBAMAMH}}</td>
                    <td>{{$istem->MBATENMH}}</td>
                    <td>
                        <a href="/mh/detail/{{$istem->MBAMAMH}}" class="btn btn-success">chi tiet</a>
                        <a href="/mh/edit/{{$istem->MBAMAMH}}" class="btn btn-primary">sua</a>
                        <a href="/mh/delete/{{$istem->MBAMAMH}}" class="btn btn-primary">xoa</a>
                       
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>