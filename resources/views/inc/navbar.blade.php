<nav class="navbar navbar-inverse">
  <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
        data-target="navbar" aria-expanded="false" aria-controls="navbar" >
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">{{config('app.name', 'ToDo_Laravel')}}</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('services')}}">Services</a></li>
          <li><a href="{{route('posts.index')}}">Blog</a></li>
        </ul>
      </div>
  </div>
</nav>