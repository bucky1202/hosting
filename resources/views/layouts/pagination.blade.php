<ul class="pagination">
    @php
        $total = ceil($data->total() / $data->perPage());
        $start = $data->currentPage();
        $end = $data->currentPage();

        if ($start - 2 < 0 || $start - 1 < 0)
        {
            $start = 1;
        }
        elseif ($start - 1 == 1)
        {
            $start -= 1;
        }
        else
        {
            $start -= 2;
        }

        if ($end + 2 > $total || $end + 1 > $total)
        {
            $end = $total;
        }
        else
        {
            $end += 2;
        }
    @endphp
    @for($i = $start; $i <= $end; $i++)
    <li class="page-item disabled"><span class="page-link">&lsaquo;</span></li>
        <li {{($data->currentPage() == $i) ? "class=page-item active" : ''}}>
            <a href="{{$data->url($i)}}" class="page-link">{{$i}}</a>
        </li>
    @endfor
</ul>



