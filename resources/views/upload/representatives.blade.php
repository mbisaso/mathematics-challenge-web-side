               <!-- Division for Representative Information -->
               <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Representative Upload</h4>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('upload.representative') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="repName">Name</label>
                                    <input type="text" class="form-control" id="repName" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email Address</label>
                                    <input type="email" class="form-control" id="emailAddress" name="emailAddress" required>
                                </div>
                                <div class="form-group">
                                    <label for="repSchoolRegNo">School Registration Number</label>
                                    <input type="text" class="form-control" id="repSchoolRegNo" name="school_registration_number" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload Representative</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
@endsection
