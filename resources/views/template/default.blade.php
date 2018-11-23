<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
        <nav class="ui borderless menu">
                <div class="ui container">
                  <a class="brand item" href="/"><img src="/static/logo/gravatar/gravatar.svg" /></a><a class="item" href="/themes">Themes</a><a class="item" href="/templates">Templates</a><a class="item" href="/blog">Blog</a>
                  <div class="right menu">
                    <a class="item" href="https://github.com/semantic-ui-forest"><i class="github icon"></i></a><a class="item" href="/atom.xml"><i class="feed icon"></i></a>
                    <div class="item">
                      <form action="https://www.google.com/search" class="ui form" method="get" target="_blank">
                        <input name="q" type="hidden" value="site:semantic-ui-forest.com" />
                        <div class="ui left icon transparent input">
                          <input name="q" placeholder="Search..." type="text" /><i class="search icon"></i>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </nav>
</body>
</html>
