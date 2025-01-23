<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Attendance System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('styles/styles.css'); ?>">

    <!-- STYLES -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Handlee&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Patrick+Hand&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header-container">
        <div class="mb-3 inputs">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="mb-3 inputs">
            <input type="number" class="form-control" id="rollNo" name="rollNo" placeholder="Enter rollNo">
        </div>
    </header>

    <!-- CONTENT -->

    <section class="card-and-remarks">
        <div class="student-card-container">
            <div class="stud-image">
                <img src="<?php echo base_url('images/student.webp') ?>" alt="student image">
            </div>
            <div class="stud-info">
                <h3> <span>ROLL NO : </span>123456</h3>
                <h3><span>DIVISION : </span>A1</h3>
                <h3><span>NAME : </span>DAVID GOGGINS</h3>
                <h3><span>CATEGORY : </span>OPEN</h3>
                <h3><span>PREVIOUS MARKS : </span></h3>
            </div>
        </div>

        <div class="remarks-container">
            <div class="timeline-container">
                <div class="timeline">
                    <div class="verticle-line"></div>
                    <div class="point"></div>
                </div>
                <div class="timeline-content">
                    <p class="name">Prashant Kulkarni</p>
                    <p class="status">DONE</p>
                </div>
            </div>

            <div class="timeline-container">
                <div class="timeline">
                    <div class="verticle-line"></div>
                    <div class="point"></div>
                </div>
                <div class="timeline-content">
                    <p class="name">Prashant Kulkarni</p>
                    <p class="status">DONE</p>
                </div>
            </div>

            <div class="timeline-container">
                <div class="timeline">
                    <div class="verticle-line"></div>
                    <div class="point"></div>
                </div>
                <div class="timeline-content">
                    <p class="name">Prashant Kulkarni</p>
                    <p class="status">DONE</p>
                </div>
            </div>
            <div class="timeline-container">
                <div class="timeline">
                    <div class="verticle-line"></div>
                    <div class="point"></div>
                </div>
                <div class="timeline-content">
                    <p class="name">Prashant Kulkarni</p>
                    <p class="status">DONE</p>
                </div>
            </div>

        </div>
    </section>

    <section class="performance-and-attendance">
        <div class="parent-container">
            <div class="container">
                <!-- Bootstrap Tabs -->
                <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link active" id="performance-tab" data-bs-toggle="tab" href="#performance" role="tab" aria-controls="performance" aria-selected="true">
                            PERFORMANCE DATA
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="attendance-tab" data-bs-toggle="tab" href="#attendance" role="tab" aria-controls="attendance" aria-selected="false">
                            ATTENDANCE DATA
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-3">
                    <!-- PERFORMANCE DATA Tab -->
                    <div class="tab-pane fade show active" id="performance" role="tabpanel" aria-labelledby="performance-tab">
                        <table class="table table-striped table-bordered performance-table">
                            <thead>
                                <tr>
                                    <th>EXAM NAME AND DATE</th>
                                    <th>PHY</th>
                                    <th>CHEM</th>
                                    <th>MATHS</th>
                                    <th>PCM</th>
                                    <th>RANK</th>
                                    <th>TOPPER MARKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example Row -->
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                                <tr>
                                    <td>JEE TEST SERIES PART 1 - 23 JAN 2025</td>
                                    <td>85</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>255</td>
                                    <td>5</td>
                                    <td>270</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- ATTENDANCE DATA Tab -->
                    <div class="tab-pane fade" id="attendance" role="tabpanel" aria-labelledby="attendance-tab">
                        <table class="table table-striped table-bordered attendance-table">
                            <thead>
                                <tr>
                                    <th>SESSION NAME</th>
                                    <th>SESSION DATE</th>
                                    <th>CONDUCTED AT</th>
                                    <th>SESSION TYPE</th>
                                    <th>CLASSROOM</th>
                                    <th>SUBJECT</th>
                                    <th>SESSION STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example Row -->
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>HOW TO STUDY EFFECTIVITY WITH FOCUS ?</td>
                                    <td>2025-01-20</td>
                                    <td>10:00 AM</td>
                                    <td>Lecture</td>
                                    <td>A101</td>
                                    <td>Physics</td>
                                    <td>Completed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- FOOTER: COPYRIGHTS -->

    <footer>

    </footer>

    <!-- SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <!-- -->

</body>

</html>