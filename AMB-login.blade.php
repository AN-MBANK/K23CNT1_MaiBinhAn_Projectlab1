<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMB-Login</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('AMBAccount.AMBLoginsubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>AMB-Login</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                    <label for="AMBemail" class="form-label">Email: </label>
                    <input type="email" class="form-control"
                                         id="AMBemail" name="AMBemail" 
                                        placeholder="AMBemail@example.com"/>
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                    
                    </div>
                    <div class="mb-3">
                    <label for="AMBpass" class="form-label">Password: </label>
                    <input type="pass" class="form-control"
                                         id="AMBpass" name="AMBpass" 
                                        placeholder="xxxxx"/>
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                   
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary"> submit </button>
                    @if (Session::has('AMB-error'))
                    <div class="alert alert-danger">
                        {{Session::get('AMB-error')}}
                    </div>
                    
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>