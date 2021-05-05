@extends('layouts.blog')

@section('title', 'About - CSC227 Blog')

@section('content')
<center><h1>About Me</h1></center>
<br>
<p>My name is Michael Tanner, and I'm a student at Wake Tech.  My degree is in Computer Programming and Development.  I started attending Wake Tech in fall of 2008, and took a break from school in 2010 once I was hired as a developer.  Having only completed half of the required courses for my degree, I had put off returning to school for several years.  In 2018, I made the decision to register as a student once more, knock out the remaining classes, and finally earn my degree.  I am expected to graduate this spring semester of 2021!</p>
<p>This blog is written in Laravel 6, which is a <a href="https://laravel.com/docs/8.x/releases#support-policy">Long Term Support (LTS) version</a> that has security fixes through September 2022.  I chose to use the Laravel PHP framework because of its extensibility, and as a challenge to setup for my final project for my CSC227 - Cloud Application Development course.</p>
<p>This blog demonstrates CRUD operations, as well as model relationships with the use of tags that can be associated with posts.</p>
<hr>
<p>Links to resources used:</p>
<ul>
<li><a href="https://laravel.com/docs/6.x">Laravel 6 documentation</a></li>
<li><a href="https://stackoverflow.com/a/41072888">StackOverflow - post / tag sync</a></li>
<li><a href="https://getbootstrap.com/docs/4.6/getting-started/introduction/">Bootstrap 4</a></li>
<li><a href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/">Bootstrap Tags Input</a></li>
</ul>
@endsection
