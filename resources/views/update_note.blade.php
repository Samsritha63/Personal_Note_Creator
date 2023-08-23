<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    
    <div style="padding-left:40%;padding-top:10%;">
        <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{$data->title}}">
        <br></br>
        <div>
            <label>Update Note</label>
        <textarea type="text" name="note">{{$data->note}}</textarea>
        </div>
        <br></br>
        <div>
        
        <input class="btn btn-primary" type="submit" name="update note">
        </div>
    </div>
        </form>
    </div>
	
  </body>
</html>