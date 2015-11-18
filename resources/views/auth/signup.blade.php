<head>
  {!! HTML::style('assets/css/style.css') !!}
</head>
<body>
  <header>
    {!! HTML::image('assets/images/typisti.png', 'logo', array('class' => 'logo')) !!}
    <a href="/signup">SIGN UP</a>

  </header>
  <div class="formpage">
    <form>
      <input placeholder="Username">
      <input placeholder="Email">
      <input placeholder="Password">
      <input placeholder="Password Confirmation">
      <input type="submit" value="SIGN UP">
    </form>
  </div>
</body>
