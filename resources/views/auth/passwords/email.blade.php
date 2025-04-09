<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <input type="email" name="email" required placeholder="Masukkan email">
    <button type="submit">Kirim Link Reset</button>
</form>
