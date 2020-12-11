<!DOCTYPE html>
<html>
    <b>Add Record</b><br />

    <form>
    First name: <input id="firstname" name="firstName" type="text" /> <br />

    Last name: <input id="lastname" name="lastName" type="text" /> <br />

    DOB: <input id="dob" name="dob" type="date" /> <br />

    Email: <input id="email" name="email type="text" /> <br/>

    Phone: <input id="phone" name="phone" type="text" /> <br />

   <input onclick="formSubmit()" type="button" value="Add Row" /> <br />

   <input onclick="google.script.host.close()" type="button" value="Exit" />
   </form>
  <script type="text/javascript">
        function formSubmit() {
            google.script.run.getValuesFromForm(document.forms[0]);
        }
    </script>
</html>

<script type="text/javascript">
    function getData(){
   var form = FormApp.openById('1234567890abcdefghijklmnopqrstuvwxyz');
 var formResponses = form.getResponses();
 for (var i = 0; i < formResponses.length; i++) {
   var formResponse = formResponses[i];
   var itemResponses = formResponse.getItemResponses();
   for (var j = 0; j < itemResponses.length; j++) {
     var itemResponse = itemResponses[j];
      var firstName = itemResponse.getResponse(),
      lastName = itemResponse.getResponse(),
      dob = itemResponse.getResponse(),
      email = itemResponse.getResponse(),
      phone = itemResponse.getResponse(),
      insertFormData = copyDataToTable(firstName, lastName, dob, email, phone);
}


 function copyDataToTable(firstName, lastName, dob, email, phone) 
 {
  var conn = Jdbc.getConnection(dbUrl, user, userPwd);

  var stmt = conn.prepareStatement('INSERT INTO myTable (firstName, lastName, dob, email, phone) values (?, ?, ?, ?, ?)');
  stmt.setString(1, firstName);
  stmt.setString(2, lastName);
  stmt.setString(3, dob);
  stmt.setString(4, email);
  stmt.setString(5, phone);
  stmt.execute();
}
</script>