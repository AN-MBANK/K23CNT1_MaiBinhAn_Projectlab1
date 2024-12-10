<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('mbamh.mheditsubmit')}}" method="post">
        <div class="card">
            <div class="card-header">
                 <h3>Thông tin chi tiết mh can sua</h3>
            </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="MBAMAMH" class="col-sm-2 col-form-label">MAMH</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control"
                         id="MBAMAMH" name="MBAMAMH" value="{{$MH->MBAMAMH}}">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="MBATENMH" class="col-sm-2 col-form-label">TENMH</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control"
                         id="MBATENMH" name="MBATENMH" value="{{$MH->MBATENMH}}">
                    </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary max-2">Submit</button>
                 <a href="/mh" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    </section>
</body>
</html>