@extends('layout.private') @section('container')

<main>
  <h1 class="title">Dashboard</h1>
  <ul class="breadcrumbs">
    <li>CRUD</li>
    <li class="divider">/</li>
    <li>Link Footer</li>
  </ul>
</main>
<button type="submit" class="buttonAdd"><a href="/addDataFooter">Add Data</a></button>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>My Skills</th>
    <th>Shortcut</th>
    <th>Address</th>
    <th>Aksi</th>
  </tr>
  @foreach ( $footers as $footer )
  <tr>
    <td>{{$footer->id }}</td>
    <td>{{ $footer->myskills }}</td>
    <td>{{ $footer->shortcut }}</td>
    <td>{{ $footer->address }}</td>
    <td>
      <div class="crud-icons">
        <form method="POST" action="{{ route('LinkFooterPrivate.delete', $footer->id) }}">
          @csrf @method('DELETE')
          <button type="submit">
            <img src="icons/sampah.png" alt="sampah" class="icon-sampah" />
          </button>
        </form>
        <form action="{{ route('editDataLinkFooter.edit', $footer->id) }}" method="GET">
          <button type="submit">
            <img src="icons/edit.png" alt="sampah" class="icon-sampah" />
          </button>
        </form>
      </div>
    </td>
  </tr>

  @endforeach
</table>
@endsection
