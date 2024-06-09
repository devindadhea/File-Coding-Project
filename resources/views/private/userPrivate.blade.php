@extends('layout.private') @section('container')

<main>
  <h1 class="title">Dashboard</h1>
  <ul class="breadcrumbs">
    <li>CRUD</li>
    <li class="divider">/</li>
    <li>User</li>
  </ul>
</main>
<button type="submit" class="buttonAdd"><a href="/addDataUser">Add Data</a></button>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Aksi</th>
  </tr>
  @foreach ($users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->user_name}}</td>
    <td>{{$user->password}}</td>

    <td>
      <div class="crud-icons">
        <form method="POST" action="{{ route('userPrivate.delete', $user->id) }}">
          @csrf @method('DELETE')
          <button type="submit">
            <img src="icons/sampah.png" alt="sampah" class="icon-sampah" />
          </button>
        </form>
        <form method="GET" action="{{ route('editDataUser.edit', $user->id) }}">
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
