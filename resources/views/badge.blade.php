<svg aria-label="Profile views: {{ $count ?? 0 }}" xmlns="http://www.w3.org/2000/svg" height="20" width="140">
    <title>Profile views: {{ $count ?? 0 }}</title>
    <g shape-rendering="crispEdges">
        <rect height="20" fill="#555" width="140"/>
        <rect height="20" fill="#4c1" x="80" width="60"/>
        <rect rx="3" width="80" height="20" fill="transparent"/>
    </g>
    <g fill="#fff" text-anchor="middle" font-family="Verdana,Geneva,DejaVu Sans,sans-serif" font-size="11">
        <text y="14" x="38">Profile views</text>
        <text y="14" x="110">{{ $count ?? 0 }}</text>
    </g>
</svg>
