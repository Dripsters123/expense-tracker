<h1>Kategorijas</h1>
<table>
    <thead>
        <tr>
            <th>Kategorija</th>
            <th>Izdevumi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <ul>
                    @foreach ($category->expenses as $expense)
                    <li>
                        {{ $expense->amount }} - {{ $expense->date }} - {{ $expense->notes }}
                    </li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>