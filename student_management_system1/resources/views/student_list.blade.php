<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>student_managment_systemanagement</title>
    <body>
    <ul>
         <li><a class="active" href="student_registration">home<center >
            <p><a href="student_registration"></a></p>
            </center > </a><a href="course_registration">course_registration<center >
            <p><a href="course_registration"></a></p>  </center ></a>
            <a href="Show_Student_List">Show_Student_List<center ><p><a href="Show_Student_List"></a></p>
            </center ></a>
          </li>
      </ul>

    </body>
    <head>
        <style>
        body {
          background-color: rgb(0, 125, 0,0.3);}
        }
      </style>
    </head>
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>

  </head>

  <body>

  <center>
  <h1> Student's Courses  </h1> <hr/>

</center>

  <table border = "1">

    <tr>

          <th><h3>Student_name</h3></th>
          <th><h3>Student_ID</h3></th>
          <th><h3>Semester</h3></th>
          <th><h3>Email_ID</h3></th>
          <th><h3>Department_Name</h3></th>
          <th><h3>Course1</h3></th>
          <th><h3> Course2</h3></th>
          <th><h3> Course3</h3></th>
          <th><h3> Course4</h3></th>
          <th><h3> Course5</h3></th>

    </tr>

    @foreach ($gets as $value)
      <tr>

          <td> {{$value->Student_name }}</td>
          <td> {{$value->Student_ID }}</td>
          <td> {{$value->Semester }}</td>
          <td> {{$value->Email_ID }}</td>
          <td> {{$value->Department_Name }}</td>
          <td> {{$value->Course1 }}</td>
          <td> {{$value->Course2 }}</td>
          <td> {{$value->Course3 }}</td>
          <td> {{$value->Course4 }}</td>
          <td> {{$value->Course5 }}</td>

      </tr>
    @endforeach;

  </table>

  </body>
  </html>
