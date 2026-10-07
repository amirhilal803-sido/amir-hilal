<?php
include 'config/connection.php';

if (isset($_GET['action']) && $_GET['action'] == 'update') {

    $student_id = $_GET['student_id'];

    $selStudent = $pdo->prepare(
        "SELECT * FROM students WHERE student_id = :id"
    );

    $selStudent->execute([
        ':id' => $student_id
    ]);

    $StudentRow = $selStudent->fetch(PDO::FETCH_ASSOC);
}
?>

<?php include 'files/head.php';?>



  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
     <?php include'files/topbar.php'?>
      <!--end::Header-->
      <!--begin::Sidebar-->
     <?php include'files/sidebar.php'?>

           <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
                    <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

<div class="container mt-5 mb-5">


<style>
  *{ padding:2px; }

</style>
    
            <div class="card shadow">
                
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Student Registration Form</h4>
                </div>

                <div class="card-body">

                       <form action="models/Student_save.php" method="POST">


                        <!-- student id  in this  form-->
                       

                                               <div class="form-group">
                            <label for="student_id">Student ID</label>
                            <input type="text"
                                   class="form-control"
                                   id="student_id"
                                   name="student_id"
                                   placeholder="Enter student ID" 
                                   value="<?= $StudentRow['student_id']?>"
                                   readonly 
                                   required>
                        </div>

                
                        <!-- Full Name -->
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text"
                                   class="form-control"
                                   id="full_name"
                                   name="full_name"
                                   placeholder="Enter full name"
                                    value="<?= $StudentRow['full_name']?>"

                                   required>
                        </div>

                        <!-- Father Name -->
                        <div class="form-group">
                            <label for="father_name">Father Name</label>
                            <input type="text"
                                   class="form-control"
                                   id="father_name"
                                   name="father_name"
                                   placeholder="Enter father's name"
                                    value="<?= $StudentRow['father_name']?>"

                                   required>
                        </div>

                        <!-- DOB -->
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date"
                                   class="form-control"
                                   id="dob"
                                   name="dob"
                       value="<?= $StudentRow['dob']?>"
                                   required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email"
                                   class="form-control"
                                   id="email"
                                   name="email"
               value="<?= $StudentRow['email']?>"                
                                   placeholder="example@email.com"
                                   required>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel"
                                   class="form-control"
                                   id="phone"
                                            value="<?= $StudentRow['phone']?>"
                                   name="phone"
                                   placeholder="03XXXXXXXXX"
                                   required>
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control"
                                      id="address"
                                      name="address"
                                      rows="3"
                                    
                                      placeholder="Enter complete address"
                                      required> <?= $StudentRow['address']?>"</textarea>
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <label>Gender</label>

                            <div class="custom-control custom-radio">
                                <input type="radio"
                                       id="male"
                                       name="gender"
                                       value="Male"
                                       class="custom-control-input"
                                       required>

                                <label class="custom-control-label"
                                       for="male">
                                    Male
                                </label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio"
                                       id="female"
                                       name="gender"
                                       value="Female"
                                       class="custom-control-input">

                                <label class="custom-control-label"
                                       for="female">
                                    Female
                                </label>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>

                            <select class="form-control"
                                    id="status"
                                    name="status"

                                    required>

                              
                                <option value="active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <!-- Add Date -->
                      

                        <!-- Buttons -->
                        <div class="form-group text-right mb-0">

                            <button type="reset"
                                    class="btn btn-secondary">
                                Reset
                            </button>

                            <input type="submit" name="Update_Student_form"
                                    class="btn btn-primary"
                              value=  "Update Student">
                              
                              <input type="hidden" value="<?= $student_id;?>" name="student_id">
                            

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>



                  </div>
                  <!-- /.card-body -->
         
                  <!-- /.card-footer -->
                </div>
                <!--end::Card-->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
     
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="./js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)-->
    <!--begin::OverlayScrollbars Configure-->
   
    <!--end::Charts follow the colour mode-->

    <!--begin::Color Mode Toggle-->
    <!-- The light/dark/auto switcher ships in adminlte.js as the ColorMode
     module (since 4.1) — no page script needed. Only the no-flash snippet
     in <head> stays inline, because it must run before first paint. -->
    <!--end::Color Mode Toggle-->

    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
