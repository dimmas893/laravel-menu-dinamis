<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
</head>

<body>
    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
            <svg class="bi me-2" width="30" height="24">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-5 fw-semibold">Collapsible</span>
        </a>
        <!-- ... (bagian kode sebelumnya) ... -->
        <ul class="list-unstyled ps-0">
            @foreach ($menu as $item)
                <li class="mb-1">
                    @if (count($item->subMenu) > 0)
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#{{ $item->name }}" aria-expanded="true">
                            {{ $item->name }}
                        </button>
                    @else
                        <a class="btn btn-toggle" href="{{ $item->url }}">
                            {{ $item->name }}
                        </a>
                    @endif
                    @foreach ($item->subMenu as $value)
                        <div class="collapse" id="{{ $item->name }}">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ $value->url }}" class="link-dark rounded">{{ $value->name }}</a></li>
                            </ul>
                        </div>
                    @endforeach

                </li>
            @endforeach
        </ul>
        <!-- ... (bagian kode setelahnya) ... -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
