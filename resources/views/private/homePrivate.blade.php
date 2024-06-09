@extends('layout.private') @section('container')
<main>
  <h1 class="title">Dashboard</h1>
  <ul class="breadcrumbs">
    <li>CRUD</li>
    <li class="divider">/</li>
    <li>Home</li>
  </ul>
</main>
<button type="submit" class="buttonAdd"><a href="/addDataHome">Add Data</a></button>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Greeting</th>
    <th>Description</th>
    <th>Image</th>
    <th>Aksi</th>
  </tr>
  @foreach ( $data as $homePrivate )

  <tr>
    <td>{{ $homePrivate->id }}</td>
    <td>{{ $homePrivate->name }}</td>
    <td>{{ $homePrivate->greeting }}</td>
    <td>{{ $homePrivate->description }}</td>
    <td>
      <img style="max-height: 100px" src="{{ asset('storage/'.$homePrivate-> image) }}" alt="" />
    </td>
    <td>
      <div class="crud-icons">
        <form method="POST" action="{{ route('homePrivate.delete', $homePrivate->id) }}">
          @csrf @method('DELETE')
          <button type="submit">
            <img src="icons/sampah.png" alt="sampah" class="icon-sampah" />
          </button>
        </form>

        <form method="GET" action="{{ route('editDataHome.edit', $homePrivate->id) }}">
          <button type="submit">
            <img src="icons/edit.png" alt="edit" class="icon-sampah" />
          </button>
        </form>
      </div>
    </td>
  </tr>
  @endforeach
</table>

@endsection
