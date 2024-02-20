@extends('frontend.layout.master')

@section('content_title')
    <h1 class="primary-text">MM Student Portal</h1>
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-lg-10 offset-lg-1 authority-form-container">
            <div class="row d-flex">
                <div class="col-12 d-flex justify-content-center text-underline mb-3">My Student Document List</div>
                <div class="col-md-3 d-flex justify-content-center">
                    <img class="icon" src="{{ asset('asset/img/undraw_Educator_re_ju47.png') }}">
                </div>
                <form action="" method="" class="col-md-7 offset-md-2 d-flex flex-column align-items-end">
                    @csrf
                    <p class="mb-0 text-muted text-underline cursor-pointer" id="edit">Edit</p>
                    <div
                        class="custom-form-control-2 rounded w-100 d-flex flex-wrap align-items-center justify-content-around">
                        <p class="mb-0">Authority Name -</p>
                        <input id="authority-name" class="authority-input fw-bold text-dark" value="Ms. Thiri Shwe Sin"
                            disabled>
                    </div>
                    <div id="edit-container" class="d-none col-gap-2 mt-3">
                        <p id="cancel" class="mb-0 primary-text text-underline cursor-pointer">Cancel</p>
                        <button class="border-0 rounded-pill authority-done-btn">Done</button>
                    </div>
                    <div id="filter" class="filter-btn rounded mt-2">
                        <p class="mb-0 fw-bold">Filter</p>
                    </div>
                </form>
            </div>
            <div class="row d-flex justify-content-between flex-wrap col-gap-2 card-container mt-5">

                @for ($i = 0; $i < 24; $i++)
                    @include('frontend.shared.student-card')
                @endfor

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById('edit').addEventListener('click', function() {
            document.getElementById('authority-name').removeAttribute('disabled');
            let value = document.getElementById('authority-name').value;
            document.getElementById('authority-name').value = "";
            document.getElementById('authority-name').placeholder = value;
            document.getElementById('edit-container').classList.remove("d-none");
            document.getElementById('edit-container').classList.add("d-flex");
        })

        document.getElementById('cancel').addEventListener('click', function() {
            document.getElementById('authority-name').disabled = true;
            let placeholder = document.getElementById('authority-name').placeholder;
            document.getElementById('authority-name').value = placeholder;
            document.getElementById('authority-name').placeholder = "";
            document.getElementById('edit-container').classList.remove("d-flex");
            document.getElementById('edit-container').classList.add("d-none");
        })
    </script>
@endsection