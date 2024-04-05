<div>
    <table class="table table-striped mt-2 table-bordered">
        <thead>
            <tr class="table-dark">
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Data</th>
                <th scope="col">De</th>
                <th scope="col">Para</th>
                <th scope="col">Taxa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($conversions as $conversion)
                <tr>
                    <td style="width: 200px">{{  $conversion->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>{{ number_format($conversion->amount, 3, ',', '.') . '  ' . $conversion->from }}</td>
                    <td>{{ number_format($conversion->toAmount, 3, ',', '.') . '  ' . $conversion->to }}</td>
                    <td>{{ number_format($conversion->rate, 5, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $conversions->links() }}
</div>
