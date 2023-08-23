<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
        .addNote {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form1{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .goback {
            position: fixed;

        }
    </style>
  </head>
  <body>
    
  <form class="goback" action="{{url('dashboard')}}" method="get">  
        @csrf
        <div style="padding-left:140px; padding-top:20px;text-align:right;margin-right:100px">
        <input class="btn btn-primary" type="submit" value="Dashboard" >
        </div>
    </form>    <div class="addNote">
   <form class="form1" action="{{url('upload_note')}}" method="POST" enctype="multipart/form-data">
   <label style="padding-left:20%;font-size:20px;font-weight:bold;">Add a Note</label>
        @csrf
        <div >
            
        <label>Title</label>
            <input type="text" name="title" >
           </div>
           <br></br>
           <div>
            <label>Note</label>
            <textarea type="text" name="note"></textarea>
        </div>
        <br></br>
        <div>
            <input class="btn btn-primary" type="submit" >
        </div>
    </form>
</div>
  </body>
</html>