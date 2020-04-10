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
                        <h2 class="footer-heading mb-4">Створення тесту</h2>
                    </div>
                    <form method="post" action="/admin_test_store">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="data" class="form-control" placeholder="Дата" required>
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
                            <input type="text" name="name" class="form-control" placeholder="Назва" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="link" class="form-control" placeholder="Посилання" required>
                        </div>
                        <div class="row justify-content-md-center">
                        <input type="submit" value="Створити" class="btn btn-default">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
