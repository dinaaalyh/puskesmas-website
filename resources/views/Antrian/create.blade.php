@extends('layout')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Antrian</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Antrian</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('antrian.store') }}" method="POST">
                                @csrf
                                @method('post')
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Poli</label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name="id_poli" onchange="selectAntrian(this)">
                                        <option>Pilih Poli</option>
                                        @foreach ($polis as $poli)
                                        <option value="{{$poli->id_poli}}">{{
                                            $poli->nm_poli}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nomor Antrian</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="antrian">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary"
                                            href="{{ route('antrian.index') }}">Submit Form</button>
                                    </div>
                                </div>
                        </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection

@section('javascript')
<script>
    function selectAntrian(){

    }
</script>
@endsection
