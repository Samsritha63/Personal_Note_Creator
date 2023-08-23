<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        </style>
  </head>
  <body>
    <main>
    <x-app-layout>

    </x-app-layout>
    <div style="padding-left:15%; padding-top:30px;">
        <table style="width:80%">
            <tr>
                <th>Title</th>

                <th>Note</th>

                <th>Update</th>

                <th>Delete</th>
            </tr>
            @foreach($post as $post)
            <tr>
                <!-- <td>{{$post->username}}</td> -->
                <td>
                    {{$post->title}}
                </td>
                <td>
                    {{$post->note}}
                </td>
                <td>
                    <a href="{{url('update_note',$post->id)}}" class="btn btn-primary">Update</a>
                </td>
                <td>
                    <a onclick="return confirm('are you sure to delete this?');" href="{{url('delete_note',$post->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    </main>
  </body>
</html>