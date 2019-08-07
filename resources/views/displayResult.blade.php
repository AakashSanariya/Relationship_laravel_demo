<html>
<head>
    <title>Viewing Post Comments</title>
    {{-- BootStrap--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    {{-- //BootStrap--}}


    {{--Datatable--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    {{-- //Datatable--}}
</head>
<body>
    <div class="container">
        <div style="text-align: center"><h2>Post & Video Comments</h2></div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Comment</th>
                <th>Post/Video</th>
            </tr>
            </thead>
            <tbody>
            @foreach($post->comments as $comment)
                <tr>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['body'] }}</td>
                    <td>{{ $comment['body'] }}</td>
                    <td>{{ $comment['commentable_type'] ? "Posts" : "" }}</td>
                </tr>
            @endforeach
            @foreach($video->comments as $comment)
                <tr>
                    <td>{{ $video['title'] }}</td>
                    <td>{{ $video['url'] }}</td>
                    <td>{{ $comment['body'] }}</td>
                    <td>{{ $comment['commentable_type'] ? "Video" : "" }}</td>
                </tr>
            @endforeach
           </tbody>
        </table></br>

        <div style="text-align: center"><h2>Post & Video Tags</h2></div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Tags</th>
            </tr>
            </thead>
            <tbody>
            @foreach($poster->tags as $posterTags)
                <tr>
                    <td>{{ $poster['title'] }}</td>
                    <td>{{ $poster['body'] }}</td>
                    <td>{{ $posterTags['name'] }}</td>
                </tr>
            @endforeach
            @foreach($videoder->tags as $videoTags)
                <tr>
                    <td>{{ $videoder['title'] }}</td>
                    <td>{{ $videoder['url'] }}</td>
                    <td>{{ $videoTags['name'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</html>