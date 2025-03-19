@foreach($categories as $category)
<h2>{{ $category->name }}</h2>
<ul>
    @foreach($category->expenses as $expense)
    <li>{{ $expense->name }} {{ $expense->amount }}</li>
    @endforeach
</ul>
@endforeach