@extends('layouts.app')

@section('content')
<div class="site-wrap" id="home-section">

    <div class="site-section bg-info">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="text-white">Admin page</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/001-jigsaw.svg" alt="Image" class="img-fluid"></span>
                        <h3 class="text-teal">Домашнє завдання</h3>
{{--                        <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>--}}
                        <p><a href="/admin_08/create_homework" class="btn btn-primary btn-custom-1 mt-4">Створити</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/002-target.svg" alt="Image" class="img-fluid"></span>
                        <h3 class="text-success">Матеріали уроку</h3>
{{--                        <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>--}}
                        <p><a href="/admin_08/create_lesson" class="btn btn-warning btn-custom-1 mt-4">Створити</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package text-center bg-white">
                        <span class="img-wrap"><img src="images/flaticon/svg/003-mission.svg" alt="Image" class="img-fluid"></span>
                        <h3 class="text-danger">Тести</h3>
{{--                        <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>--}}
                        <p><a href="/admin_08/create_test" class="btn btn-success btn-custom-1 mt-4">Створити</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

