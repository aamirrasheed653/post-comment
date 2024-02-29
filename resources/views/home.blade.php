 <head>
     <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>
     <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js>
 </head>
 <a href="{{ url('/welcome') }}">GoTo Welcome Page</a>

 <div class="container1">
     <h1>This is Home Page!</h1>
     <h3>Posts</h3>
     <table class="table">
         <thead>

             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Name</th>
                 <th scope="col">Type</th>
                 <th scope="col">Comment</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($posts as $post)
                 <tr>
                     <th scope="row"> {{ $post->id }} </th>
                     <td>{{ $post->name }}</td>
                     <td>{{ $post->type }}</td>
                     <td>{{ $post->comment->behave }}</td>
                 </tr>
             @endforeach

         </tbody>
     </table>
 </div>
