@extends('layout')

@section('header')
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Raleway', sans-serif;
          font-weight: 100;
          height: 100vh;
          margin: 0;
      }

      .full-height {
          height: 100vh;
      }

      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      }

      .links > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }

      .m-b-md {
          margin-bottom: 30px;
      }
  </style>
@stop

@section('content')
<h1>Welcome page Goes here</h1>

<!--
                Wordpress way
                @if (empty($people))
                  There are no people.
                @else
                  Something else here
                @endif
                <?php foreach ($people as $person) : ?>
                  <li><?= $person; ?></li>
                <?php endforeach ?>
 -->

                <!-- Blade way -->
                @unless (empty($people))
                  There are some people.
                @endunless

                @foreach ($people as $person)
                  <li>{{$person}}</li>
                @endforeach

@stop
