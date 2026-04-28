<h2>Payroll List</h2>

<a href="{{ route('payroll.create') }}">Add Payroll</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Salary</th>
        <th>Bonus</th>
        <th>Deduction</th>
        <th>Action</th>
    </tr>

    @foreach($payrolls as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->employee_name }}</td>
        <td>{{ $p->salary }}</td>
        <td>{{ $p->bonus }}</td>
        <td>{{ $p->deduction }}</td>
        <td>
            <a href="{{ route('payroll.edit', $p->id) }}">Edit</a>

            <form action="{{ route('payroll.destroy', $p->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
