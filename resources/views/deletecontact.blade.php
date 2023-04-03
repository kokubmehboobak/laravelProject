
@extends('layouts.main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
      function confirmDelete(id) {
          if (confirm('Are you sure you want to delete this record?')) {
              window.location.href = '/delete/'+id;
          }
      }
  </script>
    @push('title')
        
  
    <title>Edit Details</title>
    @endpush


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      img{
         height:50px  ;
         width: 50px
      }
      #add{
         background-color: rgb(51, 0, 94);
         color: rgb(255, 255, 255);
         width: 210px;
         height: 45px;
         margin-left: 65%;
      }
     
   </style>
</head>
<body>
  @section('main-section')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
    @foreach($users as $contact)
    
    <br>

    
          <tr>
            
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>
            <td><a href = 'edit/{{ $contact->id }}'><img src="https://icon-library.com/images/icon-for-editing/icon-for-editing-14.jpg" alt="Edit"></a></td>
             <td><a href = 'delete/{{ $contact->id }}'onclick="confirmDelete(id )"><img src="data:image/png;base64,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" alt="delete png"></a></td>
       
          </tr>
          
        </tbody>
      
 @endforeach
</table>
<a href="contact">
         
   <button id="add" class="btn btn-primary btn-lg">Add New Details </button>

  </a>

@endsection
</body>
</html>
















