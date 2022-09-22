@extends('layouts.master') 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yinka Enoch Adedokun">
    <link rel="stylesheet" href="/assets/css/regis.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row main-content bg-success text-center">
          <div class="col-md-12 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
              <div class="row d-flex justify-content-center pt-4 pb-2">
                <h2>Register</h2>
              </div>
              <div class="row d-flex justify-content-center">
                <form method="POST" action="/regist" class="form-group">
                  @csrf
                  <div class="row pb-3">
                    <label for="first_name">Name</label>
                    <input type="text" name="name" id="username" class="form__input" >
                  </div>  
                  <div class="row pb-3">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form__input" name="email" >
                  </div>
                  <div class="row pb-3">
                    <label for="email">Password</label>
                    <input type="password" name="password" id="password" class="form__input">
                  </div>
                  <div class="row pb-3">
                    <label>NIK</label>
                    <input type="tel" class="form__input" name="nik">
                  </div>
                  <div class="row pb-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form__input" name="tgllhr">
                  </div>
                  <div class="row pb-3">
                    <label>Role</label>
                    <select class="form__input selectric" name="role">
                      <option>Tamu</option>
                      <option>Admin</option>
                      <option>Resepsionis</option>
                    </select>
                  </div>
                  <div class="row pb-3 d-flex justify-content-center pb-3 pt-3">
                    <button type="submit" class="btn">
                        Register
                      </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
