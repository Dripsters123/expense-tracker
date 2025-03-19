@foreach($expenses as $expense)
<h2>{{ $expense->name }}</h2>
<p>Summa: {{ $expense->amount }}</p>
<p>Kategorija: {{ $expense->category->name }}</p>
@endforeach