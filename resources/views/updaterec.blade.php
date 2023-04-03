<html>
   
   <head>
      <title>Record | Edit</title>
   </head>
   
   <body>
      <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td>Email</td>
               <td>Subject</td>
               <td>Message</td>
            </tr>
            <tr>
               <td>
                  <input type = 'text' name = 'name' 
                     value = '<?php echo$users[0]->name; ?>'/>
               </td>
               
               <td>
                  <input type = 'text' name = 'email' 
                     value = '<?php echo$users[0]->email; ?>'required/>
               </td>
              
               <td>
                  <input type = 'text' name = 'subject' 
                     value = '<?php echo$users[0]->subject; ?> 'required/>
               </td>
               
               <td>
                  <input type = 'text' name = 'message' 
                     value = '<?php echo$users[0]->message; ?>'required/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Record" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>