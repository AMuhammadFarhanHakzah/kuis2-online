@extends('layouts.home')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="py-5">
                <h4 class="fw-bold"> {{$pertanyaan->tambahKuis->quiz_name}} </h4>
                <p class="text-secondary">
                    {{$pertanyaan->tambahKuis->description}}
                </p>
            </section>

            <section>
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="text-dark mb-5"> {{$pertanyaan->soal}}  </h5>

                        <form action="{{route('kuis.store', [$idKuis, $pertanyaan])}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input border-secondary" type="radio" name="answer"
                                        id="answer_a" value="A">
                                    <label class="form-check-label" for="answer_a">
                                        {{$pertanyaan->answer_a}}
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input border-secondary" type="radio" name="answer"
                                        id="answer_b" value="B">
                                    <label class="form-check-label" for="answer_b">
                                        {{$pertanyaan->answer_b}}
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input border-secondary" type="radio" name="answer"
                                        id="answer_c" value="C">
                                    <label class="form-check-label" for="answer_c">
                                        {{$pertanyaan->answer_c}}
                                    </label>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="form-check">
                                    <input class="form-check-input border-secondary" type="radio" name="answer"
                                        id="answer_d" value="D">
                                    <label class="form-check-label" for="answer_d">
                                        {{$pertanyaan->answer_d}}
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">
                                Selanjutnya
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
