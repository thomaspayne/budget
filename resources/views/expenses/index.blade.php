<!doctype html>

<head>
  <title>Budget Manager</title>
</head>

<body>

  <h1>Expenses</h1>

  <table>
    <thead>
      <tr>
	<td>Date</td>
	<td>Name</td>
	<td>Amount</td>
      </tr>
    </thead>
    <tbody>
      @foreach ( $expenses as $expense )
      <tr>
	<td><a href="/expense/{{ $expense->id }}">{{ $expense->created_at }}</a></td>
	<td><a href="/expense/{{ $expense->id }}">{{ $expense->name }}</a></td>
	<td class="numeric"><a href="/expense/{{ $expense->id }}">{{ $expense->amount }}&cent;</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>

