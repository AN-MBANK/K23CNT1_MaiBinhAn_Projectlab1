<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dsSV</title>
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
   <style>
       
        .btn{
            --bs-btn-line-height: 1;
        }
    </style>
</head>
<body>
    <Section class="container">
        <div class="card">
            <div class="card-header">
                  <h1>dsSV</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>MSV</th>
                            <th>HSV</th>
                            <th>TSV</th>
                            <th>GIOI TINH</th>
                            <th>DATE</th>
                            <th>NOI SINH</th>
                            <th>MK</th>
                            <th>HB</th>
                            <th>DTB</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0;
                        @endphp
                        @foreach ($mbaSVs as $item )
                        @php
                            $stt++;
                        @endphp
                            <tr>
                                <td class="text-center">1</td>
                                <td>{{$item->$MSV}}</td>
                                <td>{{$item->$HSV}}</td>
                                <td>{{$item->$TSV}}</td>
                                <td>{{$item->$GIOITINH}}</td>
                                <td>{{$item->$DATE}}</td>
                                <td>{{$item->$NOISINH}}</td>
                                <td>{{$item->$MKh}}</td>
                                <td class="text-right">{{$item->$HB}}</td>
                                
                                <td class="text-center">view</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>tong so SV: {{$mbaSVs->count()}}</h3>
                <a href="mbaSV/create" class="btn btn-primary"> them </a>
            </div>
        </div>
      
    </Section>
</body>
</html>