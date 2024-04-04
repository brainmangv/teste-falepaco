<div>
    <table class="table table-striped mt-2 table-bordered">
    <thead>
        <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Data</th>
            <th scope="col">De</th>
            <th scope="col">Para</th>
            <th scope="col">Taxa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($conversions as $conversion) 
            <tr>
                <th scope="row">{{$conversion->id}}</th>
                <td>{{$conversion->created_at}}</td>
                <td>{{$conversion->amount . '  '. $conversion->from}}</td>
                {{-- <td>{{$conversion->value * $conversion->rate . '  '.$conversion->to}}</td> --}}
                <td>{{$conversion->toAmount . '  '.$conversion->to}}</td>
                <td>{{$conversion->rate}}</td>
            </tr>    
        @endforeach
    </tbody>
</table>
</div>
