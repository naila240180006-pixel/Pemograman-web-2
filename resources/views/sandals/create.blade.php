<form action="{{ route('sandals.store') }}" method="POST">
    @csrf
    <input name="nama" placeholder="Nama">
    <input name="merk" placeholder="Merk">
    <input name="stok" type="number">
    <input name="harga" type="number">
    <button type="submit">Simpan</button>
</form>