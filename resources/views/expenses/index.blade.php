<h1>Izdevumi</h1>
<table>
    <thead>
        <tr>
            <th>Datums</th>
            <th>Summa</th>
            <th>Piešķirtā kategorija</th>
            <th>Piezīmes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($expenses as $expense)
        <tr>
            <td>{{ $expense->date }}</td>
            <td>{{ $expense->amount }}</td>
            <td>{{ $expense->category ? $expense->category->name : 'Nav kategorijas' }}</td>
            <td>{{ $expense->notes }}</td>
        </tr>
        @endforeach
    </tbody>
</table>