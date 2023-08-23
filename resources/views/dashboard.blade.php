<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style type="text/css">
        table,tr,td{
            border: 1px solid black;
            border-collapse:collapse;

        }
        tr, td{
            background:skyblue;
            text-align:center;
        }
        .Apost {
            background: #93B1A6;
            color: #000;
            padding: 20px;
            margin: 30px;
        }
        .Title {
            font-size : 30px;
        }
        .note  {
            font-size : 15px;
        }
        .buttons {
            display : flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items : center;
            margin-top: 30px;
        }
        </style>
<form action="{{url('add_note')}}" method="post">  
        @csrf
        <div style="padding-left:140px; padding-top:20px;text-align:right;margin-right:100px">
        <input class="btn btn-primary" type="submit" value="Upload a Note" >
        </div>
    </form>
    @foreach($post as $post)
    <div class="Apost">
        <div class="Title"> {{$post->title}}</div>
        <div class="note">   {{$post->note}} </div>
        <div class="buttons">
        <div><a href="{{url('update_note',$post->id)}}" class="btn btn-primary">Update</a></div>
        <div><a onclick="return confirm('are you sure to delete this?');" href="{{url('delete_note',$post->id)}}" class="btn btn-danger">Delete</a>
    </div>
    </div>
    </div>
    @endforeach
     