<div class="multisteps-form">
    <!--progress bar-->
    <div class="row d-none">
        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
        <div class="multisteps-form__progress">
            <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User Info</button>
            <button class="multisteps-form__progress-btn" type="button" title="Address">Address</button>
            <button class="multisteps-form__progress-btn" type="button" title="Order Info">Order Info</button>
            <button class="multisteps-form__progress-btn" type="button" title="Comments">Comments</button>
        </div>
        </div>
    </div>
    <!--form panels-->
    <div class="row mt-3 px-3 mt-lg-0 px-lg-0">
        <div class="col-12 col-lg-12 m-auto">
            <div class="multisteps-form__form">
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded background-color-custom js-active" data-animation="fadeIn">
                    <h3 class="multisteps-form__title">Create New Syllabus</h3>
                    <div class="multisteps-form__content ">
                        <div class="row">
                            <div class="mb-3 col-lg-12">
                                <label for="name_of_sylla" class="form-label">Name of Syllabus</label>
                                <input type="text" class="form-control" id="name_of_sylla" placeholder="Insert name of syllabus here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="subject_of_sylla" class="form-label">Subject of Syllabus</label>
                                <input type="text" class="form-control" id="subject_of_sylla" placeholder="Insert Subject of syllabus here">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="time_frame" class="form-label">Time Frame of Syllabus</label>
                                <input type="number" class="form-control" id="time_frame" placeholder="Months" min="1">
                            </div>
                        </div>
                        <label class="mb-2">Department</label>
                        <select class="form-select mb-3">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label class="mb-2">Type of Syllabus</label>
                        <div class="mb-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Type_of_Syllabus" id="inlineRadio1" value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Lecture</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Type_of_Syllabus" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Laboratory</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Type_of_Syllabus" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio2">Both</label>
                            </div>
                        </div>
                        <label class="mb-2">Type of Information of Syllabus</label>
                        <div class="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Auto-Generated</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Specific Sources</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Source Here">
                                    <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                    <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded background-color-custom" data-animation="fadeIn">
                    <h3 class="multisteps-form__title">Syllabus Information</h3>
                    <div class="multisteps-form__content ">
                        <h4>First Part</h4>
                        <div class="container-fluid scroll overflow-auto">
                            <div class="row">
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Semester Adopted</label>
                                    <input type="text" class="form-control" id="" placeholder="Sem:1st AY: 2017-2018">
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Revision Status</label>
                                    <input type="text" class="form-control" id="" placeholder="1st Draft" min="1">
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Revision Date</label>
                                    <input type="date" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Recommending approval</label>
                                    <input type="text" class="form-control" id="" placeholder="Department Head">
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Concurred</label>
                                    <input type="text" class="form-control" id="" placeholder="Dean">
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Approved</label>
                                    <input type="text" class="form-control" id="" placeholder="VPAA">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-6">
                                    <label for="" class="form-label">Title of Syllabus</label>
                                    <input type="text" class="form-control" id="" placeholder="title">
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label for="" class="form-label">Semester</label>
                                    <input type="text" class="form-control" id="" placeholder="1st Semester, SY 2020-2021">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">WMSU Vision</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="">The University of Choice for higher learning with strong research orientation that produces professionals who are socially responsive to and responsible for human development; ecological sustainability; and, peace and security within and beyond the region.</textarea>
                                </div>
                                <label>Itemized Vision</label>
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mb-3 col-lg-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">WMSU Mission</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="">The Western Mindanao State University, set in a culturally diverse environment, shall pursue a vibrant socio-economic agenda that includes:</textarea>
                                </div>
                                <label>Itemized Mission</label>
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">Goal Description of College</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                                <label>Itemized Goals</label>
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row pt-3">
                            <div class="col d-flex justify-content-start">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded background-color-custom" data-animation="fadeIn">
                    <h3 class="multisteps-form__title">Syllabus Information</h3>
                    <div class="multisteps-form__content ">
                        <div class="container-fluid scroll overflow-auto">
                            <h4>Second Part</h4>
                            <div class="row">
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Course Code</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Course Name</label>
                                    <input type="text" class="form-control" id="" placeholder="" min="1">
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label for="" class="form-label">Preriquisite</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-6">
                                    <label for="" class="form-label">Course Credit</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">Course Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                            </div>
                            <h4>Grading System</h4>
                            <div class="row">
                                <div class="mb-3 col-lg-6">
                                    <label for="" class="form-label">Mid Term Grade</label>
                                    <input type="number" class="form-control" id="" placeholder="percentage">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Description and Percent</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Attendance">
                                        <input type="number" aria-label="First name" class="form-control" placeholder="Percentage">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-6">
                                    <label for="" class="form-label">Final Term Grade</label>
                                    <input type="number" class="form-control" id="" placeholder="percentage">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Description and Percent</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Attendance">
                                        <input type="number" aria-label="First name" class="form-control" placeholder="Percentage">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label>Percentage Grade Range</label>
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-text">Enter Range Here</span>
                                        <input type="number" aria-label="First name" class="form-control">
                                        <input type="number" aria-label="First name" class="form-control">
                                        <span class="input-group-text">Enter Grade Here</span>
                                        <input type="text" aria-label="Last name" class="form-control">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row pt-3">
                            <div class="col d-flex justify-content-start">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded background-color-custom" data-animation="fadeIn">
                    <h3 class="multisteps-form__title">Syllabus Information</h3>
                    <div class="multisteps-form__content ">
                        <div class="container-fluid scroll overflow-auto">
                            <h4>Third Part</h4>
                            <div class="row mt-1">
                                <label>Course Requirements</label>
                                <div class="col-lg-12 mt-1">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <label>Conditions for Performance Evaluation</label>
                                <div class="col-lg-12 mt-1">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="mb-3 col-lg-12">
                                    <label for="subject_of_sylla" class="form-label">Prepared By:</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Name and Position</span>
                                        <input type="text" aria-label="First name" class="form-control">
                                        <input type="text" aria-label="Last name" class="form-control">
                                        <button class="btn btn-success" type="button"><i class='bx bx-plus-circle'></i></button>
                                        <button class="btn btn-danger" type="button"><i class='bx bx-minus-circle'></i></button>
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-12">
                                    <label for="subject_of_sylla" class="form-label">Recommending Approval By:</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Name and Position</span>
                                        <input type="text" aria-label="First name" class="form-control">
                                        <input type="text" aria-label="Last name" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-12">
                                    <label for="subject_of_sylla" class="form-label">Conccured By:</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Name and Position</span>
                                        <input type="text" aria-label="First name" class="form-control">
                                        <input type="text" aria-label="Last name" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-12">
                                    <label for="subject_of_sylla" class="form-label">Approved By:</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Name and Position</span>
                                        <input type="text" aria-label="First name" class="form-control">
                                        <input type="text" aria-label="Last name" class="form-control">
                                    </div>
                                </div>
                                <h4>Footer</h4>
                                <div class="mb-3 col-lg-6">
                                    <label>WMSU-VPAA-FR-032.00 </label>
                                    <input type="text" class="form-control" placeholder="WMSU-VPAA-FR-032.00">
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label>Effective Date</label>
                                    <input type="date" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row pt-3">
                            <div class="col d-flex justify-content-start">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded background-color-custom" data-animation="fadeIn">
                    <h3 class="multisteps-form__title">Generating Information of Syllabus</h3>
                    <div class="multisteps-form__content">
                        <div class="spinner-wrapper">
                            <div class="d-flex justify-content-center mt-2">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <span id="words">Creating Tables</span>
                            </div>
                            
                        </div>
                        <div class="row pt-3">
                            <div class="col d-flex justify-content-start">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded background-color-custom" data-animation="fadeIn">
                    <h3 class="multisteps-form__title">Generated Information</h3>
                    <div class="d-flex justify-content-end mb-2">
                        <button class="btn btn-primary btn-sm">Remove Checked Boxes</button>
                    </div>
                    <div class="multisteps-form__content">
                        <div class="container-fluid scroll overflow-auto custom-form">
                            <h3>Course Outline for Intro to Computing</h3>
                            <div class="mb-2"><strong>Week 1: Introduction to Computing (4 hours) <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></strong></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Overview of the course
                                        <button class="badge bg-primary rounded-pill border-0 cust-btn" ><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                        <div class="cust-div" id="myDIV">
                                            <div class="row mt-1 ms-4">
                                                <div class="col-3 ">
                                                    <input type='text' class="form-control form-control-sm" />
                                                </div>
                                                <div class="col-3 ">
                                                    <button class="btn btn-primary btn-sm" onclick="myFunction()">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        History and evolution of computing
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Basic computer components and terminology
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Operating systems and software
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 2: Binary and Logic Gates (4 hours) <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></strong></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Introduction to binary numbers
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Boolean algebra and logic gates
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Binary arithmetic
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Digital circuits
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 3: Programming Fundamentals (4 hours) <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></strong></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Introduction to programming languages
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Syntax and basic programming concepts
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Data types and variables
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Control structures (if/else statements, loops)
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 4: More Programming Concepts (4 hours) <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></strong></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Functions and procedures
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Arrays and lists
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        File input/output
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Debugging techniques
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 5: Object-Oriented Programming (4 hours) <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></strong></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Introduction to object-oriented programming
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Classes and objects
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Inheritance and polymorphism
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Design patterns
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 6: Web Development (4 hours) <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button></strong> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        HTML and CSS basics
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Introduction to JavaScript
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Dynamic web pages and the Document Object Model (DOM)
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Basic web development tools
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 7: Databases (4 hours) <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button></strong> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Introduction to databases
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Relational databases and SQL
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Database design and normalization
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Simple database applications
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 8: Computer (4 hours) Networks <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button></strong> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Introduction to computer networks
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Network topologies and protocols
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Local Area Networks (LANs) and Wide Area Networks (WANs)
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Network security and privacy
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 9: Operating (4 hours) Systems <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button></strong> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Operating system fundamentals
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Process management and scheduling
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Memory management
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        File systems
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                                <br>
                            <div class="mb-2"><strong>Week 10: Emerging (4 hours) Technologies <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button></strong> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button></div>
                                <ul class="list-group bg-transparent">
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Introduction to emerging technologies
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Artificial Intelligence (AI) and Machine Learning (ML)
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Cloud computing and virtualization
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                    <li class="list-group-item bg-transparent text-light">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        Internet of Things (IoT) and its applications
                                        <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                        <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                    </li>
                                </ul>
                            <br>
                            <div class="mb-2"><strong class="fs-4">Course Objectives</strong> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button></div>
                            <ol class="list-group list-group-numbered bg-transparent">
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Describe the history and evolution of computing, including major milestones and innovations in the field.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Explain the basic components and terminology of a computer system, including hardware, software, and operating systems.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Analyze and design digital circuits using Boolean algebra and logic gates, and apply binary arithmetic to solve problems.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Write and debug simple programs using programming languages, including control structures and basic data types and variables.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Implement object-oriented programming concepts, including classes and objects, inheritance, and polymorphism, to solve programming problems.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Develop simple web pages using HTML, CSS, and JavaScript, and understand dynamic web pages and the Document Object Model (DOM).
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Create and query databases using SQL, understand database design and normalization, and build simple database applications.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Understand the basics of computer networks, including topologies, protocols, and security, and apply this knowledge to analyze and solve network problems.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Analyze and design operating systems, including process and memory management and file systems, and apply this knowledge to develop solutions to operating system problems.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Evaluate emerging technologies, including artificial intelligence, cloud computing, and the Internet of Things (IoT), and understand their applications in various industries and fields.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                            </ol>
                            <br>
                            <div class="mb-2"><strong class="fs-4">Course Outcomes</strong> <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-plus-circle'></i></button></div>
                            <ol class="list-group list-group-numbered bg-transparent">
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Understand the history and evolution of computing and basic computer components and terminology.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Analyze and design digital circuits using Boolean algebra and logic gates.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Write basic programs using programming languages, including syntax and control structures.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Implement object-oriented programming concepts, including classes and objects, inheritance, and polymorphism.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Develop simple web pages using HTML, CSS, and JavaScript, and understand dynamic web pages and the Document Object Model (DOM).
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Create and query databases using SQL, understand database design and normalization, and build simple database applications.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Understand the basics of computer networks, including topologies, protocols, and security.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Analyze and design operating systems, including process and memory management and file systems.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Evaluate emerging technologies, including artificial intelligence, cloud computing, and the Internet of Things (IoT).
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                                <li class="list-group-item bg-transparent text-light">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Develop problem-solving and critical thinking skills related to computing and technology.
                                    <button class="badge bg-primary rounded-pill border-0"><i class='bx bx-edit-alt'></i></button>
                                    <button class="badge bg-primary rounded-pill border-0" ><i class='bx bxs-trash'></i></button>
                                </li>
                            </ol>
                            <br>
                            
                        </div>
                        <hr>
                        <div class="row d-flex justify-content-between mt-3">
                            <div class="col-3 col-lg-auto">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                            </div>
                            <div class="col-5 col-lg-auto">
                                <button class="btn btn-outline-secondary" type="button">Regenerate Again?</button>
                            </div>
                            <div class="col-3 col-lg-auto">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded background-color-custom" data-animation="fadeIn">
                    <h3 class="multisteps-form__title">Generating Syllabus</h3>
                    <div class="multisteps-form__content">
                        <div class="spinner-wrapper">
                            <div class="d-flex justify-content-center mt-2">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <span id="words_2">Creating Tables</span>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col d-flex justify-content-start">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded background-color-custom" data-animation="fadeIn">
                    <div class="row mb-2">
                        <div class="col-12 col-lg-6">
                            <h3 class="multisteps-form__title">Finished Syllabus</h3>
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-end">
                            <div class="btn-group dropstart">
                                <button class="btn btn-primary btn-sm mt-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Save As
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="min-width:20px;">
                                    <li><a class="dropdown-item" href="#">Print</a></li>
                                    <li><a class="dropdown-item" href="#">PDF</a></li>
                                    <li><a class="dropdown-item" href="#">Word</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="multisteps-form__content">
                        <embed src="../files/Software-Engineering-1-Syllabus-Ballaho-2021v1.1-1.pdf" type="application/pdf" width="100%" height="600px" />

                        <div class="row pt-3">
                            <div class="col d-flex justify-content-start">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <a href="userpage.php" class="btn btn-primary ml-auto js-btn-next">Finish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>