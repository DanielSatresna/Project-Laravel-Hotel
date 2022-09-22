@extends('layouts.master') 
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yinka Enoch Adedokun">
    <link rel="stylesheet" href="/assets/css/login.css">
    <title>Login</title>
  </head>
  <body>
    <!-- Main Content -->
    <div class="container-fluid d-flex justify-content-center">
      <div class="row main-content bg-success text-center">
        <div class="col-md-12 col-xs-12 col-sm-12 login_form ">
          <div class="container-fluid">
            @if ($message = Session::get('message'))
                  <div class="alert alert-success alert-block">
                    <strong style='font-size: 14px'>{{ $message }}</strong>
                  </div>
                @endif

            <div class="row d-flex justify-content-center pt-4 pb-2">
              <h2>Log In</h2>
            </div>
            <div class="row d-flex justify-content-center">
              <form method="POST" action="/logincheck" class="form-group">
                @csrf
                <div class="row">
                  <input type="text" name="email" id="username" class="form__input" placeholder="Email">
                </div>
                <div class="row">
                  <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                </div>
                <div class="row d-flex justify-content-center pb-3 pt-3">
                  <input type="submit" value="Submit" class="btn">
                </div>
              </form>
            </div>
            <div class=" row d-flex justify-content-end regis">
              <p>Don't have an account? <a href="/register">Register Here</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid text-center footer ">
      Coded with &hearts; by <a href="https://bit.ly/yinkaenoch">Yinka.</a></p>
    </div>
  </body>