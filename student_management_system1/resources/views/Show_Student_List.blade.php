<!DOCTYPE html>
<head>
    <style>
    body {
      background-color: #3CB371;}
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
    padding: 10px;
  }

  tr:nth-child(even) {
    background-color: #3CB371;
  }
</style>

</head>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #3CB371;
}

* {
box-sizing: border-box;
}


.container {
        padding: 10px;
        background-color: white;
}

input[type=text], input[type=password] {
      width: 30%;
      padding: 10px;
      margin: 50px 25px 50px 25px;
      display: inline-block;
      border: none;

}

input[type=text]:focus, input[type=password]:focus {

      .resizedTextbox {width: 100px; height: 200px; padding: 100px}
      background-color: white;
      outline: none;
}


hr {
      border: 1px solid #3CB371;
      margin-bottom: 2px;
}

.registerbtn {
      color: white;
      padding: 10px 20px;
      margin: 20px 0;
      border: none;
      cursor: pointer;
      width: 20%;
      opacity: 0.9;
}

.registerbtn:hover {
opacity: 1;
}

a {
color: dodgerblue;
}

.signin {

text-align: center;
}
</style>
</head>
<head>
  <body>

        <ul>
             <li><a class="active" href="student_registration">HOME<center >
                <p><a href="student_registration"></a></p>
              </center > </a><a href="course_registration">Course_Registration<center >
                <p><a href="course_registration"></a></p>  </center ></a>  <a href="student_list">Student_Course_List<center ><p><a href="student_list"></a></p>
                </center ></a>
              </li>
          </ul>
          <center>

                <h2>Student's Dcomentory Collum's </h2> <hr/>

          </center>
  </body>
    <style>
    body {
      background-color: #2E8B57;}
    }
  </style>

  <body>

      <table border = "1">

          <tr>
              <td>First_Name </td>
              <td> Last_Name </td>
              <td> City </td>
              <td> Division </td>
              <td> County </td>
              <td> Gender </td>
              <td> Phone_Number </td>
              <td> Birth_Date </td>
              <td> Department_Name </td>
          </tr>

          @foreach ($gets as $value)
            <tr>

                <td>{{$value->First_Name }}</td>
                <td>{{$value->Last_Name }}</td>
                <td> {{$value->City }}</td>
                <td> {{$value->Division }}</td>
                <td> {{$value->County }}</td>
                <td> {{$value->Gender }}</td>
                <td> {{$value->Phone_Number }}</td>
                <td> {{$value->Birth_Date }}</td>
                <td> {{$value->Department_Name }}</td>

            </tr>
          @endforeach;
      </table>

  </body>
</head>
