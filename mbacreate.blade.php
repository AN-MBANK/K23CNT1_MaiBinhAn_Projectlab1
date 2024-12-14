<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them new SV</title>
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
        <section class="container">
            <form action="{{route('mbaSV.mbacreatesubmit')}}" method="post">
                @csrf
                <div class="card-header">
                    <h1> them</h1>
                </div>
                <div class="card-body">
                <div class="mb-3 row">
                    <label for="MSV" class="col-sm-2 col-form-label">MSV</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="MSV" 
                    name="MSV">
                   </div>
                </div>
                <div class="mb-3 row">
                    <label for="HSV" class="col-sm-2 col-form-label">HSV</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="HSV" 
                    name="HSV">
                   </div>
                </div>
                <div class="mb-3 row">
                    <label for="TSV" class="col-sm-2 col-form-label">TSV</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="TSV" 
                    name="TSV">
                   </div>
                </div>
                <div class="mb-3 row">
                    <label for="GIOITINH" class="col-sm-2 col-form-label">GIOITINH</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="GIOITINH" 
                    name="GIOITINH">
                   </div>
                </div>
                <div class="mb-3 row">
                    <label for="DATE" class="col-sm-2 col-form-label">DATE</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="DATE" 
                    name="DATE">
                   </div>
                </div>
                <div class="mb-3 row">
                    <label for="NOISINH" class="col-sm-2 col-form-label">NOISINH</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="NOISINH" 
                    name="NOISINH">
                   </div>
                </div>
                <div class="mb-3 row">
                    <label for="MKh" class="col-sm-2 col-form-label">MKh</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="MKh" 
                    name="MKh">
                   </div>
                </div>
                <div class="mb-3 row">
                    <label for="HB" class="col-sm-2 col-form-label">HB</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="HB" 
                    name="HB">
                   </div>
                </div>
                <div class="mb-3 row">
                    <label for="DTB" class="col-sm-2 col-form-label">DTB</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="DTB" 
                    name="DTB">
                   </div>
                </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">them</button>
                    <a href="/mbaSV" class="btn btn-secondary"> back</a>
                </div>
            </form>
        </section>
</body>
</html>