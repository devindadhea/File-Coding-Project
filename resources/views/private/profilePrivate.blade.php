@extends('layout.private') @section('container')

<main>
  <h1 class="title">Dashboard</h1>
  <ul class="breadcrumbs">
    <li>CRUD</li>
    <li class="divider">/</li>
    <li>Profile</li>
  </ul>
</main>
<button type="submit" class="buttonAdd"><a href="/addDataProfile">Add Data</a></button>
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Biodata</th>
      <th>Image</th>
      <th>Aksi</th>
      
    </tr>
    @foreach ($profiles as $profile)

    <tr>
      <td>{{$profile->id}}</td>
      <td>{{$profile->title}}</td>
      <td>{{$profile->biodata}}</td>
      <td>
        <img style="max-height: 100px" src="{{ asset('storage/'.$profile-> image) }}" alt="" />
      </td>
      <td>
        <div class="crud-icons">
          <form method="POST" action="{{ route('profilePrivate.delete', $profile->id) }}">
            @csrf @method('DELETE')
            <button type="submit">
              <img src="icons/sampah.png" alt="sampah" class="icon-sampah" />
            </button>
          </form>
          <form method="GET" action="{{ route('editDataProfile.edit', $profile->id) }}">
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

