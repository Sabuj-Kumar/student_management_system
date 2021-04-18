<!DOCTYPE html>
<html
  <head>
    <meta charset="utf-8">
    <title>student_registration_system</title>

    <body>
      <center>

      <h1> <u> Student Registration Page </h1> </u>
    </center>
    </body>
    <body>
    <ul>
         <li><a class="active" href="student_registration">home<center >
            <p><a href="student_registration"></a></p>
            </center > </a><a href="course_registration">course_registration<center >
            <p><a href="course_registration"></a></p>  </center ></a>
            <a href="student_list">student_Course_list<center ><p><a href="student_list"></a></p>
            </center ></a>
            <a href="Show_Student_List">Student List<center ><p><a href="Show_Student_List"></a></p>
            </center ></a>
          </li>
      </ul>

    </body>
  </head>
  <head>
      <style>
      body {
        background-color: rgb(0, 125, 0,0.3);}
      }
    </style>
  </head>

  <head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;

        }

        li a {
            display: block;
            color: #000;
            padding: 0px 16px;
            text-decoration: none;
        }

        li a.active {

            color: white;
        }

        li a:hover:not(.active) {

              color: white;
          }
      </style>
  </head>


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
      }
      .container {
        padding: 16px;
      }

    input[type=text], input[type=password] {

        width: 20%;
        padding: 5px;
        margin: 5px 0 10px 0;
        display: inline-block;
        border: none;
    }

    input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
    }

    hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
      }

    .registerbtn {
          background-color: #A9A9A9;
          color: white;
          padding: 16px 20px;
          margin: 3px 0;
          border: none;
          cursor: pointer;
          width: 50%;
          opacity: 0.9;
      }

      .registerbtn:hover {
              opacity: 1;
        }
      a {
          color: dodgerblue;
      }

      u {
          text-decoration: underline;
        }
    </style>

</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #5E5E9A;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #A9A9A9;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

</style>
</head>
  <head >
      <body>
        <form action="/insert" method="post">
            {{csrf_field()}};
            <table>
                <tr>

                  <td> &nbsp&nbsp&nbsp First_Name: </td>
                  <td> <input type="text" name="First_Name" placeholder="First_Name" > </td>
                </tr>

                <tr>
                  <td>&nbsp&nbsp&nbsp Last_Name: </td>
                  <td> <input type="text" name="Last_Name" placeholder="Last_Name" > </td>
                </tr>

                <tr>
                  <td> &nbsp&nbsp&nbsp Address: </td>
                  <td> City: <input  type="text" name="City" placeholder="City" > </td>
                  <td> Division: <input  type="text"name="Division" placeholder="Division" > </td>
                  <td> County: <input type="text" name="County" placeholder="County" > </td>
                </tr>

                <tr>
                  <td>&nbsp&nbsp&nbsp Gender:</td>
                  <td> <input type="text" name="Gender" placeholder="Gender">  </td>
                </tr>

                <tr>
                  <td> &nbsp&nbsp&nbsp Number: </td>
                  <td> <input type="text" name="Phone_Number" placeholder="Phone_Number" > </td>
                </tr>

                <tr>
                  <td>&nbsp&nbsp&nbsp&nbspBirth Date: </td>
                  <td>  <input type="text" name="Birth_Date" placeholder="Birth_Date" > </td>
                </tr>

                <tr>

                  <td> &nbsp&nbsp&nbsp&nbspDepartment Name: </td>
                  <td> <input  type="text" name="Department_Name" placeholder="Department_Name"  ></td>

                </tr>

              </table>

              <center>
              <table>
                    <tr>
                          <td>  <input type="submit"  name="submit" value="SUBMIT"> </td>
                          <td> <a href="student_registration">Reset </a> </td>
                    </tr>
              </table>
              </center>
          </form>
      </body>
    </head>

</html>
