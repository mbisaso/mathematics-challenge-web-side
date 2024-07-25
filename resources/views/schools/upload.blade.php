<div class="row">
                <!-- Division for School Information -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">School Upload</h4>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('upload.school') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="district">District</label>
                                    <input type="text" class="form-control" id="district" name="district" required>
                                </div>
                                <div class="form-group">
                                    <label for="school_registration_number">School Registration Number</label>
                                    <input type="text" class="form-control" id="school_registration_number" name="school_registration_number" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload School</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>