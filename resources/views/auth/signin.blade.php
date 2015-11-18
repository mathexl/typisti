<head>
  {!! HTML::style('assets/css/style.css') !!}
</head>
<body>
  <header>
    {!! HTML::image('assets/images/typisti.png', 'logo', array('class' => 'logo')) !!}
    <a href="/signin">SIGN IN</a>

  </header>
  <div class="formpage">
    <form>
      <input placeholder="Username">
      <input placeholder="Password">
      <input type="submit" value="LOG IN">
    </form>
  </div>
</body>
