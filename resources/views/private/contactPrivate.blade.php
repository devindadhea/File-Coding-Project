@extends('layout.private') @section('container')

<main>
  <h1 class="title">Dashboard</h1>
  <ul class="breadcrumbs">
    <li>CRUD</li>
    <li class="divider">/</li>
    <li>Contact</li>
  </ul>
</main>
<button type="submit" class="buttonAdd"><a href="/addDataContact">Add Data</a></button>
<table id="customers">
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Aksi</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
      <td>{{$contact->id}}</td>
      <td>{{$contact->emailku}}</td>
      <td>{{$contact->address}}</td>
      <td>{{$contact->phone}}</td>
      <td>
        <div class="crud-icons">
          <form method="POST" action="{{ route('contactPrivate.delete', $contact->id) }}">
            @csrf @method('DELETE')
            <button type="submit">
              <img src="icons/sampah.png" alt="sampah" class="icon-sampah" />
            </button>
          </form>
          <form method="GET" action="{{ route('editDataContact.edit', $contact->id) }}">
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
</table>
