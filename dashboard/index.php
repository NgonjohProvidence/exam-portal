<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Portal Sidebar</title>
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap5.3.css" rel="stylesheet">
       <!-- link CSS -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/reglog.css">
   
</head>
<body>
    <!-- Mobile Toggle Button -->
    <button class="sidebar-toggle d-lg-none" id="sidebarToggle">
        <i class="bi bi-list"></i>
    </button>

    <!-- Sidebar Navigation -->
    <nav class="sidebar" id="sidebar">
        <div class="logo-section">
            <h2>ExamPortal</h2>
            <p>Management System</p>
        </div>
        
        <div class="nav-menu d-flex flex-column">
            <div class="nav-item">
                <a href="#" class="nav-link active" data-section="dashboard">
                    <i class="bi bi-grid nav-icon"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </div>
            
            <div class="nav-item">
                <a href="#" class="nav-link" data-section="papers">
                    <i class="bi bi-person-badge nav-icon"></i>
                    <span class="nav-text">Admin</span>
                </a>
            </div>
            
            <div class="nav-item">
                <a href="#" class="nav-link" data-section="teachers">
                    <i class="bi bi-person-check nav-icon"></i>
                    <span class="nav-text">Teachers</span>
                </a>
            </div>
            
            <div class="nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-section="classes">
                    <i class="bi bi-people nav-icon"></i>
                    <span class="nav-text">STUDENTS</span>
                    <i class="bi bi-chevron-down dropdown-arrow ms-auto"></i>
                </a>
                <div class="submenu">
                    <a href="#" class="submenu-item" data-section="form-one">Form One</a>
                    <a href="#" class="submenu-item" data-section="form-two">Form Two</a>
                    <a href="#" class="submenu-item" data-section="form-three">Form Three</a>
                    <a href="#" class="submenu-item" data-section="form-four">Form Four</a>
                    <a href="#" class="submenu-item" data-section="form-five">Form Five</a>
                    <a href="#" class="submenu-item" data-section="lower-sixth">Lower Sixth</a>
                    <a href="#" class="submenu-item" data-section="upper-sixth">Upper Sixth</a>
                </div>
            </div>
            
            <div class="nav-item">
                <a href="#" class="nav-link" data-section="question-papers">
                    <i class="bi bi-file-earmark-text nav-icon"></i>
                    <span class="nav-text"> EXAM  Papers</span>
                </a>
            </div>
            
            <div class="nav-item">
                <a href="#" class="nav-link" data-section="mark-guide">
                    <i class="bi bi-clipboard-check nav-icon"></i>
                    <span class="nav-text">Mark Guide</span>
                </a>
            </div>

            <!-- Logout Button at the bottom -->
            <div class="nav-item mt-auto">
                <a href="#" class="nav-link logout-btn" id="logoutBtn">
                    <i class="bi bi-box-arrow-left nav-icon"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content" id="mainContent">
        <!-- Dashboard Section -->
        <div id="dashboard" class="content-section active">
            <div class="content-header">
                <h1>Dashboard</h1>
                <p>Overview of your exam portal system statistics and performance</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="stat-card blue">
                        <div class="stat-header">
                            <span class="stat-title">Total Students</span>
                            <div class="stat-icon blue">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>
                        <div class="stat-number">1,247</div>
                        <div class="stat-description">Enrolled across all classes</div>
                        <div class="stat-trend trend-up">
                            <i class="bi bi-arrow-up"></i> +12% from last month
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stat-card green">
                        <div class="stat-header">
                            <span class="stat-title">Active Teachers</span>
                            <div class="stat-icon green">
                                <i class="bi bi-person-check"></i>
                            </div>
                        </div>
                        <div class="stat-number">42</div>
                        <div class="stat-description">Teaching staff members</div>
                        <div class="stat-trend trend-up">
                            <i class="bi bi-arrow-up"></i> +3 new this semester
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stat-card purple">
                        <div class="stat-header">
                            <span class="stat-title">Papers</span>
                            <div class="stat-icon purple">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                        </div>
                        <div class="stat-number">186</div>
                        <div class="stat-description">Available in question bank</div>
                        <div class="stat-trend trend-up">
                            <i class="bi bi-arrow-up"></i> +24 added this week
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stat-card orange">
                        <div class="stat-header">
                            <span class="stat-title">Pending Exams</span>
                            <div class="stat-icon orange">
                                <i class="bi bi-clock"></i>
                            </div>
                        </div>
                        <div class="stat-number">23</div>
                        <div class="stat-description">Scheduled for this month</div>
                        <div class="stat-trend trend-down">
                            <i class="bi bi-arrow-down"></i> 5 completed last week
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stat-card red">
                        <div class="stat-header">
                            <span class="stat-title">Average Score</span>
                            <div class="stat-icon red">
                                <i class="bi bi-graph-up"></i>
                            </div>
                        </div>
                        <div class="stat-number">78.5%</div>
                        <div class="stat-description">Overall performance rate</div>
                        <div class="stat-trend trend-up">
                            <i class="bi bi-arrow-up"></i> +2.3% improvement
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stat-card teal">
                        <div class="stat-header">
                            <span class="stat-title">Active Classes</span>
                            <div class="stat-icon teal">
                                <i class="bi bi-collection"></i>
                            </div>
                        </div>
                        <div class="stat-number">7</div>
                        <div class="stat-description">From Form 1 to Upper Sixth</div>
                        <div class="stat-trend trend-up">
                            <i class="bi bi-arrow-up"></i> All classes active
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Admin Section -->
       <div id="papers" class="content-section">
    <div class="content-header">
        <h1>Admin Tools</h1>
        <p>Administrative controls for exam management</p>
    </div>
    
    <div class="cards-container">
        <!-- Admin Management Card -->
        <div class="admin-card">
            <div class="card-header">
                <h3>Admin Management</h3>
            </div>
            <div class="card-content">
                <p>Register and manage administrator accounts</p>
                <button class="action-btn primary">Register New Admin</button>
            </div>
        </div>
        
        <!-- Exam Session Card -->
        <div class="admin-card">
            <div class="card-header">
                <h3>Exam Session</h3>
            </div>
            <div class="card-content">
                <p>Control the examination process</p>
                <button class="action-btn primary">Start Exam Session</button>
                <button class="action-btn secondary">End Exam Session</button>
            </div>
        </div>
        
        <!-- Exam Instructions Card -->
        <div class="admin-card">
            <div class="card-header">
                <h3>Exam Instructions</h3>
            </div>
            <div class="card-content">
                <p>Set guidelines for students</p>
                <button class="action-btn primary">Edit Instructions</button>
                <button class="action-btn secondary">Publish Instructions</button>
            </div>
        </div>
        
        <!-- Exam Materials Card -->
        <div class="admin-card">
            <div class="card-header">
                <h3>Exam Materials</h3>
            </div>
            <div class="card-content">
                <p>Manage exam papers and answer sheets</p>
                <button class="action-btn primary">Upload Exam Paper</button>
                    <button class="action-btn secondary">Download Answers</button>
                </div>
            </div>
        
        <!-- Results Management Card -->
        <div class="admin-card">
            <div class="card-header">
                <h3>Results Management</h3>
            </div>
            <div class="card-content">
                <p>Process and analyze exam results</p>
                <button class="action-btn primary">Generate Reports</button>
                <button class="action-btn secondary">Publish Results</button>
            </div>
        </div>
    </div>
</div>


        <!-- Teachers Section -->
        <div id="teachers" class="content-section">
            <div class="content-header">
                <h1>Teachers</h1>
                <p>Manage teachers exam submission</p>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Teachers Management</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Upload script</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Test ID</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Classes</th>
                                    <th>Start Date</th>
                                    <th>submission status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  include "../includes/connection.php"; 
                   $sqlmarks = "SELECT `exam_title`, `pdf_path`, `Teachers-name`, `Class`, `startdate` FROM `exams`";
                   $qrymarks = mysqli_query($conn, $sqlmarks);
                   $count=0;
                   while($data= mysqli_fetch_assoc($qrymarks)){
                    $count++;
                       $name = $data['name'];
                       $subject = $data['subject'];
                       $class = $data['class'];
                       $startdate = $data['start-date'];
                   
                                ?>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $subject ?></td>
                                    <td><?php echo $class ?></td>
                                    <td><?php echo $startdate ?></td>
                                    <td><button class="action-btn" style="background-color: green;">submited</button>
                                        <button class="action-btn" style="background-color: red;">Pending</button></td>
                                    <td>
                                        <button class="action-btn" action="paper-process.php" name="delete" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                                <?php
                   }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<!-- script modal  -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">upload the script</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-container">
    <!-- Registration Form -->
     
                <form action="../paper-process.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="register-name" id="register-name" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Enter your subject" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="class">Class </label>
                        <input type="text" name="class" id="class" placeholder="Enter your class" required>
                    </div>
                     <div class="form-group">
                        <label for="start-date">Date </label>
                        <input type="date" name="start-date" id="start-date" placeholder="Enter start Date" required>
                    </div>
                                        <div class="form-group">
                        <label for="file">Paper </label>
                        <input type="file"  name="file" id="file" accept=".pdf" placeholder="Upload Paper" required>
                    </div>
                    <button type="submit" name="add-paper" class="btn">add</button>
                </form>
      
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->


        <!-- Class Sections -->
        <div id="form-one" class="content-section">
            <div class="content-header">
                <div class="row mb-4">
    <div class="col-md-6">
        <h1>Form One Students</h1>
        <p class="text-muted">Manage Form One students and examinations</p>
    </div>
    <div class="col-md-6 text-md-end">
        <div class="dropdown-filter">
            <label for="classFilter" class="form-label">Filter by Class:</label>
            <div class="input-group">
                <select class="form-select form-select-lg" id="classFilter" aria-label="Class filter">
                    <option value="all" selected>Classes</option>
                    <option value="form-one-a">Form One A</option>
                    <option value="form-one-b">Form One B</option>
                    <option value="form-one-c">Form One C</option>
                    <option value="form-one-d">Form One D</option>
                    <option value="form-one-e">Form One E</option>
                </select>
                <a  class="btn btn-primary" type="button"  href="#">
                    <i class="bi bi-funnel"></i> Apply
                </a>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Form One Students</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">Upload list</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>F1-001</td>
                                    <td>Alice Brown</td>
                                    <td>14</td>
                                    <td>Female</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="form-two" class="content-section">
          <div class="content-header">
                <div class="row mb-4">
    <div class="col-md-6">
        <h1>Form Two Students</h1>
        <p class="text-muted">Manage Form Two students and examinations</p>
    </div>
    <div class="col-md-6 text-md-end">
        <div class="dropdown-filter">
            <label for="classFilter" class="form-label">Filter by Class:</label>
            <div class="input-group">
                <select class="form-select form-select-lg" id="classFilter" aria-label="Class filter">
                    <option value="all" selected>Classes</option>
                    <option value="form-one-a">Form  Two A</option>
                    <option value="form-one-b">Form Two B</option>
                    <option value="form-one-c">Form Two C</option>
                    <option value="form-one-d">Form Two D</option>
                    <option value="form-one-e">Form Two E</option>
                </select>
                <a  class="btn btn-primary" type="button"  href="#">
                    <i class="bi bi-funnel"></i> Apply
                </a>
            </div>
        </div>
    </div>
</div>
            </div>

            <div class="table-container">
                <div class="table-header">
                    <h3>Form Two Students</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">upload list</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>F2-001</td>
                                    <td>Michael Davis</td>
                                    <td>15</td>
                                    <td>Male</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="form-three" class="content-section">
            <div class="content-header">
                <div class="row mb-4">
    <div class="col-md-6">
        <h1>Form Three Students</h1>
        <p class="text-muted">Manage Form Three students and examinations</p>
    </div>
    <div class="col-md-6 text-md-end">
        <div class="dropdown-filter">
            <label for="classFilter" class="form-label">Filter by Class:</label>
            <div class="input-group">
                <select class="form-select form-select-lg" id="classFilter" aria-label="Class filter">
                    <option value="all" selected>Classes</option>
                    <option value="form-one-a">Form  Three A</option>
                    <option value="form-one-b">Form Three B</option>
                    <option value="form-one-c">Form Three C</option>
                    <option value="form-one-d">Form Three D</option>
                    <option value="form-one-e">Form Three E</option>
                </select>
                <a  class="btn btn-primary" type="button"  href="#">
                    <i class="bi bi-funnel"></i> Apply
                </a>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Form Three Students</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">Upload list</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>F3-001</td>
                                    <td>Emma Wilson</td>
                                    <td>16</td>
                                    <td>Male</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="form-four" class="content-section">
            <div class="content-header">
                <div class="row mb-4">
    <div class="col-md-6">
        <h1>Form Four Students</h1>
        <p class="text-muted">Manage Form Four students and examinations</p>
    </div>
    <div class="col-md-6 text-md-end">
        <div class="dropdown-filter">
            <label for="classFilter" class="form-label">Filter by Class:</label>
            <div class="input-group">
                <select class="form-select form-select-lg" id="classFilter" aria-label="Class filter">
                    <option value="all" selected>Classes</option>
                    <option value="form-one-a">Form Four Art</option>
                    <option value="form-one-b">Form Four Science</option>
                    <option value="form-one-c">Form Four Commercial</option>
                </select>
                <a  class="btn btn-primary" type="button"  href="#">
                    <i class="bi bi-funnel"></i> Apply
                </a>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Form Four Students</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">Upload list</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>F4-001</td>
                                    <td>James Thompson</td>
                                    <td>17</td>
                                    <td>Male</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="form-five" class="content-section">
           <div class="content-header">
                <div class="row mb-4">
    <div class="col-md-6">
        <h1>Form Five Students</h1>
        <p class="text-muted">Manage Form Five students and examinations</p>
    </div>
    <div class="col-md-6 text-md-end">
        <div class="dropdown-filter">
            <label for="classFilter" class="form-label">Filter by Class:</label>
            <div class="input-group">
                <select class="form-select form-select-lg" id="classFilter" aria-label="Class filter">
                    <option value="all" selected>Classes</option>
                    <option value="form-one-a">Form Five Art</option>
                    <option value="form-one-b">Form Five Science</option>
                    <option value="form-one-c">Form Five  Commercial</option>
                </select>
                <a  class="btn btn-primary" type="button"  href="#">
                    <i class="bi bi-funnel"></i> Apply
                </a>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Form Five Students</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">Upload list</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>F5-001</td>
                                    <td>James Thompson</td>
                                    <td>17</td>
                                    <td>Male</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="lower-sixth" class="content-section">
            <div class="content-header">
                <div class="row mb-4">
    <div class="col-md-6">
        <h1>lower-sixth</h1>
        <p class="text-muted">Manage lower-sixth students and examinations</p>
    </div>
    <div class="col-md-6 text-md-end">
        <div class="dropdown-filter">
            <label for="classFilter" class="form-label">Filter by Class:</label>
            <div class="input-group">
                <select class="form-select form-select-lg" id="classFilter" aria-label="Class filter">
                    <option value="all" selected>Classes</option>
                    <option value="form-one-a">lower-sixth Art</option>
                    <option value="form-one-b">lower-sixth Science</option>
                    <option value="form-one-c">lower-sixth Commercial</option>
                </select>
                <a  class="btn btn-primary" type="button"  href="#">
                    <i class="bi bi-funnel"></i> Apply
                </a>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Lower Sixth Students</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">Upload list</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>L6-001</td>
                                    <td>Sophie Martinez</td>
                                    <td>18</td>
                                    <td>Female</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="upper-sixth" class="content-section">
            <div class="content-header">
                <div class="row mb-4">
    <div class="col-md-6">
        <h1>Upper-sixth</h1>
        <p class="text-muted">Manage Upper-sixth students and examinations</p>
    </div>
    <div class="col-md-6 text-md-end">
        <div class="dropdown-filter">
            <label for="classFilter" class="form-label">Filter by Class:</label>
            <div class="input-group">
                <select class="form-select form-select-lg" id="classFilter" aria-label="Class filter">
                    <option value="all" selected>Classes</option>
                    <option value="form-one-a">Upper-sixth Art</option>
                    <option value="form-one-b">Upper-sixth Science</option>
                    <option value="form-one-c">Upper-sixth Commercial</option>
                </select>
                <a  class="btn btn-primary" type="button"  href="#">
                    <i class="bi bi-funnel"></i> Apply
                </a>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Upper Sixth Students</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">Upload list</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>U6-001</td>
                                    <td>David Anderson</td>
                                    <td>19</td>
                                    <td>Male</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question Papers Section -->
       
<!-- Question Papers Section -->
        <div id="question-papers" class="content-section">
            <div class="content-header">
                <h1>Question Papers</h1>
                <p>Create and manage question banks</p>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Completed Exam Sessions</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">Completed papers</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Paper ID</th>
                                    <th>Subject</th>
                                    <th>Class</th>
                                    <th>Date/Time</th>
                                    <th>Duration</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>QP001</td>
                                    <td>Mathematics</td>
                                    <td>Form Four</td>
                                    <td>20th/06/2024/9:00am</td>
                                    <td>1 hours</td>
                                    <td>
                                        <button class="action-btn" style="background-color: green;">Start Exam</button>
                                    </td>
                                </tr>
                                <tr>
                                     <td>QP001</td>
                                    <td>Mathematics</td>
                                    <td>Form Four</td>
                                    <td>20th/06/2024/9:00am</td>
                                    <td>1 hours</td>
                                    <td>
                                         <button class="action-btn" style="background-color: green;">Start Exam<button>
                                    </td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <!-- Mark Guide Section -->
        <div id="mark-guide" class="content-section">
            <div class="content-header">
                <h1>Mark Guide</h1>
                <p>Set up marking schemes and grading criteria</p>
            </div>
            <div class="table-container">
                <div class="table-header">
                    <h3>Marking Schemes</h3>
                </div>
                <div class="table-content">
                    <button class="add-btn">Available Guides</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Scheme ID</th>
                                    <th>Subject</th>
                                    <th>Form</th>
                                    <th>Teaher</th>
                                    <th>Date submited</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MS001</td>
                                    <td>Mathematics</td>
                                    <td>Form Four</td>
                                    <td>Mr Claude</td>
                                    <td>20/07/2025</td>
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MS002</td>
                                    <td>Economic</td>
                                    <td>Upper Sixth</td>
                                    <td>Mr Salim</td>
                                    <td>1/07/2025</td>
                                   
                                    <td>
                                        <button class="action-btn">Edit</button>
                                        <button class="action-btn" style="background-color: red;">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
<script src="../assets/js/bootstrap5.5.js"></script>
<script src="../assets/js/jquery.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const mainContent = document.getElementById('mainContent');
            const navLinks = document.querySelectorAll('.nav-link:not(.logout-btn)');
            const submenuItems = document.querySelectorAll('.submenu-item');
            const dropdownToggle = document.querySelector('.dropdown-toggle');
            const submenu = document.querySelector('.submenu');
            const logoutBtn = document.getElementById('logoutBtn');
            
            // Toggle sidebar on mobile
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('open');
            });
            
            // Close sidebar when clicking on main content (mobile)
            mainContent.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    sidebar.classList.remove('open');
                }
            });
            
            // Navigation functionality
            function handleNavigation(e) {
                e.preventDefault();
                
                // Remove active class from all links and submenu items
                navLinks.forEach(nav => nav.classList.remove('active'));
                submenuItems.forEach(item => item.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Hide all content sections
                document.querySelectorAll('.content-section').forEach(section => {
                    section.classList.remove('active');
                });
                
                // Show selected content section
                const targetSection = this.getAttribute('data-section');
                const targetElement = document.getElementById(targetSection);
                if (targetElement) {
                    targetElement.classList.add('active');
                }
                
                // Close sidebar on mobile after selection
                if (window.innerWidth < 992) {
                    sidebar.classList.remove('open');
                }
            }
            
            // Main navigation links
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Handle dropdown toggle
                    if (this.classList.contains('dropdown-toggle')) {
                        e.preventDefault();
                        submenu.classList.toggle('open');
                        const arrow = this.querySelector('.dropdown-arrow');
                        arrow.classList.toggle('rotated');
                        return;
                    }
                    
                    handleNavigation.call(this, e);
                });
            });
            
            // Submenu items
            submenuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    handleNavigation.call(this, e);
                    
                    // Also activate the parent dropdown link
                    const parentLink = document.querySelector('.dropdown-toggle');
                    if (parentLink) {
                        navLinks.forEach(nav => nav.classList.remove('active'));
                        parentLink.classList.add('active');
                    }
                });
            });
            
            // Logout button
            logoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure you want to logout?')) {
                    alert('Logging out...');
                    // In a real app, you would redirect to logout URL
                    // window.location.href = '/logout';
                }
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.dropdown-toggle') && !e.target.closest('.submenu')) {
                    submenu.classList.remove('open');
                    document.querySelector('.dropdown-arrow').classList.remove('rotated');
                }
            });
            
            // Make tables responsive on small screens
            function handleResponsiveTables() {
                document.querySelectorAll('.table-responsive').forEach(table => {
                    if (window.innerWidth < 768) {
                        table.classList.add('table-responsive-sm');
                    } else {
                        table.classList.remove('table-responsive-sm');
                    }
                });
            }
            
            // Initial call and event listener for window resize
            handleResponsiveTables();
            window.addEventListener('resize', handleResponsiveTables);
        });
    </script>



</script>
</body>
</html>