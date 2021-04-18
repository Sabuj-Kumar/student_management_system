<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <body>
  <ul>
       <li><a class="active" href="student_registration">home<center >
          <p><a href="student_registration"></a></p>
          </center > </a>
          <a href="Show_Student_List">Show_Student_List<center ><p><a href="Show_Student_List"></a></p>
          </center ></a>
           <a href="student_list">Student_Course_List<center ><p><a href="student_list"></a></p>
           </center ></a>
        </li>
    </ul>

  </body>
    <style>
    body {
      background-color: #778899;}
    }
  </style>
</head>

<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 100px;
  background-color: #778899;
}

li a {
  display: block;
  color: #000;
  padding: 0px 5px;
  text-decoration: none;
}

li a.active {
  background-color: #778899;
  color: white;
}

li a:hover:not(.active) {
  background-color: #778899;
  color: white;
}
</style>
</head>
<body>
  <head>
    <meta charset="utf-8">
    <title>student_managment_system</title> <hr/>
  </head>
  <body>

    <center >
      <h1 > Course Registration </h1> <hr/>
    </center>
    <center >
      <h3 > Fill Up The Collums: </h3>
    </center >
  </br>

    <style>
      table {
        font-family: arial, sans-serif;

        border-collapse: collapse;
        width: 30%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 3px;
      }

      tr:nth-child(even) {
        background-color: #778899;
      }
    </style>

    <form action="/course_insert" method="post">

        {{csrf_field()}};
        <table>

        <tr>
                <td> Student name: </td>
                <td> <input type="text" placeholder="Student_name"name="Student_name"> </td>
        </tr>

         <tr>
                <td>  Student ID: </td>
                <td> <input type="text"placeholder="Student_ID" name="Student_ID"> </td>

        </tr>

         <tr>
                <td> Semester: </td>
                <td> <input type="text"placeholder="Semester" name="Semester"> </td>
         </tr>

         <tr>
                <td>Student Email ID: </td>
                <td><input type="text" placeholder="Email_ID"name="Email_ID"> </td>
         </tr>

         <tr>
                  <td> Department Name: </td>
                  <td> <input type="text" placeholder="Department_Name"name="Department_Name"> </td>
         </tr>
         </table>

         <table>
         <tr>
                <td>  Courses: </td>
         </tr>

         <tr>
                  <td> <input type="text" name="Course1" placeholder="SoftWare_Engineering"> </td>
         </tr>

         <tr>
                  <td> </br><input type="text" name="Course2" placeholder="Computer_Architechture"> </td>
         </tr>

         <tr>
                  <td> </br><input type="text" name="Course3" placeholder="Numarical_Method"> </td>
         </tr>

         <tr>
                  <td> </br><input type="text" name="Course4" placeholder="Networking_Engineering"> </td>
         </tr>

         <tr>
                  <td></br> <input type="text" name="Course5" placeholder="Paripheral"> </td>
         </tr>

        </table>

        <center>
              <table>
                    <tr>
                          <td>  <input type="submit"  name="submit" value="SUBMIT"> </td>
                          <td> <a href="course_registration">Reset </a> </td>
                    </tr>
              </table>
        </center>
    </form>
  </body>
</html>
