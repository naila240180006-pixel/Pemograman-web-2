<form action="{{ route('sandals.update', $sandal->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input name="nama" value="{{ $sandal->nama }}">
    <input name="merk" value="{{ $sandal->merk }}">
    <input name="stok" value="{{ $sandal->stok }}">
    <input name="harga" value="{{ $sandal->harga }}">
    <button type="submit">Update</button>
</form>