<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="{{url('upload.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Laravel Multi Upload</a>
    </nav>
    <br />
    <div class="container">
      <form action="{{route('upload.submit')}}" enctype="multipart/form-data" method="POST">
                @csrf
 <button type="submit" class="btn btn-primary">Submit</button>

 @if (\Session::has('success'))
    <div class="alert alert-success mt-2">
          {{ session('success') }}
        </div>
@endif
      <div class="card mt-2">
    
       <div class="card-header">Multi Upload Image</div>

  

        <div class="card-body">
           <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title">
                        @if($errors->has('title'))
                        <span class="help-block">
                            {{ $errors->first('title') }}
                        </span>
                        @endif
                    </div>

                  <div class="form-group">
            <label for="discount">Galleries:</label>
            <div class="panel panel-default">
    
          <div class="panel-body">
                <ul id="media-list">
                  <li class="myupload">
                      <span>
                          <i class="fa fa-plus" aria-hidden="true"></i>
                          <input type="file" click-type="type2" id="picupload" class="picupload" name="proimage[]" multiple/>
                      </span>
                  </li>
              </ul>
          </div>
        </div>
          </div>
        </div>
         






      </div>
        


 </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('upload.js')}}"></script>
</body>
</html>
