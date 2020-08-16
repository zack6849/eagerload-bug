<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
       <table>
           <thead>
            <tr>
                <th>Author</th>
                <th>Most Recent Post Title</th>
                <th>Most Recent Post Date</th>
            </tr>
           </thead>
           <tbody>
           @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->latestPost->title}}</td>
                <td>{{$user->latestPost->created_at->format('m/d/Y')}}</td>
            </tr>
           @endforeach
           </tbody>
       </table>
    </body>
</html>
