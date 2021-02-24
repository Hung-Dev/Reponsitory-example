<form action="{{ route('see.store') }}" method="post">

    <h1>CREATE THE NEW POST</h1>
    @csrf
    <label for="title">Post name</label>
    <input type="text" name="name">
    <label for="content">Post Main</label>
    <textarea name="main" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Post">
</form>
