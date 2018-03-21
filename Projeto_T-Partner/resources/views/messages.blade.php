@extends('layouts.app')
 
@section('content')
  <div class="container-fluid" id="content">
    <a href="/subjects">Subjects</a></br>
    <a href="/classes">Classes</a></br>
    <a href="/students">Students</a></br>
    <a href="/login">Login</a></br>
    <a href="/messages">Message</a></br>
    <a href="/notifications">Notifications</a></br>
    <a href="/profile">Profile</a></br>
    <a href="/settings">Settings</a></br>
    <a href="/about">About</a></br>
    <a href="/help">Help</a></br>

    <h1>This is the messages page</h1>
    <?php
    $url1 = Request::url();
    $split = explode("/", $url1);
    var_dump($split);
    ?>
  </div>
@endsection
