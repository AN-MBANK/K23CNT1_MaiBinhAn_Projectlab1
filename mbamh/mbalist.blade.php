<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMB-dsmh</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

</head>
<body>
        <section class="container my-3">
            <div class="card">
                <div class="card-header">
                    <h1>dsmh</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>mamh</th>
                                <th>tenmh</th>
                                <th>sotinchi</th>
                                <th>chucnang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mbamh as $item )
                            <tr>
                                <td>#</td>
                                <td>{{$item->MBAMAMH}}</td>
                                <td>{{$item->MBATENMH}}</td>
                                <td>{{$item->MBASOTINCHI}}</td>
                                <td>
                                    view/ edit/delete
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">
                                    <h3>tong so mh : {{$mbamh->count()}}</h3>
                                </th>
                            </tr>
                            
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
</body>
</html>