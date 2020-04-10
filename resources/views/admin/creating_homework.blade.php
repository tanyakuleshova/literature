@extends('layouts.app')

@section('content')
    <div class="site-wrap" id="home-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <br>
                    <div class="row justify-content-md-center">
                        <a href="/admin_08">back to Admin</a>
                    </div>
                    <br>
                    <div class="row justify-content-md-center">
                        <h2 class="footer-heading mb-4">Створення домашнього завдання</h2>
                    </div>
                    <form method="post" action="/admin_homework_store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="data" class="form-control" placeholder="Дата">
                        </div>
                        <div class="form-group">
                            <label>Класс</label>
                            <select name="class" class="form-control">
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Назва">
                        </div>
                        <div class="form-group">
                            <label>Описання домашнього завдання</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="link_test" class="form-control" placeholder="Посилання на тест">
                        </div>
                        <div class="form-group">
                            <input type="text" name="link_lesson" class="form-control" placeholder="Посилання на матеріал">
                        </div>
                        <div class="form-group">
                            <label>Додати матеріали</label>
                            <input type="file" name="documents[]" class="form-control-file" multiple>
                        </div>
                        <div class="row justify-content-md-center">
                        <input type="submit" value="Створити" class="btn btn-default">
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
