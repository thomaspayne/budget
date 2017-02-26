<!doctype html>

<head>
  <title>Budget Manager</title>
</head>

<body>

  <h1>Expense - {{ $expense->name }}</h1>

  <table>
    <thead>
      <tr>
	<td>Date</td>
	<td>Description</td>
	<td>Amount</td>
      </tr>
    </thead>
    <tbody>
      <tr>
	<td>{{ $expense->created_at }}</td>
	<td>{{ $expense->description }}</td>
	<td class="numeric">{{ $expense->amount }}&cent;</td>
      </tr>
    </tbody>
  </table>

</body>
</html>

