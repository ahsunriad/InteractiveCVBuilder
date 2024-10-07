
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="dashboard-body">

    <!-- Sidebar -->
    @include('layouts.includes.sidebar')
    <!-- Main content area -->
    <div class="flex-grow-1">
        <!-- Topbar -->
        @include('layouts.includes.topbar')
        <!-- Main Content Goes Here -->
        <div class="container">
            <div class="custom-container mt-4 p-4 bg-light rounded shadow-sm">
                {{-- Contac Information --}}
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3>{{ Auth::user()->userDetail->name }}</h3>
                        <p>Phone: {{ Auth::user()->userDetail->phone }}</p>
                        <p>Email: <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></p>
                        <p>LinkedIn: <a class="text-blue-500" href="{{ Auth::user()->userDetail->linkedin ?? '#' }}">{{ Auth::user()->userDetail->linkedin ?? 'N/A' }}</a>
                        </p>
                    </div>
                    <div class="col-md-6 profile-img-view-div">
                        <img alt="Profile picture of {{ Auth::user()->userDetail->name }}" class="rounded-circle profile-img-view-resize" src="https://storage.googleapis.com/a1aa/image/UQSG8dieedo3H0egs2IK5NGQChkCtaHRmdvFtWfWw8DbUMPOB.jpg" width="auto" height="180"/>
                    </div>
                </div>
                {{-- End of Contat info  --}}

                {{-- Academic  --}}
                <h4 class="mt-4 ">ACADEMIC QUALIFICATION</h4>
                    <table class="table table-bordered custom-table">
                        <thead>
                            <tr class="bg-green-100">
                                <th>Degree</th>
                                <th>Major</th>
                                <th>Institute</th>
                                <th>Result</th>
                                <th>Passing Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($Auth::user()->educations as $education) --}}
                            <tr>
                                <td>BSc</td>
                                <td>Computer Science & Engineering</td>
                                <td>American International University-Bangladesh</td>
                                <td>3.40/4.00</td>
                                <td>2022</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                {{-- end of academic  --}}

                {{-- work exp  --}}
                <h4 class="mt-4">WORK EXPERIENCE</h4>
                    <table class="table table-bordered custom-table">
                        <thead>
                            <tr class="bg-green-100">
                                <th>Experience Title</th>
                                <th>Company Name</th>
                                <th>Experience</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($Auth::user()->educations as $education) --}}
                            <tr>
                                <td>Student Intern</td>
                                <td>American International University-Bangladesh</td>
                                <td>Assisting Faculty and Students in the Lab. During lab classes, I provided support to the faculty and students alike. Whenever students encountered difficulties with their tasks, I was there to help. Additionally, I assisted the faculty with preparing lectures, data entries, and other academic work.</td>
                                <td>June 22 - Aug 22</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                {{-- end of work exp  --}}
                
                {{-- Skills --}}
                <h4 class="mt-4">SKILLS</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered custom-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Proficiency Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($skills as $skill) --}}
                                        {{-- @if($loop->index < 5) <!-- First 5 skills --> --}}
                                            <tr>
                                                {{-- <td>{{ $skill->name }}</td>
                                                <td>{{ $skill->proficiency_level }}</td> --}}
                                                <td>aaa</td>
                                                <td>advanced</td>
                                            </tr>
                                        {{-- @endif --}}
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Second Column for additional skills -->
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Proficiency Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($skills as $skill) --}}
                                        {{-- @if($loop->index >= 5) <!-- Skills after the first 5 --> --}}
                                            <tr>
                                                <td>aaa</td>
                                                <td>advanced</td>
                                            </tr>
                                        {{-- @endif --}}
                                    {{-- @endforeach --}}
                                </tbody>
                            </div>
                            </table>
                    </div>
            </div>
                {{-- Endn of Skills --}}

                {{-- Language  --}}
                <h4 class="mt-4">LANGUAGE</h4>
                    <table class="table table-bordered custom-table">
                        <thead>
                            <tr>
                                <th>Experience Title</th>
                                <th>Company Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($Auth::user()->educations as $education) --}}
                            <tr>
                                <td>Student Intern</td>
                                <td>American International University-Bangladesh</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                {{-- End of Language  --}}

            </div>
            
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
