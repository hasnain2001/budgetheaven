<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .my-custom-pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            flex-wrap: wrap; /* Allows items to wrap to the next line on small screens */
        }

        .my-custom-pagination li {
            margin: 0 5px;
        }

        .my-custom-pagination li a,
        .my-custom-pagination li span {
            color: #fff;
            background-color: #e60000; /* Red color */
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            font-size: 14px; /* Default font size */
        }

        .my-custom-pagination li.disabled span,
        .my-custom-pagination li.disabled a {
            background-color: #ff9999; /* Light red for disabled */
            cursor: not-allowed;
        }

        .my-custom-pagination li.active span {
            background-color: #b30000; /* Darker red for active */
            font-weight: bold;
        }

        .my-custom-pagination li a:hover {
            background-color: #ff1a1a; /* Brighter red on hover */
            color: #fff;
        }

        /* Mobile-specific adjustments */
        @media (max-width: 576px) {
            .my-custom-pagination li a,
            .my-custom-pagination li span {
                padding: 6px 8px; /* Smaller padding for mobile */
                font-size: 12px; /* Smaller font size for mobile */
            }

            .my-custom-pagination li {
                margin: 2px; /* Reduce margin for mobile */
            }
        }
    </style>
</head>
<body>
    @if ($paginator->hasPages())
    <nav>
        <ul class="pagination my-custom-pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><span>&laquo; Previous</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next &raquo;</a></li>
            @else
                <li class="disabled"><span>Next &raquo;</span></li>
            @endif
        </ul>
    </nav>
    @endif
</body>
</html>
