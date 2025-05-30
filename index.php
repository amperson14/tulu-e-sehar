<?php session_start();


include_once 'database.php';
if (!isset($_SESSION['user'])) {
  # code...
  header('Location:./login.php');
}
?>
<?php


//include_once 'database.php';

?>


<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/main.min.css' rel='stylesheet' />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
  <style>
    .box-success .box-title {
      font-weight: bold;
      color: #2e7d32;
    }

    .list-group-item {
      font-size: 15px;
    }

    #calendar {
      max-height: 400px;
      /* margin: 40px auto; */
    }
  </style>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <link rel="icon" href="images/TeS.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="customStyles.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <?php include_once 'header.php'; ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include_once 'sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          School
          <small>Overview</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> School</a></li>
          <li class="active">Stat</li>
        </ol>
      </section>

      <!-- Main content -->


      <section class="content">



        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">

                <?php $sql1 = "SELECT count(*) as a from student";
                $result = $conn->query($sql1);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo "<h3>20</h3>";
                  }
                }

                ?>


                <p>Total Students</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <!-- <a href="#" class="small-box-footer"> <i class="fa fa-users"></i></a> -->
              <a href="#" id="showStudents" class="small-box-footer"> <i class="fa fa-users"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <?php $sql2 = "SELECT count(*) as a from teacher";
                $result = $conn->query($sql2);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo "<h3>6</h3>";
                  }
                }

                ?>


                <p>Total Teachers</p>
              </div>
              <div class="icon">
                <i class="fa fa-black-tie"></i>
              </div>
              <!-- <a href="#" class="small-box-footer"><i class="fa fa-black-tie"></i></a> -->
              <a href="#" id="showTeachers" class="small-box-footer"><i class="fa fa-black-tie"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <?php $sql3 = "SELECT count(*) as a from subject";
                $result = $conn->query($sql3);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo "<h3>" . $row['a'] . "</h3>";
                  }
                }

                ?>

                <p>Ablities</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <!-- <a href="#" class="small-box-footer"><i class="fa fa-book"></i></a> -->
              <a href="#" id="showDisablities" class="small-box-footer"><i class="fa fa-book"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <?php $sql4 = "SELECT count(*) as a from parent";
                $result = $conn->query($sql4);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo "<h3>17</h3>";
                  }
                }

                ?>


                <p>Registered Parents</p>
              </div>
              <div class="icon">
                <i class="fa fa-female"></i>
              </div>
              <a href="#" id="showParents" class="small-box-footer"> <i class="fa fa-female"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="box box-primary">

          <div class="box-body">

            <!-- Calendar Wrapper -->
            <div id="calendarDiv">
              <div class="box-header with-border">
                <h3 class="box-title">Event Calendar</h3>
              </div>
              <div id='calendar'></div>
            </div>

            <!-- Students Div -->
            <div id="studentDiv" style="display: none;">
              <div class="box-header with-border">
                <h3 class="box-title">Students Details</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>Full Name</th>
                      <th>Date of Birth</th>
                      <th>Age</th>
                      <th>Disability</th>
                      <th>Class</th>
                      <th>Parent</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php
                      $jsonData = file_get_contents("students.json");
                      $students = json_decode($jsonData, true);

                      foreach ($students as $index => $student) {
                        echo "
                          <tr>
                            <td>" . ($index + 1) . "</td>
                            <td>" . $student["fullName"] . "</td>
                            <td>" . $student["dob"] . "</td>
                            <td>" . $student["age"] . "</td>
                            <td>" . $student["disability"] . "</td>
                            <td>" . $student["studentClass"] . "</td>
                            <td>" . $student["parentOccupation"] . "</td>
                            <td>
                              <button 
                                type='button' 
                                class='launchModalBtn' 
                                data-toggle='modal' 
                                data-target='#exampleModalCenter' 
                                data-id='" . ($index + 1) . "'
                                data-fullname='" . $student["fullName"] . "'
                                data-dob='" . $student["dob"] . "'
                                data-age='" . $student["age"] . "'
                                data-disability='" . $student["disability"] . "'
                                data-studentclass='" . $student["studentClass"] . "'
                                data-parentoccupation='" . $student["parentOccupation"] . "'
                                data-address='" . ($student["address"] ?? '') . "'
                                data-gender='" . ($student["gender"] ?? '') . "'
                                data-admissiondate='" . ($student["admissionDate"] ?? '') . "'
                                data-parentcat='" . ($student["parentCat"] ?? '') . "'
                                data-image='" . ($student["image"] ?? '') . "'
                                style='border: none; background: none; padding: 0;'
                              >
                                <small class='label bg-orange'>View</small>
                              </button>
                            </td>
                          </tr>
                        ";
                      }
                    ?>





                  


                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
            </div>

            <!-- Teachers Div -->
            <div id="teacherDiv" style="display: none;">
              <div class="box-header with-border">
                <h3 class="box-title">Teachers Details</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Teacher ID</th>
                      <th>Full Name</th>
                      <th>Date of Birth</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>Skills</th>
                      <!-- <th>Actions</th> -->

                    </tr>
                  </thead>
                  <tbody>


                    <?php

                    $sql = "SELECT * FROM teacher";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {
                        echo "<tr><td> " . $row["tid"] . " </td><td> " . $row["fname"] . " " . $row["lname"] . " </td><td> " . $row["bday"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["address"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["skill"] . "</td></tr>";
                      }
                    }

                    ?>


                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
            </div>

            <!-- Disablities Div -->
            <div id="disablityDiv" style="display: none;">
              <div class="box-header with-border">
                <h3 class="box-title">Details</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Ablities</th>
                      <th>Number of Students</th>
                      <!-- <th>Details</th> -->
                      <!-- <th>Action</th> -->

                    </tr>
                  </thead>
                  <tbody>


                    <?php

                    $sql = "SELECT * FROM subject";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {
                        echo "<tr><td> " . $row["title"] . " </td><td> " . $row["description"] . "</td></tr>";
                      }
                    }

                    ?>


                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
            </div>

            <!-- Parents Div -->
            <div id="parentsDiv" style="display: none;">
              <div class="box-header with-border">
                <h3 class="box-title">Parents Details</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Total Parents</th>
                      <th>No. Serving Parents</th>
                      <th>No. Civil Parents</th>

                      <!-- <th>Gender</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Occupation</th> -->
                      <!-- <th>Actions</th> -->

                    </tr>
                  </thead>
                  <tbody>


                    <?php

                    $sql = "SELECT * FROM parent";
                    $result = $conn->query($sql);

                    // if ($result->num_rows > 0) {
                    //  // output data of each row
                    //    while($row = $result->fetch_assoc()) {
                    //     echo "<tr><td> " . $row["pid"]. " </td><td> " . $row["fname"]." ". $row["lname"]. " </td><td> " . $row["nic"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["address"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["job"]. "</td></tr>";
                    //      }
                    //                 }
                    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                              <td> 40 </td>
                              <td> 22 </td>
                              <td> 18 </td>
                            </tr>";
                      }
                    }

                    ?>


                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
            </div>

          </div>




          <script>
            document.addEventListener('DOMContentLoaded', function () {
              const calendarEl = document.getElementById('calendar');

              const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                eventClick: function (info) {
                  alert("Event: " + info.event.title + "\nDescription: " + info.event.extendedProps.description);
                },
                eventDidMount: function (info) {
                  info.el.setAttribute("title", info.event.extendedProps.description); // tooltip
                }
              });

              calendar.render();

              fetch('http://localhost/SchoolMgmtSys/fetch-events.php')
                .then(response => response.json())
                .then(events => {
                  calendar.addEventSource(events);
                })
                .catch(error => {
                  console.error("Failed to load events:", error);
                });
            });
          </script>


          <script>
            const calendarDiv = document.getElementById("calendarDiv");
            const studentDiv = document.getElementById("studentDiv");
            const teacherDiv = document.getElementById("teacherDiv");
            const disablityDiv = document.getElementById("disablityDiv");
            const parentsDiv = document.getElementById("parentsDiv");

            function hideAll() {
              calendarDiv.style.display = "none";
              studentDiv.style.display = "none";
              teacherDiv.style.display = "none";
              disablityDiv.style.display = "none";
              parentsDiv.style.display = "none";
            }

            document.getElementById("showStudents").addEventListener("click", function (e) {
              e.preventDefault();
              hideAll();
              studentDiv.style.display = "block";
            });

            document.getElementById("showTeachers").addEventListener("click", function (e) {
              e.preventDefault();
              hideAll();
              teacherDiv.style.display = "block";
            });

            document.getElementById("showDisablities").addEventListener("click", function (e) {
              e.preventDefault();
              hideAll();
              disablityDiv.style.display = "block";
            });

            document.getElementById("showParents").addEventListener("click", function (e) {
              e.preventDefault();
              hideAll();
              parentsDiv.style.display = "block";
            });
          </script>



          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

          <script>
            $(document).ready(function () {
              $('.launchModalBtn').on('click', function () {
                $('#modalSid').text($(this).data('sid'));
                $('#modalName').text($(this).data('fullname'));
                $('#modalBday').text($(this).data('bday'));
                $('#modalGender').text($(this).data('gender'));
                $('#modalAddress').text($(this).data('address'));
                $('#modalClassroom').text($(this).data('studentclass'));
                $('#modalParent').text($(this).data('parentcat'));
                $('#modalParentOccupation').text($(this).data('parentoccupation'));
                const imageSrc = $(this).data('image') || 'images/default.jpg';
                $('#modalImage').attr('src', imageSrc);
              });
            });
          </script>



        </div>
    </div>
  </div>



  <!--------------------------
        | Your Page Content Here |
        -------------------------->

  </section>

  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include_once 'footer.php'; ?>

  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->


  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Student Details</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <div class="modal-flex" style="display: flex; justify-content: space-between; gap: 20px;">
          <div class="modal-data">
            <p class="modal-inner"><strong>ID:</strong> <span id="modalSid"></span></p>
            <p class="modal-inner"><strong>Name:</strong> <span id="modalName"></span></p>
            <p class="modal-inner"><strong>Age:</strong> <span id="modalAge"></span></p>
            <p class="modal-inner"><strong>Birth Date:</strong> <span id="modalBday"></span></p>
            <p class="modal-inner"><strong>Date of Admission:</strong> <span id="modalAdmissionDate"></span></p>
            <p class="modal-inner"><strong>Disability:</strong> <span id="modalDisability"></span></p>
            <p class="modal-inner"><strong>Parent Occupation:</strong> <span id="modalParentOccupation"></span></p>
            <p class="modal-inner"><strong>Address:</strong> <span id="modalAddress"></span></p>
            <p class="modal-inner"><strong>Class:</strong> <span id="modalClassroom"></span></p>
            <p class="modal-inner"><strong>Parent:</strong> <span id="modalParent"></span></p>
          </div>
          <div class="modal-image">
            <img 
              id="modalImage" 
              src="images/default.jpg" 
              alt="student picture" 
              onerror="this.src='images/default.jpg'" 
              style="width: 150px; height: auto;" 
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".launchModalBtn");

    buttons.forEach((button) => {
      button.addEventListener("click", function () {
        document.getElementById("modalSid").innerText = this.dataset.id || "";
        document.getElementById("modalName").innerText = this.dataset.fullName || "";
        document.getElementById("modalAge").innerText = this.dataset.age || "";
        document.getElementById("modalBday").innerText = this.dataset.dob || "";
        document.getElementById("modalAdmissionDate").innerText = this.dataset.admissiondate || "";
        document.getElementById("modalDisability").innerText = this.dataset.disability || "";
        document.getElementById("modalGender").innerText = this.dataset.gender || "";
        document.getElementById("modalParentOccupation").innerText = this.dataset.parentoccupation || "";
        document.getElementById("modalAddress").innerText = this.dataset.address || "";
        document.getElementById("modalClassroom").innerText = this.dataset.studentclass || "";
        document.getElementById("modalParent").innerText = this.dataset.parentcat || "";
        document.getElementById("modalImage").src = this.dataset.image || "images/default.jpg";
      });
    });
  });
</script>




  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- Select2 -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


  <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>

  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page script -->



  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>


  <script>   $('.select2').select2()
    $('#datepicker').datepicker({
      autoclose: true
    });



    var r = document.getElementById("stat");
    r.className += "active";

  </script>

  <!-- Modal Script -->
  <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })        
  </script>

</body>

</html>