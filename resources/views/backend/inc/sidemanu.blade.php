<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse overflow-auto">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active menu-padding" aria-current="page" href="{{ route('admin.dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active menu-padding" aria-current="page" href="{{ route('password.change') }}">
                    <i class="fa-solid fa-key"></i>
                    Change Password
                </a>
            </li>
            <div class="accordion accordion-flush" id="student_menu">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="studentMenuHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#studentSubmanu" aria-expanded="false" aria-controls="studentSubmanu">
                            <i class="fa-solid fa-users"></i>&nbsp; Students
                        </button>
                    </h2>
                    <div id="studentSubmanu"
                        class="accordion-collapse collapse {{ request()->is('student*') ? 'show' : '' }}"
                        aria-labelledby="studentMenuHeader" data-bs-parent="#student_menu">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('student-add') ? 'active' : '' }} py-0"
                                        href="{{ route('student.add') }}">
                                        <i class="fa-solid fa-user-plus"></i>
                                        Add Student
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('student-all') ? 'active' : '' }} py-0"
                                        href="{{ route('student.all') }}">
                                        <i class="fa-solid fa-users-line"></i>
                                        All Student
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush" id="institute_menu">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="instituteMenuHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#instituteSubmanu" aria-expanded="false" aria-controls="instituteSubmanu">
                            <i class="fa-solid fa-building-columns"></i>&nbsp; Institutes
                        </button>
                    </h2>
                    <div id="instituteSubmanu"
                        class="accordion-collapse collapse {{ request()->is('institute*') ? 'show' : '' }}"
                        aria-labelledby="instituteMenuHeader" data-bs-parent="#institute_menu">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('institute-add') ? 'active' : '' }} py-0 px-0"
                                        href="{{ route('institute.add') }}">
                                        <i class="fa-solid fa-school"></i><span style="font-size:10px;" class= "mb-4" ><i class="fa-sharp fa-solid fa-plus"></i></span>
                                        Add institute
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('institute-all') ? 'active' : '' }} py-0 px-0"
                                        href="{{ route('institute.all') }}">
                                        <i class="fa-solid fa-school"></i>
                                        All institute
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush" id="campus_menu">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="campusMenuHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#campusSubmanu" aria-expanded="false" aria-controls="campusSubmanu">
                            <i class="fa-solid fa-building-columns"></i>&nbsp; Campuses
                        </button>
                    </h2>
                    <div id="campusSubmanu"
                        class="accordion-collapse collapse {{ request()->is('campus*') ? 'show' : '' }}"
                        aria-labelledby="campusMenuHeader" data-bs-parent="#campus_menu">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('campus-add') ? 'active' : '' }} py-0 px-0"
                                        href="{{ route('campus.add') }}">
                                        <i class="fa-solid fa-school"></i><span style="font-size:10px;" class= "mb-4" ><i class="fa-sharp fa-solid fa-plus"></i></span>
                                        Add Campus
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('campus-all') ? 'active' : '' }} py-0 px-0"
                                        href="{{ route('campus.all') }}">
                                        <i class="fa-solid fa-school"></i>
                                        All Campuses
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush" id="eligibility_menu">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="eligibilityMenuHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#eligibilitySubmanu" aria-expanded="false" aria-controls="eligibilitySubmanu">
                            <i class="fa-solid fa-building-columns"></i>&nbsp; Eligibilities
                        </button>
                    </h2>
                    <div id="eligibilitySubmanu"
                        class="accordion-collapse collapse {{ request()->is('eligibility*') ? 'show' : '' }}"
                        aria-labelledby="eligibilityMenuHeader" data-bs-parent="#eligibility_menu">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('eligibility-add') ? 'active' : '' }} py-0 px-0"
                                        href="{{ route('eligibility.add') }}">
                                        <i class="fa-solid fa-school"></i><span style="font-size:10px;" class= "mb-4" ><i class="fa-sharp fa-solid fa-plus"></i></span>
                                        Add Eligibility
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('eligibility-all') ? 'active' : '' }} py-0 px-0"
                                        href="{{ route('eligibility.all') }}">
                                        <i class="fa-solid fa-school"></i>
                                        All Eligibility
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</nav>
