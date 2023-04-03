<html>
   <head>
      <title>View  Records</title>
   </head>
   
   <body>
      
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $contact)
         <tr>
            < <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>
            <td><a href = 'edit/{{ $contact->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>