<!doctype html>
<html lang="en">
<head>
    <title>Demo page</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>
    Example preview. See <a href="https://twillcms.com/docs/modules/revisions-and-previewing.html">documentation.</a>
    <br />
    {{ $item->title }}
    <br />
    {{ $item->description }}
</div>
</body>
</html>
